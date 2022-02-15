
<?php
// Starts the session and connects to the database
include_once("prepend.page_tag_navigation.endpoint.php");

// object created in prepend.endpoint.php, set our total price to the value returned from the processForm() function
$cart_total = $QuoteCart->addToCart();

echo "Ding!";
