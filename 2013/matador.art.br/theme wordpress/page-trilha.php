<?php get_header(); get_template_part('banner'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/media_element/build/mediaelementplayer.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/assets/media_element/build/mejs-skins.css"/>
<section class="container_24 clearfix" role="main">
  <article class="grid_14 prefix_4 suffix_4 push_1 commom trilha">
    <div class="scroll-pane">
      <div class="title"><span class="funcao">COMPOSITOR</span><span class="nome">RICCO VIANA</span></div>
      <a href="javascript:;" data-music="<?php echo bloginfo('template_url');?>/assets/sound/matador.mp3" class="music">
      <figure><img src="<?php echo bloginfo('template_url');?>/assets/img/bt_matador.png" /></figure>
      </a> <a href="javascript:;" data-music="<?php echo bloginfo('template_url');?>/assets/sound/tango.mp3" class="music">
      <figure><img src="<?php echo bloginfo('template_url');?>/assets/img/bt_tango.png" /></figure>
      </a> <a href="javascript:;" data-music="<?php echo bloginfo('template_url');?>/assets/sound/touro.mp3" class="music">
      <figure><img src="<?php echo bloginfo('template_url');?>/assets/img/bt_touro.png" /></figure>
      </a>
      <audio id="audio" class="audio" controls="controls">
        <source class="source" src="" type="audio/mp3" />
      </audio>
    </div>
  </article>
</section>
</div>
<!--./#main -->
<?php get_footer(); ?>
