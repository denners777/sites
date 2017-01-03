</div>
<!-- /wrap -->
<!-- footer -->
<footer id="footer" class="gradient">
  <!-- top -->
  <section class="container_16 clearfix">
    <!-- box -->
    <article class="grid_4 prefix_1 box">
      <h3>SOBRE</h3>
      <?php dynamic_sidebar('sobre');?>
    </article>
    <!-- /box -->
    <!-- box -->
    <article class="grid_4 box">
      <h3>TWITER</h3>
      <div id="twitter"></div>
    </article>
    <!-- /box -->
    <!-- box -->
    <article class="grid_7 box">
      <h3>PRODUTOS</h3>
      <ul>
      <?php
          $args = array('post_type' => 'produtos');
          $loop = new WP_Query($args);
          while ($loop->have_posts()) : $loop->the_post();
          ?>
        <li>
          <span></span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </ul>
    </article>
    <!-- /box -->
  </section>
  <!-- /top -->
  <!-- bottom -->
  <section class="footer">
    <div class="container_16 clearfix">
      <article class="social grid_2 suffix_4">
        <a href="#" target="_blank" class="facebook ir">Facebook</a>
        <a href="#" target="_blank" class="twitter ir">Twitter</a>
      </article>
      <article class="copy grid_3 suffix_2">
        <strong>©Regidac 2013</strong> Todos os direitos reservados. </article>
      <a class="grid_4 suffix_1 logoconecte ir" target="_blank">Conecte Estúdio Design</a>
    </div>
  </section>
  <!-- /bottom -->
</footer>
<!-- /footer -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="<?php echo bloginfo('template_url');?>/assets/js/plugins.js"></script>
<script src="<?php echo bloginfo('template_url');?>/assets/js/main.js"></script>
</body>
</html>
