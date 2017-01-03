	var $v1 	= $('#vid1');
	var $v2 	= $('#vid2');
	var $v3 	= $('#vid3');
	var $v4 	= $('#vid4');
	var tempo;
	
	function m_enter(){
		
		clearTimeout(tempo);
		var $this = $(this);
		var outros = $('#banner .vid').not($this);
		outros.find('img').animate({opacity:1});
		tempo = setTimeout(function(){
			outros.stop(true,true).animate({width:180, height:460});
			$this.animate(
				{width:550, height:460},
				{complete:
					function(){
						$this.stop().find('img').animate(
							{opacity:0},
							{complete:
								function(){
									var video = $this.find('video');
									console.log(video);
									$(video).trigger('play');
								}
							}
						)
					}
				}
			);
		},500);
	}
	
	function m_leave(){
			
		clearTimeout(tempo);
		var $this = $(this);
		var outros = $('#banner .vid').not($this);
		
		var video = $this.find('video');
		$(video).trigger('pause');
		
		tempo = setTimeout(function(){
			
			$this.find('img').animate(
				{opacity:1},
				{complete:
					function(){
						$this.stop(true,true).animate(
							{width:275, height:460}
						)
					}
				}
			)
			setTimeout(function(){
				outros.stop().animate({width:275, height:460});
			}, 400)
		},200)
			
	}
	
	
	$('#banner .vid').unbind('mouseenter').bind('mouseenter',m_enter).unbind('mouseleave').bind('mouseleave',m_leave);
	

$('.articles .box').click(function(e){
	e.preventDefault();
	
	var $left;
	if($(this).hasClass('b1')){
			$left = '0px';
		}else if($(this).hasClass('b2')){
					$left = '372px';
			}else if($(this).hasClass('b3')){
						$left = '744px';
				}
	
	var h = $('.content-hide').css('height');
	$('.content-hide').empty().append('<div class="hide"></div>');
	$('.content-hide .hide').css('left', $left);
	
	var $content = $(this).find('.content').html();
	var $action = function(){  $('.content-hide').append($content); };
	
	if(h == '0px'){
		
		$(this).animate({height:125},{duration:500})
		$('.content-hide').animate({height: 96, opacity: 1},{duration:1000, complete: $action})
		
	}else{
	
		$('.content-hide').animate({height: 0, opacity: 0},{duration:500})
		
		$('.box').animate({	height:110},{duration:500})
		 
		$(this).animate({height:125},{duration:500})

		$('.content-hide').animate({height: 96, opacity: 1},{duration:1000, complete: $action})
	}
})


$('.portfolio .port').click(function(e){
	e.preventDefault();
	
	var $DENTRO = $(this).find('.dentro').height();
	console.log($DENTRO);
	
	$('.port').find('.content').animate({height:0});
	
	$('.content',this).animate({height:$DENTRO});
	
})