// when the page loads, check if there is anything in the cart. If there is update the cart number
// A $( document ).ready() block.
$( document ).ready(function() {

    $.ajax({
        url:'/system/modules/panel_pricing_calculator/assets/php/action.get.cart.total.endpoint.php',
        type:'POST',
        success:function(result){
        	$("#cart_total").html(result);
        },
        error:function(result){
			$("#dev_message").html("GET CART TOTAL FAIL");
        }
    });
    
    
     $.ajax({
        url:'/system/modules/panel_pricing_calculator/assets/php/action.show.cart.items.endpoint.php',
        type:'POST',
        success:function(result){
        	$("#cart_contents").html(result);
        	if(result != '') { $("#calc_cart_container").slideDown(); }
        },
        error:function(result){
			$("#cart_contents").html("SHOW CART ITEMS FAIL");
        }
    });
    
});
