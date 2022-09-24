<?php
// require Mysql connection class
require("database/DBController.php");

// require product class
require("database/Product.php");

// require cart class
require("database/Cart.php");

// require Blog class
require("database/Blog.php");

// require user class
require("database/User.php");

//--------------------------------------------------------

// create new DBController object to connect to database
$db = new DBController();

// Product new Object
$product = new Product($db);

// Cart new Object
$cart = new Cart($db);

// Blog new Object
$blog = new Blog($db);

// User new Object
$user = new User($db);