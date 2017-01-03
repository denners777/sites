<?php get_header(); ?>
<div role="main" class="container_13 clearfix" id="Reserva">
	<div class="grid_7">
		<?php   
            if (have_posts()) : while ( have_posts() ) : the_post(); 
            the_content();
			?> 
        <?php 
			endwhile; 
            endif; 
        ?>
	</div>
	
	<div class="grid_6">
	
	</div>
	
</div>
<?php get_footer(); ?>