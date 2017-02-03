	
	var MP3 = new buzz.sound('http://conecteestudio.com.br/matador/wp-content/themes/matador/assets/sound/ole.mp3');
	var WAV = new buzz.sound('http://conecteestudio.com.br/matador/wp-content/themes/matador/assets/sound/ole.wav');
	
$(document).ready(function(e) {

    $('#home article').hover(function(e) {
       $('#cartaz').animate({opacity:0});
	   MP3.play();
    },function(e){
       $('#cartaz').animate({opacity:1});
	});	
});


$(document).ready(function() {

	$('#caixa').tinyscrollbar();
	
	
	$('#scrollable .items').cycle({
		fx: "scrollHorz",
		speed:"600", 
		prev:"#prev", 
		next:"#next",
		slides: '.item',
		timeout: 0,
		swipe: true,
		allowWrap:false
	});

	$('#scrollable2 .items').cycle({
			fx: "scrollHorz",
			speed:"600", 
			prev:"#prev2", 
			next:"#next2",
			slides: '.item',
			timeout: 0,
			swipe: true,
			allowWrap:false
	});
	
	
	$('.cycle-sentinel.cycle-slide').css('opacity', 0);
	
});


$(document).ready(function() {
    
	$('.scroll-pane').jScrollPane({
        verticalDragMinHeight: true, 
        autoReinitialise: true
    });
	
	 $('.lightbox').lightbox();
	
});

$(document).ready(function() {
	
	$HEIGHT = $(window).height();
		$ALTURA = $HEIGHT - 542;
		if($ALTURA > 250){
			$('.scroll-pane').css('height', $ALTURA);
		}else{
			$('.scroll-pane').css('height', 250);
		}
	
	
	$(window).bind("debouncedresize", function() {
		$HEIGHT = $(window).height();
		$ALTURA = $HEIGHT - 542;
		
		if($ALTURA > 250){
			$('.scroll-pane').css('height', $ALTURA);
		}else{
			$('.scroll-pane').css('height', 250);
		}
	});
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
});

$(document).ready(function(e) {
	if($('#audio').length > 0){
    var snd = new MediaElementPlayer('#audio');
	 
	 $('.music').click(function(e){
		
		var $M = $(this).data('music');
		
		//cria um objeto de áudio 
		snd.setSrc($M);
		snd.play();//toca o áudio
		
		})
	}
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