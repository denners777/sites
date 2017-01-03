<?php get_header(); ?>
	<div role="main" id="SinglePage">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<hgroup>
			<h1 class="container_12"><?php the_title(); ?></h1>
		</hgroup>
		<section class="container_12">
			<article class="prefix_3 grid_8">
				<figure class="FigureSlide" data-nav="n99">
					<?php 
    $attachments = attachments_get_attachments();
    foreach($attachments as $Imagem){ ?>
    <img src="<?php echo $Imagem['location']; ?>"  style="width:642px; height:210px;">
    <?php } ?>
				</figure>
				<?php the_content(); ?>
			</article>
		</section>
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
	</div>
	<?php get_footer(); ?>