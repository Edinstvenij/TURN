<?php
$products = [
  'filter' => [
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
      'href' => 'product-page.html',
      'srcset' => 'img/7-all-product.webp',
      'type' => 'image/webp',
      'src' => 'img/7-all-product.png',
      'alt' => 'table'
    ],
  ]
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
  <link rel="stylesheet" href="css/style.min.css">
  <title>FURN products</title>
</head>

<body>
  <header class="header-all-product">
    <div class="container">
      <div class="row row-jcsb row-ai-center">
        <div class="wrapper-img wrapper-header-all-product-logo">
          <a href="/"><img src="img/mini-logo.svg" alt=""></a>
        </div>
        <nav class="catalog">
          <ul class="catalog__ul">
            <?php for ($i = 0, $count = count($products['filter']); $i < $count; $i++) : ?>
              <li class="catalog__li" data-filter="<? echo $products['filter'][$i]; ?>"><? echo $products['filter'][$i] ?></li>
            <?php endfor ?>
          </ul>
          <span class="header__open-close header-all-product__nav-open"></span>
        </nav>
      </div>
    </div>
    <!-- block navigation -->
    <div class="header__nav-overlay"></div>
    <nav class="header__nav header-all-product__nav">
      <div class="header__nav-close header__open-close"></div>
      <ul>
        <li class="header__nav-li"><a href="all-product.html">Shop</a></li>
        <li class="header__nav-li"><a href="designer.html">Designer</a></li>
        <li class="header__nav-li"><a href="delivery.html">Delivery</a></li>
        <li class="header__nav-li"><a href="#">Catalog</a></li>
      </ul>
    </nav> <!-- END block navigation -->
  </header>
  <section class="product-all-product">
    <div class="container">
      <div class="grid">
        <div class="grid__body">
          <?php for ($i = 0, $count = count($products['product']); $i < $count; $i++) : ?>
            <div class="grid__item <?php echo $products['product'][$i]['filter'] ?>">
              <p class="grid__item-name"><?php echo $products['product'][$i]['name'] ?></p>
              <div class="wrapper-img wrapper-img-products">
                <a href="<?php echo $products['product'][$i]['href'] ?>">
                  <picture>
                    <source srcset="<?php echo $products['product'][$i]['srcset'] ?>" type="image/webp">
                    <img src="<?php echo $products['product'][$i]['src'] ?>" alt="<?php echo $products['product'][$i]['alt'] ?>">
                  </picture>
                </a>
              </div>
            </div>
          <?php endfor ?>
        </div>
      </div>
    </div>
  </section>
  <script src="js/jquery.js"></script>
  <script src="js/main.js"></script>
</body>

</html>