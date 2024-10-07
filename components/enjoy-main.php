<div class="header-title category header-purple">
    <h1><img src="assets/icon-enjoy.svg" alt="logo" />Enjoy</h1>
</div>
<div class="latestUpdate bckPlay">
    <h2 class="latestUpdate_title">Latest Updates</h2>
    <div class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px)">

            <?php
            foreach ($recents[0] as $app) {
            ?>

                <div class="swiper-slide swiper-slide-active <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "noLogin" : "" ?>" style="width: 255.2px; margin-right: 30px">
                    <a href="#"><img src="<?= STORAGEURL . $app->image ?>" alt="" /></a>
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
    <a class="section-btn mt-4 d-block m-auto btnPurple" href="#/games/action-games">See All</a>
</div>
<div class="section-title text-center mb-0 pb-0 container">
    <h1>Our apps, videos &amp; wallpapers</h1>
    <p class="categoriesSub">Relax and immerse yourself in an ocean of limitless entertainment. From the latest <span class="purple">music</span>, <span class="purple">audios</span> and <span class="purple">podcasts</span> to access access to a world of exciting and varied content</p>
</div>
<div class="main-sections">
    <a class="category-card purple " href="index.php?page=enjoy&section=apps&slug=astrology-apps">
        <div class="category-card-content">
            <h3> Apps</h3>
            <p>Entertain yourself with a huge variety of apps of all kinds.</p>
        </div>
        <img class="category-card-image" src="assets/enjoy-apps.png" alt="Games">
    </a>
    <a class="category-card purple " href="index.php?page=enjoy&section=videos&slug=gaming-videos">
        <div class="category-card-content">
            <h3> Videos</h3>
            <p>Discover interesting and fun things in our video catalog.</p>
        </div>
        <img class="category-card-image" src="assets/enjoy-videos.png" alt="Games">
    </a>
    <a class="category-card purple " href="index.php?page=enjoy&section=gallery&slug=sport-images">
        <div class="category-card-content">
            <h3> Gallery</h3>
            <p>High resolution images, wallpapers, etc.</p>
        </div>
        <img class="category-card-image" src="assets/enjoy-gallery.png" alt="Games">
    </a>
    <div>
        <div id="topArticlesSection">
            <div class="d-flex justify-content-center flex-column">
                <div class="topArticlesTitle d-flex justify-content-between align-items-center">
                    <h2>Top Articles</h2><a href="index.php?page=enjoy&section=articles&slug=fun-facts">See All</a>
                </div>
                <div class="container d-flex gap-4 justify-content-center mt-5 articles-frame">
                    <div class="article-card">
                        <picture>
                            <img src="https://cms.d1b.pw/storage//articles/May2024/4WYklSDpW4vUexDslmhp.jpg" alt="The survey revealed who are the worst drivers in Europe">
                        </picture>
                        <div class="article-content p-4">
                            <h5>The survey revealed who are the worst drivers in Europe</h5>
                            <div class="excerp">
                                <p>The results of the research are, worrying. Of all respondents, as many as 79 percent had a negative attitude about fellow drivers. In the UK, a quarter of respondents said that completely different people are behind the wheel, but the attitude of Greeks about drivers from other countries is completely unbelievable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="article-card">
                        <picture>
                            <img src="https://cms.d1b.pw/storage//articles/May2024/bIP11ZYxbY3mJSFODCzY.jpg" alt="This is not a set Pirates of the Caribbean - Tortugas island">
                        </picture>
                        <div class="article-content p-4">
                            <h5>This is not a set Pirates of the Caribbean - Tortugas island</h5>
                            <div class="excerp">
                                <p>Tortugas island is the best example that legends exist. In other words, it is not necessary to watch a movie to experience what is like to look for treasure. Furthermore, enjoy every step of the unique landscape just like in the movie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="article-card">
                        <picture>
                            <img src="https://cms.d1b.pw/storage//articles/May2024/spW0ZQnebG7fcRF4c0PG.jpg" alt="Can you name 5 countries that have no rivers?">
                        </picture>
                        <div class="article-content p-4">
                            <h5>Can you name 5 countries that have no rivers?</h5>
                            <div class="excerp">
                                <p>The country without a single river has more of them than one might think. In a world that is divided into almost 200 countries, natural resources are not distributed "in solidarity". And in a world where there is more and more talk about water scarcity, some countries are completely deprived of something that is often taken for granted: rivers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="article-card">
                        <picture>
                            <img src="https://cms.d1b.pw/storage//articles/May2024/gUNLmeLu2tvsjI3bPBtg.jpg" alt="An African tribe of bloody fights - they are proud of their struggles">
                        </picture>
                        <div class="article-content p-4">
                            <h5>An African tribe of bloody fights - they are proud of their struggles</h5>
                            <div class="excerp">
                                <p>The women cut the young men's skin with a razor and lift it with a thorn. Once the skin is cut deep enough, they rub them with ash or vegetable juice to make the cut swell enough and leave a huge, permanent scar that they consider a work of art.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
