function exibe(termo) {

	if(termo=="empresa"){ $('#incentivo').hide(); }
	if(termo=="incentivo"){ $('#empresa').hide(); }
	$('#'+termo).slideToggle("fast"); // First click should toggle to 'show'
	
	return false;

};

function galerias(total,acao) {
	
	$j = jQuery();
	
	//$('#'+termo).slideToggle("fast"); // First click should toggle to 'show'
	var atual = parseInt($('#fotoc').html());

	if(acao=="p") {
		var soma = atual+1;
		if(atual==total) { var soma = total }
		}
	
	if(acao=="a") {
		var soma = atual-1;
		if(atual==1) { var soma = 1; }
		}
		
	for (i=1;i<=total;i++){

		if(i==soma) {
			$('#afoto'+soma).css("display","block");
			var linkfoto = $('#afoto'+soma).attr("href");
			$('#zoomnav').attr("href",linkfoto);
		}
		else {$('#afoto'+i).css("display","none");} 
		
	}
	
	
	$('#fotoc').html(soma);
	return false;

};

$(document).ready(function(){
						   	
	$('#contato_form').submit(function(){
		
		
		
        var nome = $('#nome_ct').val();
        var empresa = $('#empresa_ct').val();
        var email = $('#email_ct').val();
		var ddd1 = $('#ddd1_ct').val();
		var tel1 = $('#tel1_ct').val();
		var ddd2 = $('#ddd2_ct').val();
		var tel2 = $('#tel2_ct').val();
		var msg = $('#msg_ct').val();
 
        $.post('forms_acoes.php',{modo:"contato", nome: nome,empresa: empresa,email: email,ddd1: ddd1,tel1: tel1,ddd2: ddd2,tel2: tel2,msg: msg}, function(data){
																																				   
				if(data=="s") { 
							$('#retorno_ct').html("Mensagem enviada com sucesso.");
							$('#bt_ct').attr('disabled', 'disabled');
							$(".cl", "#contato_form").each(function() { $(this).val(""); });
						}
				else {
					$('#retorno_ct').html("Ocorreu um erro. Tente novamente.");
					}		
        });
		
		return false;
		
	});
	
	$('#fotoadd').click(function(){

		var ctrl = parseInt($('#fotoctrl').html());
		
		if(ctrl!=5) {	
			$('#fotoctrl').html(1+ctrl);
			$('#fotos_promo').append('<input type="file" name="arquivo_promo[]" class="file" id="arquivo_promo'+(1+ctrl)+'" />'); 	
		}
		
	});
	
});