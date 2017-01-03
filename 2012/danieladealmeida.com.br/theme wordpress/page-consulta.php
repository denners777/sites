<?php get_header(); ?>
<div role="main" class="main container_16">
<h1 class="ir hidden">Consultas</h1>
<article class="container_16">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <div style="display: none;" id="imagem">
		<?php the_post_thumbnail(array(361,275)); ?>
    </div>
     <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
      <div class="grid_7 prefix_1">
			<div class="Pad13">
				<!-- <h2>Prato Saudável</h2>
				<small class="label-desk-Laranja">Clique na imagem para ampliar</small> -->
				<!--Foto -->
               <!-- <div class="BoxFotos grid_4 clearfix"> 
                	<a href="<?php echo bloginfo('home');?>/wp-content/uploads/2012/05/prato-saudavel-funcionali-pequena.jpg" rel="facebox">
                        <img src="<?php echo bloginfo('home');?>/wp-content/uploads/2012/05/prato-saudavel-funcionali-pequena.jpg" width="212"> </a>
                    <a href="<?php echo bloginfo('home');?>/wp-content/uploads/2012/05/prato-saudavel-funcionali-pequena.jpg" rel="facebox" class="ir btnPlus">Ver</a> 
                </div> -->
				<!--Foto -->
				<!--Foto -->
				<div id="Exibe"></div>
				<!--Foto -->
			</div>
		</div>
	</article>
</div>
<script>
    function carrega(ID) {
        var HTML = $('#' + ID).html();
        $('#Exibe').html(HTML);
    }

    $(function() {
        carrega('imagem')
    });

</script>
<?php get_footer(); ?>