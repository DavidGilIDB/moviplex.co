<div class="header-title category header-blue">
      <h1>
        <img
          src="assets/icon-game.svg"
          alt="logo"
        />
        Play
      </h1>
    </div>
    <div class="latestUpdate bckPlay">
      <h2 class="latestUpdate_title">Latest Updates</h2>
      <div class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px)">

        <?php foreach ($recents[0] as $app) { ?>
            <div class="swiper-slide swiper-slide-active" style="width: 255.2px; margin-right: 30px">
            <a href="#"><img src="<?= STORAGEURL . $app->image; ?>" /></a>
          </div>
        <?php } ?>
        </div>
        <div class="swiper-button-prev swiper-button-disabled"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span
          ><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span
          ><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span
          ><span class="swiper-pagination-bullet"></span>
        </div>
      </div>
      <a class="section-btn mt-4 d-block m-auto btnBlue" href="#/games/action-games">See All</a>
    </div>
    <div class="section-title text-center mb-0 pb-0 container">
      <h1>Our Games &amp; Apps</h1>
      <p class="categoriesSub">
        Immerse yourself in a world of fun and excitement with our wide selection of cutting-edge games. From
        <span class="blue"> thrilling adventures</span> to challenging <span class="blue">strategy games</span>.
      </p>
    </div>
    <div class="main-sections">
      <div>
        <div id="topArticlesSection">
          <div class="d-flex justify-content-center flex-column">
            <div class="topArticlesTitle d-flex justify-content-between align-items-center">
              <h2>Top Articles</h2>
              <a href="#/articles/gaming-tips">See All</a>
            </div>
            <div class="container d-flex gap-4 justify-content-center mt-5 articles-frame">

            <?php 
            for ($article=0; $article < 4; $article++) { ?>
                 <div class="article-card">
                <picture
                  ><img
                    src="<?= STORAGEURL .  $top[0][$article]->image; ?>"
                    alt="Fortnite has become free on all platforms"
                /></picture>
                <div class="article-content p-4">
                  <h5><?=  $top[0][$article]->name; ?></h5>
                  <div class="excerp">
                    <p>
                    <?=  $top[0][$article]->description; ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>