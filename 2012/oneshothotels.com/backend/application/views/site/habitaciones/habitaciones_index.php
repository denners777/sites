<?php echo $HEADER; ?>
<div role="main" id="container" class="container_12 HABITACIONES" >
    
    <?php foreach($LISTAHABITACIONES as $HABITACIONE){
        $METADADOS = $HABITACIONE[Habitacione::MetaDados];
        $Titulo = $METADADOS['TITULO'][$IDIOMA];
        $Descricao = $METADADOS['INDEXDESC'][$IDIOMA];
        $LINK = $METADADOS['LINK'];
        $TIPO = strtolower($HABITACIONE[Habitacione::Tipo]);
        $IMAGEM = PublicDomain.$METADADOS['CAPA'];
        ?>
    <div class="elemento texto grid_3 " style="background-color: <?php echo $HColor; ?>">
    	<h2><?php echo $Titulo; ?></h2>
        <?php echo auto_typography($Descricao); ?>
        <?php echo anchor("{$CIDADE[Cidade::Slug]}/{$HOTEL[Hotel::Slug]}/habitaciones/$TIPO",lang('habitaciones_linkReserva_det')); ?>
    </div>
    <figure class="elemento foto grid_9"> 
    	<?php echo anchor("{$CIDADE[Cidade::Slug]}/{$HOTEL[Hotel::Slug]}/habitaciones/$TIPO",img($IMAGEM)); ?>
        <figcaption><?php echo img($Skin['habitaciones_'.$TIPO]) ?></figcaption>
    </figure>
    <div class="clearfix"></div>
    <?php } ?>
 
</div>
<?php echo $FOOTER; ?>