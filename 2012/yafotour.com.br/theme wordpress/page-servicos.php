<?php get_header(); ?>
<div role="main" class="container_13 clearfix PGSTILO1" id="Servicos">
	<div class="grid_6 hyphenate">
		<hgroup>
			<h1>SERVIÇOS</h1>
			<h3> </h3>
		</hgroup>
		<p><b> </b></p>
		<?php   
            if (have_posts()) : while ( have_posts() ) : the_post(); 
			$images = attachments_get_attachments();
            the_content();
			endwhile; 
            endif; 
        ?>
		<div class="BoxInfonovo">
	<h2>RESERVAS?</h2>
	<a class="btnRed" href="<?php bloginfo('home')?>/reservas/">CLIQUE AQUI!</a>
	
	</div>
	</div>
	
	
</div>
<?php get_footer(); ?>
