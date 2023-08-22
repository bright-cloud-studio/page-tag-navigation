
// set our default option to id=0 when page loads to reset after return/reload
$( document ).ready(function() {
    $('#select_parent option[id="0"]').attr("selected",true);
});

// this is the call to save to cart
function get_child_dropdown(ptn_id){

	// store our quote request values
	var parent_val = $(ptn_id + ' #select_parent').children(":selected").attr("id");
	  
    // trigger this function when our form runs
    $.ajax({
        url:'/system/modules/page-tag-navigation/assets/php/action.get.child.dropdown.php',
        type:'POST',
        data:"parent_val="+parent_val+"&ptn_id="+ptn_id+"",
        success:function(result){
        	// redirect us to the success page
        	$(ptn_id + " #dropdown_child").html(result);
        },
        error:function(result){
		$(ptn_id + "#error_messages").html("Error getting child dropdown");
        }
    });
	
}

// this is the call to save to cart
function push_to_target(ptn_id){
    
    
    
	// store our quote request values
	var anchor_target = $(ptn_id +' #select_child').children(":selected").attr('anchor_target');
	  
    // trigger this function when our form runs
    $.ajax({
        url:'/system/modules/page-tag-navigation/assets/php/action.set.anchor.target.php',
        type:'POST',
        data:"anchor_target="+anchor_target+"",
        success:function(result){
        	// redirect us to the success page
        	console.log("SET ANCHOR SUCCESS");
        },
        error:function(result){
		    $(ptn_id + " #error_messages").html("Error setting anchor target");
        }
    });
    
	var child_val = $(ptn_id + " #select_child").val();
	window.location.href = child_val;
	
}
