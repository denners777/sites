<?php get_header(); ?>
<div role="main" class="main container_16">

  <h1 class="ir hidden"><?php single_tag_title();?></h1>

  <section class="container_16">

    <div id="ListPost" class="grid_12">

           
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 


      <!--POST -->

      <article class="POST"> 

        <!--Cabeçalho -->

        <header>

          <time>

            <?php echo the_time('d/M/Y - H:m')."h"; ?>

          </time>

          <h2>

            <?php  the_title(); ?>

          </h2>

          <nav class="NavPost">

            <ul>

              <li class="Categoria"><?php echo get_the_term_list( $post->ID, 'receitas-cat', '',' - ','' ); ?></li>
            </ul>

          </nav>

        </header>

        <!--/.Cabeçalho -->

        <div class="POSTContent">

          <?php the_content(); ?>

        </div>

      </article>
      <hr />

      <!--FIM POST -->

    <?php endwhile; ?>
     <?php else: ?>
      <?php endif; ?>
    </div>

    <aside class="grid_4 DestakDireita">
 <?php dynamic_sidebar('widget-receita');?>

    </aside>

  </section>

</div>

<?php get_footer(); ?>

