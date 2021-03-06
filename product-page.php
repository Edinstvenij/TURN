<!-- header -->
<?php
$title = 'FURN product';
require_once 'blocks/header.php'
?>
<!-- END header -->
<section class="product-preview-wrapper">
  <div class="product-preview">
    <!-- Slider main container -->
    <div class="swiper product-preview__slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper product-preview__slider-wrapper">
        <!-- Slides -->
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/1-product-noize-table.webp" type="image/webp">
              <img src="img/product/1-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/2-product-noize-table.webp" type="image/webp">
              <img src="img/product/2-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/3-product-noize-table.webp" type="image/webp">
              <img src="img/product/3-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/4-product-noize-table.webp" type="image/webp">
              <img src="img/product/4-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/5-product-noize-table.webp" type="image/webp">
              <img src="img/product/5-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
      </div>
      <!-- If we need navigation buttons -->
      <div class="product-preview__slider-row-button">
        <div class="product-preview__slider-button-prev">
          <div class="product-preview__slider-wrapper-button">
            <img src="img/product/arrow-left.svg" alt="">
          </div>
        </div>
        <div class="product-preview__slider-button-next">
          <div class="product-preview__slider-wrapper-button">
            <img src="img/product/arrow-right.svg" alt="">
          </div>
        </div>
      </div>
      <!-- If we need titles and order buttons -->
      <div class="col product-preview__slider-col">
        <div class="product-preview__slider-col-wrapper">
          <h2 class="product-preview__slider-product-name">liquid table</h2>
          <button class="product-preview__slider-product-order-button">Check price</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="product-info">
  <div class="product-info__wrapper">
    <div class="row product-info__row">
      <div class="col product-info__info-col">
        <h2 class="product-info__info-name">PRODUCT INFORMATION</h2>
        <ul class="product-info__info-ul">
          <li class="product-info__info-li">SIZE: 800??600 cm</li>
          <li class="product-info__info-li">BASE COLOR: grey metall</li>
          <li class="product-info__info-li">BASE MATERIAL: metall</li>
          <li class="product-info__info-li">HEIGHT: 610 cm</li>
          <li class="product-info__info-li">wight: 600 cm</li>
          <li class="product-info__info-li">diametr: 300 cm</li>
        </ul>
        <a class="product-info__info-name" href="img/download/LIQUID_TABLE_3D_2D.rar">DOWNLOAD 2D 3D </a>
      </div>
      <div class="product-info__wrapper-row-img">
        <div class="product-info__wrapper-img ">
          <picture>
            <source srcset="img/product/1-info-product-noize-table.webp" type="image/webp">
            <img src="img/product/1-info-product-noize-table.png" alt="">
          </picture>
        </div>
        <div class="product-info__wrapper-img">
          <picture>
            <source srcset="img/product/2-info-product-noize-table.webp" type="image/webp">
            <img src="img/product/2-info-product-noize-table.png" alt="">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>
<article class="popup-order">
  <div class="popup-order__row">
    <div class="popup-order__wrapper">
      <form class="popup-order__form">
        <div class="popup-order__form-item">
          <input type="hidden" name="form-name" value="Check Price">
          <input class="popup-order__form-input" id="name" type="text" name="name" placeholder="YOUR NAME" required>
        </div>
        <div class="popup-order__form-item">
          <input class="popup-order__form-input" id="email" type="email" name="email" placeholder="YOUR EMAIL" required>
        </div>
        <div class="popup-order__form-item">
          <input class="popup-order__form-input" id="tel" type="tel" name="tel" placeholder="YOUR PHONE" required>
        </div>
        <div class="popup-order__form-item">
          <input class="popup-order__form-input" id="country" type="text" name="country" placeholder="COUNTRY OF DELIVERY" required>
        </div>
        <div class="popup-order__form-item">
          <input class="popup-order__form-input" id="address" type="text" name="address" placeholder="Address of delivery" required>
        </div>
        <div class="popup-order__form-item">
          <textarea class="popup-order__form-input" name="massege" rows="4" placeholder="YOUR COMMENT"></textarea>
        </div>


        <button class="popup-order__form-btn" type="submit">SEND</button>
      </form>
    </div>
    <div class="header__nav-overlay"></div>
  </div>
</article>
<script src="js/swiper.js"></script>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</body>

</html>