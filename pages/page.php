<?php

$sections = ["moira-recently-added"=>[ 'type' => 'games'], "moira-top-games"=>[ 'type' => 'games']];

$result = getMultySection($sections,'en');




?>

<main class="product">
  <div class="movie_card">
    <div class="movie-view">
      <button type="button" class="video-player" data-bs-toggle="modal" data-bs-target="#subscriptionModal" onclick="playVideo('<?php if(isset($_SESSION['login'])==true){ echo $result[0]->urlVideo;} ?>');">
        <!--<img class="play-icon" src="assets/images/play-icon.png" />
        <img class="trailer-image" src="assets/images/trailer.png" /> -->
        <?php if (isset($result[0]->urlTrailer) == null) { ?>
          <img class="modal-image" src="assets/images/films/trailer-img/<?php echo $result[0]->image; ?>" />
        <?php } ?>
        <div id="trailer"></div>
      </button>

      <div class="video-description">
        <img class="modal-image" src="assets/images/films/thumbnails/<?php echo $result[0]->image; ?>" />

        <div class="title">
          <div class="title-text">
            <h2><?php echo $result[0]->title; ?> <br /></h2>
            <span><?php echo $result[0]->runTime; ?> min. <?php echo $result[0]->year; ?></span>
          </div>

          <!-- <div class="social-actions ms-auto d-flex gap-3">
            <button class="btn-secondary btn-icon" href=""><img src="assets/images/btn-like.svg" alt="Like" /></button>
            <button class="btn-secondary btn-icon" href=""><img src="assets/images/btn-share.svg" alt="Like" /></button>
          </div> -->
        </div>
        <div class="description">
          <h2>Description:</h2>
          <p>
            <?php echo $result[0]->sinopsis; ?>
          </p>
          <h2>Cast</h2>
          <p><?php echo $result[0]->stars; ?></p>
        </div>
        <div class="buttons">
          <?php if (count($result) == 2 && $result[1]->id < $result[0]->id) { ?>
            <a href="index.php?page=page&slug=<?php echo $result[1]->slug; ?>" class="btn-secondary btn-icon"><img src="assets/images/arrow-primary-left.png" alt="Arrow Left"></a>
            </a>
          <?php } else if (count($result) == 3) { ?>
            <a href="index.php?page=page&slug=<?php echo $result[2]->slug; ?>" class="btn-secondary btn-icon"><img src="assets/images/arrow-primary-left.png" alt="Arrow Left"></a>
          <?php } else {
          ?>
            <a href="#" class="btn-secondary btn-icon disabled"><img src="assets/images/arrow-primary-left.png" alt="Arrow Left"></a>
          <?php
          } ?>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-watch" data-bs-toggle="modal" data-bs-target="#subscriptionModal" onclick="playVideo('<?php if(isset($_SESSION['login'])==true){ echo $result[0]->urlVideo;} ?>');">
            WATCH
          </button>

          <!-- <div class="modal fade modal-xl" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close" onclick="stopVideo('<?php if(isset($_SESSION['login'])==true){ echo $result[0]->urlVideo;} ?>');"><img src="assets/images/close-mark.svg" alt="Close"></button>
                <div class="modal-body">
                  <?php if (isset($_SESSION['pay_status']) === true) { ?>
                    <div id="player"></div>
                  <?php } else { ?>
                    <h3>You must subscribe</h3>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#subscriptionModal" class="btn-primary mt-3">Subscribe</button>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div> -->

          <?php if ($result[1]->id > $result[0]->id) { ?>
            <a href="index.php?page=page&slug=<?php echo $result[1]->slug; ?>" class="btn-secondary btn-icon"><img src="assets/images/arrow-primary.png" alt="Arrow Right"></a>
          <?php } else {
          ?>
          <a href="#" class="btn-secondary btn-icon disabled"><img src="assets/images/arrow-primary.png" alt="Arrow Right"></a>
          <?php
          } ?>
        </div>
      </div>
    </div>
  </div>
</main>