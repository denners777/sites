$(document).ready(function(e) {
    $('#slider .slider').cycle({
		fx: "carousel",
		//carouselVisible: 5,
		speed:"1200", 
		slides: '.item',
		timeout: 1200,
		swipe: true,
		allowWrap: true
	});
        $('.lightbox').lightbox();
});

$('.menu-principal .busca').toggle(function(){
	$(this).addClass('act');
	$(this).find('ul').addClass('active');
        $('input',this).focus();
    }, function(){
        $(this).removeClass('act');
        $(this).find('ul').removeClass('active');
    });


$('.order').Selectyze({
	theme : 'mac'
});
	
$('.show').Selectyze({
	theme : 'lar'
});