<?php get_header(); ?>
<!-- MAIN -->
<div id="main">
  <div class="container">
    <!-- CAROUSEL -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <!-- INDICADORES -->
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
        <li data-target="#carousel" data-slide-to="4"></li>
        <li data-target="#carousel" data-slide-to="5"></li>
        <li data-target="#carousel" data-slide-to="6"></li>
      </ol>
      <!-- !INDICADORES -->
      <!-- IMAGENS -->
      <div class="carousel-inner">
        <figure class="item active">
          <img src="http://www.lorempixum.com/1140/380/technics/1" alt="imagem" class="img-responsive" />
        </figure>
        <figure class="item">
          <img src="http://www.lorempixum.com/1140/380/technics/2" alt="imagem" class="img-responsive" />
        </figure>
        <figure class="item">
          <img src="http://www.lorempixum.com/1140/380/technics/3" alt="imagem" class="img-responsive" />
        </figure>
        <figure class="item">
          <img src="http://www.lorempixum.com/1140/380/technics/4" alt="imagem" class="img-responsive" />
        </figure>
        <figure class="item">
          <img src="http://www.lorempixum.com/1140/380/technics/5" alt="imagem" class="img-responsive" />
        </figure>
        <figure class="item">
          <img src="http://www.lorempixum.com/1140/380/technics/6" alt="imagem" class="img-responsive" />
        </figure>
        <figure class="item">
          <img src="http://www.lorempixum.com/1140/380/technics/7" alt="imagem" class="img-responsive" />
        </figure>
      </div>
      <!-- !IMAGENS -->
      <!-- CONTROLES -->
      <a class="left carousel-control" href="#carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
      <!-- !CONTROLES -->
    </div>
    <!-- !CAROUSEL -->
    <!-- INFORME -->
    <div class="informe">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
    <!-- !INFORME -->
    <!-- BANNERS -->
    <div class="banners media">

      <!-- CAROUSEL -->
      <div id="banners" class="carousel slide" data-ride="carousel">
        <!-- INDICADORES -->
        <ol class="carousel-indicators">
          <li data-target="#banners" data-slide-to="0" class="active"></li>
          <li data-target="#banners" data-slide-to="1"></li>
        </ol>
        <!-- !INDICADORES -->
        <!-- IMAGENS -->
        <div class="carousel-inner">
          <div class="item active">
            <figure class="col-md-3 col-xs-6">
              <a href="javascript:;">
                <img src="http://www.lorempixum.com/375/375/business/1" alt="imagem" class="img-responsive" />
              </a>
            </figure>
            <figure class="col-md-3 col-xs-6">
              <a href="javascript:;">
                <img src="http://www.lorempixum.com/375/375/business/2" alt="imagem" class="img-responsive" />
              </a>
            </figure>
            <figure class="col-md-3 col-xs-6">
              <a href="javascript:;">
                <img src="http://www.lorempixum.com/375/375/business/3" alt="imagem" class="img-responsive" />
              </a>
            </figure>
            <figure class="col-md-3 col-xs-6">
              <a href="javascript:;">
                <img src="http://www.lorempixum.com/375/375/business/4" alt="imagem" class="img-responsive" />
              </a>
            </figure>
          </div>
          <div class="item">
            <figure class="col-md-3 col-xs-6">
              <a href="javascript:;">
                <img src="http://www.lorempixum.com/375/375/business/5" alt="imagem" class="img-responsive" />
              </a>
            </figure>
            <figure class="col-md-3 col-xs-6">
              <a href="javascript:;">
                <img src="http://www.lorempixum.com/375/375/business/6" alt="imagem" class="img-responsive" />
              </a>
            </figure>
            <figure class="col-md-3 col-xs-6">
              <a href="javascript:;">
                <img src="http://www.lorempixum.com/375/375/business/7" alt="imagem" class="img-responsive" />
              </a>
            </figure>
            <figure class="col-md-3 col-xs-6">
              <a href="javascript:;">
                <img src="http://www.lorempixum.com/375/375/business/8" alt="imagem" class="img-responsive" />
              </a>
            </figure>
          </div>
        </div>
        <!-- !IMAGENS -->
        <!-- CONTROLES -->
        <a class="left carousel-control" href="#banners" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#banners" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <!-- !CONTROLES -->
      </div>
      <!-- !CAROUSEL -->
    </div>
    <!-- BANNERS -->
  </div>
</div>
<!-- !MAIN -->
</div>
<!-- !WRAP -->
<?php get_footer(); ?>