<?php get_header(); ?>

<div role="main" class="main container_16">
  <h1 class="ir hidden">Artigos  Dicas</h1>
  <section class="container_16">
    <div id="ListPost" class="grid_12">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!--POST -->
      <article class="POST"> 
        <!--Cabeçalho -->
        <header class="post2">
          <time>
            <a href="<?php the_permalink(); ?>" >
            <div class="bolha">
              <h4>+</h4>
              <!-- <h4><?php echo the_time('d'); ?></h4>
              <h5><?php echo the_time('M'); ?></h5> --> 
            </div>
            </a>
          </time>
          <h2> <a href="<?php the_permalink(); ?>" ><?php  the_title(); ?></a> </h2>
        </header>
        <!--/.Cabeçalho --> 
      </article>
      <!--FIM POST -->
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
    <aside class="grid_4 DestakDireita">
      <?php   dynamic_sidebar('widget-blog');?>
    </aside>
  </section>
</div>
<?php get_footer(); ?>
