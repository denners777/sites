$(document).ready(function(e) {
	
	$('.figure').bind('mouseover', function(){
		$(this).css('opacity',0);
		var video = $(this).parent().find('video');
		$(video).trigger('play');
	})
	
	$('.figure').bind('mouseout', function(){
		$(this).css('opacity',1);
		var video = $(this).parent().find('video');
		$(video).trigger('pause');
	})
	
	var $TOPO = $('#header');
	var $FOOTER = $('#footer');
	var $MAIN = $('#main');
	var $LOGO = $($TOPO).find('.logo');
	var $MENU = $($TOPO).find('.menu ul li a');
	var $IMGS = $($MAIN).find('.video');
	var $BOX = $($MAIN).find('.box-led');
	var $SOLUCOES = $($MAIN).find('.solucoes');
	var $QUEM = $($MAIN).find('.quem');
	var $CLIENTE = $($MAIN).find('.cliente');
	var $REDE = $($FOOTER).find('.rede-sociais ul li a');
	
	$('.video figure').animate({
		opacity:1
	},{
		duration:2000
	})
	
	setTimeout(function(){
		
		$('.box-led').animate({
			opacity:1
		},{
			duration:2000,
			complete: function(){
				$('video').animate({
					opacity:1
				},{
					duration:500,
					complete: function(){
						$('.video h3').animate({
							opacity:1,
							bottom:20
						},{
							duration:1000,
						})
					}
				})
			}
		})
		
	},1500)
	
	
	setTimeout(function(){
	
		$($TOPO).animate({
			height:80
			},{
				duration:1000,
				complete: function(){
					$($LOGO).animate({
						top:20
					},{
						duration:500,
						complete: function(){
							$($LOGO).animate({
								top:0
							})
						}
					})
			  }
		 })
		 
		 setTimeout(function(){
			
				$($MENU).each(function(index, element) {
					var elemento = element;
					setTimeout(function(){
						$(elemento).animate({
							top: 30
						},{
							complete: function(){
								$(elemento).animate({
									top:0
								})
							}
						})
						console.log(this);
					},index*200)
				});
				
		 },1200)
		
		setTimeout(function(){
			
			$($FOOTER).animate({
				height:48
			},{
				duration:1000
			})
					
		 },3000)
		 
		 setTimeout(function(){
			
				$($REDE).each(function(index, element) {
					var elemento = element;
					setTimeout(function(){
						$(elemento).animate({
							top:-30
						},{
							complete: function(){
								$(elemento).animate({
									top:0
								})
							}
						})
						console.log(this);
					},index*100)
				});
				
		 },4000)
		 
	 },4000)
	
});