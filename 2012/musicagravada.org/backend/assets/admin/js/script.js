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
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
});

$(document).ready(function(e) {
	
	
	
	$('#PTBR').wysihtml5();
	$('#ENUS').wysihtml5(); 
	$('#pes_desc').wysihtml5();
	$('#mus_obs').wysihtml5();
	
	
    $( '.dat' ).datepicker();
    
    $('#Modal').modal({
        backdrop: true,
        show: false
    })
        
    //MUSICAS
    $('.openModal').click(function(){
        e = $(this);
        M = $('#Modal');
        
        Titulo = e.attr('data-titulo');
        Nome = e.attr('data-nome');
        Desc = e.attr('data-desc');
        Link = e.attr('data-link');
        OPT = e.attr('data-OPT');
        
        M.find('h3').text(Titulo);
        M.find('label').text(Nome);
        M.find('p').text(Desc);
        M.find('#LINK').val(Link);
        M.find('#OptName').val(OPT);
  
        $('#Modal').modal('show');
    })
    
    $('#sendmodal').click(function(){
        LINK = $('#LINK').val()
        OPT = $('#'+$('#OptName').val());
        Dados = $('#valorModal').val();
        if(valida(Dados)){
            $.getJSON(LINK, {
                dados: Dados
            }, function(data) {
                OPT.html('');
                OPT.append('<option value="0"></option>');
                $.each(data, function(key, val) {
                    OPT.append('<option value="'+ val.ID  +'">'+ val.NOME +'</option>');
           
                });
                $('#Modal input[type=text]').val(null);
                OPT.parents('.control-group').toggleClass('success');
                //console.log(OPT.parent().parent().parent())
                $('#Modal').modal('hide');
                setTimeout(function(){
                    OPT.parents('.control-group').toggleClass('success');
                },8000)
        
            });
        }	
    })
    
    
    //VARIAVEIS
    $('.openModalVar').click(function(e){
        
        e = $(this);
        M = $('#Modal');
        
        ID = e.attr('data-id');
        Titulo = e.attr('data-titulo');
        Nome = e.attr('data-nome');
        Desc = e.attr('data-desc');
        Link = e.attr('data-link');
        Valor = $('#VAR'+ID).text();
        
        
        M.find('h3').text(Titulo);
        M.find('label').text(Nome);
        M.find('p').text(Desc);
        M.find('#LINK').val(Link);
        M.find('#valorModal').val(Valor);
        M.find('#OptID').val(ID)
             
        $('#Modal').modal('show');
    })
        
        
    $('#sendmodalvar').click(function(e){
        
        LINK = $('#LINK').val()
        Dados = $('#valorModal').val();
        ID = $('#OptID').val()
        if(valida(Dados)){
            $('#VAR'+ID).load(LINK, {NOME : Dados});
			$('#Modal').modal('hide');
        }
    })
	
        
});


$('.openModal2').click(function(e){
        
        e = $(this);
        M = $('#Modal2');
        
        ID = e.attr('data-id');
        Titulo = e.attr('data-titulo');
        Nome = e.attr('data-nome');
        Desc = e.attr('data-desc');
        Link = e.attr('data-link');
        Valor = $('#VAR'+ID).text();
        
        
        M.find('h3').text(Titulo);
        M.find('label').text(Nome);
        M.find('p').text(Desc);
        M.find('form').attr('action',Link);
        M.find('#valorModal2').val(Valor);
        M.find('#OptID2').val(ID)
             
        $('#Modal2').modal('show');
      
    })


function valida(VALOR) {

    var msg = "";
    var RETORNO = false;
		
    if(VALOR == ""){
        msg = "O Campo não pode ficar vazio";
        $('#Modal p').html(msg).parents('.control-group').addClass('error');
    }else{
        $('#Modal p').parents('.control-group').removeClass('error');
        RETORNO = true;
    }

    return RETORNO;
}

function valida2(VALOR) {

    var msg = "";
    var RETORNO = false;
		
    if(VALOR == NULL){
        msg = "O Campo não pode ficar vazio";
        $('#Modal p, #Modal2 p').html(msg).parents('.control-group').addClass('error');
    }else{
        $('#Modal p, #Modal2 p').parents('.control-group').removeClass('error');
        RETORNO = true;
    }

    return RETORNO;
}

/* lightbox */
	jQuery(document).ready(function($){
      $('.lightbox').lightbox().shake();
    }); 
	
	
