/*Slide*/
	$('#Slider #items').after('<div class="navi clearfix" id="navi"></div>').cycle({ 
			
			fx:     'scrollHorz', 
			easing: 'easeInOutElastic',
			speed:  3000, 
			timeout: 8000, 
			pager:  '#navi' 
		});
		
	$('#Slider2 #items2').after('<div class="navi clearfix" id="navi2"></div>').cycle({ 
			
			fx:     'scrollDown', 
			easing: 'easeInOutQuint',
			speed:  1000, 
			timeout: 12000, 
			pager:  '#navi2' 
		});


