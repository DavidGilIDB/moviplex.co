<?php

$src = isset($item->src) ? $item->src : $item->excerpt;

?>

<div class="row">
    <h1><?= $item->name ?? $item->title ?></h1>
</div>
<div class="d-flex justify-content-between row">
    <div class="col-12 col-sm-4 col">
        <div class="img-gradient">
            <img src="<?= STORAGEURL . $item->image ?>" alt="">
        </div>
        <div class="card-info">
            <div class="tag-name">
                <p class="miqro"><?= $nom_section ?></p>
            </div>
            <div class="size-file">
                <img src="./assets/star-icon.svg" alt="">
                <p class="miqro"><?= $random_decimal ?></p>
            </div>
            <div class="review">
                <img src="../assets/downloads.svg" alt="">
                <p class="miqro"><?= $random_number ?></p>
            </div>
        </div>
        <a <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "" : 'href="' . STORAGEURL . $src . '"' ?> type="button" class="btn-primary blue <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "noLogin" : "" ?>">Download</a>
    </div>
    <div class="col-12 col-sm-7 d-flex flex-column justify-content-start col">
        <h2 class="singleGameAbout">About</h2>
        <div>
            <?= $item->description ?? $item->body ?? "" ?>
        </div>
    </div>
</div>