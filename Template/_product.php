<?php
// get product by id
$item = $product->getADataById($_GET['item_id'] ?? 1, "product");

// if method is post
if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_SESSION['user_id'])) {
    header('location:login.php');
} else if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['user_id'])) {
    if (isset($_POST['add_to_cart_submit'])) {
        // insert mobile to cart table
        $user_id = $_SESSION['user_id'];
        $cart->addToCart($user_id, $_POST['item_id']);
    }
}


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $all_cart_products = $cart->getDataFromCartByUserId($user_id);
} else {
    $all_cart_products = [];
}
$cart_items = $cart->getUserCartItemIds($all_cart_products);
?>

<!--   Product  -->
<section id="product" class="py-3">
    <div class="container">
        <div class="row product-img-info-row">
            <div class="col-sm-6">
                <img
                        src="<?php echo $item['item_image'] ?? './assets/products/default.png'; ?>"
                        alt="product<?php echo $item['item_id'] ?? '1'; ?>"
                        class="img-fluid"
                />
                <div class="form-row d-flex pt-4 font-size-16 font-poppins">
                    <div class="col mx-1">
                        <form method="post">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1; ?>">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-poppins font-size-28"><?php echo $item['item_name'] ?? 'Unknown'; ?></h5>
                <small class="my-2">by <?php echo $item['item_brand'] ?? 'Unknown'; ?></small>
                <div class="d-flex my-1">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                </div>
                <hr class="m-0"/>

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-poppins font-size-20">
                        <td>Price:</td>
                        <td class="font-size-20 text-danger px-2">
                            $<span><?php echo $item['item_price'] ?? '0'; ?></span>
                        </td>
                    </tr>
                </table>
                <!---    end product price       -->

                <!--    policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mx-2">
                            <div class="font-size-20 my-2 color-second">
                      <span
                              class="fas fa-retweet border p-3 rounded-pill"
                      ></span>
                            </div>
                            <a href="#" class="font-rale font-size-12"
                            >10 Days <br/>
                                Replacement</a
                            >
                        </div>
                        <div class="return text-center mx-2">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12"
                            >Daily Tuition <br/>Deliverd</a
                            >
                        </div>
                        <div class="return text-center mx-2">
                            <div class="font-size-20 my-2 color-second">
                      <span
                              class="fas fa-check-double border p-3 rounded-pill"
                      ></span>
                            </div>
                            <a href="#" class="font-rale font-size-12"
                            >1 Year <br/>Warranty</a
                            >
                        </div>
                    </div>
                </div>
                <!--    end policy -->
                <hr/>

                <div class="d-flex flex-column">
                    <div class="col-6">
                        <form method="post">
                            <!-- <input type="hidden" name="user_id" value="">-->
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1; ?>">
                            <?php // if item is not in cart items
                            if (in_array($item['item_id'], $cart_items ?? [])) { ?>
                                <button type="submit" disabled
                                        class="btn btn-secondary form-control">
                                    Added
                                </button>
                            <?php } else {  // else means item_id exists in cart items?>
                                <button type="submit" name="add_to_cart_submit"
                                        class="btn btn-success form-control">
                                    Add to Cart
                                </button>
                            <?php } //end if ?>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-12 my-5">
                <h6 class="font-rubik font-size-20">Description:</h6>
                <hr/>
                <p class="font-rubik font-size-16">
                    <?php echo $item['item_description'] ?? 'description'; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!--   End Product  -->