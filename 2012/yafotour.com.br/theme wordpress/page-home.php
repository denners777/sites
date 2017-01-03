<?php get_header(); ?>
<div role="main" class="container_13 clearfix MAIN"> 
	<!--Coluna 01 -->
	<div class="grid_4"> <img class="imgHome" src="<?php bloginfo('template_url');?>/assets/img/img_home.png" width="464" height="590"> </div>
	<!--Coluna02 -->
	<div class="prefix_4 grid_9">
		<?php   
            if (have_posts()) : while ( have_posts() ) : the_post(); 
            the_content();
			?> 
        <?php endwhile; 
            endif; 
        ?>
	</div>
</div>
<?php get_footer(); ?>