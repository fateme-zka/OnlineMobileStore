<?php
session_start();
// require php functions file
require("functions.php");


if (isset($_POST['login-submit'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
//    echo $email . PHP_EOL, $pass . PHP_EOL;

    $message = "";
    $select = $user->getUserByEmailAndPass($email, $pass) or [];

    if ($select) {
        $_SESSION['user_id'] = $select['user_id'];
        $message = "login was successful!";
        header('location:index.php');
    } else {
        $message = "Incorrect email or password.";
    }

}
?>


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
</head>
<body style="background: #51adbeb8">
<!--Show Message-->
<?php
if (isset($message)) {
    echo '<div class="alert alert-warning text-center" role="alert" onclick="this.remove();">' . $message . '</div>';
}
?>

<section class="Form login-form">
    <div class="login-container container p-0">
        <div class="row g-0 overflow-hidden rounded">
            <div class="col-lg-6">
                <img src="./assets/login-img.png" alt="login-img" class="img-fluid login-img">
            </div>
            <!-- Form Part -->
            <div class="col-lg-6 font-poppins form-part">
                <h1>Login</h1>
                <h4>Sign into your account</h4>
                <!-- Form -->
                <form method="post">
                    <!-- email -->
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input name="email" type="email" required class="form-control my-3 p-2" placeholder="Email">
                        </div>
                    </div>
                    <!-- password -->
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input name="password" type="password" required class="form-control my-3 p-2"
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <button type="submit" name="login-submit" class="btn btn-dark w-100 mb-5">Login</button>
                        </div>
                    </div>
                    <p>Don't have an account? <a href="register.php">Register Now </a></p>
                    <a class="mt-1" href="index.php">Main Page</a>
                </form>
            </div>
        </div>
    </div>
</section>


<!--==================================JS LINKS ==================================== -->
<!-- Bootstrap Javascript link  -->
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"
></script>

<!-- JQuery link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Owl carousel js link  -->
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>

<!-- Isotope plugin cdn -->
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>

<!-- Scripts file link  -->
<script src="./js/index.js"></script>
</body>
</html>