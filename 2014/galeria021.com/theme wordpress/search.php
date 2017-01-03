<?php get_header(); ?>
<!-- MAIN -->
<div id="main">
  <div class="container">
    <!-- CONTEUDO -->
    <div class="row">
      <!-- BREADCRUMB -->
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><?php printf(__('Resultados da pesquisa para: %s'), '</li><li>' . get_search_query()); ?></li>
          <li class="active"><?php single_cat_title(); ?> </li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->
      <div class="col-md-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
          <?php endwhile; ?>
        <?php else : ?>
          <p>
            <?php _e('Desculpe, mas nada foi encontrado com os seus critérios de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.'); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- /MAIN -->
</div>
<!-- !WRAP -->
<?php get_footer(); ?>
<script>
  $(document).ready(function() {
    $('body').removeClass().addClass('conceito');
  });
</script>