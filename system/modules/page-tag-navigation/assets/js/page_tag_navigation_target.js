// when page is loaded
$( document ).ready(function() {

	// get our target from the module holder
    var our_target = $('#target_holder').text();
    
    // if our target isn't blank
    if(our_target != '') {
    	
    	// scroll the page to the target
    	scrollToAnchor(our_target);
    	
    	// add bouncing ball
    	addBouncingBall("#"+our_target);
    	
    	// clear our stored target
    	clearSessionTarget();
    }
    else
    	// we have no target
    	console.log("No Target");
});

// scroll the page to the target
function scrollToAnchor(aid){
    var aTag = $("div[id='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top-200},'slow');
}

// ajax call script to clear out our target
function clearSessionTarget() {

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

function addBouncingBall(target_id) {
	$(target_id).prepend( '<div class="target_ball"></div>' );
	
	
	setInterval(function() {
        $(".target_ball").effect( "bounce", {times:3, distance: 20}, 500 );
    }, 1500);
	
	
	
}
