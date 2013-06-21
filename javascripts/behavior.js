// JavaScript Document

$(document).ready(function() {

  $("nav#global a").click(function(){
    $("nav#global a").removeClass("fpo");
    $(this).addClass("fpo");
    });
	
function toggle(obj) {

	var el = document.getElementById(obj);
	if ( el.style.display != 'none' ) {
		el.style.display = 'none';
	}
	else {
		el.style.display = '';
	}
}
  
});