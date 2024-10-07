<?php

$nom_section = $_GET["section"];

$section = ucfirst($nom_section);

$movies = getSectionMovies($section);

?>
<div class="header-title category header-red">
    <h1><img src="assets/icon-watch.svg" alt="logo" />Watch</h1>
</div>
<div class="container">
    <div class="row">

        <?php
        foreach ($movies as $movie) {
            $random_decimal = round(rand(400, 500) / 100, 1);
            $random_number = rand(1000, 9000);
        ?>

            <div class="col-lg-3 col-md-4 col-12 my-3 col <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "noLogin" : "" ?>">
                <div class="card">
                    <div class="card-header">
                        <a <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? '' : "href=index.php?page=movie&section=" . $nom_section . "&film_name=" . $movie->slug ?>><img src="<?= 'assets/images/films/cover/' . $movie->image ?>" alt="" /></a>
                        <div class="border-btn"><a class="card-btn red-btn" <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? '' : "href=index.php?page=movie&section=" . $nom_section . "&film_name=" . $movie->slug ?>>Watch</a></div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><?= (isset($movie->name)) ? $movie->name : $movie->title ?></h3>
                        <p class="card-text">
                            <?= (isset($movie->description)) ? $movie->description : $movie->meta_description ?>
                        </p>
                        <div class="card-info">
                            <div class="tag-name">
                                <p class="miqro"><?= $section ?></p>
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
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>