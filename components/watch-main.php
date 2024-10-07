<div class="header-title category header-red">
  <h1><img src="assets/icon-watch.svg" alt="logo" />Watch</h1>
</div>
<div class="latestUpdate bckPlay">
  <h2 class="latestUpdate_title">Latest Updates</h2>
  <div class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px)">

      <?php
      foreach ($recents as $app) {
      ?>

        <div class="swiper-slide swiper-slide-active <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "noLogin" : "" ?>" style="width: 255.2px; margin-right: 30px">
          <a><img src="<?= 'assets/images/films/cover/' . $app->image ?>" alt="" /></a>
        </div>

      <?php
      }
      ?>

    </div>
    <div class="swiper-button-prev swiper-button-disabled"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
      <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
      <span class="swiper-pagination-bullet"></span>
      <span class="swiper-pagination-bullet"></span>
      <span class="swiper-pagination-bullet"></span>
      <span class="swiper-pagination-bullet"></span>
      <span class="swiper-pagination-bullet"></span>
    </div>
  </div>
  <a class="section-btn mt-4 d-block m-auto btnRed" href="index.php?page=watch&section=documentary">See All</a>
</div>
<div class="section-title text-center mb-0 pb-0 container">
  <h1>Our movies, TV shows, documentaries...</h1>
  <p class="categoriesSub">Explore our learning section, where you will find a variety of <span class="red"> courses </span> and <span class="red">tutorials</span> on a wide range of topics. From foreign languages to advanced technological skills.</p>
</div>
<div class="main-sections">
  <a class="category-card red " href="index.php?page=watch&section=comedy">
    <div class="category-card-content">
      <h3> Comedy</h3>
      <p>Have a laugh with our selection of comedies</p>
    </div>
    <img class="category-card-image" src="assets/watch-comedy.png" alt="Games">
  </a>
  <a class="category-card red " href="index.php?page=watch&section=thriller">
    <div class="category-card-content">
      <h3> Thriller</h3>
      <p>Be frightened by our horror films and cult thrillers</p>
    </div>
    <img class="category-card-image" src="assets/watch-thriller.png" alt="Games">
  </a>
  <a class="category-card red " href="index.php?page=watch&section=documentary">
    <div class="category-card-content">
      <h3> Documentaries</h3>
      <p>Discover everything about the most popular characters</p>
    </div>
    <img class="category-card-image" src="assets/watch-docs.png" alt="Games">
  </a>
  <a class="category-card red " href="index.php?page=watch&section=drama">
    <div class="category-card-content">
      <h3> Drama</h3>
      <p>Great stories that will touch you in your heart</p>
    </div>
    <img class="category-card-image" src="assets/watch-drama.png" alt="Games">
  </a>
  <a class="category-card red " href="index.php?page=watch&section=kids">
    <div class="category-card-content">
      <h3> Kids</h3>
      <p>The best children's content to entertain your kids</p>
    </div>
    <img class="category-card-image" src="assets/watch-kids.png" alt="Games">
  </a>
  <div></div>
</div>