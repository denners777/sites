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
          <li class="active">produtos</li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->
      <?php
      $args = array(
          'type' => 'post',
          'child_of' => 0,
          'parent' => '',
          'orderby' => 'name',
          'order' => 'ASC',
          'hide_empty' => 1,
          'hierarchical' => 1,
          'exclude' => '1',
          'include' => '',
          'number' => '',
          'taxonomy' => 'category',
          'pad_counts' => false
      );

      $categories = get_categories($args);

      foreach ($categories as $cat):
        if ($cat->parent == 0) :
          $args = array('post_type' => 'produto', 'category_name' => $cat->cat_name, 'posts_per_page' => 1);
          $loop = new WP_Query($args);
          while ($loop->have_posts()) : $loop->the_post();
            ?>
            <!-- PRODUTOS -->
            <div class="col-md-6">
              <!-- CATEGORIAS -->
              <div class="categorias clearfix">
                <div class="row">
                  <?php
                  if (has_post_thumbnail($post->ID)):
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                    ?>
                    <figure class="col-md-4 col-xs-4 figure-produtos">
                      <a href="<?php echo get_category_link($cat->cat_ID); ?>" class="thumbnail">
                        <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=155&h=155&src=' . $image[0]; ?>" alt="<?php echo $cat->cat_name; ?>" title="<?php echo $cat->cat_name; ?>" class="img-responsive" />
                      </a>
                    </figure>
                  <?php endif; ?>
                  <div class="col-md-8 col-xs-8">
                    <h2><a href="<?php echo get_category_link($cat->cat_ID); ?>" class="btn btn-link"><?php echo $cat->name; ?></a></h2>
                    <nav>
                      <ul class="lista-categorias clearfix row">
                        <?php
                        foreach ($categories as $childcat) :
                          if (cat_is_ancestor_of($cat->cat_ID, $childcat)) :
                            echo '<li class="col-md-6"><a href="' . get_category_link($childcat->cat_ID) . '">' . $childcat->cat_name . '</a></li>';
                          endif;
                        endforeach;
                        ?>
                        <li class="ver-mais col-md-6"><a href="<?php echo get_category_link($cat->cat_ID); ?>" class="btn btn-link">ver todos</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- /CATEGORIAS -->
            </div>
            <!-- /PRODUTOS -->
            <?php
          endwhile;
        endif;
      endforeach;
      ?>
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
    $('body').removeClass().addClass('produtos');
  });
</script>