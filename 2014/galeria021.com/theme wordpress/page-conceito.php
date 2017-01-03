<?php get_header(); ?>
<!-- MAIN -->
<div id="main">
  <div class="container">
    <!-- CONTEUDO -->
    <div class="row">
      <!-- BREADCRUMB -->
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="<?php bloginfo('home'); ?>">home</a></li>
          <li class="active">conceito</li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->
      <div class="col-md-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="conteudo conteudo2">
              <?php the_content(); ?>
            </div>
          </div>
          <?php
          if (has_post_thumbnail($post->ID)):
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
            ?>
            <figure class="col-md-6 figure">
              <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=555&h=350&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
            </figure>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
    <!-- /CONTEUDO -->
  </div>
</div>
<!-- !MAIN -->
</div>
<!-- !WRAP -->
<?php get_footer(); ?>
<script>
  $(document).ready(function() {
    $('body').removeClass().addClass('conceito');
  });
</script>