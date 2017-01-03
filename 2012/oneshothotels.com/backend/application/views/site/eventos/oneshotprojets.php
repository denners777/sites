<?php echo $HEADER ?>
<!--[if IE 9]>
<style>
    #box_eventos {
        top: 2px !important; 
        margin-bottom:-1.1% !important;
    }
    #container.oneshotprojets #calendario .linha .meses .title {
    	top: -6px;
    }
</style>
<![endif]-->

<div role="main" id="container" class="eventos oneshotprojets container_12" >
    <div class="BoxRosa texts grid_5" style="height: 429px; ">
        <h2><?php echo $ProjectDados['title'][$IDIOMA]; ?></h2><a href="javascript:;" class="button"></a>
        <?php echo auto_typography($ProjectDados['text'][$IDIOMA]); ?>
    </div>
    <figure id="banner" class="eventos grid_7">
        <?php foreach ($Destaques as $Evento) { ?>

            <div class="item">
                <?php echo img(PublicDomain . $Evento[Evento::MetaDados]['FOTO'][0]); ?>
                <div class="box_legend">
                    <h2 class="summary"><?php echo $Evento[Evento::MetaDados]['TITLE']; ?></h2>
                    <a href="javascript:;" id="abrir" class="abrir" href="javascript:;"><?php echo lang('projetc_info'); ?></a>
                    <p class="description"> <?php echo $Evento[Evento::MetaDados]['DESC'][$IDIOMA]; ?></p>
                    <span><?php echo lang('evento_horario'); ?>: <span class="inicio"><?php echo $Evento[Evento::MetaDados]['INICIO']['H'], ':', $Evento[Evento::MetaDados]['INICIO']['M']; ?></span> <?php echo lang('evento_hasta'); ?> <span class="fim"><?php echo $Evento[Evento::MetaDados]['FIM']['H'], ':', $Evento[Evento::MetaDados]['FIM']['M']; ?></span></span> 
                    <a href="javascript:;" id="fechar" class="fechar" href="javascript:;"><?php echo lang('projetc_cerrar'); ?></a>
                </div>
            </div>

        <?php } ?>
    </figure>
    <div class="clearfix"></div>
    <div id="calendario">
        <div id="URLBase" style="display: none;"><?php echo $URLBase; ?></div>
        <div id="IDIOMA" style="display: none;"><?php echo $IDIOMA; ?></div>
        <div id="meses" style="display: none;"><?php echo $BASEASSETS; ?>/img/oneshotproject</div>
        <div id="figcaption" style="display: none;"><?php echo $BASEASSETS; ?>/img/calend_figcaption2.png</div>
        <div class="linha top">
            <div class="meses"> 
                <a href="javascript:;" id="anterior" class="anterior ir">Anterior</a> 
                <span class="title"></span> 
                <a href="javascript:;" id="proximo" class="proximo ir">Próximo</a> </div>
            <div class="busca">
                <?php echo form_open($URLBusca); ?>
                  <input type="text" id="buscar" name="buscar" placeholder="<?php echo lang('evento_busca'); ?>" />
                  <a class="button ir">Buscar</a>
            	<?php form_close(); ?>
            </div>
        </div>
        <div class="linha semana">
            <?php $DIAS = lang('evento_dias'); ?>
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
