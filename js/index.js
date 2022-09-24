$(document).ready(function () {
    // banner owl carousel------------------------------
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
    });

    // top sale owl carousel----------------------------
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {items: 1},
            600: {items: 3},
            1000: {items: 5},
        },
    });

    // isotope filter-----------------------------------
    var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        layoutMode: "fitRows",
    });

    // filter items on button click---------------------
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({filter: filterValue});
    });

    // top sale owl carousel--------------------------------------------------------
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {items: 1},
            600: {items: 3},
            1000: {items: 5},
        },
    });

    // blogs owl carousel-----------------------------------------------------------
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {items: 1},
            770: {items: 2},
            1000: {items: 3},
        },
    });

    // increase and decrease qty of product------------------------------------------
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $subtotal = $("#subtotal-price");


    // click on qty-up button
    $qty_up.click(function (e) {
        let $qty_input = $(`.qty_input[data-id=${$(this).data("id")}]`);
        let $price_span = $(`.product_price[data-id=${$(this).data("id")}]`);

        // change product price using ajax call
        $.ajax({
            url: "template/ajax.php",
            type: 'post',
            data: {itemid: $(this).data("id")},
            success: function (result) { // the result is price of product
                if ($qty_input.val() >= 1 && $qty_input.val() < 10) {
                    $qty_input.val(function (index, old_value) {
                        return ++old_value;
                    });


                    // increase price of the product as well as increasing the qty
                    $price_span.text(parseFloat($qty_input.val() * result).toFixed(2));

                    // increasing subtotal amount
                    let $subtotal_amount = parseFloat($subtotal.text()) + parseFloat(result);
                    $subtotal.text($subtotal_amount.toFixed(2));
                }


            }
        }); // closing ajax request


    });

    // click on qty-down button
    $qty_down.click(function (e) {
        let $qty_input = $(`.qty_input[data-id=${$(this).data("id")}]`);
        let $price_span = $(`.product_price[data-id=${$(this).data("id")}]`);


        // change product price using ajax call
        $.ajax({
            url: "template/ajax.php",
            type: 'post',
            data: {itemid: $(this).data("id")},
            success: function (result) { // the result is price of product
                if ($qty_input.val() > 1 && $qty_input.val() <= 10) {
                    $qty_input.val(function (index, old_value) {
                        return --old_value;
                    });

                    // decrease price of the product as well as increasing the qty
                    $price_span.text(parseFloat($qty_input.val() * result).toFixed(2));

                    // decreasing subtotal amount
                    let $subtotal_amount = parseFloat($subtotal.text()) - parseFloat(result);
                    $subtotal.text($subtotal_amount.toFixed(2));
                }
            }
        }); // closing ajax request

    });
});

// NAVBAR-----------------------------------------
const mobileMenu = document.querySelector("#mobile-menu");
const menuLinks = document.querySelector(".navbar__menu");
const navLogo = document.querySelector("#navbar__logo");
//events
mobileMenu.addEventListener("click", showMobileMenu);
menuLinks.addEventListener("click", closeMobileMenu);
navLogo.addEventListener("click", closeMobileMenu);

// Display mobile menu by clicking the menu icon
function showMobileMenu() {
    mobileMenu.classList.toggle("is-active");
    menuLinks.classList.toggle("active");
}

// Close mobile menu by clicking the each menu items
function closeMobileMenu() {
    const menuBars = document.querySelector(".is-active");
    console.log(window.innerWidth);
    if (window.innerWidth < 960 && menuBars) {
        mobileMenu.classList.toggle("is-active");
        menuLinks.classList.remove("active");
    }
}
