<?php
get_header(); 
?>
<div role="main" class="clearfix" >
  <div class="container_12" id="page">
    <div class="grid_8">
      <div class="clearfix sec">
        <h1 class="h12">Contatos</h1>
        <div class="divbig"><big class="big1">FALE CONOSCO</big></div>
        <p>Aqui você pode <strong>entrar em contato</strong> com a gente.<br />
          Envie sua mensagem, que responderemos o mais breve possível.</p>
        <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="grid_4">
      <?php 
		get_template_part('areadocliente'); 
	?>
    <div class="maps">
    <iframe width="355" height="227" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Praia+do+Flamengo,+66,+Rio+de+Janeiro&amp;aq=0&amp;oq=Praia+do+flamengo,+66+-+&amp;sll=-22.9505,-43.18128&amp;sspn=0.006451,0.011362&amp;ie=UTF8&amp;hq=&amp;hnear=Praia+do+Flamengo,+66+-+Flamengo,+Rio+de+Janeiro,+22210-030&amp;t=m&amp;z=14&amp;ll=-22.926945,-43.173605&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Praia+do+Flamengo,+66,+Rio+de+Janeiro&amp;aq=0&amp;oq=Praia+do+flamengo,+66+-+&amp;sll=-22.9505,-43.18128&amp;sspn=0.006451,0.011362&amp;ie=UTF8&amp;hq=&amp;hnear=Praia+do+Flamengo,+66+-+Flamengo,+Rio+de+Janeiro,+22210-030&amp;t=m&amp;z=14&amp;ll=-22.926945,-43.173605" style="color:#color:#DFA92B;text-align:right">Exibir mapa ampliado</a></small>
    <p style="font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif; color:#DFA92B; margin-bottom:5px;">Entre em contato conosco através das nossas mídias sociais, telefone ou email:</p>
      <div class="clearfix"> 
      	<a href="mailto:angela@heian.com.br" class="alingicon"onMouseover="ddrivetip('angela@heian.com.br')" onmouseout = "hideddrivetip ()">
        	<img src="<?php bloginfo('template_url');?>/assets/img/email.png">
        </a> 
        <a href="#" class="alingicon" onMouseover="ddrivetip('Cel.: +55 21 9999-9064 / 7118-8880')" onmouseout = "hideddrivetip ()">
        	<img src="<?php bloginfo('template_url');?>/assets/img/tel.png">
        </a> 
        <a href="#" class="alingicon" onMouseover="ddrivetip('LinkedIn')" onmouseout = "hideddrivetip ()">
        	<img src="<?php bloginfo('template_url');?>/assets/img/linkedin2.png">
        </a> 
        <a href="#" class="alingicon" onMouseover="ddrivetip('Twitter')" onmouseout = "hideddrivetip ()">
        	<img src="<?php bloginfo('template_url');?>/assets/img/twitter2.png">
        </a> 
        <a href="#" class="alingicon" onMouseover="ddrivetip('Facebook')" onmouseout = "hideddrivetip ()">
        	<img src="<?php bloginfo('template_url');?>/assets/img/facebook2.png">
        </a> 
      </div>
    </div>
    </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>
