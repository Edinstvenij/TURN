<?php
$slideSwiper = [
  [
    'max_srcset' => 'img/header-1-swiper-mobaile.webp',
    'max_type' => 'image/webp',
    'min_srcset' => 'img/header-1-swiper.webp',
    'min_type' => 'image/webp',
    'src' => 'img/header-1-swiper.jpg'
  ],
  [
    'max_srcset' => 'img/header-2-swiper-mobaile.webp',
    'max_type' => 'image/webp',
    'min_srcset' => 'img/header-2-swiper.webp',
    'min_type' => 'image/webp',
    'src' => 'img/header-2-swiper.png'
  ],
  [
    'max_srcset' => 'img/header-3-swiper-mobaile.webp',
    'max_type' => 'image/webp',
    'min_srcset' => 'img/header-3-swiper.webp',
    'min_type' => 'image/webp',
    'src' => 'img/header-3-swiper.jpg'
  ],
  [
    'max_srcset' => 'img/header-4-swiper-mobaile.webp',
    'max_type' => 'image/webp',
    'min_srcset' => 'img/header-4-swiper.webp',
    'min_type' => 'image/webp',
    'src' => 'img/header-4-swiper.jpg'
  ],
  [
    'max_srcset' => 'img/header-5-swiper-mobaile.webp',
    'max_type' => 'image/webp',
    'min_srcset' => 'img/header-5-swiper.webp',
    'min_type' => 'image/webp',
    'src' => 'img/header-5-swiper.png'
  ],
];
?>


<!-- header -->
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/swiper.css" />
  <link rel="stylesheet" href="css/style.min.css">
  <title>FURN</title>
</head>

<body>
  <header id="top" class="header">
    <div class="header__wrapper">
      <section class="header__body">
        <div class="swiper slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper slider__wrapper">
            <!-- Slides -->
            <?php for ($i = 0, $count = count($slideSwiper); $i < $count; $i++) : ?>
              <div class="swiper-slide slider__slide">
                <div class="slider__wrapper-img">
                  <picture>
                    <source media="(max-width: 500px)" srcset="<? echo $slideSwiper[$i]['max_srcset'] ?>" type="<? echo $slideSwiper[$i]['max_type'] ?>">
                    <source media="(min-width: 501px)" srcset="<? echo $slideSwiper[$i]['min_srcset'] ?>" type="<? echo $slideSwiper[$i]['min_type'] ?>">
                    <img src="<? echo $slideSwiper[$i]['src'] ?>" alt="fon">
                  </picture>
                </div>
              </div>
            <?php endfor ?>
          </div>
        </div>
        <div class="row row-ai-center row-position-rel">
          <div class="header__logo wrapper-img wrapper-header-logo">
            <img src="img/logo.svg" alt="logo">
          </div>
          <p class="header__burger header__open-close"><a href="#top">MENU+</a></p>
        </div>
        <div class="header__marquee">
          <div>
            <p>HI, IT'S AN UKRAINIAN FURNITURE MANUFACTURE</p>
            <p>HI, IT'S AN UKRAINIAN FURNITURE MANUFACTURE</p>
            <p>HI, IT'S AN UKRAINIAN FURNITURE MANUFACTURE</p>
            <p>HI, IT'S AN UKRAINIAN FURNITURE MANUFACTURE</p>
          </div>
        </div>
      </section>
      <!-- block navigation -->
      <?php @include('navigation.php') ?>
      <!-- END block navigation -->
    </div>
  </header>
  <!-- header-END -->

  <?php @include('footer.php') ?>