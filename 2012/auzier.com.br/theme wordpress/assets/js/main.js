
/* Banner Principal */
$(document).ready(function(e) {

    $('#Slider .items').cycle({
		fx: "fadeout", 
		pauseOnHover:"true", 
		speed:"600", 
		prev:"#prev", 
		next:"#next",
		slides: '.item',
		swipe: true,
		pager: '.navi'
	});

});

/* Guias de Servicos */
$(document).ready(function(e) {

   	$('.couraca1,.couraca2,.couraca3').click(function(e){
		
		$W1 = $('.couraca1').css('width');
		$W2 = $('.couraca2').css('width');
		$W3 = $('.couraca3').css('width');
		
		if($W1 == '0px' || $W2 == '0px' || $W3 == '0px'){
			$('.couraca1,.couraca2,.couraca3').animate({
			width:320
			},{
				duration:600
			})
		}
		
			$(this).animate({
				width:0
			},{
				duration:600
			}) 
	})
	
	/* Overlay */
	$(".lightbox[rel]").overlay({
		effect: 'apple',
		mask: '#333',
		speed: 'slow'
		});
});
/* scroll */
$(function() {
    $(".scrollable").scrollable({ 
		vertical: true, 
		mousewheel: true 
	});
});

/* colocar dentro do overlay */

$(document).ready(function(e) {

   	$('.lightbox').click(function(e){
		$FIG = $(this).parents('.grid_4').find('h2').text();
		$IMG = $(this).parent().find('figure > img').attr('data-original');
		$TITLE = $(this).parent().find('h4').text();
		$CONTENT = $(this).parent().find('p').text();
		
		$('#overlay img').attr('src', $IMG);
		$('#overlay figcaption').text($FIG);
		$('#overlay h2').text($TITLE);
		$('#overlay p').text($CONTENT);
	})
	
})