<!-- header -->
<!DOCTYPE html>
<html lang="en">

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
            <div class="swiper-slide slider__slide">
              <div class="slider__wrapper-img">
                <picture>
                  <source media="(max-width: 500px)" srcset="img/header-1-swiper-mobaile.webp" type="image/webp">
                  <source media="(min-width: 501px)" srcset="img/header-1-swiper.webp" type="image/webp">
                  <img src="img/header-1-swiper.jpg" alt="fon">
                </picture>
              </div>
            </div>
            <div class="swiper-slide slider__slide">
              <div class="slider__wrapper-img">
                <picture>
                  <source media="(max-width: 500px)" srcset="img/header-2-swiper-mobaile.webp" type="image/webp">
                  <source media="(min-width: 501px)" srcset="img/header-2-swiper.webp" type="image/webp">
                  <img src="img/header-2-swiper.png" alt="fon">
                </picture>
              </div>
            </div>
            <div class="swiper-slide slider__slide">
              <div class="slider__wrapper-img">
                <picture>
                  <source media="(max-width: 500px)" srcset="img/header-3-swiper-mobaile.webp" type="image/webp">
                  <source media="(min-width: 501px)" srcset="img/header-3-swiper.webp" type="image/webp">
                  <img src="img/header-3-swiper.jpg" alt="fon">
                </picture>
              </div>
            </div>
            <div class="swiper-slide slider__slide">
              <div class="slider__wrapper-img">
                <picture>
                  <source media="(max-width: 500px)" srcset="img/header-4-swiper-mobaile.webp" type="image/webp">
                  <source media="(min-width: 501px)" srcset="img/header-4-swiper.webp" type="image/webp">
                  <img src="img/header-4-swiper.jpg" alt="fon">
                </picture>
              </div>
            </div>
            <div class="swiper-slide slider__slide">
              <div class="slider__wrapper-img">
                <picture>
                  <source media="(max-width: 500px)" srcset="img/header-5-swiper-mobaile.webp" type="image/webp">
                  <source media="(min-width: 501px)" srcset="img/header-5-swiper.webp" type="image/webp">
                  <img src="img/header-5-swiper.png" alt="fon">
                </picture>
              </div>
            </div>
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
      <?php require_once 'blocks/navigation.php' ?>
      <!-- END block navigation -->
    </div>
  </header>
  <!-- header-END -->

  <footer class="footer">
    <div class="container container-fix">
      <div class="footer__wrapper">
        <div class="row row-jcsb">
          <div class="col">
            <h2 class="footer__col-name">Product</h2>
            <nav class="footer__col-nav">
              <ul>
                <li class="footer__col-li"><a href="#"><span>Virtual showroom</span></a></li>
                <li class="footer__col-li"><a href="#"><span>Catalog</span></a></li>
                <li class="footer__col-li"><a href="#"><span>Shiping</span></a></li>
                <li class="footer__col-li"><a href="#"><span>FAQ</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="col">
            <div class="row">
              <div class="wrapper-img wrapper-footer-logo">
                <img src="img/footer-logo.webp" alt="">
              </div>
              <div class="col">
                <nav class="footer__col-nav">
                  <ul>
                    <li class="footer__col-li"><a href="https://www.instagram.com/furn_manufacture/" target="_blank"><span>instagram</span></a></li>
                    <li class="footer__col-li"><a href="https://www.behance.net/furnmanufacture" target="_blank"><span>Behance</span></a></li>
                    <li class="footer__col-li"><a href="https://www.pinterest.com/fmanufacture"><span>Pinterest</span></a></li>
                    <li class="footer__col-li"><a href="#"><span>Whatsapp</span></a></li>
                    <li class="footer__col-li"><a href="#"><span>Telegram</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h2 class="footer__col-name">Contacts</h2>
            <nav class="footer__col-nav">
              <ul>
                <li class="footer__col-li">
                  <a href="mailto:furn.in.touch@gmail.com"><span>furn.in.touch@gmail.com</span></a>
                </li>
                <li class="footer__col-li"><a href="tel:+380994018527"><span>+380994018527</span></a></li>
                <li class="footer__col-li">Ukraine, Odessa</li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form class="form">
              <div class="row row-jcsb form-row">
                <div class="col form__col">
                  <input name="form-name" type="hidden" value="user contacts">
                  <label for="user-email" class="footer__col-name form__input-name">Your email</label>
                  <input class="form__input" id="user-email" type="email" name="email" placeholder="mail@example.com" required>
                </div>
                <div class="col">
                  <label for="user-name" class="footer__col-name form__input-name">Your name</label>
                  <input title="" class="form__input" id="user-name" type="text" name="name" placeholder="John Smith" minlength="2" maxlength="20" required>
                </div>
              </div>
              <button id="tg-form-btn" class="form__button" type="submit">SUBMIT</button>
            </form>
            <p class="form__info">
              Enter your e-mail to be the first to know about our new <br>
              products!
            </p>
          </div>
        </div>
        <p class="copyright">&#169 <?= date('Y') ?> Furn. All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- footer -->
  <?php require_once 'blocks/footer.php' ?>
  <!-- footer-END -->