<?php echo $HEADER; ?>
<style>
	#container #guia_locais .scroll-pane li {
		border-left-color:	<?php echo $HColor; ?>;
	}
</style>
<div role="main" id="container" class="container_12 MAPA">
    <div style="background-color: <?php echo $HColor; ?>;" id="SELECT" data-url="<?php echo $LinkJSON; ?>" >
        <label><?php echo lang('guia_t'); ?></label>
        <?php echo form_dropdown('group', $TiposPOI, 'all', 'id="group" class="filter_map"'); ?>
    </div>
    <a id="guide2" href="<?php echo $LinkGuia; ?>" target="_new"><?php echo lang('guia_down'); ?></a>
    <a id="guide" href="<?php echo $LinkGuia; ?>" target="_new"><?php echo img(SITEASETS . 'img/' . lang('guia_img')); ?></a>
    <section id="guia_locais">
        <nav class="scroll-pane">
            <ul id="POIS">
            </ul>
        </nav>
    </section>
    <div id="MAPA"  data-id="<?php echo $HOTEL[Hotel::ID]; ?>" data-longitude="<?php echo $MARKER['longitude']; ?>"  data-latitude="<?php echo $MARKER['latitude']; ?>"  data-icon="<?php echo $MARKER['icon']; ?>"  data-content="<?php echo $MARKER['content']; ?>" data-title="<?php echo $MARKER['title']; ?>" ></div>
</div>
<?php echo $FOOTER; ?>