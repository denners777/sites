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
          <li><a href=<?php bloginfo('home'); ?>produtos">produtos</a></li>         
          <?php
          $server = $_SERVER['SERVER_NAME'];
          $endereco = $_SERVER ['REQUEST_URI'];

          $end = array_filter(explode('/', $endereco));
          $posicao = array_search('category', $end);

          if ($end[$posicao + 2] != NULL) {
            $title = $end[$posicao + 1];
          } else {
            $title = NULL;
          }
          if ($title != NULL):
            ?>
            <li><a href="<?php echo "http://" . $server . '/wpgaleria021/category/' . $title; ?>"><?php echo $title; ?></a></li>
          <?php endif; ?>
          <li class="active"><?php single_cat_title(); ?> </li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->
    </div>
    <!-- LINHA -->
    <div class="row">
      <?php
      $i = 0;
      if (have_posts()) : while (have_posts()) : the_post();
          ?>
          <div class="col-md-3 col-xs-6">
            <!-- CATEGORIA -->
            <div class="categoria clearfix">
              <?php
              if (has_post_thumbnail($post->ID)):
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                ?>
                <figure>
                  <input type="button" onclick="addProduto(this, <?php echo $post->ID; ?>);" class="btn add ir" title="Adicionar a lista de desejo" />
                  <a href="<?php echo get_post_permalink(); ?>" class="thumbnail">
                    <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=253&h=258&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                  </a>
                  <figcaption>
                    <a href="<?php echo get_post_permalink(); ?>" class="btn btn-link">
                      <span class="especial-under">__ </span><?php the_title(); ?><span class="especial-under"> __</span>
                    </a>
                  </figcaption>
                </figure>
              <?php endif; ?>
            </div>
            <!-- /CATEGORIA -->
          </div>
          <?php
          if ($i >= 3):
            $i = 0;
            ?>
          </div>
          <!-- /LINHA -->
          <!-- LINHA -->
          <div class="row">
          <?php endif;
          $i++; ?>
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
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