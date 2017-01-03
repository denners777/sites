<?php echo $HEADER ?>
<!--[if IE 9]>
<style>
    #box_eventos {
        top: 2px !important; 
        margin-bottom:-1.1% !important;
    }
    #container.eventos #calendario .linha .busca{
    	top:13px;
    }
</style>
<![endif]-->
<div role="main" id="container" class="eventos container_12" >
    <div id="calendario">
        <div id="URLBase" style="display: none;"><?php echo $URLBase; ?></div>
        <div id="IDIOMA" style="display: none;"><?php echo $IDIOMA; ?></div>
        <div id="figcaption" style="display: none;"><?php echo $BASEASSETS; ?>/img/calend_figcaption.png</div>
        <div class="linha top">
            <div class="meses">
                <?php $NAV = lang('evento_nav')?>
                <a href="javascript:;" id="anterior" class="anterior ir"><?php echo $NAV[0]; ?></a> 
                <span class="title"></span> 
                <a href="javascript:;" id="proximo" class="proximo ir"><?php echo $NAV[1]; ?></a> 
            </div>
            <div class="busca">
                <?php echo form_open($URLBusca); ?>
                  <input type="text" id="buscar"  name="buscar" placeholder="<?php echo lang('evento_busca'); ?>" />
                  <a class="button ir">Buscar</a>
            	<?php form_close(); ?>
            </div>
        </div>
        <div class="linha semana">
            <?php $DIAS = lang('evento_dias')?>
            <div class="cel"><?php echo $DIAS[0]; ?></div>
            <div class="cel"><?php echo $DIAS[1]; ?></div>
            <div class="cel"><?php echo $DIAS[2]; ?></div>
            <div class="cel"><?php echo $DIAS[3]; ?></div>
            <div class="cel"><?php echo $DIAS[4]; ?></div>
            <div class="cel"><?php echo $DIAS[5]; ?></div>
            <div class="cel"><?php echo $DIAS[6]; ?></div>
        </div>
    </div>
    <section id="box_eventos" class="container_12"> </section>
    <div id="template">
        <div style="display: none" class="event">
            <div class="clear"></div>
            <div class="col1">
                <h2 class="summary" ></h2>
                <div class="description">
                    <p></p>
                </div>
                <span><?php echo lang('evento_horario'); ?>: <span class="inicio"></span> <?php echo lang('evento_hasta'); ?> <span class="fim"></span> </span> </div>
            <div class="col2">
                <figure> </figure>
            </div>
        </div>
    </div>
</div>
<?php echo $FOOTER ?>