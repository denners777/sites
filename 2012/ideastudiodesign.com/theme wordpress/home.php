<?php get_header(); ?>

<section id="Slider">
  <div class="container_24">
    <nav class="grid_5">
      <div class="navi clearfix"> </div>
    </nav>
    <div class="grid_19"> 
    
    <?php 			
		  $args = array('post_type' => 'banner');
		  $loop = new WP_Query( $args );
		  while ( $loop->have_posts() ) : $loop->the_post();
		  $IMG = wp_get_attachment_url(get_post_thumbnail_id($post-> ID));
	?>
      
      <!--Item -->
      <div class="item">
        <figure><img src="<?php echo $IMG; ?>"></figure>
      </div>
      <!--./Item -->
      <?php endwhile; wp_reset_postdata();  ?>
      
    </div>
  </div>
</section>
<article role="main" id="Home" class="mainpage container_24 clearfix" style="zoom: 0.9;">
  <div class="grid_16">
    <h1>Personalizando com Charme</h1>
    <ul>
      <li> Festas Personalizadas: o tema para sua festa como você imaginou; </li>
      <li> Papelaria Pessoal: cartões, etiquetas e tags; </li>
      <li> Programação Visual: da logotipo às aplicações; </li>
      <li> Casamentos: identidade no convite e decoração; </li>
      <li> Photobooks: para guardar "aquele momento" para sempre; </li>
      <li> Álbum do Bebê: para registrar todas as novidades do seu pequeno. </li>
    </ul>
    <nav id="Social" class="clearfix">
      <ul>
        <li><a href="https://www.facebook.com/pages/Idea-Studio-Design/170471938239" class="ir facebook" title="Facebook" target="_blank">Facebook</a></li>
        <li><a href="http://www.pinterest.com/ideasd/" class="ir pintrest" title="Pintrest" target="_blank">Pintrest</a></li>
        <li><a href="mailto:ideastudiodesign@me.com" title="Email" class="ir email">Email</a></li>
        <li><a href="<?php echo bloginfo('url');?>/duvidas" class="ir duvidas" title="Dúvidas">Dúvidas</a></li>
        <li><a href="http://www.ideiasdostudio.blogspot.com.br/" class="fita" title="Blog" target="_blank">Visite nosso blog</a></li>
      </ul>
    </nav>
  </div>
  <div class="grid_8"> <a href="<?php echo bloginfo('url');?>/orcamento" class="orcamento ir">Orçamento</a> </div>
</article>
</div>
<?php define('pode',true); get_footer(); ?>