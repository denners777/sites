<?php include 'header.php'; ?>
<!-- MAIN -->
<div id="main">
  <div class="container">
    <!-- CONTEUDO -->
    <div class="row">
      <!-- BREADCRUMB -->
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="page-home.php">home</a></li>
          <li>clientes</li>
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
      <div class="col-md-12">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
            $attachments = new Attachments('my_attachments');
            ?>
            <div class="content conteudo clearfix col-md-12">
              <h1 class="text-center"><?php the_title(); ?></h1>
              <!-- FOTO -->
              <div class="col-md-6 col-md-offset-3">
                <div class="categoria">
                  <figure class="thumbnail">
                    <?php
                    if (has_post_thumbnail($post->ID)):
                      $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                      $link = get_post_meta($post->ID, 'wpcf-link-cliente', true);
                      ?>
                      <a href="<?php echo $link; ?>" title="<?php the_title(); ?>" target="_blank">
                        <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=545&h=444&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                      </a>
                    <?php endif; ?>
                  </figure>
                </div>
              </div>
              <!-- !FOTO -->
            </div>
          <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
      </div>
    </div>
    <?php if ($attachments->exist()) : ?>
      <div class="row">
        <!-- OUTROS PRODUTO -->
        <div class="col-md-12">
          <div class="outros-produtos">
            <h5><span class="especial-under">__ </span> <b>Trabalhos</b></h5>
            <div class="row">
              <!-- TRABALHOS -->
              <?php $i = 0; ?>
              <!-- ITEM -->
              <div class="item container">
                <?php while ($attachments->get()) : ?>
                  <div class="col-md-3 col-xs-6">
                    <!-- CATEGORIA -->
                    <div class="categoria clearfix">
                      <figure class="clearfix">
                        <a href="<?php echo $attachments->src('full'); ?>" title="<?php echo $attachments->field('title'); ?> - <?php echo $attachments->field('caption'); ?>" data-lightbox="trabalho">
                          <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=182&h=193&src=' . $attachments->src('full'); ?>" alt="<?php echo $attachments->field('title'); ?>" class="img-responsive" />
                        </a>
                      </figure>
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
              <!-- !ITEM -->

              <!-- TRABALHOS -->
            </div>
            <div class="row clearfix">
              <div class="naver">
                <a class="prev btn ir" href="javascript:;">Anterior</a>
                <span class="pagers col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1"></span>
                <a class="next btn ir" href="javascript:;">Próximo</a>
              </div>
            </div>
          </div>
        </div>
        <!-- !OUTROS PRODUTO -->
      </div>
    <?php endif; ?>
  </div>
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