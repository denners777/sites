
$(document).ready(function(e) {
    $('#slider section').cycle({
		fx: "scrollHorz", 
		pauseOnHover:"true",
		speed:"1000",
		slides: '.item',
		swipe: true,
		pager: '.navi'
	});

	$(window).bind("debouncedresize", function() {
		var w = $('.como_funciona').width();
		w = (w - 950) / 2;
		$('.traco_esq, .traco_dir').css('width', w);
		if(w <= 0){
			$('.traco_esq, .traco_dir').css('display', 'none');
		}
	});
	$(window).trigger('debouncedresize');
})
