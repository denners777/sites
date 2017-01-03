<?php include 'header.php'; ?>
<!-- MAIN -->
<div id="main">
  <div class="container">
    <!-- CONTEUDO -->
    <div class="row">
      <!-- BREADCRUMB -->
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="<?php bloginfo('home'); ?>">home</a></li>
          <li class="active">contato</li>
        </ol>
      </div>
      <!-- /BREADCRUMB -->

      <!-- CONTEUDO -->
      <div class="col-md-6">
        <div class="content conteudo clearfix">
          <hgroup>
            <h4>Fale Conosco</h4>           
          </hgroup>
          <!-- FORM -->
          <div class="form-contato">
            <?php dynamic_sidebar('form'); ?>
          </div>
          <!-- !FORM -->
        </div>
      </div>
      <div class="col-md-6 maps">
        <div class="Flexible-container">
          <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?q=Rua+Paul+Redfern,+32&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Paul+Redfern,+32+-+Ipanema,+Rio+de+Janeiro,+22410-080&amp;gl=br&amp;t=m&amp;z=16&amp;vpsrc=0&amp;ll=-22.985117,-43.214232&amp;output=embed"></iframe>
        </div>
      </div>
      <!-- !CONTEUDO -->
    </div>
  </div>
</div>
<!-- !MAIN -->
</div>
<!-- !WRAP -->
<?php include 'footer.php'; ?>
<script>
  $(document).ready(function() {
    $('body').removeClass().addClass('contato');
  });
</script>