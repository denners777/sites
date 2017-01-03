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


	$('.g2').Selectyze({
		theme : 'mac'
    });


})

/*
 * PLACEHOLDER
 */
$(document).ready(function(){

	if(!Modernizr.input.placeholder){
	
		$('[placeholder]').focus(function() {
		  var input = $(this);
		  if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		  }
		}).blur(function() {
		  var input = $(this);
		  if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		  }
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  $(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
			  input.val('');
			}
		  })
		});
	}
})