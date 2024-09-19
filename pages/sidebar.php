<?php

$exclusive_games = getSection(MOIRA . "exclusive", "en", "articles");

$exclusive_games = array_splice($exclusive_games[0], 0, 8);

?>
<div class="my-2 row">
    <h6 class="singleGame__more">You may also like this</h6>
    <div class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
        <div class="swiper-wrapper" style="transform: translate3d(0px,0px,0px);">

            <?php
            foreach ($exclusive_games as $game) {
                $decimal = round(rand(400, 500) / 100, 1);
                $number = rand(1000, 9000);
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
                                    <p class="miqro"><?= $decimal ?></p>
                                </div>
                                <div class="review">
                                    <img src="../assets/downloads.svg" alt="">
                                    <p class="miqro"><?= $number ?></p>
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