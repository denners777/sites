<?php get_header(); get_template_part('banner'); ?>
<div role="main">
  <div class="container_12 corporativo">
    <!-- Início coluna 01 -->
    <section class="grid_6 coluna01">
      <?php 		$i = $ii = $iii = 1;		$args = array( 'post_type' => 'nosso-corporativo', 'order' => 'ASC' );        $loop = new WP_Query( $args );        while ( $loop->have_posts() ) : $loop->the_post(); 		$numposts = $loop->post_count;	?>
      <article class="servicos">
        <div class="mark serv_0<?php echo $ii; ?>">
          <?php echo $iii; ?>
        </div>
        <div class="content">
          <h1 class="title">
            <?php the_title(); ?>
          </h1>
          <p class="hyphenate">
            <?php $texto = get_the_content(); echo $texto; ?>
          </p>
        </div>
      </article>
      <?php	  	$j = $numposts / 2;			  	if($i > $j){			?>
    </section>
    <!-- Fim coluna 01 -->
    <!-- Início coluna 02 -->
    <section class="grid_6 coluna02">
      <?php		$i = 0; } $i++; $ii++; $iii++; if($ii == 10){$ii = 1;}	  ?>
      <?php endwhile; ?>
      <article class="boxpergunta">
        <h1 class="title">Contrate nossos serviços</h1>
        <div class="content">
          <a href="javascript:void(window.open('http://www.exactt.com.br/chat/chat.php','','width=590,height=580,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))">
            Clique Aqui
          </a>
          <span> ou ligue +55 (21) 2254-3049</span>
        </div>
      </article>
    </section>
    <!-- Fim coluna 02 -->
  </div>
</div>
<?php get_footer(); ?>
