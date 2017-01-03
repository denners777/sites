$(document).ready(function(e) {
    $('#Slider .grid_19').cycle({
		fx: "scrollHorz", 
		pauseOnHover:"true", 
		speed:"600", 
		slides: '.item',
		swipe: true,
		pager: '.navi'
	});
});
