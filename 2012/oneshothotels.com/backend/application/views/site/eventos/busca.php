<?php echo $HEADER ?>
<!--[if IE 9]>
<style>
    #box_eventos {
        top: 2px !important; 
        margin-bottom:-1.1% !important;
    }
</style>
<![endif]-->

<div role="main" id="container" class="buscar container_12" >
  <div id="calendario">
    <div id="URLBase" style="display: none;"><?php echo $URLBase; ?></div>
    <div id="IDIOMA" style="display: none;"><?php echo $IDIOMA; ?></div>
    <div id="figcaption" style="display: none;"><?php echo $BASEASSETS; ?>/img/calend_figcaption.png</div>
    <div class="linha top">
      <div class="resultados">
      <h4><?php echo ($IDIOMA=='ES') ? 'RESULTADO' : 'RESULT'; ?> <span>(<?php echo $Resultados['Total']; ?> <?php echo lang('eventos_nome'); ?>)</span></h4>
      <?php /* <ul>
          <li><a href="#"><span class="prev"> < </span></a></li>
        <li><a class="active">1</a></li>
        <li><a>2</a></li>
        <li><a>3</a></li>
        <li><a>4</a></li>
        <li><a>5</a></li>
        <li><a href="#"><span class="next"> > </span></a></li>
      </ul> */ ?>
      </div>
      <div class="busca">
        <?php echo form_open($URLBusca); ?>
          <input type="text" id="buscar" value='<?php echo $Termo; ?>' name="buscar" placeholder="<?php echo lang('evento_busca'); ?>" />
          <a class="button ir">Buscar</a>
		<?php form_close(); ?>
      </div>
    </div>
    <section class="container_12">
    <?php if($Resultados['Total']>$Maximo){ ?>
    <div class="box_eventos_busca" style='font-family="din_engschrift_stdregular" ; text-transform: uppercase; font-size: 50px;'>
        <?php echo ($IDIOMA=='ES') ? 'Hemos encontrado muchos resultados. <br> Sé un poco más específico.' : 'We found many results. <br> Be a little more specific.'; ?>
    </div>
    <?php }else if($Resultados['Total']==0){ ?>
    <div class="box_eventos_busca" style='font-family="din_engschrift_stdregular" ; text-transform: uppercase; font-size: 50px;'>
        <?php echo ($IDIOMA=='ES') ? 'NO HEMOS ECONTRADO NINGÚN EVENTO.' : 'SORRY, WE CAN´T FIND ANYTHING.'; ?>
    </div>
    <?php } ?>
    <?php $T=0; foreach($Resultados['Dados'] as $Evento){ 
    if($T<$Maximo){
        $Dados = $Evento[Evento::MetaDados];
        $Inicio = $Dados['INICIO']['H'].'.'.$Dados['INICIO']['M'];
        $Fim = $Dados['FIM']['H'].'.'.$Dados['FIM']['M'];
        ?>
      <div class="box_eventos_busca clearfix">
        <div class="col1">
          <h2 class="summary" ><?php echo $Dados['TITLE']; ?></h2>
          <div class="description">
            <p><?php echo  $Dados['DESC'][$IDIOMA]; ?></p>
          </div>
          <span><?php echo ($IDIOMA=='ES') ? 'fecha: ' : 'date: '; echo $Evento[Evento::Data] ?></span><br>
          <span><?php echo lang('evento_horario'); ?>: <span class="inicio"><?php echo $Inicio ?></span> <?php echo lang('evento_hasta'); ?> <span class="fim"><?php echo $Fim; ?></span> </span> </div>
        <div class="col2">
          <figure>
          	<?php foreach($Dados['FOTO'] as $IMG){
                echo (empty($IMG)) ? NULL : img(PublicDomain.$IMG) ;
          	} ?>
          </figure>
        </div>
        <div class="clear"></div>
      </div>
    <?php } $T++; } ?>

    </section>
  </div>
</div>
<?php echo $FOOTER ?>