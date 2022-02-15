// this is the call to save to cart
function get_child_dropdown(){

    // store our quote request values
    var parent_val = $("#dropdown_parent").val();

	  
    // trigger this function when our form runs
    $.ajax({
        url:'/system/modules/panel_pricing_calculator/assets/php/action.get.child.dropdown.php',
        type:'POST',
        data:"val_parent="+parent_val+"",
        success:function(result){
        	// redirect us to the success page
        	window.location.replace("https://ampersandart.com/custom-calculator-success-message");
        },
        error:function(result){
		$("#error_messages").html("SEND EMAIL FAIL");
        }
    });
	
}
