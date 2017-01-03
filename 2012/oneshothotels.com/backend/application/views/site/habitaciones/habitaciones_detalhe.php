<?php
echo $HEADER;
#print_r($HABITACIONE);
$METADADOS = $HABITACIONE[Habitacione::MetaDados];
$Titulo = $METADADOS['TITULO'][$IDIOMA];
$Descricao = $METADADOS['DESC'][$IDIOMA];
$LINK = $METADADOS['LINK'];
$TIPO = strtolower($HABITACIONE[Habitacione::Tipo]);
$IMAGEM = PublicDomain . $METADADOS['CAPA'];
?>
<div role="main" id="container" class="container_12" >
    <div class="elemento texto grid_3 "  style="background-color: <?php echo $HColor; ?>; margin-bottom:10px;" >
        <h2><?php echo $Titulo; ?></h2>
        <?php echo auto_typography($Descricao); ?>
        <a <?php echo (empty($LINK)) ? NULL : "href='{$LINK}'"; ?> ><?php echo lang('habitaciones_linkReserva'); ?></a> 
    </div>
    <figure id="Slider" class="elemento foto grid_9"> 
        <?php
        foreach ($Galeria['SLIDER'] as $IMG) {
            $IMAGE = array(
                'src' => PublicPath . $IMG[Galeria::MetaDados]['IMG'],
                'alt' => $IMG[Galeria::MetaDados]['DESC'][$IDIOMA],
                'title' => $IMG[Galeria::MetaDados]['DESC'][$IDIOMA],
                'class' => 'item'
            );

            echo img($IMAGE);
        }
        ?>
        <figcaption><?php echo img($Skin['habitaciones_'.$TIPO]) ?></figcaption>
        <nav> <a href="javascript:;" id="prev" class="ir">Prev</a> <a href="javascript:;" id="next" class="ir">Next</a> </nav>
    </figure>
    <div class="clearfix"></div>
    <div class="ajust">
        <div class="container_free">
            <?php
            foreach ($Galeria['IMAGENS'] as $IMG) {
                $IMAGE = array(
                    'src' => PublicPath . $IMG[Galeria::MetaDados]['IMG'],
                    'alt' => $IMG[Galeria::MetaDados]['DESC'][$IDIOMA],
                    'title' => $IMG[Galeria::MetaDados]['DESC'][$IDIOMA],
                );
                ?>
                <figure class="element">
                <?php echo img($IMAGE); ?>
                </figure>
        <?php } ?>
        </div>
    </div>
</div>
<?php echo $FOOTER; ?>