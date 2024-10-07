<div class="header-title category header-yellow">
    <h1><img src="assets/icon-learn.svg" alt="logo" />Learn</h1>
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
    <a class="section-btn mt-4 d-block m-auto btnYellow" href="index.php?page=learn&section=e-books&slug=ebooks">See All</a>
</div>
<div class="section-title text-center mb-0 pb-0 container">
    <h1>Our Apps &amp; training videos</h1>
    <p class="categoriesSub">&nbsp;Live a balanced and healthy life with our dedicated lifestyle and fitness section. Discover <span class="green">wellness tips</span>, personalised <span class="green">exercise routines</span> and <span class="green">healthy recipes</span></p>
</div>
<div class="main-sections">
    <a class="category-card yellow " href="index.php?page=learn&section=apps&slug=education-apps">
        <div class="category-card-content">
            <h3> Apps</h3>
            <p>Trends, beauty, advice that will make you feel good with yourself</p>
        </div>
        <img class="category-card-image" src="assets/train-apps.png" alt="Games">
    </a>
    <a class="category-card yellow " href="index.php?page=learn&section=audio-books&slug=audio-books">
        <div class="category-card-content">
            <h3> Videos</h3>
            <p>Improve your physical power with our training videos.</p>
        </div>
        <img class="category-card-image" src="assets/train-videos.png" alt="Games">
    </a>
    <a class="category-card yellow " href="index.php?page=learn&section=e-books&slug=ebooks">
        <div class="category-card-content">
            <h3> Gallery</h3>
            <p>Stunning images to download about exercise and lifestyle</p>
        </div>
        <img class="category-card-image" src="assets/train-gallery.png" alt="Games">
    </a>
</div>
<div class="main-sections">
    <div>
        <div id="topArticlesSection">
            <div class="d-flex justify-content-center flex-column">
                <div class="topArticlesTitle d-flex justify-content-between align-items-center">
                    <h2>Top Articles</h2>
                    <a href="index.php?page=learn&section=articles&slug=tech-articles">See All</a>
                </div>
                <div class="container d-flex gap-4 justify-content-center mt-5 articles-frame">

                    <?php
                    for ($article = 0; $article < 4; $article++) {
                    ?>

                        <div class="article-card <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "noLogin" : "" ?>">
                            <picture>
                                <img src="<?= STORAGEURL . $top[0][$article]->image ?>" alt="Fortnite has become free on all platforms" />
                            </picture>
                            <div class="article-content p-4">
                                <h5><?= $top[0][$article]->name ?></h5>
                                <div class="excerp">
                                    <p><?= $top[0][$article]->description ?></p>
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