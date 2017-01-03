<?php get_header(); ?>
	<div role="main" id="Parceirias">
		<hgroup>
			<h1 class="container_12">Parcerias</h1>
		</hgroup>
		<section>
        <?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 	'post_type' => 'parceria', 'paged' => $paged );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
			<article class="container_12">
				<figure class="grid_3">
					<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" />
				</figure>
				<div class="grid_8">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				</div>
			</article>
            <?php endwhile; ?>
		</section>
	</div>
	<?php get_footer(); ?>