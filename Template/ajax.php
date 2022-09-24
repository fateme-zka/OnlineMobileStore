<?php

// require Mysql connection class
require("../database/DBController.php");

// require product class
require("../database/Product.php");


// create new DBController object to connect to database
$db = new DBController();

// Product new Object
$product = new Product($db);


if (isset($_POST['itemid'])) {
    $p = $product->getADataById($_POST['itemid']);
    echo $p['item_price'];
}