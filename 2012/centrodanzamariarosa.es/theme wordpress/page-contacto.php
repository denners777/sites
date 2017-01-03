<?php get_header(); ?>

<div class="container_12  sub-menu-shadow"></div>
<article role="main" class="container_12 clearfix PageContato">
  <h1 class="grid_12">centro de danza y bienestar</h1>
  <img class="imgTopoPaginas" src="<?php bloginfo('template_url');?>/assets/img/contacto.png" width="1027" height="142" />
  <div class="grid_4">
    <h2>Si quieres informarte sobre nuestros precios y horarios,</h2>
    <h3> envíanos un mensaje.</h3>
    <p>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
    </p>
  </div>
  <div class="grid_4" style="margin-top:35px;"> 
  	<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID)); ?>"> 
  </div>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>  
  <div class="grid_4">
    <h2>Ven a hacernos una visita</h2>
  <h3>De Lunes a Viernes <br />
  de 10.00 a 22.00. <br />
  Sábados de 10.00 a 14.00.</h3>
  <div class="InfoContatos">Abriremos el <strong>1 de Septiembre</strong> para matrículas y el curso comenzará el <strong>1 de Octubre</strong>.</div>
  <div id="" class="vcard"> <span class="fn n"> <span class="given-name">Centro de Danza Maria Rosa</span> <span class="additional-name"></span> <span class="family-name"></span> </span>
    <div class="org">Centro de Danza Maria Rosa</div>
    <div class="adr">
      <div class=" clearfix">
        <div class="iconPlace"></div>
        <span class="street-address">Calle Castelló, 23 (Metro Velázquez)</span> - <span class="postal-code">28001 </span> - <span class="locality">Madrid</span> , <span class="region">Madrid</span> <span class="country-name">España</span> </div>
      <div class="iconTel"></div>
      <?php dynamic_sidebar('telefone-contato');?>
    </div>
    <p>
    <iframe width="333" height="245" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Calle+Castell%C3%B3,+23+-+Madrid,+Espa%C3%B1a&amp;aq=&amp;sll=-14.239424,-53.186502&amp;sspn=53.683227,93.076172&amp;ie=UTF8&amp;hq=Calle+Castell%C3%B3,+23+-&amp;hnear=Madri,+Reino+da+Espanha&amp;t=m&amp;ll=40.424402,-3.681642&amp;spn=0.016964,0.041147&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Calle+Castell%C3%B3,+23+-+Madrid,+Espa%C3%B1a&amp;aq=&amp;sll=-14.239424,-53.186502&amp;sspn=53.683227,93.076172&amp;ie=UTF8&amp;hq=Calle+Castell%C3%B3,+23+-&amp;hnear=Madri,+Reino+da+Espanha&amp;t=m&amp;ll=40.424402,-3.681642&amp;spn=0.016964,0.041147" style="color:#595959;text-align:left;font-family:'Droid Sans';font-size:14px;" target="_blank">Ver mapa más grande</a></small>
    </p>
  </div>
</article>
<div class="clear"></div>
<?php get_footer(); ?>
