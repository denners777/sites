/*Slide*/
	$('#Slider #items').after('<div class="navi clearfix" id="navi"></div>').cycle({ 
			
			fx:     'scrollHorz', 
			speed:  'slow', 
			timeout: 8000, 
			pager:  '#navi' 
		});
		
	$('#Slider2 #items2').after('<div class="navi clearfix" id="navi2"></div>').cycle({ 
			
			fx:     'scrollUp', 
			speed:  'slow', 
			timeout: 12000, 
			pager:  '#navi2' 
		});


