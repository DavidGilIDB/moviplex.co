<?php

session_start();
header("X-Frame-Options: sameorigin");

include("Global.php");


$page = $_GET['page'] ?? "home";

include("session.php");

if (!empty($_GET['lang'])) {
  if ($_GET['lang'] == 'de' || $_GET['lang'] == 'es') {
    $_COOKIE['lang'] = $_GET['lang'];
  } else {
    $_COOKIE['lang'] = 'en';
  }
} elseif (empty($_COOKIE['lang'])) {
  $_COOKIE['lang'] = 'en';
}
setcookie('lang', $_COOKIE['lang']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>mobile2go.net</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="icon" href="assets/images/favicon.png">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

  <?php
  include("modal.php");
  include("pages/header.php");
  include("pages/login.php");
  include("pages/subscription.php");
  ?>

  <main>
    <div class="title-bar d-flex justify-content-center align-center">
      <div class="breadcrumb d-flex gap-2">
        <span>
          < </span>
            <a href="index.php" title="Back">Back</a>
      </div>
      <h1>Terms & Conditions</h1>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6">
          <div class="text-content pt-3 pb-5">
            <h2>General</h2>
            <p>This document delineates the Terms and Conditions governing the utilization of the products and/or
              services offered by Mediteran Union Investment. Mediteran Union Investment, S.L. is located at Avda. Matas Verdes, 2E. Atalaya Isdabe.
              29688 Estepona (Málaga) B93396885, will be referred to as "Company," "we," "us," or "our") henceforth. When you browse
              the website mobile2go.net and use the Services provided, you acquire the status of a user. The Company is
              engaged in mobile and web marketing and service provision.</p>
            <p>By using the Services and/or installing any of the Company's products, you are indicating your acceptance
              and agreement to be bound by these Terms and Conditions, as well as our Privacy Policy. Failure to adhere
              to these Terms and Conditions or any notices issued by the Company while using the Services may result in
              the termination of your access to the Services, blocking your access, and the removal of your right to use
              any of the our products, without further notice, and irrespective of any other actions taken by us.</p>
            <p>The Company reserves the right to modify these Terms and Conditions at any time, with any changes being
              reflected in an updated version available on the Website. The use of the Services implies full acceptance
              of the Terms and Conditions.</p>
            <p>We strongly recommend that you print or save a copy of these Terms and Conditions for your records,
              although they will be accessible on the Website at all times.</p>
            <h2>Service Description</h2>
            <p>The services accessible via the website allow registered users to enjoy gaming, high-quality content, and
              movies, and a wide array of other offering.</p>
            <ul>
              <li>To exit the service send us a email on: <a href="mailto:support@mobile2go.net"
                  title="support@mobile2go.net">support@mobile2go.net</a>. </li>
              <li>Upon successful registration, the user will be provided with a password and an account designation. It
                is the user's responsibility to maintain the confidentiality of this password and account, and they bear
                full responsibility for all activities conducted under said password or account.</li>
              <li>The user also commits to promptly notifying The Company of any unauthorized use of their password or
                account or any security breaches, and to log out of their account at the end of each session.</li>
              <li>The Company cannot be held accountable for any loss or damage resulting from the user's failure to
                adhere to these terms. Additionally, the Services may offer premium membership (subject to availability
                based on location), typically requiring a subscription fee.</li>
            </ul>
            <h2>Data from Third-Party Services for Accounts and Profiles</h2>
            <p>When you opt to log in, access, or establish a connection to the mobile2go Service or reach out to
              mobile2go.net via a third-party service (e.g., Facebook), please be aware that this method is entirely
              optional and is contingent upon your sole discretion. In order to facilitate your chosen log-in or contact
              method, we may gather your user ID and user name linked to that third-party service, in addition to any
              other information that you choose to make public while using that service. Moreover, we may also collect
              any information you have granted the third-party service permission to share with us. This may encompass,
              for example, your user ID, billing details, public profile data, email address, date of birth, and profile
              information.</p>
            <p>You can provide Mediteran Union Investment, S.L. with access to your third-party accounts, such as Google, Facebook,
              and Instagram, to enable certain mobile2go features. Each time you link your third-party account, that
              specific third-party service will display a page outlining the information that The Company can retrieve.
              You retain the ability to revoke The Company's access to these accounts by using the security settings
              page provided by the respective third-party service. Here are the links for each service:</p>
            <h2>Advertising</h2>
            <p>We use third parties such as network advertisers to serve advertisements on our site and email
              newsletters. Network advertisers are third parties that display advertisements based on your visits to our
              Site and other websites you have visited. This arrangement allows us, as well as these third parties, to
              tailor advertisements to your interests in products and services. Third-party ad network providers,
              advertisers, sponsors, and traffic measurement services may utilize technologies such as cookies,
              JavaScript, web beacons, Flash LSOs, and other tools to gauge the effectiveness of their advertisements
              and customize advertising content for you. It's important to note that these third-party cookies and other
              technologies are subject to the specific privacy policies of each third party, not the one presented here.
              We may provide these third-party advertisers with aggregated information about your usage of our website
              and services.</p>
            <h2>Accessing the Service Requirements</h2>
            <p>The Services provided by The Company are intended for individuals who are of legal age, 18 years or
              older, or, as applicable, emancipated minors possessing full legal capacity to enter into contracts.
              Unemancipated minors may only use our Services with the prior written consent of their parents, legal
              guardians, or legal representatives, who will assume responsibility for the actions of such unemancipated
              minors. It is essential to acknowledge that we cannot independently verify these circumstances. Therefore,
              it is the duty of parents or guardians to supervise and ensure that unemancipated minors are using the
              services appropriately, and they should also take steps to safeguard passwords and account information
              associated with The Company's services and websites. Additionally, Services may only be contracted by the
              individual who is the owner of the phone line linked to the Services. By accepting the Terms and
              Conditions, the user affirms their legitimacy and/or authorization to engage in Service contracts and
              guarantees the accuracy of all information provided to The Company. The user also commits to using the
              Services responsibly and adhering to applicable laws, which may encompass but are not limited to these
              Terms and Conditions, legal regulations, ethical standards, and public order.</p>
            <p>The user is responsible for adhering to these standards and is strictly prohibited from using the
              Services covered by these Terms and Conditions for unlawful purposes or in any way that infringes upon the
              rights and interests of The Company, its subsidiaries, or any other pertinent third party. The user will
              bear sole responsibility for any losses or damages resulting from improper or unlawful use of the
              Services.</p>
            <h2>Suitable</h2>
            <p>Our Services and products, which include but are not limited to Images and Videos, may not function
              properly on every type of Handset, Laptop, Desktop, or Electronic Device. You acknowledge that The Company
              is not obligated to support every file format, and therefore, we cannot be held responsible if a specific
              format is not available. It is the user's responsibility to ensure that their device is capable of
              displaying the following file formats (Picture – JPG, GIF, PNG) and (Movies – 3GP & MOV) or has the
              necessary software installed to access all of our services and products.</p>
            <h2>Fit & Health terms </h2>
            <p>The information presented on this site and in our email newsletter, including but not limited to all
              advice and recommendations, is intended solely for general educational and informational purposes. Before
              commencing any fitness program, including the one detailed here, it is essential to consult with your
              doctor or another qualified healthcare professional to determine its suitability for your individual
              needs. Should you decide to use this information without prior consent or recommendations from your
              healthcare provider, you acknowledge your acceptance of full responsibility for your decisions.
              Furthermore, you agree to absolve and hold harmless The Company, its agents, employees, contractors, and
              any affiliated companies from any liability concerning injury, illness, or death to you or damage to your
              property resulting from or connected with the use of the information provided within this program and
              newsletter.</p>
            <p>It is important to recognize that exercise carries inherent risks, and engaging in this or any exercise
              program may result in injury or, in extreme cases, death. As with any exercise routine, if you experience
              dizziness, faintness, or physical discomfort during your workout, it is imperative to cease immediately
              and seek guidance from a medical professional.This website provides information related to health,
              fitness, and nutrition, with the primary intent of offering educational insights. This information should
              not be relied upon as a substitute for professional medical advice, diagnosis, or treatment. If you have
              concerns or questions about your health, always consult with a doctor or other qualified healthcare
              professional. Do not disregard, avoid, or delay seeking medical or health-related advice based on
              something you may have read on this site. The utilization of any information provided on this site is
              entirely at your own risk. It's worth noting that advancements in medical research may influence the
              health, fitness, and nutritional guidance provided on this site. There is no guarantee that the advice
              offered here will consistently incorporate the latest findings or developments concerning the subject
              matter.</p>
            <h2>Payment</h2>
            <p>We may offer premium membership services (subject to service location availability) that are billed on a
              subscription basis.</p>
            <h2>Intellectual Property Rights</h2>
            <p>We exclusively owns or holds the necessary licenses and authorizations for the intellectual property
              rights pertaining to the Services and all associated contents, which include, but are not limited to,
              software, databases, images, photographs, illustrations, graphics, games, text, audio, video, trademarks,
              logos, trade names, distinctive signs, computer programs, and databases that are or have been part of the
              Services at any point. It is unequivocally established that accessing and using the Services does not
              imply the relinquishment, transmission, licensing, or transfer of any portion of these rights. Any
              modification, duplication, reuse, exploitation, reproduction, public dissemination, subsequent
              publication, file uploads, postings, transmissions, usage, processing, or distribution of any part or the
              entirety of the contents on the service is strictly prohibited without the express written consent of The
              Company or the applicable rights holder. </p>
            <p>Furthermore, unless explicitly authorized, any removal or alteration of the technologies and information
              related to management rights contained in the works transmitted via the service is prohibited, as well as
              distribution, importation for distribution, public performance, broadcasting, radio broadcasting, public
              communication in all forms, or making such works and performances available, or copies and transmissions
              that have had such information removed or altered without authorization. If you wish to establish a link
              to our content, you must first obtain express written permission from us. Notwithstanding the foregoing,
              it is explicitly forbidden to create any links and/or similar third-party mechanisms that lead users
              directly to content and/or services provided by The Company (referred to as "deep linking"). All
              intellectual property rights associated with the Website, the Services, and/or the Content, including
              their design and source code, as well as all content contained within them (comprising, but not limited
              to, text, images, animations, databases, graphics, logos, trademarks, icons, buttons, pictures, videos,
              sound recordings, etc.), either belong to The Company or are licensed to it. The Website contains
              copyrighted material, trade names, trademarks, and other proprietary information, and is therefore
              protected by copyright laws, both registered and unregistered trademarks, database rights, and other
              intellectual property rights under English Intellectual Property Law.</p>
            <h2>Data Subject Rights</h2>
            <p>The Company is committed to ensuring that data subjects receive information and communication regarding
              data processing in a clear, concise, transparent, and easily accessible manner, using straightforward and
              plain language. This holds especially true for information directed at children. Information will be
              provided in written form or through other appropriate means, including electronic formats when applicable.
              Upon request by the data subject, information may also be provided orally, provided that the identity of
              the data subject can be verified by other means. The Company will facilitate the exercise of data subject
              rights as outlined in Articles 15 to 22 of the GDPR. In the event of a request falling under Articles 15
              to 22 of the GDPR, The Company will promptly provide information on the actions taken in response to the
              request to the data subject, ensuring that this information is furnished without undue delay and within
              one month of receiving the request. In cases where the request is particularly complex or numerous, the
              one-month period may be extended by an additional two months as necessary, taking into consideration the
              complexity and volume of requests. The Company will inform the data subject of such an extension within
              one month of receiving the request, and provide the reasons for the delay. If the data subject submits the
              request electronically, information will be furnished by electronic means where feasible, unless the data
              subject specifies otherwise.</p>
            <h2>Copyright</h2>
            <p>Mediteran Union Investment, S.L. ("we" or "us" or "our") upholds the rights of artists and content owners. Please be
              aware that Mediteran Union Investment, S.L. does not create any of the audio or video files featured on the site.
              This content is generated by third-party providers and hosted by mobile2go.</p>
            <h2>Assignment</h2>
            <p>We have the right to transfer the information included in these Terms and Conditions and the associated
              rights to any of its affiliated companies, subsidiaries, or divisions. The transfer of information will be
              conducted with the prior consent of the user and solely for the purpose of ensuring the proper execution
              of contracted Services.</p>
            <h2>Fraud</h2>
            <p>Engaging in fraudulent or abusive activities involving personal login credentials may lead to the
              termination of your account. The user bears responsibility for any fraudulent activity arising from the
              theft or sharing of their personal login details. The Services are intended for individual users who are
              natural persons, for their personal use. Sharing personal login details in any manner will be deemed
              fraudulent and a violation of these terms and conditions. Users found sharing such information will have
              their accounts deleted.</p>
            <h2>Compromise of Personal and Your Information</h2>
            <p>If there is a breach of security that leads to the compromise of certain personal information, we will
              promptly notify the individuals whose personal information has been compromised. We will follow the
              notification procedures outlined in this privacy policy or as otherwise mandated by applicable law. You
              have the option to decline the terms under which your information will be used. However, in such cases,
              The Company may not be able to provide you with certain services.</p>
            <h2>Children's Privacy</h2>
            <p>Safeguarding the privacy of children is of utmost importance. Therefore, The Company does not
              intentionally gather or request personal information from individuals under the age of 18. If you are
              under 18, please refrain from sending any personal information, such as your name, address, phone number,
              or email address. It is strictly prohibited for anyone under the age of 18 to provide personal information
              to The Company. . If you suspect that we may have collected information from an individual under 18,
              please get in touch with Customer Support at <a href="mailto:support@mobile2go.net"
                title="support@mobile2go.net">support@mobile2go.net</a>.</p>
            <p>In the event that we become aware of the presence of personal information belonging to someone under 18
              without proper parental consent, we will deactivate the account and expeditiously delete all associated
              personal information.</p>
            <h2>Link to other sites</h2>
            <p>We are not responsible for the practices employed by websites linked to our website/service or the
              information or contents contained therein. Please remember that when you use a link to go from the service
              to another website, our Privacy Policy is no longer valid. Your browsing on any other website, including
              those linked to the service is subject to that website's own rules and policies. Please read their rules
              and policies before proceeding.</p>
            <h2>Payment & Refunds </h2>
            <p>Our company holds our customers in high regard and is committed to delivering top-notch products and
              services. We recognize that there may be instances where customers wish to request a refund for a purchase
              made via credit card payment on our website. The approval of refunds for credit card payments is solely at
              the discretion of our company.</p>
            <p>Should you find your purchase unsatisfactory, you have the option to seek a refund by reaching out to our
              customer support team at support@mobile2go.net . We will diligently assess your request and promptly
              communicate the results of our review to you. If your refund request is deemed valid, we will credit the
              full purchase amount to your credit card account, after deducting any relevant fees or charges. Please
              take note that refunds will exclusively be credited to the credit card used during the initial purchase.
              Moreover, refunds will only be granted to the original purchaser of the product, and no third parties,
              including spouses, relatives, partners, etc., are eligible to request refunds on behalf of the purchaser
              or under their own account.</p>
            <p>It's essential to acknowledge that Mediteran Union Investment, S.L. retains the discretion to decline refund
              requests for various reasons, which may include, but are not restricted to, the following:</p>
            <p>You are entitled to request a refund within a 14-day period after subscribing in accordance with the Consumer Contracts Regulations.</p>
            <ul>
              <li>Products or services that have been used or consumed.</li>
              <li>Non-compliance with our terms and conditions of sale.</li>
              <li>Engagement in fraudulent activity or misuse of our refund policy.</li>
              <li>Refund requests submitted beyond the specified time frame.</li>
              <li>In cases where a refund is approved, please be aware that it might take up to 20 working days for the
                refund to reflect on the User's credit card statement.</li>
            </ul>
            <p>Your subscription will automatically renew on a monthly basis at just 39,99 €/£ per month, using the credit card provided.</p>
            <h2>Amendments to Our Privacy Policy</h2>
            <p>Kindly be aware that this Privacy Policy may undergo revisions periodically. We will not restrict your
              rights under this Policy without your explicit agreement. We anticipate that most modifications will be of
              a minor nature. Any alterations will be published on the service site, and if they are substantial in
              nature, we will issue an associated notice to draw attention to them. This may include notifications sent
              via email (in the case of specific services).</p>
            <p>Should you have any inquiries regarding our Privacy Policy, The Company's practices, or your association
              with the service, please do not hesitate to reach out by sending an email to <a
                href="mailto:support@mobile2go.net" title="support@mobile2go.net">support@mobile2go.net</a></p>
            <h2>Definitions</h2>
            <p>Data Controller: Refers to the natural or legal person, public authority, agency, or any other entity
              that, either independently or in conjunction with others, establishes the purposes and methods for
              processing personal data.</p>
            <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of Spain. Any dispute or difference arising out of or in connection with this Agreement shall be determined by the Courts of the Spain, waiving both parties to any other court that may also correspond.</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php
  include("pages/footer.php")
  ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>