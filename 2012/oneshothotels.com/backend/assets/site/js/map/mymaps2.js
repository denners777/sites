var $M_icon = $('#MAPA').attr('data-icon');
var $M_content = $('#MAPA').attr('data-content');
var $M_latitude = $('#MAPA').attr('data-latitude');
var $M_longitude = $('#MAPA').attr('data-longitude');
var $M_title = $('#MAPA').attr('data-title');
var $M_id = $('#MAPA').attr('data-id');
var $M_MSGBienVindo = $('#MAPA').attr('data-MSGBienVindo');

var map;
$(document).ready(function(){
    var Altura = $('#container').height();
    $('#MAPA').height(Altura);
    map = new GMaps({
        div: '#MAPA',
        lat: $M_latitude,
        lng: $M_longitude,
        zoom : 12,
        disableDefaultUI: true
    });
    
    map.addMarker({
        lat: $M_latitude,
        lng: $M_longitude,
        title: $M_title,
        icon: $M_icon,
        infoWindow: {
            content: $M_content
        }
    });
    
    $('#preAdress , #address, #preMode').change(function(){
        if($('#preAdress').val()=='0'){
            $('#instructions').empty();
            map.cleanRoute();
            map.setCenter($M_latitude, $M_longitude);
            map.getRoutes({
                origin: [$M_latitude, $M_latitude],
                destination: ['-9.693766', '40.408987'],
                travelMode: $('#preMode').val()
            })
        }else{
            $('#instructions').empty();
            map.cleanRoute();
            CalcRota($('#preAdress').val());
        }
    })
    
    $('#exeCalculo').click(function(){
        CalcRota($('#address').val())
    });
    
    function CalcRota(valAddress){
        console.log($('#preMode').val());
        $('#instructions').empty();
        GMaps.geocode({
            address: valAddress,
            callback: function(results, status) {
                if (status == 'OK') {
                    $('#address').val(results[0].formatted_address);
                    var latlng = results[0].geometry.location;
                    map.setCenter(latlng.lat(), latlng.lng());
                    map.addMarker({
                        lat: latlng.lat(),
                        lng: latlng.lng(),
                        infoWindow: {
                            content: '<b>'+results[0].formatted_address+'</b>'
                        }
                    });
                    //$('#instructions').append('<li><b>Impossivel calcular rota</b></li>');
                    map.cleanRoute()
                    /*Calcula Rota*/
                    map.getRoutes({
                        origin: [latlng.lat(), latlng.lng()],
                        destination: [$M_latitude, $M_longitude],
                        travelMode: $('#preMode').val(),
                        callback: function(rota){
                            if($.isEmptyObject(rota)){
                                $('#instructions').append('<li><b>IMPOSSIVEL CALCULAR ROTA</b></li>');
                            }else{
                                map.travelRoute({
                                    origin: [latlng.lat(), latlng.lng()],
                                    destination: [$M_latitude, $M_longitude],
                                    travelMode: 'driving',
                                    start: function(dados){
                                        info = dados.legs;
                                        $('#instructions').empty();
                                        $(info).each(function(index,dad){
                                            if(index==0){
                                                $('#instructions').append('<li> '+dad.distance.text+'</li>');
                                                $('#instructions').append('<li> '+dad.duration.text+'</li>');
                                            }
                                        })
                                    //$('#instructions').append('<li>'+dados.legs.first()+'</li>');
                                    },
                                    step: function(e) {
                                        $('#instructions').append('<li>'+e.instructions+'</li>');
                                        map.drawPolyline({
                                            path: e.path,
                                            strokeColor: '#131540',
                                            strokeOpacity: 0.6,
                                            strokeWeight: 6
                                        });
                                    }
                                });
                            }
                            
                        }
                    });
                        
                    
                }else if(status == 'ZERO_RESULTS'){
                    $('#instructions').append('<li><b>Não Localizado</b></li>');
                }else{
                    $('#instructions').append('<li><b>erro</b></li>');
                }
            }
        });
    }
    
});