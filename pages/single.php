<?php

$nom_section = $_GET["section"] ?? "action-games";
$section = MOIRA . $nom_section;

$id = $_GET["item"] ?? 1235;

$type = getSectionType($section, "en");

$obj = getItem($type, $id, "en");

$item = current($obj);

$random_decimal = round(rand(400, 500) / 100, 1);
$random_number = rand(1000, 9000);

$main = $_GET["main"] ?? "play";

$title = $main;

switch ($main) {
    case 'fitness':
        $color = "green";
        $icon = "icon-train.svg";
        break;

    case 'learn':
        $color = "yellow";
        $icon = "icon-learn.svg";
        break;

    case 'enjoy':
        $color = "purple";
        $icon = "icon-enjoy.svg";
        break;

    default:
        $color = "blue";
        $icon = "icon-play.svg";
        break;
}

?>

<div class="header-title header-<?= $color ?>">

    <h2>
        <img src="./assets/<?= $icon ?>" alt="">
        <?= $title ?>
    </h2>
    <button class="subcat-link" onclick="history.back()">Go Back</button>
</div>

<div class="container">
    <div class="single-game">

        <?php

        if($type != "sounds" && $type != "videos"){
            include("single-post.php");
        }elseif($type == "videos"){
            include("single-video.php");
        }else{
            include("single-audio.php");
        }

        include("sidebar.php");
        ?>
    </div>
</div>