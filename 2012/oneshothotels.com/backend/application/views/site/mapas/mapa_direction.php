<?php echo $HEADER; ?>
<div role="main" id="container" class="container_12 MAPA">
    <div id="SELECT" class="dos" style="background-color: <?php echo $HColor; ?>;">
    
    	<h4><?php echo ($IDIOMA=='ES') ? 'Ubicación del Hotel' : 'Location of Hotel' ?></h4>
        <span><?php echo $HOTEL[Hotel::MetaDados]['endereco'] ?></span>
        
        <select id="preAdress">
            <option value="0"><?php echo lang('localizacion_selec'); ?></option>
            <?php foreach ($ListaAddress as $Address) { ?>
            <option value="<?php echo $Address[Mapa::MetaDados]['address']; ?>"><?php echo $Address[Mapa::MetaDados]['title'][$IDIOMA]; ?></option>
            <?php } ?>
        </select>
        
        <select id="preMode">
            <option value="driving"><?php echo lang('localizacion_auto'); ?></option>
            <option value="walking"><?php echo lang('localizacion_anda'); ?></option>
        </select>
        <!-- <div class="aj">
            <a id="exeCalculo">Calcular</a>
        </div> -->
        <div class="scroll-pane">
            <ul id="instructions"></ul>
        </div>
    </div>
    <div id="MAPA"  data-MSGBienVindo="Bem vindo a "  
                    data-id="<?php echo $HOTEL[Hotel::ID]; ?>" 
                    data-longitude="<?php echo $MARKER['longitude']; ?>"  
                    data-latitude="<?php echo $MARKER['latitude']; ?>"  
                    data-icon="<?php echo $MARKER['icon']; ?>"  
                    data-content="<?php echo $MARKER['content']; ?>" 
                    data-title="<?php echo $MARKER['title']; ?>" ></div>
</div>
<?php echo $FOOTER; ?>