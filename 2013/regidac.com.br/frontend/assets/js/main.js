
$(document).ready(function(e) {
    
	$('#slider .slider').cycle({
		fx: "scrollHorz", 
		pauseOnHover:"true", 
		timeOut: "4000",
		speed:"1000",
		slides: '.item',
		swipe: true,
		pager: '#navi'
	});
	
	$('.select').Selectyze({
		theme : 'mac'
    });
	
});