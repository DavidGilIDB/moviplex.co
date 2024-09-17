<?php

$nom_section = $_GET["section"] ?? "action-games";
$section = MOIRA . $nom_section;

$id = $_GET["item"] ?? 1235;

$type = getSectionType($section, "en");


$obj = getItem($type, $id, "en");



$item = current($obj);

$exclusive_games = getSection(MOIRA . "exclusive", "en", "articles");

$exclusive_games = array_splice($exclusive_games, 0, 8);

$random_decimal = round(rand(400, 500) / 100,1);
$random_number = rand(1000, 9000);

?>

<div class="header-title header-blue">

    <h2>
        <img src="./assets/game.svg" alt="">
        Play
    </h2>
    <button class="subcat-link" onclick="history.back()">Go Back</button>
</div>
<div class="container">
    <div class="single-game">
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
                <a href="<?= STORAGEURL . $item->src ?>" type="button" class="btn-primary blue">Download</a>
            </div>
            <div class="col-12 col-sm-7 d-flex flex-column justify-content-start col">
                <h2 class="singleGameAbout">About</h2>
                <div>
                    <?= $item->description ?? $item->body ?>
                </div>
            </div>
        </div>
        <div class="my-2 row">
            <h6 class="singleGame__more">You may also like this</h6>
            <div class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
                <div class="swiper-wrapper" style="transform: translate3d(0px,0px,0px);">

                    <?php
                    foreach ($exclusive_games as $game) {
                        $random_decimal_game = round(rand(400, 500) / 100,1);
                        $random_number_game = rand(1000, 9000);
                    ?>

                        <div class="swiper-slide cards" style="width: 218.667px; margin-right: 20px;">
                            <div class="card">
                                <div class="card-header">
                                    <a href="index.php?page=single&section=exclusive&item=<?= $game->id ?>">
                                        <img src="<?= STORAGEURL . $game->image ?>" alt="game">
                                    </a>
                                    <div class="border-btn">
                                        <a href="index.php?page=single&section=exclusive&item=<?= $game->id ?>" class="card-btn blue-btn">Get</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><?= $game->title ?></h3>
                                    <div class="card-info">
                                        <div class="tag-name">
                                            <p class="miqro">Exclusives</p>
                                        </div>
                                        <div class="size-file">
                                            <img src="./assets/star-icon.svg" alt="">
                                            <p class="miqro"><?= $random_decimal_game ?></p>
                                        </div>
                                        <div class="review">
                                            <img src="../assets/downloads.svg" alt="">
                                            <p class="miqro"><?= $random_number_game ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>
                <div class="swiper-button-prev swipper-button-disabled"></div>
                <div class="swipper-button-next"></div>
            </div>
        </div>
    </div>
</div>