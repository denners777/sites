/* 
Author: LUIZ.VINICIUS73@GMAIL.COM
*/
$(document).ready(function(e) {
	$('#Slider').after('<nav id="NavSlider">').cycle({
		pager:  '#NavSlider',
	});
	var AlturaMinima = parseInt($('.DivMain').height()) + parseInt(3);
	$('aside.grid_7').css('min-height',AlturaMinima);
	
	$(".selectyze").Selectyze({
		theme:'riovisas',
	});
});

	
//

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
