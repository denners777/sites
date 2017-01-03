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
          <li><a href="<?php bloginfo('home'); ?>/produtos" title="Ver todos os posts em Produtos">produtos</a></li>
          <li>
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                the_category('</li><li>');
                ?>
                <?php
              endwhile;
            endif;
            ?>
          </li>
          <li class="active"><?php single_post_title(); ?></li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->
      <?php
      if (have_posts()) : while (have_posts()) : the_post();
          $attachments = new Attachments('my_attachments');
          ?>
          <!-- PRODUTO -->
          <!-- FOTO -->
          <div class="col-md-6 ">
            <div class="categoria">
              <?php
              if (has_post_thumbnail($post->ID)):
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                ?>
                <figure class="thumbnail">
                  <input type="button" onclick="addProduto(this, <?php echo $post->ID; ?>);" class="btn add ir" title="Adicionar a lista de desejo" />
                  <a href="<?php echo $image[0]; ?>" data-lightbox="produto" title="<?php the_title(); ?>" id="img-prod" data-mini="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=98&h=98&src=' . $image[0]; ?>">
                    <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=545&h=444&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                  </a>
                </figure>
              <?php endif; ?>
            </div>
            <div class="row categoria">
              <div class="col-md-6">
                Categorias: <?php the_category(', '); ?>
              </div>
              <div class="col-md-6">
                <?php $tags = the_tags('Palavras-chave: ', ', ', '<br />'); ?> 
              </div>
            </div>
          </div>
          <!-- !FOTO -->
          <!-- CONTEUDO -->
          <div class="col-md-6">
            <div class="content conteudo">
              <!-- TITLE -->
              <hgroup>
                <h4><?php the_title(); ?></h4>
                <?php
                if ($codigo = get_post_meta($post->ID, 'wpcf-cod', false)):
                  ?>
                <h6>cod. <?php echo $codigo[0]; ?></h6>
                <?php endif; ?>
              </hgroup>
              <!-- !TITLE -->
              <!-- CONTENT -->
              <?php the_content(); ?>
              <!-- !CONTENT -->
              <!-- MATERIAL -->
              <!-- CLIENTE PEDIU PARA SIMPLIFICAR
              <?php
              if ($material = get_post_meta($post->ID, 'wpcf-material', false)):
                $materia = '';
                foreach ($material as $key => $mat):
                  $materia .= $mat . ' - ';
                endforeach;
                ?>
                       <p><strong>Material:</strong> <?php echo substr($materia, 0, -3); ?> </p>
              <?php endif; ?>
              -->
              <!-- !MATERIAL -->

              <!-- MEDIDA -->
              <!-- CLIENTE PEDIU PARA SIMPLIFICAR
              <?php
              if ($medidas = get_post_meta($post->ID, 'wpcf-medidas', false)):
                $medida = '';
                foreach ($medidas as $key => $med):
                  $medida .= $med . ' | ';
                endforeach;
                ?>
                       <p><strong>Medidas:</strong> <?php echo substr($medida, 0, -3); ?> </p>
              <?php endif; ?>
              -->
              <!-- !MEDIDA -->
              <!-- PREPARACAO DOWNLOAD -->
              <?php
              if (has_post_thumbnail($post->ID)):
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
              endif;
              ?>
              <!-- !PREPARACAO DOWNLOAD -->
              <!-- DESIGNER -->
              <?php
              $designer = get_post_meta($post->ID, 'wpcf-designer', true);
              if (!empty($designer)):
                $args = array('post_type' => 'designer', 'name' => $designer);
                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();
                  ?>
                  <p><strong>Designer:</strong> <a href="<?php echo get_post_permalink(); ?>" class="btn btn-link"><?php the_title(); ?></a></p>
                  <?php
                endwhile;
              endif;
              ?>
              <!-- !DESIGNER -->
              <!-- DOWNLOAD -->

              <p><a href="<?php echo $image[0]; ?>" class="btn btn-link" target="_blank">Download</a></p>

              <!-- !DOWNLOAD -->
              <!-- FRASE -->
              <p class="text-danger">Disponível também em outras medidas</p>
              <!-- !FRASE -->
              <!-- MINI-FOTOS -->
              <?php if ($attachments->exist()) : ?>
                <figure class="thumbnail clearfix">
                  <?php while ($attachments->get()) : ?>
                    <a href="<?php echo $attachments->src('full'); ?>" data-lightbox="produto" class="prod-lightbox"></a>
                    <a href="<?php echo $attachments->src('full'); ?>" data-preview='<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=545&h=444&src=' . $attachments->src('full'); ?>' class="col-md-3 col-xs-6 lightbox-prod">
                      <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=98&h=98&src=' . $attachments->src('full'); ?>" alt="<?php echo $attachments->field('title'); ?>" class="img-responsive" />
                    </a>
                  <?php endwhile; ?>
                </figure>
              <?php endif; ?>
              <!-- MINI-FOTOS -->
            </div>
          </div>
          <!-- !CONTEUDO -->
          <!-- !PRODUTO -->
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
    <div class="row">
      <?php
      if (have_posts()) : while (have_posts()) : the_post();
          $categorys = get_the_category();
          $category = '';
          foreach ($categorys as $value) {
            if ($value->parent == 0) {
              $category = $value->name;
            }
          }
        endwhile;
      endif;
      $i = 0;

      if ($category != ''):
        ?>
        <!-- OUTROS PRODUTO -->
        <div class="col-md-12">
          <div class="outros-produtos">
            <h5><span class="especial-under">__ </span> <b>Outros Produtos</b></h5>
            <!-- LINHA -->
            <div class="row">
              <!-- ITEM -->
              <div class="item container">
                <?php
                $args = array('post_type' => 'produto', 'category_name' => "$category");
                $loop2 = new WP_Query($args);
                //exit(print_r($loop2));
                while ($loop2->have_posts()) : $loop2->the_post();
                  ?>
                  <div class="col-md-3 col-xs-6">
                    <!-- CATEGORIA -->
                    <div class="categoria clearfix">
                      <?php
                      if (has_post_thumbnail($post->ID)):
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                        ?>
                        <figure class="thumbnail">
                          <input type="button" onclick="addProduto(this, <?php echo $post->ID; ?>);" class="btn add ir" title="Adicionar a lista de desejo" />
                          <a href="<?php echo get_post_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=245&h=245&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
                          </a>
                        </figure>
                      <?php endif; ?>
                    </div>
                    <!-- /CATEGORIA -->
                  </div>
                  <?php
                  $i++;
                  if ($i > 3):
                    $i = 0;
                    ?>
                  </div>
                  <!-- !ITEM -->
                  <!-- ITEM -->
                  <div class="item container">
                    <?php
                  endif;
                  ?>
                <?php endwhile; ?>
              </div>
              <!-- !LINHA -->
              <div class="row clearfix naver">
                <a class="prev btn ir" href="javascript:;">Anterior</a>
                <div class="pagers col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1"></div>
                <a class="next btn ir" href="javascript:;">Próximo</a>
              </div>
            </div>
          </div>
          <!-- !OUTROS PRODUTO -->
        <?php endif; ?>
      </div>
    </div>
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