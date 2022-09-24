<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mobile Store</title>

    <!-- Bootstrap CDN -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous"
    />

    <!-- Owl Carousel CDN -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />

    <!-- Fontawesome iconts -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />

    <!-- Custom Css file -->
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="./css/navbar-style.css"/>

    <?php
    session_start();
    // require php functions file
    require("functions.php");

    if (isset($_GET['logout'])) {
        unset($_SESSION['user_id']);
        session_destroy();
    }
    ?>

</head>
<body>

<?php
ob_start();
?>
<!--================================== BODY ==================================== -->

<!-- Start HEADER ----------------------------------------------->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-2 bg-light">
        <p class="address-nav font-poppins font-size-14 text-black-50 m-0">
            Iran, Tehran, Mobile Store
        </p>
        <div class="font-poppins font-size-14">
            <?php
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                $login_user = $user->getUserById($user_id); ?>
                <span class="px-3 text-dark"><?php echo $login_user['username']; ?></span>
                <a href="index.php?logout=<?php echo $user_id; ?>"
                   class="px-3 text-dark"
                   onclick="confirm('Are you sure you want to logout?!');"
                >Logout</a>
            <?php } else { // if $_SESSION is not set: ?>
                <a href="login.php" class="px-3 text-dark">Login</a>
                <a href="register.php" class="px-3 text-dark">Register</a>
            <?php } // end if ?>

        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar bg-dark">
        <div class="navbar__container">
            <a href="index.php" id="navbar__logo" title="main page">Mobile Store</a>
            <div class="navbar__toggle bg-dark" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu bg-dark">
                <li class="navbar__item">
                    <a href="index.php" class="navbar__link">Main Page</a>
                </li>
                <li class="navbar__item">
                    <a href="products.php" class="navbar__link"
                    >Products</a>
                </li>
                <li class="navbar__item">
                    <a href="blogs.php" class="navbar__link">Blogs</a>
                </li>
                <li class="navbar__item">
                    <a href="aboutUs.php" class="navbar__link">About Us</a>
                </li>
                <li class="navbar__btn">
                    <form action="#" class="font-size-14 font-rale">
                        <a href="cart.php" title="shopping cart" class="py-2 rounded-pill  bg-black">
                  <span class="font-size-16 px-2 text-white"
                  ><i class="fas fa-shopping-cart"></i
                      ></span>

                            <?php
                            if (isset($_SESSION['user_id'])) {
                                $user_id = $_SESSION['user_id']; ?>
                                <span class="px-3 py-2 rounded-pill text-dark bg-light"
                                ><?php echo count($cart->getDataFromCartByUserId($user_id)); ?></span>
                            <?php } else { // if $_SESSION is not set: ?>
                                <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                            <?php } // end if ?>

                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end Primary Navigation -->
</header>
<!-- End HEADER -->

<!-- Start MAIN  ----------------------------------------------->
<main id="main-site">