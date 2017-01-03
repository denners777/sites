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
          <li><a href="<?php bloginfo('home'); ?>/designers">designers</a></li>
          <li class="active"><?php single_post_title(); ?></li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <!-- DESIGNER -->
          <!-- FOTO -->
          <div class="col-md-6 col-xs-6">
            <div class="categoria">
              <?php
              if (has_post_thumbnail($post->ID)):
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                ?>
                <figure class="thumbnail">
                  <a href="<?php echo $image[0]; ?>" data-lightbox="produto" title="<?php the_title(); ?>">
                    <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=545&h=382&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                  </a>
                </figure>
              <?php endif; ?>
            </div>
          </div>
          <!-- !FOTO -->
          <!-- CONTEUDO -->
          <div class="col-md-6 col-xs-6">
            <div class="content conteudo">
              <hgroup>
                <h4><?php the_title(); ?></h4>
                <?php $nome_designer = the_slug(); ?>
              </hgroup>
              <?php the_content(); ?>
            </div>
          </div>
          <!-- !CONTEUDO -->
          <!-- !DESIGNER -->
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
    <div class="row">
      <!-- OUTROS PRODUTO -->
      <div class="col-md-12">
        <div class="outros-produtos">
          <h5><span class="especial-under">__ </span> <b>Seus Produtos</b></h5>
          <div class="row">

            <!-- ITEM -->
            <div class="item container">
              <?php
              $i = 0;
                $args2 = array('post_type' => 'produto', 'meta_key' => 'wpcf-designer', 'meta_value' => $nome_designer);
                $loop2 = new WP_Query($args2);
                while ($loop2->have_posts()) :
                  $loop2->the_post();
                  if (has_post_thumbnail($post->ID)):
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                    ?>
                    <div class="col-md-3 col-xs-6">
                      <!-- CATEGORIA -->
                      <div class="categoria clearfix">
                        <figure>
                          <input type="button" onclick="addProduto(this, <?php echo $post->ID; ?>);" class="btn add ir" title="Adicionar a lista de desejo" />
                          <a href="<?php echo get_post_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=255&h=255&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                          </a>
                        </figure>
                      </div>
                      <!-- /CATEGORIA -->
                    </div>
                    <?php
                  endif;

                  $i++;
                  if ($i > 3):
                    $i = 0;
                    ?>
                  </div>
                  <div class="item">
                    <?php
                  endif;
                endwhile;

              ?>
            </div>
            <!-- !ITEM -->

          </div>
          <div class="row clearfix naver">
            <a class="prev btn ir" href="javascript:;">Anterior</a>
            <div class="pagers col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1"></div>
            <a class="next btn ir" href="javascript:;">Próximo</a>
          </div>
        </div>
      </div>
      <!-- !OUTROS PRODUTO -->
    </div>
  </div>
</div>
<!-- !MAIN -->
</div>
<!-- !WRAP -->
<?php get_footer(); ?>
<script>
  $(document).ready(function() {
    $('body').removeClass().addClass('designers');
  });
</script>