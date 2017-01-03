/*
 * @autor luiz.vinicius73@gmail.com
 */
$(document).ready(function(e) {
    $('button[type=button][href]').click(function(e){
        URL = $(this).attr('href');
        parent.location = URL;
    })
    setTimeout(function(){
        refreshIsotope()   
    }, 900)
    $('.open_dialog_edit').click(function(){
        var INFO = $('info',this).html();
        var URL = $('post',this).html();
        var LINK = $('url',this).html();
        var DESC_EN = $('desk_en',this).html();
        var DESC_ES = $('desk_en',this).html();
        var IMG = $('imagem',this).html();
        
        $('#dialog_edit > .block > .section').html(INFO);
        $('#dialog_edit form').attr('action',URL);
        $('#dialog_edit form input[name=URL]').val(LINK)
        $('#dialog_edit form input[name=IMAGEM]').val(IMG)
        $('#dialog_edit form #D_EN').val(DESC_EN)
        $('#dialog_edit form #D_ES').val(DESC_ES)
    });
    
    
    
    $( ".datepicker" ).datepicker( "option", "dateFormat", 'dd/mm/yy' );
    
})

function adminicaGallery(){
    // Delete Button

    $(".delete_buttons li").addClass("delete_able").append('<div class="delete ui-icon ui-icon-trash dialog_button" data-dialog="dialog_delete"></div>');

    $(".delete").live("click", function(){
        $(".delete_able").removeClass("delete_cue");
        $(this).parents(".delete_able").addClass("delete_cue");
    });

    $(".delete_confirm").live("click", function(){
        $(".delete_cue").fadeOut("fast", function(){
            
            //var ELEMENTO = $(this);
            var DELETAR = $('DELETAR',this).html();
            $.get(DELETAR, function(data) {
                if(data=='DELETADO'){
                    console.log('Imagem deletada...');
                }else{
                    alert('Error al eliminar la imagen.');
                }
            });
            
            $(this).remove();
            $(".isotope_holder ul").isotope( 'remove', $(this) );
            refreshIsotope();
        });
    });



    // Fancy Box 2

    if($.fn.fancybox){
        $(".gallery.fancybox li a").fancybox({
            'overlayColor':'#000'
        });

        $("a img.fancy").fancybox();

        $("a.fancybox_media").fancybox({
            openEffect  : 'none',
            closeEffect : 'none',
            helpers : {
                media : {}
            }
        });
    }
}


$(document).ready(function(e) {
    setTimeout(function(){
        $('.datepicker').each(function(i,e){
           RESET = $(this).parents('form:not(.noreset)').find('[type=reset]').trigger('click');           
        })
    }, 1500)
    
})