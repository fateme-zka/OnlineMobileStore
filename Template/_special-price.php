<?php
// get all the products from database product table
$all_products = $product->getDataFromTable('product');
shuffle($all_products);
// get brands from all_products array
$brands = array_map(function ($pro) {
    return $pro['item_brand'];
}, $all_products);
// it will return the unique brands in brands array means it will remove the repetitions!
$unique_brand = array_unique($brands);
sort($unique_brand);


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


<!-- Special Price -->
<section id="special-price">
    <div class="container my-5">
        <h4 class="font-rubik font-size-28">All Products</h4>
        <h2 class="font-poppins font-size-20">[ filter what you want! ]</h2>
        <div
                id="filters"
                class="button-group text-right font-poppins font-size-16"
        >
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <!--BRANDS Foreach-->
            <?php foreach ($unique_brand as $brand) {
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
            } // closing brands foreach ?>
        </div>

        <div class="grid">
            <!--PRODUCTS Foreach-->
            <?php foreach ($all_products as $item) { ?>
                <div class="grid-item border rounded <?php echo $item['item_brand'] ?? ''; ?>">
                    <div class="item py-2" style="width: 200px">
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
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$<?php echo $item['item_price'] ?? '0'; ?></span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
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
                </div>
            <?php } // closing foreach of items?>

        </div>
    </div>
</section>
<!-- End Special Price -->
