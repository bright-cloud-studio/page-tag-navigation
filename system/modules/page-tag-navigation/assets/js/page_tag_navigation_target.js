// When the page is loaded, get our target
$( document ).ready(function() {
    var our_target = getTarget();
    alert("PTN_TARGET: " . our_target);
    console.log("PTN_TARGET: " . our_target);
});

function getTarget() {
    
    // get target from php session
    $.ajax({
        url:'/system/modules/page-tag-navigation/assets/php/action.get.target.php',
        type:'POST',
        success:function(result){
        	return result;
        },
        error:function(result){
            return "error getting session ptn_target";
        }
    });
	
}
