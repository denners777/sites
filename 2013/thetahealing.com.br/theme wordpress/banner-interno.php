<?php
	 $endereco_url = $_SERVER ['REQUEST_URI'];
	 $end = explode('/',$endereco_url);
	 if($end[2] == 'quem-somos'){
		 $png = 'circulos';
	 }else 
	 	if($end[2] == 'cursos'){
		 	$png = 'circulos-amarelo';
		}else 
			if($end[2] == 'galeria'){
				$png = 'circulos-celeste';
			}else 
				if($end[2] == 'contatos'){
					$png = 'circulos-azul';
				}else{
					$png = 'circulos-verde';
				}
?>
<div class="container_24 clearfix">
  <div class="grid_6 prefix_18 banner-interno">
    	<div class="circulos" style='background: url("<?php echo bloginfo('template_url');?>/assets/img/<?php echo $png; ?>.png") no-repeat center;'> 
        	<img class="content" src="<?php echo bloginfo('template_url');?>/assets/img/fotobanner/circulo.png" /> 
        </div>
    </div>
</div>