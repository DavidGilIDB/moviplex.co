<div class="header-title category header-green">
    <h1>
        <img
            src="assets/icon-train.svg"
            alt="logo" />
        Train
    </h1>
</div>
<div class="latestUpdate bckPlay">
    <h2 class="latestUpdate_title">Latest Updates</h2>
    <div class="swiper swiper-initialized swiper-horizontal mySwiper swiper-backface-hidden">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px)">

            <?php foreach ($recents[0] as $app) { ?>
                <div class="swiper-slide swiper-slide-active <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "noLogin" : "" ?>" style="width: 255.2px; margin-right: 30px">
                    <a href="#"><img src="<?= STORAGEURL . $app->image; ?>" /></a>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-button-prev swiper-button-disabled"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
            <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
        </div>
    </div>
    <a class="section-btn mt-4 d-block m-auto btnGreen" href="#/games/action-games">See All</a>
</div>
<div class="section-title text-center mb-0 pb-0 container">
    <h1>Our Apps &amp; training videos</h1>
    <p class="categoriesSub">&nbsp;Live a balanced and healthy life with our dedicated lifestyle and fitness section. Discover <span class="green">wellness tips</span>, personalised <span class="green">exercise routines</span> and <span class="green">healthy recipes</span></p>
</div>
<div class="main-sections"><a class="category-card green " href="/fitness/apps/moira-beauty">
        <div class="category-card-content">
            <h3> Apps</h3>
            <p>Trends, beauty, advice that will make you feel good with yourself</p>
        </div><img class="category-card-image" src="assets/train-apps.png" alt="Games">
    </a><a class="category-card green " href="/fitness/videos/moira-health-fitness-videos">
        <div class="category-card-content">
            <h3> Videos</h3>
            <p>Improve your physical power with our training videos.</p>
        </div><img class="category-card-image" src="assets/train-videos.png" alt="Games">
    </a><a class="category-card green " href="/fitness/gallery/moira-health-fitness-images">
        <div class="category-card-content">
            <h3> Gallery</h3>
            <p>Stunning images to download about exercise and lifestyle</p>
        </div><img class="category-card-image" src="assets/train-gallery.png" alt="Games">
    </a>
    <div>
        <div id="topArticlesSection">
            <div class="d-flex justify-content-center flex-column">
                <div class="topArticlesTitle d-flex justify-content-between align-items-center">
                    <h2>Top Articles</h2><a href="/fitness/articles/moira-lifestyle-articles">See All</a>
                </div>
                <div class="container d-flex gap-4 justify-content-center mt-5 articles-frame">
                    <div class="article-card">
                        <picture><img src="https://cms.d1b.pw/storage//articles/May2024/IzSKRVa1dPWvbjHw9m6C.jpg" alt="Nourish and Revitalize: The Best Natural Ingredients for Your Skin"></picture>
                        <div class="article-content p-4">
                            <h5>Nourish and Revitalize: The Best Natural Ingredients for Your Skin</h5>
                            <div class="excerp">
                                <p>Do you know how to have a beautiful skin face? Here are some tips which will help you to be satisfied with your look.</p>
                            </div>
                        </div>
                    </div>
                    <div class="article-card">
                        <picture><img src="https://cms.d1b.pw/storage//articles/May2024/oFgOXIz7d9CjTq2Fh29H.jpg" alt="Cool things you didn't know about Maldives"></picture>
                        <div class="article-content p-4">
                            <h5>Cool things you didn't know about Maldives</h5>
                            <div class="excerp">
                                <p>The Maldives, an idyllic tropical paradise in the Indian Ocean, is renowned for its overwater bungalows, crystal-clear turquoise waters. Check more...</p>
                            </div>
                        </div>
                    </div>
                    <div class="article-card">
                        <picture><img src="https://cms.d1b.pw/storage//articles/May2024/VPC3hNeUZfKi0fmocIgU.jpg" alt="10,000 people lost their lives - the World's biggest lakes"></picture>
                        <div class="article-content p-4">
                            <h5>10,000 people lost their lives - the World's biggest lakes</h5>
                            <div class="excerp">
                                <p>World's biggest lakes whose surface is so large you would believe it's a sea. Did you know that there are more than 100 million lakes that cover 4% of the earth’s surface? Some can be salty or sweet and artificial or natural. While some are big enough to fit an entire state, others are no bigger than a pond.</p>
                            </div>
                        </div>
                    </div>
                    <div class="article-card">
                        <picture><img src="https://cms.d1b.pw/storage//articles/May2024/uKgzeWbWRoQAOuD1V2M5.jpg" alt="If you don’t want to be found - Best places for introverts"></picture>
                        <div class="article-content p-4">
                            <h5>If you don’t want to be found - Best places for introverts</h5>
                            <div class="excerp">
                                <p>Best places for introverts or in other words without too much hustle and bustle. It all describes places where you can hide. In addition, if you are a person who loves silence, these places are just for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    for ($article = 0; $article < 4; $article++) { ?>
                        <div class="article-card <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "noLogin" : "" ?>">
                            <picture><img
                                    src="<?= STORAGEURL .  $top[0][$article]->image; ?>"
                                    alt="Fortnite has become free on all platforms" /></picture>
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