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
          <li class="active">conceito</li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->
      <div class="col-md-12">
        <div class="panel-group" id="accordion-dicas">
          <?php
          $args = array('post_type' => 'dicas', 'orderby' => 'title', 'order' => 'ASC');
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
                  <?php the_content(); ?>
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
    $('body').removeClass().addClass('dicas');
  });
</script>