<?php echo $HEADER; ?>
<div role="main" id="container" class="prensa" >

    <?php
    $Conta = 0;
    $Fim = FALSE;
    foreach ($PRENSALISTA as $Prensa){
         $Fim = TRUE;
        ?>
    <?php if(($Conta%6)==0){
        $Conta = 0; ?>
<!--  INICIO  -->
    <section class="container_12" style="  overflow: hidden;">
    <?php } $Conta++; ?>
        <a class="grid_2">

            <figure> 

                <?php echo img($Prensa[Prensa::Imagem]); ?>

                <figcaption class="mark">

                    <img src="<?php echo $BASEASSETS; ?>/img/lupa.jpg" />

                </figcaption>

                <span data-time="<?php echo $Prensa[Prensa::Data] ?>" data-title="<?php echo $Prensa[Prensa::Titulo] ?>" data-subtitle="<?php echo lang('prensa_dadosTitulo') ?>" data-content="<?php echo $Prensa[Prensa::Dados]['DESC'][$IDIOMA]; ?>" data-link="<?php echo $Prensa[Prensa::Arquivo] ?>"></span>

            </figure>

        </a>
  

 <?php if(($Conta%6)==0){ $Fim = FALSE;  ?>
    </section>
<!--  FIM  -->
<?php } ?>
    <?php } echo ($Fim) ? '<!--  FIM  --></section>'  : NULL; ?>
    

</div>

<section class="container_12" style="overflow: hidden; height: 0px; clear: both" id="InfoPresa">

        <article class="tooltip ">

            <div class="grid_2 baixo">

                <time></time>

                <h1></h1>

            </div>

            <div class="grid_6">

                <h2></h2>

                <p></p>

            </div>

            <div class="grid_3 prefix_1 baixo">

                <a><?php echo lang('prensa_dadosLink'); ?></a>

            </div>

        </article>

    </section>
<?php echo $FOOTER; ?>