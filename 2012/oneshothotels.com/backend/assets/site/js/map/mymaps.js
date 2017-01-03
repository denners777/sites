/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    
    var Altura = $('#container').height();
    $('#MAPA').height(Altura);
    var $M_icon = $('#MAPA').attr('data-icon');
    var $M_content = $('#MAPA').attr('data-content');
    var $M_latitude = $('#MAPA').attr('data-latitude');
    var $M_longitude = $('#MAPA').attr('data-longitude');
    var $M_title = $('#MAPA').attr('data-title');
    var $M_id = $('#MAPA').attr('data-id');
    
    $("#MAPA").goMap({ 
        latitude: $M_latitude, 
        longitude: $M_longitude,
        zoom: 15 ,
        maptype: 'ROADMAP',
        prefixId: 'mark_',
        navigationControl: false, 
        mapTypeControl: false, 
        markers: [{
            latitude: $M_latitude, 
            longitude: $M_longitude,
            id: $M_id,
            group: 'fixo',
            icon: $M_icon,
            title: $M_title,
            html: { 
                content: $M_content
                //popup:true 
            } 
        }]
    });
    
    $.goMap.ready(function() {

        var URL  = $("#SELECT").attr('data-url');
        $.getJSON(URL, function(data) {
            //Percorre
            $(data).each(function(i,element){
            	var ID = 'id'+i;
            	var conteudo = '<big><b>'+element.content+'</b><br>'+ element.info +'<br>'+element.telefone+'</big>'
                //Marcador
                $.goMap.createMarker({
                    latitude: element.latitude,
                    longitude:  element.longitude,
                    group: element.group,
                    icon: element.icon,
                    title: element.title,
                    html: { 
                        content: conteudo
                    } 
                });
                
                //LISTA
                var HTML;
                HTML = $('<li><a href="javascript:;"><figure><img></figure><article><h3></h3><p class="info"></p><p class="tel"></p></article></a></li>');
                HTML.addClass(element.group);
                $('img',HTML).attr('src',element.logo);
                $('h3',HTML).text(element.content);
                $('p.info',HTML).text(element.info);
                $('p.tel',HTML).text(element.telefone);
                $('#POIS').append(HTML);
                $('#POIS li:eq('+ i +')').click(function(){
                    //$("#MAPA").
                     $.goMap.setMap({latitude:element.latitude, longitude:element.longitude}); 
                    	
                    	 $.goMap.createMarker({
		                    latitude: element.latitude,
		                    longitude:  element.longitude,
		                    group: element.group,
		                    icon: element.icon,
		                    title: element.title,
		                    html: { 
		                        content: conteudo,
		                       	popup: true 
		                    } 
                		});
                
                })
                
            //FIM
            })
            
        //Atrelando Evento uso Posterior
        /*
            $($.goMap.markers).each(function(i,marker){
                $.goMap.createListener({
                    type:'marker', 
                    marker:marker
                }, 'click', function() {
                    console.log(this);
                });

            });*/
        })
    });
    
    $("#group").change(function() {
        var group = $(this).val();

        if(group == 'all')
            for (var i in $.goMap.markers) {
                $.goMap.showHideMarker($.goMap.markers[i], true);
            } else {
            
            for (var i in $.goMap.markers) {
                $.goMap.showHideMarker($.goMap.markers[i], false);
            }
            
            $.goMap.showHideMarkerByGroup('fixo', true);
            $.goMap.showHideMarkerByGroup(group, true);
        }

    });
});
