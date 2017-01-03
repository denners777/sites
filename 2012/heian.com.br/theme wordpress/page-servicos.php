<?php get_header(); ?>
<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$('a.accordion').click(function(){
		var DIV  = $(this).parent().find('div.accordion');
		if(DIV.css('display')=='none'){
		DIV.slideDown("slow");
		}else{
			DIV.slideUp("slow");
		}
	});
});
</script>

<div role="main" class="clearfix" id="clientes" >
  <div class="container_12">
    <div class="grid_8">
      <section class="clearfix sec">
        <h1 class="h13">Serviços</h1>
        <big class="big1">O QUE DESENVOLVEMOS</big>
        <h2><img src="<?php bloginfo('template_url');?>/assets/img/item.png" /> A Equipe Heian apoia executivos e organizações em processos complexos <br />de transição. Para isso oferece:</h2>
        <?php 
			$newsArgs = array( 'post_type' => 'servicos', 'posts_per_page' => 20);
			$newsLoop = new WP_Query( $newsArgs );
			while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
		?>
        <div class="servicos">
          <a class="accordion title"> <?php the_title(); ?></a> 
          <a class="accordion subtitle" onMouseover="ddrivetip('Veja mais')" onmouseout = "hideddrivetip ()">			
          	<img src="<?php bloginfo('template_url');?>/assets/img/mais.png" />
          </a>
          <div style="clear:both;"></div>
          <div class="accordion clearfix">
            
              <?php the_content();?>
            
          </div>
        </div>
        <?php endwhile; ?>
      </section>
    </div>
    <div class="grid_4">
      <?php

            get_template_part('areadocliente');

            ?>
    </div>
  </div>
</div>
<?php get_footer();?>
