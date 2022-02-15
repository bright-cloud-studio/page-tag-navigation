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
        	$("#dropdown_child").html(result);
        },
        error:function(result){
		$("#error_messages").html("Error getting child dropdown");
        }
    });
	
}
