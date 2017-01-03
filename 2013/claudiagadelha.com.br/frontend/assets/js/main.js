
$(document).ready(function(e) {
    $('#banner .painel').cycle({
		fx: "fade", 
		pauseOnHover:"true", 
		speed:"1000",
		slides: '.item',
		swipe: true,
		pager: '#navi'
	});
	
	$('#banner-port').cycle({
		fx: "scrollHorz",
		carouselVisible: 1,
		speed:"600", 
		prev:"#prev", 
		next:"#next",
		slides: 'img',
		timeout: 0,
		allowWrap:false,
		swipe: true
	});
	
	$('#thumbs').cycle({
		fx: "carousel",
		carouselVisible: 4,
		speed:"600", 
		prev:"#prev2", 
		next:"#next2",
		slides: 'img',
		timeout: 0,
		swipe: true,
		allowWrap:false
	});
	
	$('#thumbs .cycle-slide').click(function(){
    	var index = $('#thumbs').data('cycle.API').getSlideIndex(this);
	    $('#banner-port').cycle('goto', index);
	});
	
	
	$('.select').Selectyze({
		theme : 'mac'
    });
	
	$('.UlSelectize').jScrollPane({
        verticalDragMinHeight: true, 
        autoReinitialise: true
    });
	
	$('.menu-serv a').click(function(e){
    	e.preventDefault();
		var $ID = $(this).attr('href');
		$('.menu-serv').find('.active').removeClass('active');
		$(this).addClass('active');
		
		$('.box').find('.block').removeClass('block').addClass('hide');
		
		$('.box').find('#'+$ID).removeClass('hide').addClass('block');
		
	});
	
	$('.menu-port a').click(function(e){
    	e.preventDefault();
		
		var $ID = $(this).attr('href');
		$('.menu-port').find('.active').removeClass('active');
		$('.menu-port').find('.active2').removeClass('active2');
		
		if($(this).parent('li').hasClass('drop')){
			
		}else if($(this).parents('li.drop').length>0){
			
			$(this).parent().addClass('active2');
			
		}else{
			$(this).parent().addClass('active');
		}
		
		
	});
	
	
})