<?php get_header(); ?>
<!-- MAIN -->
<div id="main">
  <div class="container">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
        $attachments = new Attachments('my_attachments');
        ?>
        <!-- CAROUSEL -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <!-- INDICADORES -->
          <ol class="carousel-indicators">
            <?php
            if ($attachments->exist()) :
              $i = 0;
              $imagens = '';
              while ($attachments->get()) :
                ?>
                <li data-target="#carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ? 'active' : ''; ?>"></li>
                <?php
                $i == 0 ? $active = 'active' : $active = '';
                $imagens .= '<figure class="item ' . $active . '">
                  <a href="' . $attachments->field('caption') . '" title="' . $attachments->field('title') . '">
                    <img src="' . get_bloginfo('template_url') . '/timthumb.php?q=100&w=1140&h=393&src=' . $attachments->src('full') . '" alt="' . $attachments->field('title') . '" alt="' . $attachments->field('title') . '" class="img-responsive" />
                  </a>
                </figure>';
                ?>
                <?php
                $i++;
              endwhile;
            endif;
            ?>
          </ol>
          <!-- !INDICADORES -->
          <!-- IMAGENS -->
          <div class="carousel-inner">
            <?php echo $imagens; ?>
          </div>
          <!-- !IMAGENS -->
          <!-- CONTROLES -->
          <a class="left carousel-control" href="#carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          <!-- !CONTROLES -->
        </div>
        <!-- !CAROUSEL -->
        <?php
      endwhile;
    else:
    endif;
    ?>
    <!-- INFORME -->
    <div class="informe">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
    <!-- !INFORME -->
    <!-- BANNERS -->
    <div class="banners media">

      <!-- CAROUSEL -->
      <div id="banners" class="carousel slide" data-ride="carousel">
        <!-- INDICADORES -->
        <ol class="carousel-indicators">
          <?php
          $i = $j = 0;
          $args = array('post_type' => 'produto', 'meta_key' => 'wpcf-destaque', 'meta_value' => 1);
          $loop = new WP_Query($args);
          while ($loop->have_posts()) : $loop->the_post();
            if ($i == 0):
              ?>
              <li data-target="#banners" data-slide-to="<?php echo $j; ?>" class="<?php echo $j == 0 ? 'active' : ''; ?>"></li>
              <?php
              $j++; 
            endif;
            $i++;
            if ($i > 3) {
              $i = 0;
            }
          endwhile;
          ?>
        </ol>
        <!-- !INDICADORES -->
        <!-- IMAGENS -->
        <div class="carousel-inner">
          <div class="item active">
            <?php
            $i = $j = 0;
            $args = array('post_type' => 'produto', 'meta_key' => 'wpcf-destaque', 'meta_value' => 1);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) :
              $loop->the_post();
              if (has_post_thumbnail($post->ID)):
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                ?>
                <figure class="col-md-3 col-xs-6">
                  <a href="<?php echo get_post_permalink(); ?>" title="<?php the_title(); ?>">
                    <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=255&h=255&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
                  </a>
                </figure>
                <?php
              endif;

              $i++;
              $j++;
              if ($i > 3):
                $i = 0;
                if ($j != $loop->post_count):
                  ?>
                </div>
                <div class="item">
                  <?php
                endif;
              endif;
            endwhile;
            ?>
          </div>

        </div>
        <!-- !IMAGENS -->
        <!-- CONTROLES -->
        <a class="left carousel-control" href="#banners" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#banners" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <!-- !CONTROLES -->
      </div>
      <!-- !CAROUSEL -->
    </div>
    <!-- BANNERS -->
  </div>
</div>
<!-- !MAIN -->
</div>
<!-- !WRAP -->
<?php get_footer(); ?>