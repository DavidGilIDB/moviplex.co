<?php

define("DOMAIN", "moviplex-new.co");
define("SERVICE", "MOVIPLEX");
define("COUNTRYID", "");
define("COUNTRY", "");
define("PREFIX", "");
define("EMAIL", "");
define("SUBJECT", "");
define("APIURL", "");
define("CONTACTURL", "");
define("LOGINURLEMAIL", "https://payment-backend.v8c.pw/user/loginOtp");
define("SIGNUPURLEMAIL", "https://stream-api.d1b.pw/api5/signup_email");
define("LOGINURL", "https://stream-api.d1b.pw/api/signup");
define("VERIFICATIONURL", "https://payment-backend.v8c.pw/user/verifyOtp");
define("URL", "https://stream-api.d1b.pw/api5/");
define("URLVIDEOS", "https://stream-api.d1b.pw/");
define("UNSUB", "https://stream-api.d1b.pw/api5/signoff");
define("STORAGE_URL", "https://cms.d1b.pw/storage/");
define("CMSURL", "https://cms-nocache-api.d1b.pw/");
define("STORAGEURL", "https://cms.d1b.pw/storage/");

define('MOIRA', 'moira-');


setSession();
function setSession()
{
    $domain_meta = [];

    // CHECK CURRENT LANGUAGE 
    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
        $url = CMSURL . "domain/" . DOMAIN . "/$lang";
        //echo "Llamada hecha al idioma: $lang";
        //echo $url;
    } else {
        $url = CMSURL . "domain/" . DOMAIN;
        //echo "Llamada hecha a default";
    }

    if (empty($_SESSION['site_domain']) || (isset($_SESSION['site_domain']) && $_SESSION['site_domain'] != DOMAIN)) {
        if (null === ($domain_meta = fetch_domain_metadata($url))) {
            die("Error fetching domain!");
        }

        $_SESSION['access_token'] = $domain_meta['access_token'];
        $_SESSION['default_lang'] = $domain_meta['default_lang'];
        if ($_SESSION['default_lang'] == 'esp') {
            $_SESSION['default_lang'] = 'es';
        }

        $_SESSION['country'] = $domain_meta['countries']->default;
        $_SESSION['multi-country'] = "false";

        if (sizeof($domain_meta['countries']->supported) > 1) {
            $_SESSION['multi-country'] = "true";
        }

        foreach ($domain_meta['countries']->supported as $country) {
            if (isset($_GET['country']) && $_GET['country'] == $country->code) {
                $_SESSION['country'] = $country;
            }
        }

        $_SESSION['site_domain'] = $domain_meta['site_domain'];
        $_SESSION['site_name'] = $domain_meta['site_name'];
        $_SESSION['site_url'] = $domain_meta['site_url'];
        $_SESSION['site_email'] = $domain_meta['site_email'];
        $_SESSION['homepage'] = $domain_meta['homepage'];
        $_SESSION['access_token'] = $domain_meta['access_token'];
        $_SESSION['logo'] = $domain_meta['logo'];
        $_SESSION['favicon'] = $domain_meta['favicon'];
        $_SESSION['header'] = $domain_meta['header'];
        $_SESSION['footer'] = $domain_meta['footer'];
        $_SESSION['web_menu'] = $domain_meta['web_menu'];
        $_SESSION['sidebar'] = $domain_meta['sidebar'];
        $_SESSION['css_file'] = $domain_meta['css_file'];
        $_SESSION['terms_disclaimer'] = $domain_meta['terms_disclaimer'];
        $_SESSION['template_option'] = $domain_meta['template_option'];
        $_SESSION['supported_langs'] = $domain_meta['supported_langs'];
        $_SESSION['default_lang'] = $domain_meta['default_lang'];
        $_SESSION['countries'] = $domain_meta['countries'];
        $_SESSION['details'] = $domain_meta['details'];
        $_SESSION['terms'] = $domain_meta['terms_disclaimer']['terms'];
        $_SESSION['disclaimer'] = $domain_meta['terms_disclaimer']['disclaimer'];

        // echo json_encode($domain_meta['terms_disclaimer']);
        //echo "Ha hecho el checkeo";
    }
}

function fetch_domain_metadata($url): array
{

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Cache-Control: no-cache'
    ]);
    $buffer = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($buffer);

    if (empty($obj) || ($obj->status !== 200 && !property_exists($obj, 'domain'))) {
        //$errmsg = date('Y-m-d H:i:s')." - {$obj->status}: {$obj->msg}\n";
        //file_put_contents('./log.txt', $errmsg, FILE_APPEND);
        return [];
    }

    try {

        $domain = $obj->domain;

        $siteName  = $domain->name;
        $siteUrl   = "https://" . $domain->url;
        $siteDomain = $domain->url;
        $siteEmail = $domain->email;

        $header           = $domain->header           ?? null;
        $footer           = $domain->footer           ?? null;
        $menu             = $domain->web_menu         ?? null;
        $sidebar          = $domain->sidebar          ?? null;
        $css_file         = $domain->css_file         ?? null;
        $access_token     = $domain->access_token     ?? null;
        $terms_disclaimer = $domain->terms_disclaimer ?? null;
        $logo             = $domain->logo             ?? null;
        $favicon          = $domain->favicon          ?? null;
        $homepage         = $domain->homepage         ?? null;
        $template_option  = $domain->template_option  ?? null;
        $supported_langs  = $domain->supported_langs  ?? null;
        $default_lang     = $domain->default_lang     ?? null;
        $countries        = $domain->countries        ?? null;
        $details          = $domain->details          ?? null;
        $terms            = $terms_disclaimer->terms  ?? null;
        $disclaimer       = $terms_disclaimer->disclaimer ?? null;

        $t_c = [
            'terms' => $terms_disclaimer->terms,
            'disclaimer' => $terms_disclaimer->disclaimer,
        ];
    } catch (\Throwable $th) {
        throw $th;
        return [];
    }

    return [
        'site_name' => $siteName,
        'site_domain' => $siteDomain,
        'site_url' => $siteUrl,
        'site_email' => $siteEmail,
        'homepage' => $homepage,
        'access_token' => $access_token,
        'logo' => $logo,
        'favicon' => $favicon,
        'header' => $header,
        'footer' => $footer,
        'web_menu' => $menu,
        'sidebar' => $sidebar,
        'css_file' => $css_file,
        'terms_disclaimer' => $t_c,
        'template_option' => $template_option,
        'supported_langs' => $supported_langs,
        'default_lang' => $default_lang,
        'countries' => $countries,
        'details' => $details,
        'terms' => $terms,
        'disclaimer' => $disclaimer,
    ];
}


function getSection($section, $lang, $type)
{
    $url = CMSURL . "content/section/" . $section . "/$lang";
    // echo $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $_SESSION['access_token'],
    ]);
    // $datetime1 = dateTimeToMilliseconds(new DateTime());
    $response = json_decode(curl_exec($ch));
    $statusRequest = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($statusRequest == 200 && $response->status == 200) {
        return [$response->content->$type, $response->section_display_title];
    } else if ($statusRequest == 401) {
        // echo $_SESSION['access_token'];
        unset($_SESSION['site_domain']);

        if (isset($_SESSION['retries'])) {
            $_SESSION['retries'] = $_SESSION['retries'] + 1;
        } else {
            $_SESSION['retries'] = 1;
        }

        if ($_SESSION['retries'] > 2) {
            die("Error getting content!!");
        } else {
            setSession();
            return getSection($section, $lang, $type);
        }
    } else {
        die("Error getting content!");
    }
}



function getMultySection($request, $lang)
{
    // $_SESSION['access_token'] = 11111;
    $mh = curl_multi_init();
    foreach ($request as $slug => $config) {
        $url = CMSURL . "content/section/" . $slug . "/$lang";

        $ch[$slug] = curl_init($url);
        curl_setopt($ch[$slug], CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch[$slug], CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch[$slug], CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch[$slug], CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch[$slug], CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch[$slug], CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $_SESSION['access_token'],
        ]);
        // curl_setopt($ch[$slug], CURLOPT_SSL_VERIFYHOST, 0);
        // curl_setopt($ch[$slug], CURLOPT_SSL_VERIFYPEER, 0);
        curl_multi_add_handle($mh, $ch[$slug]);
    }

    // Start performing the request
    $index = null;
    do {
        curl_multi_exec($mh, $index);
    } while ($index > 0);

    $unauthorized = false;
    // Extract the content
    foreach ($request as $slug => $config) {
        $type = $config['type'];
        $statusRequest = curl_getinfo($ch[$slug], CURLINFO_HTTP_CODE);
        $request[$slug]['status'] = $statusRequest;
        $response = json_decode(curl_multi_getcontent($ch[$slug]));

        if ($statusRequest == 200 && $response->status == 200) {
            $request[$slug]['response'] = $response->content->$type;
        } else if ($statusRequest == 401) {
            $unauthorized = true;
        } else {
            die("Error getting content!");
        }

        // Remove and close the handle
        curl_multi_remove_handle($mh, $ch[$slug]);
        curl_close($ch[$slug]);
    }
    // Clean up the curl_multi handle
    curl_multi_close($mh);

    if ($unauthorized) {
        // echo $_SESSION['access_token'];
        unset($_SESSION['site_domain']);

        if (isset($_SESSION['retries'])) {
            $_SESSION['retries'] = $_SESSION['retries'] + 1;
        } else {
            $_SESSION['retries'] = 1;
        }

        if ($_SESSION['retries'] > 2) {
            die("Unauthorized!!");
        } else {
            setSession();
            return getMultySection($request, $lang);
        }
    }

    return $request;
}


function getSectionMovies($section)
{
    $url = "https://stream-api.d1b.pw/videoGenre?genre=" . $section;
    // echo $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    // $datetime1 = dateTimeToMilliseconds(new DateTime());
    $response = json_decode(curl_exec($ch));
    $statusRequest = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    // $datetime2 = dateTimeToMilliseconds(new DateTime());
    // $interval = $datetime2 - $datetime1;
    // echo 'MILLIS: ' . $interval;

    // echo json_encode($response);
    // echo $statusRequest;

    if ($statusRequest == 200) {
        return $response;
    } else {
        return '';
    }
}
function getMovie($slug){

    $url = "https://stream-api.d1b.pw/videoSlug?slug=" . $slug;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $response = json_decode(curl_exec($ch));
    $statusRequest = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    

    if ($statusRequest == 200) {
        return $response;
    } else {
        return '';
    }

}
function getItem($section, $id, $lang = 'en')
{
    $url = CMSURL . "content/single-item/" . $section . "/" . $id . "/" . $lang;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $_SESSION['access_token'],
    ]);

    $response = json_decode(curl_exec($ch));
    $statusRequest = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($statusRequest == 200 && $response->status == 200) {

        return [$response->content];
    } elseif ($statusRequest == 401) {

        unset($_SESSION['site_domain']);

        if (isset($_SESSION['retries'])) {

            $_SESSION['retries'] = $_SESSION['retries'] + 1;
        } else {

            $_SESSION['retries'] = 1;
        }

        if ($_SESSION['retries'] > 2) {

            die("Error getting content!!");
        } else {

            setSession();
            return getItem($section, $id, $lang);
        }
    } else {

        die("Error getting content!");
    }
}

function getMixSection($section, $lang)
{

    $url = CMSURL . "content/section/" . $section;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $_SESSION['access_token'],
    ]);

    $response = json_decode(curl_exec($ch));
    $statusRequest = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);


    if ($statusRequest == 200 && $response->status == 200) {

        $types = ["apps", "articles", "games", "images", "sounds", "videos"];

        foreach ($types as $type) {

            if (isset($response->content->$type)) {
                $items[$type] = $response->content->$type;
            }
        }
        return $items;
    } else if ($statusRequest == 401) {
        // echo $_SESSION['access_token'];
        unset($_SESSION['site_domain']);

        if (isset($_SESSION['retries'])) {
            $_SESSION['retries'] = $_SESSION['retries'] + 1;
        } else {
            $_SESSION['retries'] = 1;
        }

        if ($_SESSION['retries'] > 2) {
            die("Error getting content!!");
        } else {
            setSession();
            return getMixSection($section, $lang);
        }
    } else {
        die("Error getting content!");
    }
}

function getSectionType($section, $lang)
{

    $url = CMSURL . "content/section/" . $section . "/$lang";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $_SESSION['access_token'],
    ]);

    $response = json_decode(curl_exec($ch));
    $statusRequest = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($statusRequest == 200 && $response->status == 200) {

        $types = ["apps", "articles", "games", "images", "sounds", "videos"];

        foreach ($types as $type) {

            if (isset($response->content->$type)) {
                return $type;
            }
        }
    } elseif ($statusRequest == 401) {

        unset($_SESSION['site_domain']);

        if (isset($_SESSION['retries'])) {
            $_SESSION['retries'] = $_SESSION['retries'] + 1;
        } else {
            $_SESSION['retries'] = 1;
        }

        if ($_SESSION['retries'] > 2) {
            die("Error getting content!!");
        } else {
            setSession();
            return getSectionType($section, $lang);
        }
    } else {
        die("Error getting content!");
    }
}

function pageColor($type){
return match($type){

    "play" => "blue",
    "watch" => "red",
    "fitness" => "green",
    "learn" => "yellow",
    "enjoy" => "purple"

};

}