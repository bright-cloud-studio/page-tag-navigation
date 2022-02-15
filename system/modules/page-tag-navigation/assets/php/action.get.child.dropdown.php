
<?php
// Starts the session and connects to the database
include_once("prepend.cart.endpoint.php");

// object created in prepend.endpoint.php, set our total price to the value returned from the processForm() function
$cart_total = $QuoteCart->addToCart();

// if we have a total price, push it onto the page to be grabbed by the ajax call
if ($cart_total) {
    ?>
<?php echo $cart_total; ?>
<?php
} ?>
