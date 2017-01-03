<?php include 'header.php'; ?>
<!-- MAIN -->
<div id="main">
  <div class="container">
    <!-- CONTEUDO -->
    <div class="row">
      <!-- BREADCRUMB -->
      <ol class="breadcrumb">
        <li><a href="<?php bloginfo('home'); ?>">home</a></li>
        <li>clientes</li>
        <li class="active"><?php echo $_GET['category']; ?></li>
      </ol>
      <!-- /BREADCRUMB -->
      <?php
      $i = 0;
      $args = array('post_type' => 'cliente', 'category_name' => $_GET['category']);
      $loop = new WP_Query($args);

      while ($loop->have_posts()) : $loop->the_post();
        ?>
        <div class="col-md-3 col-xs-6">
          <!-- CATEGORIA -->
          <div class="categoria clearfix">
            <figure>
              <?php
              if (has_post_thumbnail($post->ID)):
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                ?>
                <a href="<?php echo get_post_permalink(); ?>" class="thumbnail">
                  <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=182&h=193&src=' . $image[0]; ?>" alt="imagem" class="img-responsive" />
                </a>
              <?php endif; ?>
              <figcaption>
                <a href="<?php echo get_post_permalink(); ?>" class="btn btn-link">
                  <span class="especial-under">__ </span><?php the_title(); ?><span class="especial-under"> __</span>
                </a>
              </figcaption>
            </figure>
          </div>
          <!-- /CATEGORIA -->
        </div>
      <?php endwhile; ?>
    </div>
    <!-- /CATEGORIA -->
  </div>
</div>
<!-- /CONTEUDO -->
</div>
<!-- !MAIN -->
</div>
<!-- !WRAP -->
<?php include 'footer.php'; ?>
<script>
  $(document).ready(function() {
    $('body').removeClass().addClass('cliente');
  });
</script>