<?php echo $HEADER; ?>
<div role="main" id="container" class="container_12 container_free containerServicos" >
    <div class="element BoxRosa" style="margin-left:0px; background-color: <?php echo $HColor; ?>">
        <h2><?php echo $SERVICIO['DADOS']['TITULO']; ?></h2>
        <?php echo auto_typography($SERVICIO['DADOS']['DESC'][$IDIOMA]); ?>
        <?php if(!empty($SERVICIO['DADOS']['LINK'])){ ?>
        <a <?php echo (empty($SERVICIO['DADOS']['LINK'])) ? NULL : "href='{$SERVICIO['DADOS']['LINK']}'"; ?>><?php echo lang('habitaciones_linkReserva'); ?></a>
        <?php } ?> </div>
    <?php
    foreach ($SERVICIO['LISTA'] as $Servicio) {
        $IMAGEM = img(array(
            'src' => PublicDomain . $Servicio[Servicio::MetaDados]['IMG'],
            'title' => $Servicio[Servicio::MetaDados]['TITULO'],
            'alt' => $Servicio[Servicio::MetaDados]['DESC'][$IDIOMA],
                ));
        ?>
        <a <?php echo (empty($Servicio[Servicio::MetaDados]['LINK'])) ? NULL : "href='{$Servicio[Servicio::MetaDados]['LINK']}'"; ?> class="element">
            <figure> <?php echo $IMAGEM; ?>
                <figcaption class="mark ajuste"><?php echo img($Skin['servicios_'.strtolower($Servicio[Servicio::Tipo])]); ?></figcaption>
            </figure>
        </a> 
    <?php } ?>
</div>
<?php echo $FOOTER; ?>