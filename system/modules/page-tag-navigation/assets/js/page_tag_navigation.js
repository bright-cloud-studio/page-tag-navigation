// this is the call to save to cart
function get_child_dropdown(){

	// store our quote request values
	var parent_val = $('#select_parent').children(":selected").attr("id");
	  
    // trigger this function when our form runs
    $.ajax({
        url:'/system/modules/page-tag-navigation/assets/php/action.get.child.dropdown.php',
        type:'POST',
        data:"parent_val="+parent_val+"",
        success:function(result){
        	// redirect us to the success page
        	$("#dropdown_child").html(result);
        },
        error:function(result){
		$("#error_messages").html("Error getting child dropdown");
        }
    });
	
}

// this is the call to save to cart
function push_to_target(){
	var child_val = $("#select_child").val();
	window.location.href = child_val;
	
}
