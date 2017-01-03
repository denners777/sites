
$(document).ready(function(e) {
    $('#Slider .items').cycle({
		fx: "scrollHorz", 
		pauseOnHover:"true", 
		speed:"600", 
		prev:"#prev", 
		next:"#next",
		slides: '.item',
		swipe: true,
		pager: '.navi'
	});
});