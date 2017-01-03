<?php get_header(); ?>

<div id="main" role="main">
  <div class="clearfix" id="home">
    <div class="rm_wrapper">
      <div id="rm_container" class="rm_container">
        <ul>
          <li data-images="rm_container_1" data-rotation="-15"> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/olhares01.jpg" height="465" width="310" /> </li>
          <li data-images="rm_container_2" data-rotation="-5"> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/olhares02.jpg" height="465" width="310" /> </li>
          <li data-images="rm_container_3" data-rotation="5"> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/olhares03.jpg"height="465" width="310" /> </li>
          <li data-images="rm_container_4" data-rotation="15"> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/olhares04.jpg" height="465" width="310" /> </li>
        </ul>
        <div id="rm_mask_left" class="rm_mask_left"></div>
        <div id="rm_mask_right" class="rm_mask_right"></div>
        <div id="rm_corner_left" class="rm_corner_left"></div>
        <div id="rm_corner_right" class="rm_corner_right"></div>
        <h2 id="H2"><a href='http://teste.cassiodamazio.com.br/olhares'>OLHARES</a></h2>
        <div style="display:none;">
          <div id="rm_container_1"> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/olhares01.jpg"/> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/espetaculo01.jpg"/> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/produtos01.jpg"/> </div>
          <div id="rm_container_2"> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/olhares02.jpg"/> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/espetaculo02.jpg"/> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/produtos02.jpg"/> </div>
          <div id="rm_container_3"> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/olhares03.jpg"/> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/espetaculo03.jpg"/> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/produtos03.jpg"/> </div>
          <div id="rm_container_4"> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/olhares04.jpg"/> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/espetaculo04.jpg"/> <img src="<?php echo bloginfo('template_url');?>/assets/img/sliderfotos/produtos04.jpg"/> </div>
        </div>
      </div>
      <div class="rm_nav"> <a id="rm_next" href="#" class="rm_next"></a> <a id="rm_prev" href="#" class="rm_prev"></a> </div>
      <div class="rm_controls"> <a id="rm_play" href="#" class="rm_play">Play</a> <a id="rm_pause" href="#" class="rm_pause">Pause</a> </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
