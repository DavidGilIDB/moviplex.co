<?php

$sections = ['Comedy', 'Thriller', 'Kids', 'Documentary', 'Drama'];

$plays = getSection('moira-action-games', 'en', 'games')[0];

$watch = getSectionMovies('Comedy');

$train = getSection('moira-health-fitness-videos', 'en', 'videos')[0];

$learn = getSection('moira-education-apps', 'en', 'apps')[0];

$enjoy = getSection('moira-animal-videos', 'en', 'videos')[0];

$exclsive = getSection('moira-exclusive', 'en', 'articles')[0];

$articlesTop = getSection('moira-most-read-articles', 'en', 'articles')[0];

?>

<style>
  .container.full-width {
    min-width: 100%;
    margin: 0;
    padding: 0;
  }

  .hero {
    background: var(--black);
    position: relative;
    width: 100%;
    height: calc(100vh - 60px);
    display: flex;
    flex-direction: column;
    margin-top: 60px;
    justify-content: space-around;
    align-items: center;
    gap: 10px;
  }

  .hero>.container {
    position: relative;
    z-index: 1;
  }

  .carousel {
    position: relative;
  }

  .hero .title {
    width: 100%;
    text-align: center;
    color: var(--white);
  }

  .hero .title h1 {
    font-size: 54px !important;
    font-weight: 600 !important;
    line-height: normal !important;
    max-width: 1180px;
    margin: 10px auto 0;
  }

  .hero .title h1 strong {
    font-weight: 800;
    color: var(--yellow);
  }

  .hero .title h5 {
    font-size: 20px !important;
    font-weight: 400 !important;
    line-height: normal !important;
  }

  .animation-bck {
    position: absolute;
    z-index: 0;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  .animation-bck img {
    object-fit: cover;
    height: 100%;
    width: inherit;
    display: block;
  }

  .btn-main {
    border-radius: 10px;
    background-color: var(--magenta);
    color: var(--white);
    display: block;
    padding: 18px 40px;
    font-weight: 600;
    width: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    line-height: 24px;
    text-transform: uppercase;
    border: 0;
  }

  .title h1 {
    margin-bottom: 20px;
  }

  .hero-card-bg {
    border: 3px solid;
    border-radius: 20px;
    backdrop-filter: blur(0px);
    -webkit-backdrop-filter: blur(0px);
    width: 100%;
    display: flex;
    padding: 20px 10px;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    position: relative;
    min-height: 180px;
    box-sizing: border-box;
    transition: .25s;
    text-align: center;
    gap: 10px;
  }

  .hero-card-bg:hover {
    border: 3px solid var(--white) !important;
    transform: scale(1.1);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    color: var(--white) !important;
  }

  .hero-card-bg:hover>img {
    transform: scale(.8);
    transition: .25s;
    filter: brightness(0.5) contrast(2);
  }

  .hero-card-bg>img {
    position: absolute;
    top: -75px;
    transition: .25s;
  }

  .hero-card-bg h3 {
    font-size: 28px !important;
    text-transform: uppercase;
    transition: .25s;
    margin: 0;
    line-height: normal !important;
  }

  .hero-card-bg:hover h3 {
    letter-spacing: 4px;
  }

  .hero-card-bg p {
    font-weight: 700 !important;
    line-height: normal !important;
    font-size: 16px !important;
  }

  .hero-card-bg::after {
    content: '';
    display: block;
    position: absolute;
    bottom: -30px;
    width: 90px;
    height: 90px;
    transform: rotate(45deg);
    top: -50px;
    border-radius: 50%;
    z-index: -1;
    transition: .25s;
  }

  .hero-card-bg:hover::after {
    background-color: var(--white) !important;
  }

  .hero-card-bg.play::after {
    background-color: var(--blue);
  }

  .hero-card-bg.learn::after {
    background-color: var(--yellow);
  }

  .hero-card-bg.enjoy::after {
    background-color: var(--purple);
  }

  .hero-card-bg.train::after {
    background-color: var(--green);
  }

  .hero-card-bg.watch::after {
    background-color: var(--magenta);
  }

  .hero-card-bg.play {
    border-color: var(--blue);
    color: var(--blue);
    animation-delay: .25s;
  }

  .hero-card-bg.watch {
    border-color: var(--magenta);
    color: var(--magenta);
    animation-delay: .5s;
  }

  .hero-card-bg.train {
    border-color: var(--green);
    color: var(--green);
    animation-delay: .75s;
  }

  .hero-card-bg.learn {
    border-color: var(--yellow);
    color: var(--yellow);
    animation-delay: 1s;
  }

  .hero-card-bg.enjoy {
    border-color: var(--purple);
    color: var(--purple);
    animation-delay: 1.25s;
  }

  .cards-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .hero-btn {
    font-size: 24px;
    font-weight: 700;
    color: var(--white);
  }

  .hero-btn span {
    transition: .2s;
  }

  .hero-btn:hover span {
    letter-spacing: 2px;
  }

  .hero-btn>img {
    position: relative;
    top: 4px;
    transition: .2s;
    opacity: .25;
    transform: scale(.9);
  }

  .hero-btn:hover>img {
    position: relative;
    top: 10px;
    opacity: 1;
    transform: scale(1);
  }

  .intro-text {
    font-size: 64px;
    font-weight: 600;
    line-height: normal;
    max-width: 1280px;
    margin: auto;
    text-align: center;
  }

  .intro-text strong {
    font-weight: 800;
    color: var(--primary);
  }


  /* media queries */

  @media only screen and (max-width: 767px) {
    .hero {
      height: fit-content;
      padding: 15px;
      gap: 50px;
    }

    .intro-text {
      font-size: 36px !important;
    }

    .hero .title h1 {
      font-size: 32px !important;
      line-height: 36px !important;
      margin-top: 20px;
    }

    .hero .title h5 {
      font-size: 18px;
    }

    .hero-card-bg>img {
      top: -37px;
      max-width: 60px;
    }

    .hero-card-bg::after {
      width: 50px;
      height: 50px;
      top: -27px;
    }

    .hero .hero-btn {
      display: none !important;
    }

    .hero-card-bg {
      padding: 30px;
      min-height: fit-content;
      margin: 10px auto;
      max-width: 280px;
    }

    .section-bck-img {
      position: relative;
      right: initial;
      top: 20px;
      display: block;
      max-width: 80%;
      margin: auto;
      left: initial;
    }

    #playSection {
      background: #0a0a0c url(/src/assets/gradient-play.jpg) bottom center no-repeat;
    }

    #learnSection {
      background: #0a0a0c url(/src/assets/gradient-learn.jpg) bottom center no-repeat;
    }

    #enjoySection {
      background: #0a0a0c url(/src/assets/gradient-enjoy.jpg) bottom center no-repeat;
    }

    #trainSection {
      background: #0a0a0c url(/src/assets/gradient-train.jpg) bottom center no-repeat;
    }

    #watchSection {
      background: #0a0a0c url(/src/assets/gradient-watch.jpg) bottom center no-repeat;
    }

    .hero-card-bg h3 {
      padding-top: 10px;
    }
  }

  @media only screen and (min-width: 768px) and (max-width: 1199px) {
    .hero-card-bg {
      margin: 20px auto;
    }
  }
</style>

<main>
  <div class="full-width">
    <div class="hero">
      <div class="title container">
        <h5 class="letter-anim">MOVIPLEX.CO, YOUR DREAM MULTI-CONTENT PLATFORM</h5>
        <h1 class="pop-up"> Your gateway to the universe of the most <strong>exclusive</strong> and <strong> unlimited content</strong>.</h1>
      </div>
      <div class="container">
        <div class="justify-content-center gap-3 row">
          <div class="col-xs-12 col-sm-3 col-lg-2">
            <a href='index.php?page=play' class='hero-card-bg play pop-up'>
              <img src="assets/joystick.png" alt="joystick" />
              <h3>Play</h3>
              <p class="cat-description">Videogames & entertainment apps</p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-3 col-lg-2">
            <a href='index.php?page=watch' class='hero-card-bg watch pop-up'>
              <img src="assets/popcorn.png" alt="movies" />
              <h3>watch</h3>
              <p class="cat-description">Dramas, comedies, thrillers and more</p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-3 col-lg-2">
            <a href='index.php?page=fitness' class='hero-card-bg train pop-up'>
              <img src="assets/weight.png" alt="weight" />
              <h3>Fitness</h3>
              <p class="cat-description">Lifestyle and fitness</p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-3 col-lg-2">
            <a href='index.php?page=learn' class='hero-card-bg learn pop-up'>
              <img src="assets/book.png" alt="book" />
              <h3>Learn</h3>
              <p class="cat-description">Courses and tutorials</p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-3 col-lg-2">
            <a href='index.php?page=enjoy' class='hero-card-bg enjoy pop-up'>
              <img src="assets/headphones.png" alt="headphones" />
              <h3>Enjoy</h3>
              <p class="cat-description">Articles, podcasts, videos and images</p>
            </a>
          </div>
        </div>
      </div>
      <div class="container d-flex justify-content-center align-items-center">
        <a href="#introSection" title="GET TO KNOW US" class="hero-btn flex-column d-flex gap-2 align-items-center">
          <span>GET TO KNOW US</span>
          <img src='assets/icon-mouse.png' alt="mouse Icon" />
        </a>
      </div>
      <div class="animation-bck">
        <img src='assets/hero_collage.jpg' alt=""/>
      </div>
    </div>
    <div id="introSection" class='d-flex justify-content-center align-items-center'>
      <div class="container d-flex justify-content-center">
        <div class="intro-text">The latest trends in <strtong>streaming</strong>, <strong>videos</strong>, <strong>games</strong>, <strong>training</strong>, <strong>news</strong> and more merge to bring you an experience that never ends.</div>
      </div>
    </div>
    <div id="topSection" class='section-container'>
      <div class="d-flex gap-5 my-3 container justify-content-center align-items-center">
        <img src='assets/top-title.png' alt="Moira Logo" class="top-img" />
        <!-- Añadir slider -->
      </div>
    </div>
    <div class="">
    </div>
    <div class="main-sections">
      <div class="section-container" id="playSection">
        <div class="container">
          <div class="section-title d-flex gap-3 my-3">
            <img src="assets/icon-game.svg" alt=""/>
            <h2>Play</h2>
            <span class="subtitle">Videogames & Apps</span>
          </div>
          <div class="intro-cat">Immerse yourself in a world of fun and excitement with our wide selection of cutting-edge games. From <strong>thrilling adventures</strong> to challenging <strong>strategy games</strong>, Moviplex.co offers you unlimited access to an endless library of interactive entertainment. Are you ready to face new challenges and discover virtual worlds full of surprises?</div>
          <div class="cards-container">

            <?php
            for ($i = 0; $i < 6; $i++) {
            ?>

              <a class="gameIcon <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? "noLogin" : "" ?>" <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? '' : "href=index.php?main=play&page=single&section=action-games&item=" . $plays[$i]->id ?>><img loading="lazy" src="<?= STORAGE_URL . $plays[$i]->image ?>" alt="" width="195px" height="195px"></a>

            <?php
            }
            ?>

          </div>
        </div>
      </div>
      <div class="section-container" id="watchSection">
        <div class="container">
          <div class="section-title d-flex gap-3 my-3">
            <img src="assets/icon-watch.svg" alt=""/>
            <h2>Watch</h2>
            <span class="subtitle">Movies, TV Shows & Documentaries</span>
          </div>
          <div class="intro-cat">Enjoy a world of unparalleled entertainment with our carefully selected content that you won't find on any other platform; a wide range of <strong>exclusive films and series</strong> produced in collaboration with the best talent in the entertainment industry. <strong>Dramas, comedies, thrillers</strong> and much more. Our library of exclusive content is designed to suit all tastes and preferences.</div>
          <div class="cards-container">

            <?php
            for ($i = 0; $i < 6; $i++) {
            ?>

              <a class="movie-btn <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? "noLogin" : "" ?>" <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? '' : "href=index.php?page=watch&section=comedy&film_name=" . $watch[$i]->slug ?>><img loading="lazy" src="assets/<?= $watch[$i]->image ?>" alt="" width="195px" height="195px"></a>

            <?php
            }
            ?>

          </div>
        </div>
      </div>
      <div class="section-container" id="playSection">
        <div class="container">
          <div class="section-title d-flex gap-3 my-3">
            <img src="assets/icon-game.svg" alt=""/>
            <h2>Train</h2>
            <span class="subtitle">Lifestyle & Fitness</span>
          </div>
          <div class="intro-cat">Live a balanced and healthy life with our dedicated <strong>lifestyle and fitness</strong> section. Discover <strong>wellness tips</strong>, personalised <strong>exercise routines</strong> and <strong>healthy recipes</strong> to help you achieve your health and wellness goals. From relaxing yoga to high-intensity workouts, we're here to support you on your journey to a more active and healthy life.</div>
          <div class="cards-container">

            <?php
            for ($i = 0; $i < 6; $i++) {
            ?>

              <a class="gameIcon <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? "noLogin" : "" ?>" <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? '' : "href=index.php?main=fitness&page=single&section=health-fitness-videos&item=" . $train[$i]->id ?>><img loading="lazy" src="<?= STORAGE_URL . $train[$i]->image ?>" alt="" width="195px" height="195px"></a>

            <?php
            }
            ?>

          </div>
        </div>
      </div>
      <div class="section-container" id="playSection">
        <div class="container">
          <div class="section-title d-flex gap-3 my-3">
            <img src="assets/icon-learn.svg" alt=""/>
            <h2>Learn</h2>
            <span class="subtitle">Courses & tutorials</span>
          </div>
          <div class="intro-cat">At Moviplex.co, knowledge is at your fingertips. Explore our learning section, where you will find a variety of <strong>courses</strong> and <strong>tutorials</strong> on <strong>a wide range of topics</strong>. From foreign languages to advanced technological skills, we have everything you need to expand your horizons and develop new skills that will help you grow personally and professionally.</div>
          <div class="cards-container">

            <?php
            for ($i = 0; $i < 6; $i++) {
            ?>

              <a class="gameIcon <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? "noLogin" : "" ?>" <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? '' : "href=index.php?main=learn&page=single&section=education-apps&item=" . $learn[$i]->id ?>><img loading="lazy" src="<?= STORAGE_URL . $learn[$i]->image ?>" alt="" width="195px" height="195px"></a>

            <?php
            }
            ?>

          </div>
        </div>
      </div>
      <div class="section-container" id="playSection">
        <div class="container">
          <div class="section-title d-flex gap-3 my-3">
            <img src="assets/icon-enjoy.svg" alt=""/>
            <h2>Enjoy</h2>
            <span class="subtitle">Audios, podcasts & music</span>
          </div>
          <div class="intro-cat">Relax and immerse yourself in an ocean of <strong>limitless entertainment</strong>. From <strong>games, articles, podcasts</strong>, videos to exclusive images, Moviplex.co gives you access to a world of exciting and varied content. What are you waiting for to explore new stories and discover your next obsessions.</div>
          <div class="cards-container">

            <?php
            for ($i = 0; $i < 6; $i++) {
            ?>

              <a class="gameIcon <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? "noLogin" : "" ?>" <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? '' : "href=index.php?main=enjoy&page=single&section=animal-videos&item=" . $enjoy[$i]->id ?>><img loading="lazy" src="<?= STORAGE_URL . $enjoy[$i]->image ?>" alt="" width="195px" height="195px"></a>

            <?php
            }
            ?>

          </div>
        </div>
      </div>
      <div id="exclusiveSection" class="section-container">
        <div class="d-flex justify-content-center flex-column">
          <h2 class="exclusives-title">Our Exclusives</h2>
          <div class="section-container">
            <div class="card">
              <div class="card-container <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "noLogin" : "" ?>">

                <?php
                for ($i = 0; $i < 6; $i++) {
                ?>

                  <img loading="lazy" src="<?= STORAGE_URL . $enjoy[$i]->image; ?>" alt="game" width="198px" height="198px" />

                <?php
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-sections">
        <div id="topArticlesSection">
          <div class="d-flex justify-content-center flex-column">
            <div class="topArticlesTitle d-flex justify-content-between align-items-center">
              <h2>Top Articles</h2>
            </div>
            <div class="container d-flex gap-4 justify-content-center mt-5 articles-frame">

              <?php
              for ($i = 0; $i < 4; $i++) {
              ?>

                <a <?= ((!isset($_SESSION["login"]) || !$_SESSION["login"])) ? '' : "href=index.php?main=learn&page=single&section=most-read-articles&item=" . $articlesTop[$i]->id ?> class="article-card <?= (!isset($_SESSION["login"]) || !$_SESSION["login"]) ? "noLogin" : "" ?>">
                  <picture>
                    <img src="<?= STORAGE_URL . $articlesTop[$i]->image ?>" alt="<?= $articlesTop[$i]->title ?>" />
                  </picture>
                  <div class="article-content p-4">
                    <h5><?= $articlesTop[$i]->title ?></h5>
                    <div class="excerp">
                      <p><?= $articlesTop[$i]->excerpt ?></p>
                    </div>
                  </div>
                </a>

              <?php
              }
              ?>

            </div>
          </div>
        </div>
      </div>
      <div id="logoSection" class="section-container">
        <div class="carousel">
          <img src="./assets/logo-marvel.png" alt="">
          <img src="./assets/logo-20th.png" alt="">
          <img src="./assets/logo-miramax.png" alt="">
          <img src="./assets/logo-disney.png" alt="">
          <img src="./assets/logo-universal.png" alt="">
          <img src="./assets/logo-columbia.png" alt="">
        </div>
      </div>
    </diV>
</main>