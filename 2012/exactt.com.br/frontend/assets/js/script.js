$(document).ready(function(e) {	 

/* Brazilian initialisation for the jQuery UI date picker plugin. */
/* Written by Leonildo Costa Silva (leocsilva@gmail.com). */
jQuery(function($){
	$.datepicker.regional['pt-BR'] = {
		closeText: 'Fechar',
		prevText: '&#x3c;Anterior',
		nextText: 'Pr&oacute;ximo&#x3e;',
		currentText: 'Hoje',
		monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
		'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
		'Jul','Ago','Set','Out','Nov','Dez'],
		dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','S&aacute;bado'],
		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','S&aacute;b'],
		dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','S&aacute;b'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 0,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['pt-BR']);
});


  /*Slide*/
	$('#items').after('<div class="navi clearfix" id="navi"></div>').cycle({ 
			
			fx:     'fade', 
			speed:  'slow', 
			timeout: 8000, 
			pager:  '#navi' 
		});
		
	$('#items2').after('<div class="navi clearfix" id="navi"></div>').cycle({ 
			
			fx:     'fade', 
			speed:  'slow', 
			timeout: 12000, 
			pager:  '#navi' 
		});
		
		
	$('.col02 :checkbox').simpleImageCheck({
		  image: 'assets/img/unchecked.png',
		  imageChecked: 'assets/img/check.png'
	 });
	 
	 $( "#dat-in" ).datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 2,
			minDate: 1,
			onSelect: function( selectedDate ) {
				$( "#dat-fim" ).datepicker( "option", "minDate", selectedDate );
			}
		});
		$( "#dat-fim" ).datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 2,
			onSelect: function( selectedDate ) {
				$( "#dat-in" ).datepicker( "option", "maxDate", selectedDate );
			}
		});

});