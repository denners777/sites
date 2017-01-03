$(document).ready(function(e) {
    $('#slider .items').cycle({
		fx: "fade", 
		pauseOnHover:"true", 
		speed:"1000",
		slides: '.item',
		swipe: true,
		pager: '.navi'
	});
	
    $('#clipping .items').cycle({
		fx: "scrollHorz",
		carouselVisible: 1,
		speed:"600", 
		prev:"#prev", 
		next:"#next",
		slides: '.item',
		timeout: 0,
		allowWrap:false,
		swipe: true
	});
	
	$('#thumbs .items').cycle({
		fx: "carousel",
		carouselVisible: 4,
		speed:"600", 
		prev:"#prev2", 
		next:"#next2",
		slides: '.item',
		timeout: 0,
		swipe: true,
		allowWrap:false
	});

	$('#thumbs .items .cycle-slide').click(function(){
    	var index = $('#thumbs .items').data('cycle.API').getSlideIndex(this);
	    $('#clipping .items').cycle('goto', index);
		console.log(index);
	});
	
	$('#galeria .items').cycle({
		fx: "scrollHorz",
		speed:"600", 
		prev:"#prev", 
		next:"#next",
		slides: '.item',
		timeout: 0,
		swipe: true,
		allowWrap:false
	});
	
	$('#videos .items').cycle({
		fx: "scrollHorz",
		speed:"600", 
		prev:"#prev2", 
		next:"#next2",
		slides: '.item',
		timeout: 0,
		swipe: true,
		allowWrap:false
	});
	
});

$(function() {
  // initialize scrollable
  $(".scrollable").scrollable();
});


$('.cursos .items a').click(function(e){
	e.preventDefault();
	
	$('#content-cursos').find('.block').removeClass('block').addClass('none');
	$('.items').find('.active').removeClass('active');
	var $BLOCK = $(this).attr('href');
	$(this).addClass('active');
	$('html, body').animate({
    	scrollTop: $($BLOCK).offset().top
    })
	$($BLOCK).css('opacity', 0).removeClass('none').addClass('block');
	$($BLOCK).animate({opacity:1},500);
})

jQuery(document).ready(function($){
  
  $('.lightbox').lightbox();
  
  
   /*checkbox*/
	$('.checked').simpleImageCheck({
		  image: 'http://conecteestudio.com.br/theta/wp-content/themes/theta/assets/img/unchecked.png',
		  imageChecked: 'http://conecteestudio.com.br/theta/wp-content/themes/theta/assets/img/checked.png'
	 });
  
  
  	// cache container
	var $container = $('#container');
	// initialize isotope
	$container.isotope({
	  // options
	  itemSelector : '.vevent',
	  sortBy : 'random'
	});
	
	setTimeout(function(){
		$container.isotope('shuffle');
	},1000)
	
	// filter items when filter link is clicked
	$('.filter a').click(function(){
		var $FILTER = $(this).parents('.filter');
		if($(this).hasClass('ativo')){
			$($FILTER).find('.ativo').removeClass('ativo');
		}else{
			$($FILTER).find('.ativo').removeClass('ativo');
			$(this).addClass('ativo');
		}
		
	  var cidade = $('.cidades .ativo').data('filter');
	  	if(!cidade) cidade = '';
	  var curso = $('.cursos .ativo').data('filter');
	  	if(!curso) curso = '';
	  	
	  var mes = $('.mes .ativo').data('filter');
	  	if(!mes) mes = '';
	  
	  var selector = cidade + curso + mes;
	  //console.log($LI);
	  $container.isotope({ filter: selector });
	  return false;
	});
	
	
	//construir lightbox
	
	$('#container a.lightbox').click(function(){
		
		$nome_curso 	= $(this).find('h2').text();
		$icon_curso 	= $(this).find('.icon-curso').text();
		$inscricao 		= $(this).find('.inscricao').text();
		$valor_curso 	= $(this).find('.valor-curso').text();
		$desconto 		= $(this).find('.desconto').text();
		$parc	 		= $(this).find('.parcelamento').text();
		
		$('#lightbox .icon').removeClass().addClass('icon').addClass($icon_curso);
		$('#lightbox .nome_curso').text($nome_curso);
		$('#lightbox .taxa-inscricao').text($inscricao);
		$('#lightbox .valor-curso').text($valor_curso);
		$('#lightbox .desconto').text($desconto);
		$('#lightbox .parcelamento').text($parc);
		
	})
	
	
	$(function($){
		//check if hash tag exists in the URL
		if(window.location.hash) {
		 	 //$('.especialidades a.menu-esp[href=' + window.location.hash + ']').trigger('click');
			 $('a[href=' + window.location.hash + ']').trigger('click');	 
		}
	})
  
  $('.cycle-sentinel.cycle-slide').css('opacity', 0);
  
});