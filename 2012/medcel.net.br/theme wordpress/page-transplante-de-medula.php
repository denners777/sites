<?php get_header(); ?>
	<div role="main" id="SinglePage">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<hgroup>
			<h1 class="container_12"><?php the_title(); ?></h1>
		</hgroup>
		<section class="container_12">
			<article class="prefix_3 grid_8">
				<figure class="Figure">
					<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>">
				</figure>
				<?php the_content(); ?>
			</article>
		</section>
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
	</div>
	<?php get_footer(); ?>