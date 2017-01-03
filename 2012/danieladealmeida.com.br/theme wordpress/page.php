<?php get_header(); ?>

<div role="main" class="main container_16">
    <section class="container_16">
    <div id="ListPost" class="grid_12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!--POST -->
      <article class="POST"> 
        <!--Cabeçalho -->
        <header>
          <time>
            <?php the_time('d/M/Y') ?>
          </time>
           <h1 class="ir hidden"> <?php  the_title(); ?></h1>

          <nav class="NavPost">
            <ul>
              <li class="Categoria"><?php the_category(' - '); ?></li>
               <?php the_tags('<li class="Tag">',' - ','</li>'); ?>
            </ul>
          </nav>
        </header>
        <!--/.Cabeçalho -->
        <div class="POSTContent">
          <?php the_content(); ?>
        </div>
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
