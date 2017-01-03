<?php echo $HEADER; ?>
<div role="main" id="container" class="container_12 faq" >
    <h2>Frequently Asked Questions</h2>
    <div class="grid_6">
        <?php
        foreach ($FAQLISTA as $key => $FAQ) {
            if (($key % 2) == 0) {
                ?>
                <h3><?php echo $FAQ[Faq::Pergunta][$IDIOMA]; ?></h3>
                <?php echo auto_typography($FAQ[Faq::Resposta][$IDIOMA]); ?>
    <?php }
} ?>
    </div>

    <div class="grid_6">
        <?php
        foreach ($FAQLISTA as $key => $FAQ) {
            if (($key % 2) == 1) {
                ?>
                <h3><?php echo $FAQ[Faq::Pergunta][$IDIOMA]; ?></h3>
        <?php echo auto_typography($FAQ[Faq::Resposta][$IDIOMA]); ?>
    <?php }
} ?>
    </div>
</div>
<?php echo $FOOTER; ?>