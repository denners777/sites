$(document).ready(function(e) {
    $('#Slider .items').cycle({
		fx: "fade",
		pauseOnHover:"true", 
		speed:"600", 
		slides: '.item',
		swipe: true,
		pager: '.navi'
	});
	
	/* scroll */
	$(function() {
	  $(".scrollable").scrollable();
	});
	
	$('.especialidades .menu-esp').click(function(e){
		e.preventDefault();
		
		$('.especialidades').find('.block').css('display', 'none');
		var $BLOCK = $('.especialidades').find($(this).attr('href'));
		$BLOCK.css({'display':'block','opacity':0});
		$BLOCK.animate({opacity:1},500,function(){
			$(this).addClass('block');
		})
	})
	
	$('.dicas h3 a').toggle(function(e){
		e.preventDefault();
		
		var $BLOCK = $('.paginas').find($(this).attr('href'));
		$BLOCK.css({'display':'block'});
		$BLOCK.animate({opacity:1},500);
	}, function(e){
		var $BLOCK = $('.paginas').find($(this).attr('href'));
		$BLOCK.animate({opacity:0},{
            duration:500,
            complete: function(){
                $BLOCK.css({'display':'none'});
            }
        });
		
		
	})
	

});