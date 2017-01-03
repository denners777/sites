$(document).ready(function(e) {
    $('#Slider .items').cycle({
		fx: "fade",
		pauseOnHover:"true", 
		speed:"600", 
		slides: '.item',
		swipe: true,
		pager: '.navi'
	});
	
	$('#serv').cycle({
		fx: "scrollHorz",
		pauseOnHover:"true", 
		speed:"600", 
		slides: 'ul',
		swipe: true,
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

/* lightbox */
	jQuery(document).ready(function($){
		
      $('a.video').lightbox();
	  
	  $('.lightbox').lightbox();
	  
    });
	
	$(function($){
		//check if hash tag exists in the URL
		if(window.location.hash) {
		 	 //$('.especialidades a.menu-esp[href=' + window.location.hash + ']').trigger('click');
			 $('a[href=' + window.location.hash + ']').trigger('click');	 
		}
	})
	
