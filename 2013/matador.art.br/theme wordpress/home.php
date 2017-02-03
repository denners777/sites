<?php get_header(); get_template_part('banner-home'); ?>
<style>
	#main{
		min-height: 885px;
	}
</style>
  <section class="clearfix" role="main" id="home">
    <article class="container_24">
      <figure id="cartaz"><img src="<?php echo bloginfo('template_url');?>/assets/img/home_cartaz.png"></figure>
      <figure id="atores"><img src="<?php echo bloginfo('template_url');?>/assets/img/home_atores.png"></figure>
    </article>
  </section>
  <!--./#main --> 
  <?php get_footer(); ?>