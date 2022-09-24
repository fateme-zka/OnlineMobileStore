<?php
// get 10 first products of product table
$ten_first_products = array_slice($all_products, 0, 10);
shuffle($ten_first_products);
?>


<!-- New Phones -->
<section id="new-phones">
    <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr/>

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($ten_first_products as $item) { ?>
                <div class="item py-2 bg-light">
                    <div class="product font-poppins">
                        <a href="product.php?item_id=<?php echo $item['item_id']; ?>"
                        ><img
                                    src="<?php echo $item['item_image'] ?? './assets/products/default.png'; ?>"
                                    alt="product<?php echo $item['item_id'] ?? '1'; ?>"
                                    class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? 'Unknown'; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price'] ?? '0'; ?></span>
                            </div>
                            <form method="post">
                                <!--<input type="hidden" name="user_id" value="">-->
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1; ?>">
                                <?php // if item is not in cart items
                                if (!in_array($item['item_id'], $cart_items ?? [])) { ?>
                                    <button type="submit" name="add_to_cart_submit"
                                            class="btn btn-secondary font-size-14">
                                        Add to Cart
                                    </button>
                                <?php } else {  // else means item_id exists in cart items?>
                                    <button type="submit" disabled
                                            class="btn btn-success font-size-14">
                                        Added
                                    </button>
                                <?php } //end if ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } // closing foreach of items?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<!-- !New Phones -->