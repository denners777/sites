/* 
	Author: LUIZ.VINICIUS73@GMAIL.COM
*/
$(document).ready(function(e) {
	$('#Slider > div > div').cycle({ 
		fx:     'fade', 
		speed:  'slow', 
		timeout: 3000, 
		pager:  '#navSlider' 
	});
	
	$('#PageSlider').cycle({ 
		speed:  'fast', 
		timeout: 0, 
		pager:  '#NavPage', 
		pagerAnchorBuilder: function(idx, slide) { 
			// return selector string for existing anchor 
			return '#NavPage li:eq(' + idx + ')'; 
		},
		before: function(currSlideElement, nextSlideElement, options, forwardFlag){
			var Altura = $(nextSlideElement).height();
			$('#PageSlider').animate({height:Altura});
		}
	});
	
	$('#NavPage li').click(function(e){
		var Elemento = $(this)
		Titulo = Elemento.attr('data-title')
		if($.isEmptyObject(Titulo)){
			Titulo = Elemento.text()
		}
		$('hgroup h1').fadeOut(function(){
				$(this).html(Titulo)
		}).fadeIn()
	})
	
	/*$('figure.FigureSlide').after('<nav></nav>').cycle({
		 pager:   $('figure.FigureSlide + nav'),
	
	})*/
	
	$('figure.FigureSlide').each(function(index, element) {
		nav = $(this).attr('data-nav');
		$(this).after('<nav id="'+ nav +'"></nav>').cycle({
			 pager:  '#'+nav	
		})
	});
	
	// call with options
	$(".selectyze").Selectyze({
		theme:'medcel',
	});
});

		
$(document).ready(function(){
    $("#filter").keyup(function(){
		 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
        // Loop through the comment list
        $("#Arquivo p").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut(); 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
				$('#Arquivo').removeHighlight();
				if(!$.isEmptyObject(filter)){
					$(this).highlight(filter)
				}
                $(this).show();
                count++;
            }
        });
 
        // Update the count
		if(!$.isEmptyObject(filter)){
			var numberItems = count;
			$("#filter-count").text(count+' Ocorrência(s)');
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
})
