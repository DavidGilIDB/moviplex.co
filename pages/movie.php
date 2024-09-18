<?php

$section = $_GET["section"];

$slug = $_GET["film_name"];

$obj = getMovie($slug);

$item = current($obj);

?>

<div class="header-title category header-red category">
    <h1>
        <img
            src="assets/icon-watch.svg"
            alt="logo" />
        Watch
    </h1>
</div>
<div class="container single-game mb-5">
    <div class="row justify-content-between">
        <div class="row">
            <h1><?= $item->title ?></h1>
        </div>
        <div class="col-12 col-sm-3 d-flex flex-column g-4 justify-content-center">
            <div class="single-movie-view__img">
                <div class="img-gradient">
                    <img src="<?= 'assets/images/films/cover/' . $item->image ?>" class="single-img" alt="<?= $item->title ?>">
                </div>
            </div>
            <div class="single-movie-view__info mt-4">
                <p><?= $item->sinopsis  ?></p>
            </div>
        </div>
        <div class="col-12 col-sm-7 d-flex flex-column justify-content-start">
            <div style="width: 100%; height: 360px;">
                
            <div id="player_video" style="display: none;"></div>
                <script>
                    flowplayer('#player_video', {
                        src: '<?= $item->urlVideo ?>',
                        autoplay: flowplayer.autoplay.AUDIO_REQUIRED,
                    })
                </script>

                <div id="player_trailer"></div>
                <script>
                    flowplayer('#player_trailer', {
                        src: '<?= $item->urlTrailer ?>',
                        autoplay: flowplayer.autoplay.AUDIO_REQUIRED,
                    })
                </script>
                <button class="btnFullMovie">Watch Full Movie</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
   
    $(".btnFullMovie").on("click",function(){
        $(this).css("display","none")
        $(this).siblings("#player_trailer").css("display","none");
        $(this).siblings("#player_video").css("display","block");
    })
});
</script>