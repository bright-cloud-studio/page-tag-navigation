// When the page is loaded, get our target
$( document ).ready(function() {
    var our_target = $('#target_holder').text();
    if(our_target != '') {
    	scrollToAnchor(our_target);
    	clearSessionTarget();
    }
    else
    	console.log("No Target");
});


function scrollToAnchor(aid){
    var aTag = $("div[id='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top-100},'slow');
}

function clearSessionTarget() {

	 // trigger this function when our form runs
    $.ajax({
        url:'/system/modules/page-tag-navigation/assets/php/action.clear.session.target.php',
        type:'POST',
        data:"mode=1",
        success:function(result){
        	// redirect us to the success page
        	console.log("Clear: SUCCESS");
        },
        error:function(result){
			console.log("Clear: FAILURE");
        }
    });
	
}
