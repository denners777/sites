jQuery(function($){
    var DadosSlides = new Array;
    $('#SliderData dt').each(function(){
        IMG = $(this).text();
        INFO = $(this).attr('data-info');
        TITULO = $(this).attr('data-title');
        Dados = {
            image : IMG,
            title : TITULO,
            thumb : IMG,
            url : '#'
        }
        DadosSlides.push(Dados);
    })
    
    $.supersized({
				
        // Functionality
        slideshow               :   1,			// Slideshow on/off
        autoplay				:	1,			// Slideshow starts playing automatically
        start_slide             :   1,			// Start slide (0 is random)
        stop_loop				:	0,			// Pauses slideshow on last slide
        random					: 	0,			// Randomize slide order (Ignores start slide)
        slide_interval          :   3000,		// Length between transitions
        transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed		:	1000,		// Speed of transition
        new_window				:	1,			// Image links open in new window/tab
        pause_hover             :   0,			// Pause slideshow on hover
        keyboard_nav            :   1,			// Keyboard navigation on/off
        performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
        image_protect			:	1,			// Disables image dragging and right click with Javascript
															   
        // Size & Position						   
        min_width		        :   0,			// Min width allowed (in pixels)
        min_height		        :   0,			// Min height allowed (in pixels)
        vertical_center         :   1,			// Vertically center background
        horizontal_center       :   1,			// Horizontally center background
        fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
        fit_portrait         	:   1,			// Portrait images will not exceed browser height
        fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
        // Components							
        slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
        thumb_links				:	1,			// Individual thumb links for each slide
        thumbnail_navigation    :   0,			// Thumbnail navigation
        slides : DadosSlides,
												
        // Theme Options			   
        progress_bar			:	1,			// Timer for each slide							
        mouse_scrub				:	0
					
    });
});

$(document).ready(function(e) {		
	      
    //$('#supersized').supersized(); 	    
	
    /*$('.menu_princ').collapse({
		parent: 'btn-navbar'
		
		});
	$('.menu_botton').collapse();*/
	
    var h = $('.menu_princ ul li').length;
    var $ht = 42*h;
	
    $('.btn-navbar').toggle(function(){
        $('.menu_princ').animate({
            height:$ht
        });
    }, function(){
        $('.menu_princ').animate({
            height:0
        });
    });
	
    $('.btn-navbar2').toggle(function(){
        $('.menu_botton').animate({
            height:151
        });
        //alert(1);
    }, function(){
        $('.menu_botton').animate({
            height:0
        });
        //alert(2);
    });
	
	
});	

$(document).ready(function(e) {
    $('#SubHeader .newsletter').toggle(function(){
        $('#SubHeader > form').animate({
            width:585
        },{
            complete: function(){
                $('#SubHeader > form div').animate({
                    opacity:1
                })
            }
        })
    //fim
    }, function(){
        $('#SubHeader > form div').animate({
            opacity:0
        },{
            duration:300,
            complete: function(){
                $('#SubHeader > form').animate({
                    width:0
                })
            }
        })
    });
	
    $('#SubHeader2 .newsletter').toggle(function(){
        $('#SubHeader2 > form').animate({
            height:150
        },{
            complete: function(){
                $('#SubHeader2 > form div').animate({
                    opacity:1
                })
            }
        })
    //fim
    }, function(){
        $('#SubHeader2 > form div').animate({
            opacity:0
        },{
            duration:300,
            complete: function(){
                $('#SubHeader2 > form').animate({
                    height:0
                })
            }
        })
    });
	
    $('#tray-button').toggle(function(){
        $('#controls-wrapper').animate({
            height:150
        });
        $('#tray-button').animate({
            bottom:160
        });
    }, function(){
        $('#controls-wrapper').animate({
            height:0
        });
        $('#tray-button').animate({
            bottom:64
        });
    });
	
    
});

	
$(document).ready(function(e) {
	///////////
	setTimeout(function(){
		$('html, body').animate({
			scrollTop: $('.menus h1').offset().top
		})
	},1000);
	
	/////////////
    $('#LogoHome').toggle(function(){ 
        $('.home .hotels').animate({ 
            height:'100%', 
            opacity:1 
        }) 
    }, 
    function(){ 
        $('.home .hotels').animate({ 
            opacity:0, 
            height: '0%'
        })
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
		
       /* //$('input[type=hidden]').trigger('click');
        if ($.browser.msie) {//hacked together for IE browsers
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