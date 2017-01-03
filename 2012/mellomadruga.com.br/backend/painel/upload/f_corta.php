<?php 

$imagem = $_GET["imagem"];
$etapa = $_GET["etapa"];
//450x243; 213x119; 940x413

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Painel // Mello&amp;Madruga</title>
<link rel="stylesheet" href="/css/upload.css" type="text/css" />
<link rel="stylesheet" href="/css/jcrop.css" type="text/css" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery.Jcrop.js"></script> 
<script type="text/javascript" src="/js/painel.js"></script>
<script type="text/javascript"> 
	
	$(window).load(function(){
		
		var api = $.Jcrop('#cropbox',{onChange: showCoords});
		
		$('#tam1').click(function() { api.animateTo([450,243,0,0]); $('#formato').val(1); });
		$('#tam2').click(function() {api.animateTo([213,119,0,0]); $('#formato').val(2);});
		$('#tam3').click(function() {api.animateTo([948,413,0,0]); $('#formato').val(3);});
		
		api.setOptions({ allowResize:false });
	
	});
	// Our simple event handler, called from onChange and onSelect
	// event handlers, as per the Jcrop invocation above
	function showCoords(c)
	{
		$('#x').val(c.x);
		$('#y').val(c.y);
		$('#x2').val(c.x2);
		$('#y2').val(c.y2);
		$('#w').val(c.w);
		$('#h').val(c.h);
	};
</script>

</head> 
<body> 
<div id="corpo">
	<?php if(empty($etapa)) { ?><p class="fechar"><a onclick="fecha_corta('n','')">FECHAR</a></p><?php } ?>
    <form action="f_corta_redimensiona.php" name="get" class="corta">
    <input type="hidden" name="etapa" value="<?php echo $etapa; ?>" />
			<p>&nbsp;</p>
            <?php if($etapa == 1) { ?><p><big>Etapa 1 de 3</big>:</p><p><a id="tam1">Clique aqui para definir o destaque da <b>home grande</b></a>.</p><?php } ?>
            <?php if($etapa == 2) { ?><p><big>Etapa 2 de 3</big>:</p><p><a id="tam2">Clique aqui para definir o <b>destaque menor</b></a>.<?php } ?>
            <?php if($etapa == 3) { ?><p><big>Etapa 3 de 3</big>:</p><p><a id="tam3">Clique aqui para definir o <b>destaque maior</b></a><?php } ?>
            
            <?php if(empty($etapa)) {?>
            <p>Clique em uma das opções de baixo para criar uma nova foto para destaque.</p>
            <p>
            <a id="tam1">Home Grande</a> | 
            <a id="tam2">Pequeno</a> | 
            <a id="tam3">Matéria</a>
            </p>
            <?php } ?>
            
            <p>Posicione a área de recorte no local desejado. Para recortar clique no botão Prosseguir.</p>
            <p><input type="submit" class="botao" value="Prosseguir" /></p>
            
        
        <img src="/upload/<?php echo $imagem; ?>" id="cropbox" alt="imagem" /> 
        <label style="display:none">X1 <input type="hidden" size="4" id="x" name="x" /></label> 
        <label style="display:none">Y1 <input type="hidden" size="4" id="y" name="y" /></label> 
        <label style="display:none">X2 <input type="hidden" size="4" id="x2" name="x2" /></label> 
        <label style="display:none">Y2 <input type="hidden" size="4" id="y2" name="y2" /></label> 
        <label style="display:none">Largura <input type="text" size="4" id="w" name="w" /></label> 
        <label style="display:none">Altura <input type="text" size="4" id="h" name="h" /></label>
        <input type="hidden" name="imagem" value="<?php echo $imagem; ?>" /> 
        <input type="hidden" name="formato" id="formato" />
    </form> 
</div>
</body> 
</html> 