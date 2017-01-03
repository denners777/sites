/*
 * PLACEHOLDER
 */
$(document).ready(function(){
    
    //Links sem destino
    $("a:not([href]),a[href=#]",'#container ').addClass('noLink').click(function(event) {
        event.preventDefault();
    })
    
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

//Slider
$(document).ready(function(e) {
    $('#Slider').cycle({
        fx: "scrollHorz", 
        pauseOnHover:"true", 
        speed:"600",
        prev:"#prev", 
        next:"#next",
        slides: '.item',
        swipe: true
    });
    $('#banner').cycle({
        fx: "scrollHorz", 
        pauseOnHover: true, 
        speed:600,
        slides: '.item',
        swipe: true
    });
});


//Isotope
$(function(){
    ////INICIO
    var $container = $('#container .row1');
    var $container2 = $('#container .row2');
    
    //ISOTOPO
    $container.isotope({
        itemSelector : '.elemento',
        // disable resizing
        resizable: true,
        layoutMode : 'masonry',
        // set columnWidth to a percentage of container width
        masonry: {
            columnWidth: $container.width() / 2
        }      
    });
          
    $container2.isotope({
        itemSelector : '.elemento',
        // disable resizing
        resizable: true,
        layoutMode : 'masonry',
        // set columnWidth to a percentage of container width
        masonry: {
            columnWidth: $container2.width() / 3
        }      
    });
        
        
    // update columnWidth on window resize
    $(window).smartresize(function(){
        $container.isotope({
            // set columnWidth to a percentage of container width
            masonry: {
                columnWidth: $container.width() / 2
            }
        });
            
        $container2.isotope({
            // set columnWidth to a percentage of container width
            masonry: {
                columnWidth: $container2.width() / 3
            }
        });
        
        setTimeout(function(){
           $container.isotope( 'reLayout');
           $container2.isotope( 'reLayout');
           $('.container_free').isotope( 'reLayout');
        },1000)
        
    });
    //FIM
    ////ISOTOPO
    
    //#Refaz
    setTimeout(function(){
        $('.container_free').isotope({
            itemSelector : '.element'
        });  
    },500)
    setTimeout(function(){
        $container.isotope( 'reLayout');
        $container2.isotope( 'reLayout');
        $('.container_free').isotope( 'reLayout');
    },1000);
    
    setTimeout(function(){
        $container.isotope( 'reLayout');
        $container2.isotope( 'reLayout');
        $('.container_free').isotope( 'reLayout');
    },1500);
    
    setTimeout(function(){
        $container.isotope( 'reLayout');
        $container2.isotope( 'reLayout');
        $('.container_free').isotope( 'reLayout');
    },2000);
	
	setTimeout(function(){
        $container.isotope( 'reLayout');
        $container2.isotope( 'reLayout');
        $('.container_free').isotope( 'reLayout');
    },3500);
    
});

//slider formulario
$(document).ready(function(e) {
    $('.barra_top .newsletter').toggle(function(){
        $('.barra_top > form').animate({
            width:530
        },{
            complete: function(){
                $('.barra_top > form div').animate({
                    opacity:1
                })
            }
        })
    //fim
    }, function(){
        $('.barra_top > form div').animate({
            opacity:0
        },{
            duration:300,
            complete: function(){
                $('.barra_top > form').animate({
                    width:0
                })
            }
        })
    });
    
    $('.barra_hide .newsletter').toggle(function(){
        $('.barra_hide > form').animate({
            height:150
        },{
            complete: function(){
                $('.barra_hide > form div').animate({
                    opacity:1
                })
            }
        })
    //fim
    }, function(){
        $('.barra_hide > form div').animate({
            opacity:0
        },{
            duration:300,
            complete: function(){
                $('.barra_hide > form').animate({
                    height:0
                })
            }
        })
    });

});

//collapse
$(document).ready(function(e) {
    
    var h = $('.menu_princ ul li').length;
    if(h == 1){
        var $ht = 56 + (51*h);
    }else{
        var $ht = 51 + (51*h);
    }
    
    
    $('.hide .button').toggle(function(){
        $('.aj').animate({
            marginTop:0
        });
        $('.menus').animate({
            height:$ht
        });
    }, function(){
        $('.menus').animate({
            height:1
        });
        $('.aj').animate({
            marginTop:17
        });
    });
    
    $('.hide_footer .button').toggle(function(){
        $('.menu_botton_hide').animate({
            height:165
        });
        $('.hide_footer').animate({
            height:200
        });
        $('footer').animate({
            height:242
        });
    }, function(){
        $('.menu_botton_hide').animate({
            height:0
        });
        $('.hide_footer').animate({
            height:42
        });
        $('footer').animate({
            height:84
        });
    });
    
    setTimeout(function(){
        $('.isotope').css('overflow','visible');
    },2100)

})

$(document).ready(function() {
    $('.scroll-pane').jScrollPane({
        verticalDragMinHeight: true, 
        autoReinitialise: true
    });
    
    $('.scroll-pane2').jScrollPane({
        verticalDragMinHeight: true, 
        autoReinitialise: true
    });
	
});
//prensa
$(document).ready(function() {
    var $TOOL = $('#InfoPresa');
    var $PAR;
    var $WIDTH = $(window).width();
    var $CONTENT;
    //redimensiona
    $(window).bind("debouncedresize", function() {
        $WIDTH = $(window).width();
        $TOOL.animate({
            height:0, 
            opacity:0
        },{
            duration:500
        });
        $('.prensa .ativo').removeClass('ativo');
        $('.prensa').after($TOOL);
    })
    //evento click
    $('.prensa a.grid_2').click(function(){
        
        e = $('figure span', this);
        M = $('#InfoPresa');
        
        TIME        = e.attr('data-time');
        TITLE       = e.attr('data-title');
        SUBTITLE    = e.attr('data-subtitle');
        CONTENT     = e.attr('data-content');
        LINK        = e.attr('data-link');
        
        M.find('time').text(TIME);
        M.find('h1').text(TITLE);
        M.find('h2').text(SUBTITLE);
        M.find('p').text(CONTENT);
        M.find('a').attr('href',LINK);
        
        //executa se screen maior que 720px
        if($WIDTH > 720){
            $PAR = $(this).parent('.container_12');
            $TOOL.removeClass('grid_3');
            $TOOL.addClass('container_12');
            $HEIGHTBOX = 166;
        }else{
            $PAR = $(this);
            $TOOL.removeClass('container_12');
            $TOOL.addClass('grid_3');
            $HEIGHTBOX = 290;
        }
        //acao minimizar
        $CONTENT = $('figure',this);
        $TOOL.animate({
            height:0,
            opacity:0
        },{
            duration:500
        });
        //setTimeout(function(){
        $('.prensa').after($TOOL);
        //},500);
        
        if($CONTENT.hasClass('ativo')){
            $('.prensa .ativo').removeClass('ativo');
        }else{
            $('.prensa .ativo').removeClass('ativo');
            $CONTENT.addClass('ativo');
            // setTimeout(function(){
            $($PAR).after($TOOL);
            $TOOL.animate({
                height:$HEIGHTBOX,
                opacity:1
            },{
                duration:500
            });
        //},300);
        }
    })
})


$(document).ready(function(e) {
    
    $('#LogoHome').toggle(function(){
        $('.hotelx').animate({ 
            height:215, 
            opacity:1 
        }) 
    }, 
    function(){
        $('.hotelx').animate({ 
            opacity:0, 
            height: 0
        })
    });
    
    
    var $WIDTH = $(window).width();
    
    $(window).bind("debouncedresize", function() {
        $WIDTH = $(window).width();
        if($WIDTH > 720){
            $('.BoxRosa.texts.grid_5').animate({ 
                height:429 
            });
        }else{
            $('.BoxRosa.texts.grid_5').animate({ 
                height:30 
            });
        }
    })
    
    
    $('.texts .button').toggle(function(){
        $('.BoxRosa.texts.grid_5').animate({ 
            height:429 
        }) 
    }, 
    function(){
        $('.BoxRosa.texts.grid_5').animate({ 
            height: 30
        })
    });

});


$(document).ready(function(){
    
    $('#group').find('option').each(function(){
        $Antigo = $(this).text();
        $Valor = $(this).val();
        $(this).text('<span class="'+$Valor +'"></span> ' + $Antigo);
    });
    
    $('.filter_map').change(function(e){
        $Valor = $(this).val();
        if($Valor=='all'){
            if($('#guia_locais').height()!=0){
                $('#guia_locais').height(0);
            };
        }else{
            $('#guia_locais li').hide().filter('.'+$Valor).show();
            $('#guia_locais').height(300);
            $('.scroll-pane','#guia_locais').height(300);
        }
        
    });
    
    $('#group,#preAdress,#preMode').Selectyze({
        theme : 'skype'
    });
    
    $('.selectyze2').Selectyze({
        theme : 'mac'
    });

});

function checkMail(mail){
    var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
    if(typeof(mail) == "string"){
        if(er.test(mail)){ 
            return true; 
        }else{
            return false; 
        }
    }else if(typeof(mail) == "object"){
        if(er.test(mail.value)){ 
            return true; 
        }else{
            return false;
        }
    }else{
        return false;
    }
}


$('#formG,#formP').submit(function(e){
    
        
    var Email = $('input[name=email]',this).val();
    var URL = $(this).attr('action');
    var centeredY, centeredX;
    //var Dados = $(this).serialize();
    
    if(checkMail(Email)){
        //$('input[type=hidden]').trigger('click');
       /* if ($.browser.msie) {//hacked together for IE browsers
    					centeredY = (window.screenTop - 120) + ((((document.documentElement.clientHeight + 120)/2) - (100/2)));
						centeredX = window.screenLeft + ((((document.body.offsetWidth + 20)/2) - (300/2)));
					}else{
						centeredY = window.screenY + (((window.outerHeight/2) - (100/2)));
						centeredX = window.screenX + (((window.outerWidth/2) - (300/2)));
					}
       window.open(URL,'NEWSL','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=300,height=100'+',left=' + centeredX +',top=' + centeredY); */
        return true;
    }else{
        return false;
    }
    
})

$(document).ready(function(){
    $('#file').click(function(){
        $('#filev').trigger('click');
    });
    $('#filev').change(function(e){
        $('#curriculo').val($('#filev').val());
    })
    
    setTimeout(function(){
        $('.mod').animate({
                opacity:0
            },{
                duration:800
            });
    },3000)
    ////BUSCA EVENTOS
    $('.busca form a:first').css('cursor','pointer').click(function(){
        $(this).parent('form').submit();
    })
	
});

$(function(){
    $('.HABITACIONES figcaption img').css('cursor','pointer').click(function(){
        var URL = $(this).parents('figure').find('a').attr('href');
        document.location = URL;
    })
})