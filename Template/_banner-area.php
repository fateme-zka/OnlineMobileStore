<!-- Banner Owl-Carousel  -->
<section id="banner-area">
    <div class="owl-carousel owl-theme">
        <?php
        for ($x = 1; $x <= 3; $x++) { ?>
        <div class="item slider">
            <img src="./assets/slider<?php echo $x; ?>.jpg" alt="slider<?php echo $x; ?>"/>
            <a href="products.php" class="see-products-text">See all products</a>
        </div>
        <?php } ?>
    </div>
</section>
<!-- End Banner Ow-Carousel  -->