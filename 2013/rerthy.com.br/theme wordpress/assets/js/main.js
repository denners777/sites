/*
@authors 	luiz.vinicius73@gmail.com
			denners777@hotmail.com
*/

/* lightbox */
	jQuery(document).ready(function($){
		$('.lightbox').lightbox();
		
		$(".iframe").colorbox({iframe:true, width:"90%", height:"90%"});
		$(".iframe2 a").colorbox({iframe:true, width:"90%", height:"90%"});
		$('.imgProduto').colorbox();
		
    });
$(document).ready(function(){

	/*Menu da página*/
	var Menus = $('#header nav > ul:first > li');
	var T = Menus.length;
	var Atual = $('.current-menu-item a:first','#header nav > ul:first').attr('href');
	var NewMenu = $('#menu320 select');
	Menus.each(function(index, element) {
		if(index<T-1){
			$(this).after('<li class="spacer">|</li>');
		}
		var $Link = $('a:first',this);
		var URL = $($Link).attr('href');
		var NewLista = $('ul',this);
		if(NewLista.length==0){
			var TXT = $($Link).text();
			var OPT = $('<option></option>').attr('value',URL).text(TXT);
			//
			if(URL==Atual){
				$(OPT).attr('selected','selected');	
			}
		}else{
			var TXT = $($Link).text();
			var Novo = $('<optgroup></optgroup>').attr('label',TXT);
			$('li',NewLista).each(function(index, element) {
				var URL = $('a',this).attr('href');
				var TXT = $(this).text();
				nOPT = $('<option></option>').attr('value',URL).text(TXT);
				//
				if(URL==Atual){
					$(nOPT).attr('selected','selected');	
				}
				$(Novo).append(nOPT);
			});
			
			OPT = Novo;
		}
		
		NewMenu.append(OPT)	
	});
	
	$(NewMenu).change(function(e) {
		var URL = $(this).val();
		document.location = URL;
    });
	/*Fim Menu*/

	/*Slider*/
	$('.theSlider:not(.noSlide)').each(function(index, element) {
	//$(this).after('<nav><a class="prev ir">Next</a><a class="next ir">Next</a></nav>');;
		var N = $('.next',this);
		var P = $('.prev',this);
		$(this).cycle({
			prev : P,
			next : N,
			timeout: 0
		});
		});

	/*Fim Slider*/
	
	
	$('.scroll').cycle({
		fx: "carousel",
		carouselVisible: 3,
		speed:"600", 
		prev:"#prev", 
		next:"#next",
		slides: 'img',
		timeout: 0,
		swipe: true,
		allowWrap:false
	});
	

	$('.grid_item').hoverdir();
});

(function ($) {

	$(document).ready(function() {

		/* Init variables */

		var $masonryContainer = $('#masonry');
		var $masonryGallery = $('#masonry');
		var $mediaStage = $('#masonry');

		/* End variable init */


		$('#masonry').each( function() {
			$('#grid_home').prepend('<div id="preloader"><span></span></div>');
		});


		/* Isotope column width */
		function getNumColumns(){
			var winWidth = $(window).width();
			var column = 2;		
			if (winWidth < 320) column = 2;
			else if(winWidth >= 321 && winWidth < 480) column = 4;
			else if(winWidth >= 481 && winWidth < 768) column = 4;
			else if(winWidth >= 769 && winWidth < 960) column = 4;
			else if(winWidth >= 961 && winWidth < 1170) column = 4;
			else if(winWidth >= 1171 && winWidth < 1280) column = 8;
			else if(winWidth >= 1281 && winWidth < 1680) column = 8;
			else if(winWidth >= 1680) column = 8;		
			return column;
		}

		function setPostWidth(){
			var columns = getNumColumns();			
			var containerWidth = $masonryContainer.width();		
			var postWidth = containerWidth/columns;
			postWidth = Math.floor(postWidth);		
			$masonryContainer.find(".grid_item").each(function(index){
				$(this).css({"width":postWidth+"px"})				
			});
		}

		function setGalleryWidth() {
			var columns = getNumColumns();		
			var containerWidth = $mediaStage.width();	
			var postWidth = containerWidth/columns;
			postWidth = Math.floor(postWidth);		
			$mediaStage.find(".grid_item").each(function(index){
				$(this).css({"width":postWidth+"px"})				
			});		
		}	
		/* End column width */



		function reLayout(){
			var winWidth = $(window).width();

			setPostWidth();	
			setGalleryWidth();	

			$masonryContainer.isotope('reLayout',function(){

				if($(window).width() != winWidth) 
					setTimeout(function() { 
						reLayout();
					}, 10);
			});

			$mediaStage.isotope('reLayout',function(){

				if($(window).width() != winWidth) 
					setTimeout(function() {
						reLayout();
					}, 10);
			});	
		}	 	


		$(window).on("debouncedresize", function( event ) {
			reLayout();
		});

		$masonryGallery.fadeTo(0, 0);

		$(window).load(function() {

			setPostWidth();		
			setGalleryWidth();

			$masonryContainer.isotope({
				itemSelector : '.grid_item',
				resizable: true,
				transformsEnabled: true,
				sortBy : 'random'
			});	

			$mediaStage.isotope({
				itemSelector : '.grid_item',
				resizable: true,
				transformsEnabled: true,
				layout: 'masonry'
			});


			$('#preloader').slideUp(300);
			$masonryGallery.fadeTo(1000, 1);


			setTimeout(function() { 
				reLayout();
			}, 1000);


		});  
	});

})(jQuery);

/*Produtos*/

$(document).ready(function(e) {
	Loader = new Image()
	$(Loader).attr('src','http://conecteestudio.com.br/rethy/wp-content/themes/rerthy/assets/img/loader.gif');
	
	
	$('.scroll img').click(function(e) {
		var URL = $(this).data('rel');
		var ORIGINAL = $(this).data('original');
		var Container = $(this).parents('.logopecas').find('.lightbox');
		
		Container.html(Loader).addClass('carregando').attr('href',ORIGINAL);
		
		IMG = new Image()
		$(IMG).load(function(e){
			$(Container).html(this);
			$(Container).removeClass('carregando');
		}).error(function(e){
			alert('Erro ao carregar imagem!');	 
		}).attr('src',URL)//.removeClass('carregando');

	});
});
	
$(function() {
    $(".scrollable").scrollable({ 
		vertical: true, 
		mousewheel: true 
	});
});

$('.items .a').click(function(e){
	e.preventDefault();
	
	var $ORIGINAL = $('.figure img', this).data('original');
	var $IMAGE = $('.figure img', this).data('image');
	var $TITLE = $('.hide h4', this).html();
	var $CONTENT = $('.hide .content', this).html();
	var $LINKS = $('.hide .links', this).html();
	
	$('.prod .title').text($TITLE);
	$('.prod .content').html($CONTENT);
	$('.prod .l').html($LINKS);
	$('.prod2 a').attr('href', $ORIGINAL);
	
	$('.prod2 figure').html(Loader).addClass('carregando');
	IMG = new Image()
	$(IMG).load(function(e){
		$('.prod2 figure').html(this);
		$('.prod2 figure').removeClass('carregando');
	}).error(function(e){
		alert('Erro ao carregar imagem!');	 
	}).attr('src',$IMAGE);
	
})


$(document).ready(function(e) {
	
	var $URL = $('.ide').text();
	
	//$('.link').attr('href', $URL+'/contato');
	
	
})