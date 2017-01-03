/* Author:

*/

$(document).ready(function () { 
     
    $('#NavMenu li').hover(
        function () {
            //show its submenu
            $('ul', this).slideDown(100);
 
        }, 
        function () {
            //hide its submenu
            $('ul', this).slideUp(100);         
        }
    );
	
	/*MUDANDO TITULOS*/
	var H1 = $('h1.ir').html();
	$('#TitleH1').html(H1);
	
	/*Slide*/
	 $(".scrollable").scrollable({keyboard: true, circular: true, speed: 800} ).navigator();
	 $(".scrollable").autoscroll({ autoplay: true, interval: 8000, autopause: true });
     
});
