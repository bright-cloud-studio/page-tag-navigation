// this is the call to save to cart
function get_child_dropdown(){

    // store our quote request values
    var val_parent = $("#dropdown_parent").val();

	  
    // trigger this function when our form runs
    $.ajax({
        url:'/system/modules/panel_pricing_calculator/assets/php/action.get.child.dropdown.php',
        type:'POST',
        data:"val_parent="+val_parent+"",
        success:function(result){
        	//$("#send_email_notification").html(result);
        	//$("#request_form").hide();
        	
        	// redirect us to the success page
        	window.location.replace("https://ampersandart.com/custom-calculator-success-message");
        	
        },
        error:function(result){
			$("#send_email_notification").html("SEND EMAIL FAIL");
        }
    });
	
}