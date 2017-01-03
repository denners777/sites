<?php get_header(); ?>

<div role="main" class="contato">
  <div class="container_12">
  	<?php 
		$IMG0 = get_bloginfo('template_url').'/timthumb.php?q=100&w=960&h=246&src='. get_bloginfo('template_url').'/assets/img/fotos/banner.jpg';
	?>
    <figure class="grid_12 banner"> <img src="<?php echo $IMG0; ?>" />
      <figcaption>Contato</figcaption>
    </figure>
    <div class="labels grid_3">
      <ul>
        <li>Nome:</li>
        <li>E-mail:</li>
        <li>Telefone:</li>
        <li>Mensagem:</li>
      </ul>
    </div>
    <div class="inputs grid_5 suffix_1">
      <?php dynamic_sidebar('form');?>
    </div>
    <div class="mapa grid_3"> 
    <!--<span>Onde Estamos:</span>
      <iframe width="300" height="240" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Banca+Xavier+da+Silveira,+Rio+de+Janeiro&amp;aq=0&amp;oq=xavier+da&amp;sll=-22.065278,-42.923584&amp;sspn=4.239925,8.453979&amp;ie=UTF8&amp;hq=Banca+Xavier+da+Silveira,&amp;hnear=Rio+de+Janeiro&amp;ll=-22.976946,-43.190628&amp;spn=0.161495,0.04171&amp;t=m&amp;output=embed"></iframe> -->
      <br />
    </div>
    <div class="clearfix"></div>
    <hr />
    <div class="clearfix"></div>
    <div class="grid_6 prefix_3 suffix_3 endereco">
    	<!--<p>Rua Loren Ipsun 3409 Lj 340 | Rio de Janeiro -Rj | Cep: 0000-000</p> -->
        <p>email: <a href="mailto:marcia@auzier.com.br">marcia@auzier.com.br</a></p>
    </div>
  </div>
</div>
<?php get_footer(); ?>
