$(document).ready(function(){
   
    $("a[data-url]").click(function(e){
        URL=$(this).attr("data-url");
        console.log(URL);
        $("#overlay table").load(URL,function(e){
            $("audio,video").mediaelementplayer()
            })
        })
    });
$(document).ready(function(e){
    $("a[rel]").overlay({
        mask:"#000",
        effect:"apple",
        fixed:false
    })
    
    
     oTable=$("#tab_discog").dataTable({
        "bPaginate":true,
        "bJQueryUI":true,
        "sPaginationType":"full_numbers"
    });
    });
    
