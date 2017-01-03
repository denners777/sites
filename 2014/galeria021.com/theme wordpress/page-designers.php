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
          <li class="active">designers</li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->
      <div class="col-md-12">
        <div class="panel-group" id="accordion-designers">
          <?php
          $args = array('post_type' => 'designer', 'orderby' => 'title', 'order' => 'ASC');
          $loop = new WP_Query($args);
          while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="panel panel-default">
              <a data-toggle="collapse" data-parent="#accordion-dicas" href="#<?php echo $post->post_name; ?>" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <?php the_title(); ?>
                    <span class="plus"></span>
                  </h4>
                </div>
              </a>
              <div id="<?php echo $post->post_name; ?>" class="panel-collapse collapse">
                <div class="panel-body">
                  <?php
                  if (has_post_thumbnail($post->ID)):
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                    ?>
                    <figure class="col-md-3 col-xs-6 figure-produtos">
                      <a href="<?php echo get_post_permalink(); ?>" class="thumbnail">
                        <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=314&h=164&src=' . $image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive" />
                      </a>
                    </figure>
                  <?php endif; ?>
                  <div class="col-md-9 col-xs-6">
                    <?php the_content(); ?>
                    <a href="<?php echo get_post_permalink(); ?>" class="btn btn-link ver-mais desig">Continue lendo</a>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
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
    $('body').removeClass().addClass('designers');
  });
</script>