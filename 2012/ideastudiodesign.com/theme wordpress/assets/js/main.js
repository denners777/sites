$(document).ready(function(e) {

    $('#Slider .grid_19').cycle({
		fx: "scrollHorz", 
		pauseOnHover:"true", 
		speed:"600", 
		slides: '.item',
		swipe: true,
		pager: '.navi'
	});
	
	
	$('#duvida > .total .grid_12:odd').addClass('odd');
	$('#duvida > .total .grid_12:even').addClass('even');
	
	var $BOX = $('.grid_precos .box:last');
	console.log($BOX);
	$('.grid_precos .box:last').addClass('odd');

});

jQuery(document).ready(function($){
	$('.lightbox').lightbox();
});

$(document).ready(function(e) {
    $('.thumb').click(function(e) {
		e.preventDefault();
        var Rel = $(this).attr('href').replace('#','');
		$('a[rel="' + Rel + '"]:first').trigger('click');
    });
});