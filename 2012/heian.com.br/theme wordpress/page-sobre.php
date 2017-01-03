<?php
get_header(); 
?>

<div role="main" class="clearfix" id="quemsomos" >
<div class="container_12" > 
  <div class="grid_7 suffix_1">
  <section class="clearfix sec">
  <h1 class="h12">Sobre Nós</h1>
  	<?php   
		if (have_posts()) : 
		while ( have_posts() ) : the_post(); 
		the_content(); 
		endwhile; 
		endif; 
	?>
  </section>
  </div>
  <div class="grid_4">
    <?php 
		get_template_part('areadocliente'); 
	?>
    </div>
    <div class="relative">
      <div class="clearfix icons"> 
            <a href="<?php bloginfo('home');?>/faleconosco" class="alingicon" onMouseover="ddrivetip('Fale Conosco')" onmouseout = "hideddrivetip ()">
            	<img src="<?php bloginfo('template_url');?>/assets/img/email.png" >
            </a> 
            <a href="#" class="alingicon" onMouseover="ddrivetip('Cel.: +55 21 9999-9064 / 7118-8880')" onmouseout = "hideddrivetip ()">
            	<img src="<?php bloginfo('template_url');?>/assets/img/tel.png" >
            </a> 
            <a href="#" class="alingicon" onMouseover="ddrivetip('Endereço')" onmouseout = "hideddrivetip ()">
            	<img src="<?php bloginfo('template_url');?>/assets/img/local.png" >
            </a> 
       </div>
       <div class="clearfix icons1"> 
            <a href="<?php bloginfo('home');?>/faleconosco" class="alingicon" onMouseover="ddrivetip('Fale Conosco')" onmouseout = "hideddrivetip ()">
            	<img src="<?php bloginfo('template_url');?>/assets/img/email.png" >
            </a> 
            <a href="#" class="alingicon" onMouseover="ddrivetip('Cel.: +55 21 9999-9064 / 7118-8880')" onmouseout = "hideddrivetip ()">
            	<img src="<?php bloginfo('template_url');?>/assets/img/tel.png" >
            </a> 
            <a href="#" class="alingicon" onMouseover="ddrivetip('Endereço')" onmouseout = "hideddrivetip ()">
            	<img src="<?php bloginfo('template_url');?>/assets/img/local.png" >
            </a>
       </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
