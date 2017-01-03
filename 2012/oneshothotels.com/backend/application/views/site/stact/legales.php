<?php echo $HEADER; ?>
<div role="main" id="container" class="container_12 faq" >
    <h2>Legales</h2>

    <div class="grid_12">
        <?php
        foreach ($LEGALESLISTA as $key => $Legale) { ?>
                <h3><?php echo $Legale[Legale::Nome][$IDIOMA]; ?></h3>
        <?php echo auto_typography($Legale[Legale::Valor][$IDIOMA]); ?>
    <?php } ?>
    </div>
</div>
<?php echo $FOOTER; ?>