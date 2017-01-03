//EVENTOS

//CALENDARIO DE EVENTOS
$(document).ready(function(e) {
    //VARIAVEIS GLOBAIS
    var $hoje     	= new Date();
    var $diaSemana 	= $hoje.getDay()+1;
    var $mes 		= $hoje.getMonth();
    var $diaHoje 	= $hoje.getDate();
    var $ano 		= $hoje.getFullYear();
    var $calendario = $('#calendario');
	
    function MAKECALENDAR($month, $year){
		
        //IMPRIMIR O MES E O ANO NO CABECARIO DO CALENDARIO
        $Idioma = $('#IDIOMA').text();
        if($Idioma == 'ES'){
           var $meses = new Array('ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SETIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'); 
        }else{
            var $meses = new Array('JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER');
        }
        
        $('.meses .title').text($meses[$mes] +' '+ $ano);
        //VARIAVEIS DE LOCACAO
        var $comeco  = $('#calendario .semana');
	
        //FUNCTIONS
        function ULTDIA(month,year) {
            var dd = new Date(year, month, 0);
            return dd.getDate();
        }
	
        function ULTSEM(month, year) {
            var dd = new Date(year, month, 0);
            return dd.getDay()+1;
		
        }
		
        //EXECUTA AS FUNCOES
        var $fin_mes_ant = ULTDIA($month, $year);
        var $fin_sem_ant = ULTSEM($month, $year);
        var $fin_est_mes = ULTDIA($month+1, $year);
		
        //PEGA O ULTIMO DOMINGO DO MES ANTERIOR
        switch($fin_sem_ant){
            case 1:
                $comeco_calendar = ULTDIA($month, $year);
                break;
            case 2:
                $comeco_calendar = ULTDIA($month, $year) - 1;
                break;
            case 3:
                $comeco_calendar = ULTDIA($month, $year) - 2;
                break;
            case 4:
                $comeco_calendar = ULTDIA($month, $year) - 3;
                break;
            case 5:
                $comeco_calendar = ULTDIA($month, $year) - 4;
                break;
            case 6:
                $comeco_calendar = ULTDIA($month, $year) - 5;
                break;
            //PARA NAO IMPRIMIR O MES ANTERIOR SE MES ATUAL COMECAR NO DOMINGO
            case 7:
                $comeco_calendar = ULTDIA($month, $year) + 1;
                break;
			  
            default:
                $comeco_calendar = ULTDIA($month, $year);
                break;
        }
		
        //VARIAVEIS UTILIZADAS
        var $i = $comeco_calendar;
        var $l = 0;
        var $d = 1;
        var $pas_mes = true;
        var $celula = new Array(); 
        var $linha  = new Array();
		
        // LINHAS DO CALENDARIO
        while( $l < 6){
			
            //RECEBE CLASSE 'l' PARA SER USADO SOMENTE DENTRO DA FUNCAO
            //RECEBE PROPRIEDADE CSS PARA FUTURA ANIMACAO
            $linha[$l] = $('<div></div>').addClass('linha l').css('opacity', 0);
			
            var $j = 0;
			
            //DIAS DO CALENDARIO
            while($j < 7){
				
                //IMPRIME O MES ANTERIOR
                while( $i <= $fin_mes_ant){
					
                    //RECEBE CLASSE 'k' PARA SER USADO SOMENTE DENTRO DA FUNCAO
                    //RECEBE PROPRIEDADE CSS PARA FUTURA ANIMACAO
                    $celula[$i] = $('<div></div>').addClass('cel outromes k').css('left','-180px').append('<span>' + $i + '</span>');
                    
                    //COLOCA DIA DENTRO DA LINHA
                    $($linha[$l]).append($celula[$i]);
                    $i++;
                    $j++;
                }
                if($j < 7){
                    if($pas_mes == true){ 
                        $class = 'estemes';
                    }else{
                        $class = 'outromes';
                    }
					
                    //IMPRIME MÃŠS ATUAL
                    //RECEBE CLASSE 'k' PARA SER USADO SOMENTE DENTRO DA FUNCAO
                    //RECEBE PROPRIEDADE CSS PARA FUTURA ANIMACAO
                    $celula[$j] = $('<div></div>').addClass('cel k '+ $class).attr('data-dia',$d).css('left','-180px').append('<span>' + $d + '</span>');
                    
                    //COLOCA DIA DENTRO DA LINHA
                    $($linha[$l]).append($celula[$j]);
                    $j++;
                    $d++;
                    if($d > $fin_est_mes){ 
                        $d = 1;
                        $pas_mes = false;
                    }
                }
            }
            $l++;
        }
        var $e = 5;
        //COLOCA AS LINHAS DE FORMA INVERSA DEPOIS DA LINHA COM CLASSE '.semana'
        while($e >= 0){
            $($comeco).after($linha[$e]);
            $e--;
        }
        //REALIZA ANIMACAO
        $($calendario).find('.l').animate({
            opacity:1
        },{
            duration:400
        });
        $($calendario).find('.k').animate({
            left:0
        },{
            duration:800
        });
        
        MAKEEVENTOS($mes, $ano);
    }
    
    ///PEGA EVENTOS
    function MAKEEVENTOS($mes, $ano){
        $Template = $('#template .event');
        $URLBase = $('#URLBase').text();
        $figcaption = $('#figcaption').text();
        $mes++;
        $URLBase = $URLBase + '/' + $ano + '/' + $mes;
        $dia = new Array();
        $.getJSON($URLBase, function(data){
            $(data).each(function(index,element){
                $d = $('#calendario .linha .estemes').filter('[data-dia='+element.dia+']');
                $d.addClass('evento');
                $d.find('span').wrap('<a></a>');
                $d.find('a').append('<figure></figure>');
                $d.find('figure').append(element.foto_1);
                $d.find('figure').append('<figcaption><img src="'+$figcaption+'"></figcaption>');
                $Template.clone().appendTo($d);
                $d.find('.col1 .summary').append(element.title);
                $d.find('.col1 .description p').append(element.desc);
                $d.find('.col1 .inicio').append(element.h_i);
                $d.find('.col1 .fim').append(element.h_f);
                $d.find('.col2 figure').append(element.foto_1, element.foto_2);
                
            })
            
            var $LINHA;
            var $WIDTH = $(window).width();
            var $BOXEVENTO = $('#box_eventos');
            var $CONTENT;
    
            $(window).bind("debouncedresize", function() {
                $WIDTH = $(window).width();
                $BOXEVENTO.animate({
                    height:0,
                    padding:0
                },{
                    duration:200
                });
                $('.eventos .ativo').removeClass('ativo');
                //$('.eventos').after($BOXEVENTO);
            })
    
            $('.evento a').click(function(){
        
                HTML = $(this).parent('.cel').find('.event').html();
                $($BOXEVENTO).html(HTML);
        
                if($WIDTH > 720){
                    $LINHA = $(this).parent('.cel').parent('.linha');
                }else{
                    $LINHA = $(this).parent('.cel');
                }
        
                $BOXEVENTO = $('#box_eventos');
                $($LINHA).after($BOXEVENTO);
                $CONTENT = $(this).parent('.cel');

                $BOXEVENTO.animate({
                    height:0,
                    padding:0
                },{
                    duration:200
                });
                setTimeout(function(){
                    //$('.eventos').after($BOXEVENTO);
                    
                },200);
                if($CONTENT.hasClass('ativo')){
                    $('.eventos .ativo').removeClass('ativo');
                }else{
                    $('.eventos .ativo').removeClass('ativo');
                    $CONTENT.addClass('ativo');
                    $BOXEVENTO.animate({
                        height:'100%',
                        padding:25
                    },{
                        duration:200
                    });
                    setTimeout(function(){
                        $($LINHA).after($BOXEVENTO);
                    },200);
                }
            });
            
            
        })
    }
    
    $('#buscar').change(function(e){
        Valor = $(this).val();
        URL = $(this).attr('data-urlbase')
        $.ajax({
            url: URL,
            dataType: 'json',
            data: {
                termo:Valor
            },
            success: function(data){
                if(!$.isEmptyObject(data)){
                    $($calendario).find('.k').animate({
                        left:180
                    },{
                        duration:800
                    });
                    $($calendario).find('.l').animate({
                        opacity:0
                    },{
                        duration:400
                    });
                    setTimeout(function(){
                        $($calendario).find('.l').remove();
                    },400);
                    
                   $mes = data.mes;
                   $mes--;
                   $ano = data.ano;
                   
                    setTimeout(function(){
                        MAKECALENDAR($mes, $ano);
                    },400)
                    
                }
            }
        });
    })    
    
    //CHAMA O CALENDARIO
    MAKECALENDAR($mes, $ano);
	
    //ATIVA BOTAO PARA MES ANTERIOR
    $('a#anterior').click(function(){
        $('#box_eventos').html('').css('padding', '0');
        $($calendario).find('.k').animate({
            left:180
        },{
            duration:800
        });
        $($calendario).find('.l').animate({
            opacity:0
        },{
            duration:400
        });
        setTimeout(function(){
            $($calendario).find('.l').remove();
        },400)
        $mes--;
        if($mes < 0){
            $mes = 11;
            $ano--;
        }
        setTimeout(function(){
            MAKECALENDAR($mes, $ano);
        },400)
		
    })
	
    //ATIVA TECLA PARA MES ANTERIOR
    $(document).keydown(function( event ){
        if( 37 == event.keyCode ){
            $('#box_eventos').html('').css('padding', '0');
            $($calendario).find('.k').animate({
                left:180
            },{
                duration:800
            });
            $($calendario).find('.l').animate({
                opacity:0
            },{
                duration:400
            });
            setTimeout(function(){
                $($calendario).find('.l').remove();
            },400)
		
            $mes--;
            if($mes < 0){
                $mes = 11;
                $ano--;
            }
            setTimeout(function(){
                MAKECALENDAR($mes, $ano);
            },400)
        }
    })
	
    //ATIVA BOTAO PARA MES SEGUINTE
    $('a#proximo').click(function(){
        $('#box_eventos').html('').css('padding', '0');
        $($calendario).find('.k').animate({
            left:180
        },{
            duration:800
        });
        $($calendario).find('.l').animate({
            opacity:0
        },{
            duration:400
        });
        setTimeout(function(){
            $($calendario).find('.l').remove();
        },400)
		
        $mes++;
        if($mes > 11){
            $mes = 0;
            $ano++;
        }
        setTimeout(function(){
            MAKECALENDAR($mes, $ano);
        },400)
    })
	
    //ATIVA TECLA PARA MES SEGUINTE
    $(document).keydown(function( event ){
        if( 39 == event.keyCode ){
            $('#box_eventos').html('').css('padding', '0');
            $($calendario).find('.k').animate({
                left:180
            },{
                duration:800
            });
            $($calendario).find('.l').animate({
                opacity:0
            },{
                duration:400
            });
            setTimeout(function(){
                $($calendario).find('.l').remove();
            },400)
            $mes++;
            if($mes > 11){
                $mes = 0;
                $ano++;
            }
            setTimeout(function(){
                MAKECALENDAR($mes, $ano);
            },400)
        }
    })
})

//ANIMACAO DA CAIXA DA PAGINA ONESHOTPROJECT
$(document).ready(function(e) {
	
    $('a.abrir').click(function(){
		
        $(this).parent('.box_legend').animate({
            top: 60
        },{
            duration:500
        });
        $(this).animate({
            opacity: 0
        },{
            duration:20
        });
        $(this).parent('.box_legend').find('p').animate({
            opacity: 1
        },{
            duration:20
        });
    })
	
    $('a.fechar').click(function(){
		
        $(this).parent('.box_legend').animate({
            top: 375
        },{
            duration:500
        });
        $(this).parent('.box_legend').find('a.abrir').animate({
            opacity: 1
        },{
            duration:20
        });
        $(this).parent('.box_legend').find('p').animate({
            opacity: 0
        },{
            duration:20
        });
    })
	
})
