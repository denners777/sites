<?php get_header(); get_template_part('banner-interno'); ?>
<div role="main" class="contato">
  <div class="container_24 clearfix">
    <div class="grid_14 suffix_2">
      <h3>Para contato via e-mail preencha os campos abaixo:</h3>
      <div class="grid_3 alpha">
        <ul class="label">
          <li>Nome</li>
          <li>Telefone</li>
          <li>Celular</li>
          <li>E-mail</li>
          <li>Mensagem</li>
        </ul>
      </div>
      <div class="grid_11 omega">
        <?php dynamic_sidebar('contato');?>
      </div>
    </div>
    <aside class="grid_7 suffix_1">
      <figure>
      	<iframe width="255" height="160" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Travessa+Carlos+de+S%C3%A1+n%C2%B010+-+Catete&amp;aq=&amp;sll=-22.916032,-43.447416&amp;sspn=0.526833,1.056747&amp;ie=UTF8&amp;hq=&amp;hnear=Travessa+Carlos+de+S%C3%A1+-+Catete,+Rio+de+Janeiro,+22220-020&amp;t=m&amp;z=14&amp;ll=-22.925336,-43.178561&amp;output=embed"></iframe>
      </figure>
      <h6>Theta Healing</h6>
      <address>
      Travessa Carlos de Sá n°10 - Catete <br />
      Rio de Janeiro - RJ
      <div class="marco"></div>
      </address>
      <a href="<?php echo bloginfo('template_url');?>/assets/img/catete.jpg" class="saibamais lightbox">Saiba mais sobre o Catete</a>
      <div class="tels">
        <div class="icon-tel"></div>
        <?php dynamic_sidebar('tels');?>
      </div>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
