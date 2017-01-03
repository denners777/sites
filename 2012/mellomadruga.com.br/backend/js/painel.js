// JavaScript Document
$(document).ready(function(){
						   
	$("#p_busca").click(function(){   
		$('#busca').slideToggle(); // First click should toggle to 'show'
		return false;
	});
	
	$("#aextra").click(function(){  
		var linha = '<p><input type="text" name="extra_tit[]" class="extra" /><textarea name="extra[]" rows="1" class="extra"></textarea></p>';
		
		$('#extra').append(linha); // First click should toggle to 'show'
		
	});
	
	$(".extra").focus(function(){  
							   
		$(this).val("");
		
	});
	
	$("select").change(function () {
          var str = "";
          $("select option:selected").each(function () {
                str += $(this).val() + " ";
              });
          $("#ordem").val(str);
		  $("#avisualizar").attr('href', '/?preview=sim&o='+str)
        })
        
		$('iframe').load(function() {
				this.style.height =
				this.contentWindow.document.body.offsetHeight + 30 + 'px';
			}
		);


});

function exibe(termo) {

	$('#menu_'+termo).slideToggle("fast"); // First click should toggle to 'show'
	return false;

};

function menu_ctrl(cat,opt) {

	$('#menu_'+cat).show(); // First click should toggle to 'show'
	$('.menu_'+cat+'_'+opt).addClass('on');
	return false;

};

function corta_foto(termo){
	
	$('#iframe').show();
	$("#corta").attr("src","upload/f_corta.php?imagem="+termo+".jpg");
}

function corta_foto_s(termo){
	
	window.parent.$('#iframe').show();
	window.parent.$("#corta").attr("src","upload/f_corta.php?imagem="+termo+".jpg&etapa=1");
}

function fecha_corta(termo,foto) {
	window.parent.$('#iframe').hide();
	if(termo=='r'){ parent.window.location.reload(); }
	if(termo=='f'){
		$.post('f_pega.php',{foto:foto}, function(data){
				if(data!="") {
					window.parent.$('#fotoscad').append(data);	
				}		
        });
	}
}

function dest_foto_carrega(regiao,formato,dest) {

	var album = $('#'+regiao).val();
	//$('#'+regiao+'_fotos').hide(); // First click should toggle to 'show'
	$.post('destaques_foto.php',{regiao:regiao,album:album,formato:formato,destaque:dest}, function(data){
				if(data!="0") {
					$('#'+regiao+'_fotos td.carrega').html(data);
				}
				else {
					$('#'+regiao+'_fotos td.carrega').html('<input type="radio" name="sel_'+regiao+'" value="" style="display:none" />Sem foto');
				} 
        });

};