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
          <li>tags</li>
          <li class="active"><?php single_cat_title(); ?> </li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->
    </div>
    <!-- LINHA -->
    <div class="row">
      <?php
      $endereco = $_SERVER ['REQUEST_URI'];
      $end = array_filter(explode('/', $endereco));
      $i = 0;
      $total = count($end);
      $args = array('post_type' => 'produto', 'tag' => "$end[$total]");
      $loop = new WP_Query($args);
      //echo '<xmp>'; print_r($loop);
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
                <input type="button" onclick="addProduto(this, <?php echo $post->ID; ?>);" class="btn add ir" title="Adicionar a lista de desejo" />
                <a href="<?php echo get_post_permalink(); ?>" class="thumbnail">
                  <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=253&h=258&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
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
        <?php
        $i++;
        if ($i >= 3):
          ?>
        </div>
        <!-- /LINHA -->
        <!-- LINHA -->
        <div class="row">
          <?php
        endif;
      endwhile;
      ?>
    </div>
    <!-- /LINHA -->
  </div>
  <!-- /CONTEUDO -->
</div>
<!-- !MAIN -->
</div>
<!-- !WRAP -->
<?php get_footer(); ?>
<script>
  $(document).ready(function() {
    $('body').removeClass().addClass('produtos');
  });
</script>