jQuery(document).ready(function() {

	jQuery('.slider-item').hide();
	jQuery('.active').show();      
        jQuery("a[rel^='prettyPhoto']").prettyPhoto();
        
	
    jQuery(".navbar li:has(ul)").addClass('dropdown');
    jQuery(".dropdown > a").addClass('dropdown-toggle');
    jQuery(".dropdown-toggle").attr('data-toggle','dropdown');
    jQuery(".dropdown-toggle").append('<b class="caret"></b>');
    
    jQuery('#large_bg_img img').addClass('big');
    jQuery('#large_bg_img img').attr('id', 'image');
    
    jQuery('#tab li:first').addClass('active');
    jQuery('#myTabContent div:first').addClass('active');

        /* Isotope -------------------------------------*/

	  if( jQuery().isotope ) {

	    jQuery(function() {

            var container = jQuery('.article-items'),
                optionFilter = jQuery('#filters'),
                optionFilterLinks = optionFilter.find('a');

            optionFilterLinks.attr('href', '#');

            optionFilterLinks.click(function(){
                var selector = jQuery(this).attr('data-filter');
                container.isotope({
                    filter : '.' + selector,
                    itemSelector : '.article-item',
                    layoutMode : 'masonry',
                    animationEngine : 'best-available'
                });

                // Highlight the correct filter
                optionFilterLinks.removeClass('active');
                jQuery(this).addClass('active');
                return false;
            });

	    });
            
            
            
            jQuery(function() {

            var container = jQuery('.portfolio-single-small-imgs'),
                optionFilter = jQuery('#filters'),
                optionFilterLinks = optionFilter.find('a');

            optionFilterLinks.attr('href', '#');

            optionFilterLinks.click(function(){
                var selector = jQuery(this).attr('data-filter');
                container.isotope({
                    filter : '.' + selector,
                    itemSelector : '.portfolio-single-small-img',
                    layoutMode : 'masonry',
                    animationEngine : 'best-available'
                });

                // Highlight the correct filter
                optionFilterLinks.removeClass('active');
                jQuery(this).addClass('active');
                return false;
            });

	    });

	}
        
           
                   /* Blog Widget Hover -------------------------------------*/
                   
       jQuery('.blogwidget-img img').hover(function(){

        jQuery(this).addClass('current_img');
        jQuery('.current_img').stop().animate({
            opacity: 0.7
        }, 250);

    }, function(){

        jQuery('.current_img').stop().animate({
            opacity: 1
        }, 200);
        jQuery('.current_img').removeClass('current_img');

    });
    
        jQuery(function() {
        var $container = jQuery('.blogwidget-img');

        });
        
          /* Portfolio Hover -------------------------------------*/
        
       jQuery('.portfolio-single-imgs img').hover(function(){

        jQuery(this).addClass('current_img');
        jQuery('.current_img').stop().animate({
            opacity: 0.7
        }, 250);

    }, function(){

        jQuery('.current_img').stop().animate({
            opacity: 1
        }, 200);
        jQuery('.current_img').removeClass('current_img');

    });
    
        jQuery(function() {
        var $container = jQuery('.portfolio-single-small-imgs');

        });
        
          /* Blog Hover -------------------------------------*/
        
        jQuery('.blog-items img').hover(function(){

        jQuery(this).addClass('current_img');
        jQuery('.current_img').stop().animate({
            opacity: 0.7
        }, 250);

    }, function(){

        jQuery('.current_img').stop().animate({
            opacity: 1
        }, 200);
        jQuery('.current_img').removeClass('current_img');

    });
    
        jQuery(function() {
        var $container = jQuery('.blog-items img');

        });
        
             /* Blog Single Hover -------------------------------------*/
        
        jQuery('.img-container img').hover(function(){

        jQuery(this).addClass('current_img');
        jQuery('.current_img').stop().animate({
            opacity: 0.7
        }, 250);

    }, function(){

        jQuery('.current_img').stop().animate({
            opacity: 1
        }, 200);
        jQuery('.current_img').removeClass('current_img');

    });
    
        jQuery(function() {
        var $container = jQuery('.img-container img');

        });
        
          /* Blog Single Hover -------------------------------------*/
        
        jQuery('.article-img img').hover(function(){

        jQuery(this).addClass('current_img');
        jQuery('.current_img').stop().animate({
            opacity: 0.7
        }, 250);

    }, function(){

        jQuery('.current_img').stop().animate({
            opacity: 1
        }, 200);
        jQuery('.current_img').removeClass('current_img');

    });
    
        jQuery(function() {
        var $container = jQuery('.article-img img');

        });


        /* Portfolio Hover -------------------------------------*/

        jQuery('.article-hover').css({
        opacity: 0
    });

    jQuery('.article-hover').hover(function(){

        jQuery(this).addClass('current_project');
        jQuery('.current_project').stop().animate({
            opacity: 1
        }, 250);

    }, function(){

        jQuery('.current_project').stop().animate({
            opacity: 0
        }, 200);
        jQuery('.current_project').removeClass('current_project');

    });
                
});

jQuery(window).load(function() {


jQuery('.slider').show();
jQuery('.widgets').show();     
 
 jQuery('.img-slides').slides({
        autoHeight: true,
        generatePagination: true,
        pause: 1000,
                effect: 'slide',
                fadeSpeed: 300,
                slideSpeed: 300,
        hoverPause: false
    });

         jQuery('.pf-gallery .pagination a').click(function(){

     setTimeout(function(){jQuery('.article-nav .active').click();}, 300); //500 millisec delay
    
});
    
      jQuery('.article-nav .active').click();
    
    
        
    jQuery('#slides').slides({
        autoHeight: true,
        generateNextPrev: true,
        generatePagination: true,
        pause: 1000,
                effect: 'fade',
                fadeSpeed: 500,
                slideSpeed: 500,
        hoverPause: false
    });

jQuery('#testimonial-slides').slides({
        autoHeight: true,
        generatePagination: true,
        pause: 1000,
                effect: 'fade',
                fadeSpeed: 300,
                slideSpeed: 300,
        hoverPause: false
    });



jQuery('#blogwidget-slides').slides({
        autoHeight: true,
        generatePagination: true,
        pause: 1000,
                effect: 'fade',
                fadeSpeed: 300,
                slideSpeed: 300,
        hoverPause: false
    });
 
 // tooltip 
    jQuery('body').tooltip({
      selector: "a[rel=tooltip]"
    })
    
   
});

jQuery(window).resize(function(){
    
    var metaheight = jQuery('.active .testimonial-meta').outerHeight(),
        contentheight = jQuery('.active .testimonial-content').outerHeight(),
        testimonialheight = metaheight + contentheight,
        image_height = jQuery('.active .slider-imgs').outerHeight(),
        text_height = jQuery('.active .slider-text').outerHeight(),
        blogwidget_height = jQuery('#blogwidget-slides .active').outerHeight();
        imgslides_height = jQuery('.pf-gallery .slides_control .active a img').outerHeight();
             
    if (image_height > text_height) curr_height = image_height; else curr_height = text_height;
 
    jQuery('.slider .slides_control').css('height', curr_height);
    jQuery('#testimonial-slides .slides_control').css('height', testimonialheight);
    jQuery('#blogwidget-slides .slides_control').css('height', blogwidget_height);
    jQuery('.pf-gallery .slides_control').css('height', imgslides_height);
    jQuery('.article-nav .active').click();
   // setTimeout(function(){jQuery('.pf-gallery .pagination a').click();}, 600); //500 millisec delay
   
 
});
    
   
    

         
  