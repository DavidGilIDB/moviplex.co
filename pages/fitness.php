<?php

$type = $_GET["section"] ?? "apps";



$slug = $_GET["slug"] ?? "beauty-apps";


$section = MOIRA . $slug;

if ($slug == "exclusive") {
  $type = "articles";
}

$items = getSection($section, "en", $type);


?>

<div class="header-title header-green">
  <h1 class="title-legals">Fitness</h1>
</div>

<div class="container py-2">
  <?php
  if ($type == "apps") {
  ?>
    <div class="row py-2 justify-content-center overflow-auto">
      <div class="categories" role="group" aria-label="Basic example">
        <div class="categories-buttons"><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=beauty-apps&section=apps"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart ">
              <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
            </svg>Beauty</a><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=health-fitness-apps&section=apps"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-apple ">
              <path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"></path>
              <path d="M10 2c1 .5 2 2 2 5"></path>
            </svg>Health &amp; Fitness</a></div>
      </div>
    </div>
  <?php
  } else if ($type == "videos") { ?>

    <div class="row py-2 justify-content-center overflow-auto">
      <div class="categories" role="group" aria-label="Basic example">
        <div class="categories-buttons"><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=health-fitness-videos&section=videos"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-apple ">
              <path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"></path>
              <path d="M10 2c1 .5 2 2 2 5"></path>
            </svg>Health &amp; Fitness</a><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=cardio&section=videos"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse ">
              <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
              <path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"></path>
            </svg>Cardio</a><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=stretching-and-warmup-exercises&section=videos"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-person-standing ">
              <circle cx="12" cy="5" r="1"></circle>
              <path d="m9 20 3-6 3 6"></path>
              <path d="m6 8 6 2 6-2"></path>
              <path d="M12 10v4"></path>
            </svg>Streching</a><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=lower-back-arms-and-legs-exercises&section=videos"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dumbbell ">
              <path d="m6.5 6.5 11 11"></path>
              <path d="m21 21-1-1"></path>
              <path d="m3 3 1 1"></path>
              <path d="m18 22 4-4"></path>
              <path d="m2 6 4-4"></path>
              <path d="m3 10 7-7"></path>
              <path d="m14 21 7-7"></path>
            </svg>Lower Back</a><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=meditation&section=videos"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-leaf ">
              <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
              <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
            </svg>Meditation</a><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=full-body&section=videos"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-person-standing ">
              <circle cx="12" cy="5" r="1"></circle>
              <path d="m9 20 3-6 3 6"></path>
              <path d="m6 8 6 2 6-2"></path>
              <path d="M12 10v4"></path>
            </svg>Full Body</a><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=abs-and-chest-exercises&section=videos"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dumbbell ">
              <path d="m6.5 6.5 11 11"></path>
              <path d="m21 21-1-1"></path>
              <path d="m3 3 1 1"></path>
              <path d="m18 22 4-4"></path>
              <path d="m2 6 4-4"></path>
              <path d="m3 10 7-7"></path>
              <path d="m14 21 7-7"></path>
            </svg>Abs</a></div>
      </div>
    </div>
  <?php
  } else if ($type == "images") { ?>
    <div class="categories-buttons"><a class="btn btn-secondary green tag-icon  " href="index.php?page=fitness&slug=health-fitness-images&section=images"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-apple ">
          <path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"></path>
          <path d="M10 2c1 .5 2 2 2 5"></path>
        </svg>Health &amp; Fitness</a><a class="btn btn-secondary green tag-icon  " href="/fitness/gallery/moira-lifestyle-images"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-salad ">
          <path d="M7 21h10"></path>
          <path d="M12 21a9 9 0 0 0 9-9H3a9 9 0 0 0 9 9Z"></path>
          <path d="M11.38 12a2.4 2.4 0 0 1-.4-4.77 2.4 2.4 0 0 1 3.2-2.77 2.4 2.4 0 0 1 3.47-.63 2.4 2.4 0 0 1 3.37 3.37 2.4 2.4 0 0 1-1.1 3.7 2.51 2.51 0 0 1 .03 1.1"></path>
          <path d="m13 12 4-4"></path>
          <path d="M10.9 7.25A3.99 3.99 0 0 0 4 10c0 .73.2 1.41.54 2"></path>
        </svg>Lifestyle</a></div>
  <?php
  }
  ?>
  <!-- Map of cards depending on the category -->
  <div class="row">

    <?php
    if ($type != "images") {
      foreach ($items[0] as $item) {
    ?>
        <div class="col-lg-3 col-md-4 col-12 my-3 col">
          <div class="card">
            <div class="card-header">

              <a href="index.php?main=fitness&page=single&section=<?= $slug ?>&item=<?= $item->id ?>"><img loading="lazy" src="<?= STORAGEURL . $item->image ?>" alt="game" /></a>

              <div class="border-btn"><a class="card-btn green-btn" href="index.php?main=fitness&page=single&section=<?= $slug ?>&item=<?= $item->id ?>"><?= ($type == "games" || $slug == "exclusive") ? "Play" : "Read" ?></a></div>
            </div>
            <div class="card-body">
              <h3 class="card-title"><?= (isset($item->name)) ? $item->name : $item->title ?></h3>
              <p class="card-text">
                <?= (isset($item->description)) ? $item->description : $item->meta_description ?>
              </p>
              <div class="card-info">
                <div class="tag-name">
                  <p class="miqro">
                    <img
                      src="data:image/svg+xml,%3csvg%20width='30'%20height='30'%20viewBox='0%200%2030%2030'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='15'%20cy='15'%20r='15'%20fill='%2300A7E5'/%3e%3cpath%20d='M9.17524%2022.1853C8.84168%2022.1859%208.50954%2022.1419%208.18755%2022.0544C7.22107%2021.7774%206.4011%2021.1309%205.90358%2020.2534C5.40606%2019.3759%205.27061%2018.3374%205.52629%2017.3608L7.12442%2011.268C7.24888%2010.7749%207.47014%2010.3118%207.7752%209.90585C8.08027%209.49988%208.46299%209.15926%208.90088%208.904C9.32725%208.65584%209.79838%208.49517%2010.287%208.43128C10.7756%208.36739%2011.272%208.40157%2011.7473%208.53182C12.2527%208.67282%2012.7233%208.91778%2013.1295%209.25117C13.5356%209.58456%2013.8684%209.99911%2014.1068%2010.4685H15.8901C16.1274%209.99836%2016.4599%209.5832%2016.8662%209.24969C17.2725%208.91617%2017.7437%208.67165%2018.2496%208.53182C18.7249%208.40157%2019.2213%208.36739%2019.7099%208.43128C20.1985%208.49517%2020.6697%208.65584%2021.096%208.904C21.5318%209.15861%2021.9131%209.49736%2022.218%209.90073C22.5229%2010.3041%2022.7453%2010.7641%2022.8725%2011.2543L24.4706%2017.3608C24.7301%2018.3403%2024.5957%2019.3831%2024.0965%2020.2639C23.5973%2021.1447%2022.7733%2021.7928%2021.8025%2022.0682C21.3271%2022.1984%2020.8308%2022.2326%2020.3422%2022.1687C19.8536%2022.1048%2019.3824%2021.9441%2018.956%2021.696C18.5196%2021.4423%2018.1377%2021.1038%2017.8327%2020.7003C17.5277%2020.2968%2017.3057%2019.8363%2017.1796%2019.3457L17.0561%2018.7392H12.9408L12.783%2019.332C12.6569%2019.8225%2012.4349%2020.283%2012.1299%2020.6865C11.8249%2021.09%2011.443%2021.4285%2011.0066%2021.6822C10.4493%2022.0052%209.81855%2022.1785%209.17524%2022.1853ZM10.7665%209.77931C10.3526%209.78072%209.94612%209.88996%209.58677%2010.0964C9.02355%2010.4284%208.61417%2010.9711%208.44819%2011.6058L6.85006%2017.6985C6.68283%2018.3262%206.76733%2018.9948%207.08541%2019.5605C7.40348%2020.1263%207.92973%2020.5441%208.55107%2020.7242C8.85116%2020.8064%209.16449%2020.8281%209.47295%2020.7879C9.7814%2020.7476%2010.0789%2020.6463%2010.3481%2020.4899C10.6284%2020.3272%2010.8736%2020.1099%2011.0691%2019.8507C11.2646%2019.5915%2011.4066%2019.2956%2011.4867%2018.9804L11.9119%2017.3608H18.085L18.5034%2018.9804C18.5849%2019.295%2018.7274%2019.5903%2018.9228%2019.8493C19.1182%2020.1083%2019.3626%2020.326%2019.6419%2020.4899C19.9125%2020.6462%2020.2111%2020.7474%2020.5207%2020.7876C20.8302%2020.8278%2021.1446%2020.8062%2021.4458%2020.7242C22.0679%2020.5458%2022.5948%2020.1279%2022.9121%2019.5614C23.2293%2018.9948%2023.3112%2018.3254%2023.14%2017.6985L21.5419%2011.6058C21.4622%2011.2913%2021.3212%2010.996%2021.1269%2010.7368C20.9326%2010.4777%2020.6889%2010.26%2020.4101%2010.0964C20.1396%209.94001%2019.841%209.83884%2019.5314%209.79863C19.2219%209.75842%2018.9075%209.77996%2018.6062%209.86202C18.2337%209.96873%2017.8919%2010.1632%2017.6091%2010.4293C17.3264%2010.6954%2017.111%2011.0255%2016.9807%2011.3921L16.8161%2011.847H13.1808L13.0162%2011.3921C12.8848%2011.025%2012.6681%2010.6947%2012.3842%2010.4286C12.1003%2010.1625%2011.7574%209.96828%2011.3838%209.86202C11.1825%209.80748%2010.975%209.77967%2010.7665%209.77931Z'%20fill='white'/%3e%3cpath%20d='M10.8831%2015.2931C10.6118%2015.2931%2010.3466%2015.2123%2010.121%2015.0608C9.8954%2014.9093%209.71957%2014.6941%209.61575%2014.4422C9.51192%2014.1903%209.48475%2013.9131%209.53768%2013.6458C9.59061%2013.3784%209.72126%2013.1327%209.91311%2012.94C10.105%2012.7472%2010.3494%2012.6159%2010.6155%2012.5627C10.8816%2012.5095%2011.1574%2012.5368%2011.4081%2012.6412C11.6587%2012.7455%2011.873%2012.9222%2012.0237%2013.1489C12.1744%2013.3755%2012.2549%2013.642%2012.2549%2013.9147C12.2549%2014.2803%2012.1104%2014.6309%2011.8531%2014.8894C11.5958%2015.1479%2011.2469%2015.2931%2010.8831%2015.2931Z'%20fill='white'/%3e%3cpath%20d='M19.1138%2013.2254C19.4926%2013.2254%2019.7997%2012.9168%2019.7997%2012.5362C19.7997%2012.1555%2019.4926%2011.847%2019.1138%2011.847C18.735%2011.847%2018.4279%2012.1555%2018.4279%2012.5362C18.4279%2012.9168%2018.735%2013.2254%2019.1138%2013.2254Z'%20fill='white'/%3e%3cpath%20d='M19.1138%2015.9823C19.4926%2015.9823%2019.7997%2015.6737%2019.7997%2015.2931C19.7997%2014.9124%2019.4926%2014.6039%2019.1138%2014.6039C18.735%2014.6039%2018.4279%2014.9124%2018.4279%2015.2931C18.4279%2015.6737%2018.735%2015.9823%2019.1138%2015.9823Z'%20fill='white'/%3e%3cpath%20d='M17.742%2014.6039C18.1208%2014.6039%2018.4279%2014.2953%2018.4279%2013.9147C18.4279%2013.534%2018.1208%2013.2254%2017.742%2013.2254C17.3632%2013.2254%2017.0561%2013.534%2017.0561%2013.9147C17.0561%2014.2953%2017.3632%2014.6039%2017.742%2014.6039Z'%20fill='white'/%3e%3cpath%20d='M20.4856%2014.6039C20.8644%2014.6039%2021.1715%2014.2953%2021.1715%2013.9147C21.1715%2013.534%2020.8644%2013.2254%2020.4856%2013.2254C20.1068%2013.2254%2019.7997%2013.534%2019.7997%2013.9147C19.7997%2014.2953%2020.1068%2014.6039%2020.4856%2014.6039Z'%20fill='white'/%3e%3c/svg%3e"
                      alt="Section Image" /><?= $items[1] ?>
                  </p>
                </div>
                <div class="size-file">
                  <img
                    src="data:image/svg+xml,%3csvg%20width='8'%20height='8'%20viewBox='0%200%208%208'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M4%206.69976L5.93994%207.92746C6.29521%208.15245%206.72994%207.81985%206.63645%207.3992L6.12225%205.09054L7.83781%203.53513C8.15101%203.25144%207.98272%202.71341%207.57136%202.67917L5.31355%202.47863L4.43006%200.297142C4.27112%20-0.0990473%203.72888%20-0.0990473%203.56994%200.297142L2.68645%202.47374L0.428637%202.67428C0.017276%202.70852%20-0.151008%203.24655%200.162187%203.53024L1.87775%205.08565L1.36355%207.39431C1.27006%207.81496%201.70479%208.14756%202.06006%207.92257L4%206.69976Z'%20fill='%23FFA331'/%3e%3c/svg%3e"
                    alt="star review" />
                  <p class="miqro">4.5</p>
                </div>
                <div class="review">
                  <img
                    src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='16'%20height='16'%20viewBox='0%200%2016%2016'%20fill='none'%3e%3cpath%20d='M6.79512%2016C6.58295%2016%206.44151%2015.9304%206.30006%2015.7913L0.430068%2010.0174C0.00573106%209.6%20-0.135714%209.04348%200.147177%208.48696C0.430068%207.93044%200.854405%207.65217%201.42019%207.65217H3.96621C4.31982%203.33913%207.99741%200%2012.4529%200H15.2819C15.6355%200%2015.9184%200.278261%2015.9891%200.626087C16.0598%200.973913%2015.7769%201.32174%2015.4233%201.3913H15.2819C12.1701%202.08696%209.97765%204.5913%209.62404%207.65217H12.0993C12.6651%207.65217%2013.1602%208%2013.3723%208.48696C13.5845%208.97391%2013.4431%209.6%2013.0895%2010.0174L7.21946%2015.7913C7.14874%2015.9304%206.93657%2016%206.79512%2016Z'%20fill='%23FFA331'/%3e%3c/svg%3e"
                    alt="star review" />
                  <p class="miqro">4514</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      <?php
      }
    } else { ?>
      <div class="image-container">
        <?php
        foreach ($items[0] as $item) {
        ?>
          <img src="<?= STORAGEURL . $item->image ?>" alt="game">
        <?php
        }
        ?>
      </div>
    <?php
    }
    ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>