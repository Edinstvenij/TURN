<!-- header -->
<?php
$title = 'Products';
require_once 'blocks/header_page.php';
?>
<!-- END header -->

<!-- main -->
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
<!-- END main -->

<!-- footer -->
<?php require_once('blocks/footer.php') ?>
<!-- END footer -->