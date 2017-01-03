<?php get_header(); ?>
<script>

$(function($){

	$('#wrap').css('background','none');

	$('#header').parent().css('background','none');	

})

</script>

<!--Fotos -->

<div id="GidFotos">
  <div id="masonry">
    <?php 
		$Sl = array('Anita e Bradocs', 'Quadri 4', 'Cascais', 'Quadri 4', 'Anita', 'Anita', 'Estela', 'Estela', 'Florita', 'Cascais', 'Anita', 'Estela', 'Florita', 'Marmorita', 'Pepita', 'Flora'); 
		for($i=0;$i<16;$i++){ 
		}
		foreach($Sl as $k=> $t){
		?>
    
    <!-- Grid Item -->
    
    <div class="grid_item isotope-item">
      <a href="<?php echo bloginfo('url');?>/rerthy-boutique/" title="">
        <img src="<?php echo bloginfo('template_url');?>/assets/img/slider/<?php echo $k; ?>.jpg">
        <div>
          <span><?php echo $t; ?></span>
        </div>
      </a>
    </div>
    <?php } ?>
  </div>
</div>

<!--Fotos -->

<!--Box -->

<div class="container_24 boxHome">
  <div class="grid_8">
    <figure class="bx">
      <a href="<?php echo bloginfo('url');?>/rerthy-boutique/">
        <img src="<?php echo bloginfo('template_url');?>/assets/img/produtosb.jpg">
      </a>
    </figure>
  </div>
  <div class="grid_8">
    <figure class="bx">
      <a href="<?php echo bloginfo('url');?>/logopecas/">
        <img class="ab" src="<?php echo bloginfo('template_url');?>/assets/img/logopecas.png">
        <img src="<?php echo bloginfo('template_url');?>/assets/img/logopecas.jpg" height="104">
      </a>
    </figure>
  </div>
  <div class="grid_8">
    <figure class="bx">
      <a href="http://www.youblisher.com/p/479444-Catalogo-Rethry/" class="iframe">
        <img src="<?php echo bloginfo('template_url');?>/assets/img/catalogob.jpg">
      </a>
    </figure>
  </div>
</div>

<!--./Box -->

<?php get_footer(); ?>
