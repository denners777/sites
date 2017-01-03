//EVENTOS

//CALENDARIO DE EVENTOS
$(document).ready(function(e) {
    //VARIAVEIS GLOBAIS
    var $hoje 		= new Date();
    var $diaSemana 	= $hoje.getDay()+1;
    var $mes 		= $hoje.getMonth();
    var $diaHoje 	= $hoje.getDate();
    var $ano 		= $hoje.getFullYear();
    var $calendario = $('#calendario');
    
    //IMPRIMIR O MES E O ANO NO CABEÃ‡ARIO DO CALENDARIO
    $Idioma = $('#IDIOMA').text();
    if($Idioma == 'ES'){
        var $meses = new Array('ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SETIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'); 
        var $fig_mes = 'es';
    }else{
        var $meses = new Array('JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBRE', 'OCTUBER', 'NOVEMBER', 'DICEMBER');
        var $fig_mes = 'en';
    }

    function MAKECALENDAR($month, $year){

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

        //PEGA O ÃšLTIMO DOMINGO DO MÃŠS ANTERIOR
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
            //PARA NÃƒO IMPRIMIR O MÃŠS ANTERIOR SE MÃŠS ATUAL COMEÃ‡AR NO DOMINGO
            case 7:
                $comeco_calendar = ULTDIA($month, $year) + 1;
                break;

            default:
                $comeco_calendar = ULTDIA($month, $year);
                break;
        }

        //VARIÃVEIS UTILIZADAS
        var $i = $comeco_calendar;
        var $l = 0;
        var $d = 1;
        var $pas_mes = true;
        var $celula = new Array(); 
        var $linha  = new Array();

        // LINHAS DO CALENDÃRIO
        while( $l < 6){

            //RECEBE CLASSE 'l' PARA SER USADO SOMENTE DENTRO DA FUNÃ‡ÃƒO
            //RECEBE PROPRIEDADE CSS PARA FUTURA ANIMAÃ‡ÃƒO
            $linha[$l] = $('<div></div>').addClass('linha l').css('opacity', 0);

            var $j = 0;

            //DIAS DO CALENDÃRIO
            while($j < 7){

                //IMPRIME O MÃŠS ANTERIOR
                while( $i <= $fin_mes_ant){

                    //RECEBE CLASSE 'k' PARA SER USADO SOMENTE DENTRO DA FUNÃ‡ÃƒO
                    //RECEBE PROPRIEDADE CSS PARA FUTURA ANIMAÃ‡ÃƒO
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
                    //RECEBE CLASSE 'k' PARA SER USADO SOMENTE DENTRO DA FUNÃ‡ÃƒO
                    //RECEBE PROPRIEDADE CSS PARA FUTURA ANIMAÃ‡ÃƒO
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
        //REALIZA ANIMAÃ‡ÃƒO
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
        $fig_base = $('#meses').text();
        $mes++;
        //console.log($URLBase); 
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
                $d.find('.col2 figure').append(element.foto_1);
                
                if(index == 0){

                    $IMG = $(element.foto_1).attr('src');
                    $FIG = $fig_base + '/' + $fig_mes + '/' +$mes+'.png';
                    $TITLE = element.title;
                    $DESC = element.desc;
                    $INI = element.h_i;
                    $FIM = element.h_f;
                    
                    $('figure.eventos > img').attr('src', $IMG);
                    console.log($FIG);
                    $('figure.eventos figcaption img').attr('src', $FIG);
                    $('figure.eventos .summary').text($TITLE);
                    $('figure.eventos .description').text($DESC);
                    $('figure.eventos .inicio').text($INI);
                    $('figure.eventos .fim').text($FIM); 
                }
            })
            
            ////////
            $('.evento a').click(function(){
                $Parent = $(this).parents('.evento');
                $IMG = $('a figure > img',$Parent).attr('src');
                $TITLE = $('.summary',$Parent).text();
                $DESC = $('.description',$Parent).text();
                $INI = $('.inicio',$Parent).text();
                $FIM = $('.fim',$Parent).text();
                
                $('html, body').animate({
                    scrollTop: $('body').offset().top
                }, {
                    duration:700,
                    complete: function(){
                        $('.eventos').fadeOut(300, function(){
                            $('.eventos > img').attr('src', $IMG);
                            $('.eventos .summary').text($TITLE);
                            $('.eventos .description').text($DESC);
                            $('.eventos .inicio').text($INI);
                            $('.eventos .fim').text($FIM); 
                            $('.eventos').fadeIn(300);
                        })
                        
                    }
                });
            });       
            
            
        ///////
            
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

    //ATIVA BOTAO PARA MAS ANTERIOR
    $('a#anterior').click(function(){
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
    

    //ATIVA TECLA PARA MAS ANTERIOR
    $(document).keydown(function( event ){
        if( 37 == event.keyCode ){
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

    //ATIVA BOTAO PARA MAS SEGUINTE
    $('a#proximo').click(function(){
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

    //ATIVA TECLA PARA MÃŠS SEGUINTE
    $(document).keydown(function( event ){
        if( 39 == event.keyCode ){
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

//ANIMAÃ‡ÃƒO DA CAIXA DA PAGINA ONESHOTPROJECT
$(document).ready(function(e) {

    $('a#abrir').click(function(){

        $('.box_legend').animate({
            height: 240
        },{
            duration:500
        });
        $(this).animate({
            opacity: 0
        },{
            duration:20
        });
        $('.box_legend p, .box_legend span').animate({
            opacity: 1
        },{
            duration:20
        });
    })

    $('a#fechar').click(function(){

        $('.box_legend').animate({
            height: 60
        },{
            duration:500
        });
        $('a#abrir').animate({
            opacity: 1
        },{
            duration:20
        });
        $('.box_legend p, .box_legend span').animate({
            opacity: 0
        },{
            duration:20
        });
    })

})


    
$(document).ready(function(){
    
    })