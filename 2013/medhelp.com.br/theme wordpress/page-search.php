<?php get_header(); ?>
<!-- MAIN -->

<div id="main" role="main"> 
  <!-- SECTION1 -->
  <section class="quem_somos container_24 clearfix">
  <article class="grid_22 prefix_1 suffix_1" >
    <?php if ( have_posts() ) : ?>
    <h2 class="pagetitle grid_13 alpha">
    	Resultados da pesquisa: 
		<?php $allsearch = &new WP_Query("s=$s&showposts=-1"); 
		$key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); 
		echo $key; _e('</span>'); _e(' ? '); echo $count . ' '; _e('arquivos'); wp_reset_query(); ?>
    </h2>
    
    <div class="grid_9 omega">
       <?php get_template_part('busca'); ?>
    </div>
    <div class="traco alpha grid_22 omega esp"></div>
    <div class="clear"></div>
    <div class="alpha omega grid_22">
    <?php $posts=query_posts($query_string . '&posts_per_page=-1'); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <h1 class="entry-title">
      <?php _e('Nada Encontrado'); ?>
    </h1>
    <div class="entry-content">
      <p>
        <?php echo( 'Desculpe, mas nada foi encontrado com os seus critérios de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.' ); ?>
      </p>
    </div>
    <!-- .entry-content --> 
  </article>
  <!-- #post-0 -->
  
  <?php endif; ?>
</div>
<div class="clear"></div>
<div class="espaco"></div>
</article>
<div class="sombra"></div>
</section>
<!-- /SECTION1 -->
</div>
<!-- /MAIN -->
<?php get_footer(); ?>
