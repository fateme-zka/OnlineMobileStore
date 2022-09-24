<?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $all_cart_products = $cart->getDataFromCartByUserId($user_id);
} else {
    $all_cart_products = [];
}

$all_prices = [];

// if method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['delete_cart_item_submit'])) {
        // delete cart item from cart table
        $cart->deleteCartItemById($_POST['cart_id']);
    }
}

?>

<!-- Shopping cart section  -->
<section id="cart" class="py-3">
    <div class="container-fluid">
        <h5 class="font-poppins font-size-20">Shopping Cart</h5>


        <!--if shopping cart is Empty-->
        <?php if ($all_cart_products == []) { ?>
            <hr/>
            <div class="text-center py-3 mx-auto" style="max-width: 400px">
                <p class="font-size-26 font-poppins text-black-50">Shopping Cart is empty!</p>
                <img src="./assets/blog/empty_cart.png" alt="Empty cart" class="img-fluid">
            </div>
        <?php } else { ?>

            <div class="row d-flex flex-column">
                <div class="col-sm-10">
                    <!--  Items   -->
                    <!-- show all items in cart by foreach -->
                    <?php foreach ($all_cart_products as $cart_item):
                        $item = $product->getADataById($cart_item['item_id']);
                        $all_prices[] = $item['item_price'];
                        ?>
                        <div class="row border-top py-3 mt-3">
                            <div class="col-lg-2">
                                <a href="product.php?item_id=<?php echo $item['item_id']; ?>">
                                    <img
                                            src="<?php echo $item['item_image'] ?? './assets/products/default.png'; ?>"
                                            style="height: 120px"
                                            alt="cart<?php echo $item['item_id'] ?? '1'; ?>"
                                            class="img-fluid"
                                    />
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <h5 class="font-poppins font-size-20"><?php echo $item['item_name'] ?? 'Unknown'; ?></h5>
                                <small>by <?php echo $item['item_brand'] ?? 'Unknown'; ?></small>
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                </div>

                                <div class="qty d-flex my-3 mx-0">
                                    <div class="d-flex font-poppins">
                                        <button class="qty-up border bg-light"
                                                data-id="<?php echo $item['item_id'] ?? '0'; ?>">
                                            <i class="fas fa-angle-up"></i>
                                        </button>
                                        <input
                                                type="text"
                                                data-id="<?php echo $item['item_id'] ?? '0'; ?>"
                                                class="qty_input border px-2 bg-light"
                                                disabled
                                                value="1"
                                                placeholder="1"
                                        />
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>"
                                                class="qty-down border bg-light">
                                            <i class="fas fa-angle-down"></i>
                                        </button>
                                        <!--                                    <button class="mx-2 btn btn-danger">Delete</button>-->
                                        <form method="post">
                                            <input type="hidden" name="cart_id"
                                                   value="<?php echo $cart_item['cart_id']; ?>">
                                            <button type="submit" name="delete_cart_item_submit"
                                                    class="mx-2 btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                        <!--                                    <button class="save-later p-0 btn btn-primary">-->
                                        <!--                                        Save for Late-->
                                        <!--                                    </button>-->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 text-right">
                                <div class="font-size-20 text-danger font-poppins">
                                    $<span
                                            class="product_price"
                                            data-id="<?php echo $item['item_id'] ?? '0'; ?>"
                                    ><?php echo $item['item_price'] ?? '0'; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; // closing the cart foreach ?>
                    <!--  !Items   -->
                </div>


                <!-- Subtotal-->
                <div class="col-sm-10">
                    <div class="sub-total border text-center mt-2">
                        <div class="border-top py-4">
                            <h5 class="font-poppins font-size-20">
                                Subtotal (<?php echo isset($all_prices) ? count($all_prices) : 0; ?> item):&nbsp;
                                <span class="text-danger"
                                >$<span class="text-danger" id="subtotal-price">
                                    <?php echo isset($all_prices) ? $cart->getSum($all_prices) : 0; ?>
                                </span>
                    </span>
                            </h5>
                            <button type="submit" class="btn btn-success mt-3">
                                Proceed to Buy
                            </button>
                        </div>
                    </div>
                </div>
                <!-- !Subtotal -->
            </div>
        <?php } // end if ?>

    </div>
</section>
<!-- End Shopping cart section  -->