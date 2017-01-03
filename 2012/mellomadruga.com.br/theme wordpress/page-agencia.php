<?php /*
  Template Name: Blog 3 Columns
 */ ?>
<?php get_header(); ?>
<h1 class="page-title">
  <?php the_title(); ?>
</h1>
<?php if (have_posts()) :  while ( have_posts() ) : the_post(); ?>
<div class="clearfix">
  <?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
