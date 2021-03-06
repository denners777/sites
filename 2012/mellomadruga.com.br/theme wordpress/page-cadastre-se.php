<?php get_header(); ?>

<h1 class="page-title">
  <?php the_title(); ?>
</h1>

<!-- Page Content -->
<div class="page-content clearfix">
  <div class="row">
    <?php
        if (have_posts ()) {

            while (have_posts ()) {

                (the_post());
        ?>
    <?php the_content(); ?>
    <?php }
        } else { ?>
    <div class="post box">
      <h3>
        <?php _e('There is not post available.', 'localization'); ?>
      </h3>
    </div>
    <?php } ?>
  </div>
</div>
<?php get_footer(); ?>
