<?php get_header(); get_template_part('banner'); ?>
<div role="main">
  <div class="container_12 blog">
    <!-- Início conteudo -->
    <section class="grid_9 conteudo">
      <h1>
        <?php the_title(); ?>
      </h1>
      <hr color="#FFFFFF" />
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 	  $images = attachments_get_attachments();	  ?>
      <article class="posts">
        <a href="<?php the_permalink(); ?>">
          <div class="data">
            <b><?php echo the_time('d'); ?></b>
            <span><?php echo the_time('M'); ?></span>
          </div>
        </a>
        <div class="content">
          <hgroup>
            <h1>
              <?php the_title(); ?>
            </h1>
            <h4>
              <?php the_category(', '); ?>
            </h4>
          </hgroup>
          <p class="hyphenate">
            <?php the_content(); ?>
          </p>
        </div>
        <div class="gallery">
          <?php foreach($images as $img){ $IMG = get_bloginfo('template_url').'/timthumb.php?q=100&w=200&h=203&src='.$img['location']; ?>
          <a href="<?php echo $img['location']?>" class="lightbox" rel="<?php the_title();?>">
            <figure class="rota_1">
              <img src="<?php echo $IMG; ?>">
            </figure>
          </a>
          <?php } ?>
          <div class="clearfix">
          </div>
        </div>
      </article>
      <hr color="#FFFFFF" />
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </section>
    <!-- Fim conteudo -->
    <!-- Início sidebar -->
    <aside class="grid_3 sidebar">
      <?php dynamic_sidebar('widget-blog');?>
    </aside>
    <!-- Fim sidebar -->
  </div>
</div>
<?php get_footer(); ?>
