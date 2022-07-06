<?php
$products = [
  'filters' => [
    'all',
    'table',
    'sitting'
  ],
  'product' => [
    [
      'filter' => 'sitting',
      'name' => 'prowling lounge chair <br> olive',
      'href' => 'product-armchair-olive.html',
      'srcset' => 'img/1-all-product.webp',
      'type' => 'image/webp',
      'src' => 'img/1-all-product.png',
      'alt' => 'sitting'
    ],
    [
      'filter' => 'sitting',
      'name' => 'prowling lounge chair <br> grape',
      'href' => 'product-armchair-grape.html',
      'srcset' => 'img/2-all-product.webp',
      'type' => 'image/webp',
      'src' => 'img/2-all-product.png',
      'alt' => 'sitting'
    ],
    [
      'filter' => 'sitting',
      'name' => 'prowling lounge chair <br> mushroom',
      'href' => 'product-armchair-mushroom.html',
      'srcset' => 'img/3-all-product.webp',
      'type' => 'image/webp',
      'src' => 'img/3-all-product.png',
      'alt' => 'sitting'
    ],
    [
      'filter' => 'sitting',
      'name' => 'lurking pouf <br> olive',
      'href' => 'product-puff-olive.html',
      'srcset' => 'img/4-all-product.webp',
      'type' => 'image/webp',
      'src' => 'img/4-all-product.png',
      'alt' => 'sitting'
    ],
    [
      'filter' => 'sitting',
      'name' => 'lurking pouf <br> grape',
      'href' => 'product-puff-grape.html',
      'srcset' => 'img/5-all-product.webp',
      'type' => 'image/webp',
      'src' => 'img/5-all-product.png',
      'alt' => 'sitting'
    ],
    [
      'filter' => 'sitting',
      'name' => 'lurking pouf <br> mushroom',
      'href' => 'product-puff-mushroom.html',
      'srcset' => 'img/6-all-product.webp',
      'type' => 'image/webp',
      'src' => 'img/6-all-product.png',
      'alt' => 'sitting'
    ],
    [
      'filter' => 'table',
      'name' => 'liquid table',
      'href' => 'product-page.php',
      'srcset' => 'img/7-all-product.webp',
      'type' => 'image/webp',
      'src' => 'img/7-all-product.png',
      'alt' => 'table'
    ],
  ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/swiper.css" />
  <link rel="stylesheet" href="css/style.min.css">
  <title><?= $title ?></title>
</head>

<body>
  <header class="header-all-product 
  <?php if ($_SERVER['REQUEST_URI'] == '/product-page.php') {
    echo 'header-product-preview';
  } ?> ">
    <div class="container">
      <div class="row row-jcsb row-ai-center">
        <div class="wrapper-img wrapper-header-product-page-logo">
          <a href="/"><img src="img/mini-logo.svg" alt=""></a>
        </div>
        <?php if ($_SERVER['REQUEST_URI'] == '/all-product.php') { ?>
          <nav class="catalog">
            <ul class="catalog__ul">
              <?php for ($i = 0, $count = count($products['filters']); $i < $count; $i++) : ?>
                <li class="catalog__li" data-filter="<? echo $products['filters'][$i] ?>"><? echo $products['filters'][$i] ?></li>
              <?php endfor ?>
            </ul>
            <span class="header__open-close header-all-product__nav-open"></span>
          </nav>
        <?php } elseif ($_SERVER['REQUEST_URI'] == '/product-page.php') { ?>

          <nav class="catalog">
            <ul class="catalog__ul">
              <?php for ($i = 0, $count = count($products['filters']); $i < $count; $i++) : ?>
                <li class="catalog__li" data-filter="<? echo $products['filters'][$i] ?>"><a href="all-product.php"><? echo $products['filters'][$i] ?></a></li>
              <?php endfor ?>
            </ul>
            <span class="header__open-close header-all-product__nav-open"></span>
          </nav>

        <?php } else echo '<span class="header__open-close header-all-product__nav-open"></span>' ?>
      </div>
    </div>
    <!-- block navigation -->
    <?php require_once 'blocks/navigation.php' ?>
    <!-- END block navigation -->
  </header>