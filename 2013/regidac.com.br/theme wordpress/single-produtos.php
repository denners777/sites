<?php get_header(); ?>
  <!-- DETALHE -->
  <div class="slid">
  </div>
  <!-- DETALHE -->
  <!-- main -->
  <section id="main" role="main" class="gradient">
    <div class="basic">
      <div class="sombra">
      </div>
      <div class="container_16 clearfix">
        <!-- TITLE -->
        <div class="grid_16 title">
          <hgroup>
            <h1>Produtos</h1>
          </hgroup>
        </div>
        <!-- /TITLE -->
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- PRODUTO -->
       
        <article class="grid_16 produto content" style="border:none;">
          <div class="alpha grid_13">
            <h1><span></span><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <a href="<?php echo get_bloginfo('url'); ?>/produtos" class="link gradient">VOLTAR</a>
          </div>
          <figure class="grid_3 omega">
            <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=142&h=137&src=' . wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>" />
            <div class="sombra">
            </div>
          </figure>
        </article>
        
        <!-- /PRODUTO -->
        <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="faixa_cinza gradient">
      <div class="sombra">
      </div>
    </div>
  </section>
  <!-- /main -->
<?php get_footer(); ?>