<?php echo $header; ?><?php //echo $column_left; ?><?php //echo $column_right; ?>
<div id="content">
  <?php //echo $content_top; ?>
  <div id="main" role="main">
    <div class="container_16 clearfix">
      <div class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <!-- breadcrumb -->
        
        <?php echo $breadcrumb['separator']; ?>
        <a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
        
        <!-- /breadcrumb -->
        
        <?php } ?>
      </div>
      <div class="clear">
      </div>
      <!-- titulo -->
      <div class="grid_16 faixa">
        <h4><?php echo $heading_title; ?></h4>
      </div>
      <!-- /titulo -->
      
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="contato clearfix">
          <span class="grid_16"><?php echo $text_contact; ?></span>
          <div class="grid_7 suffix_1 formulario">
            <ul class="clearfix">
              <li class="clearfix">
                <label for="nome"><?php echo $entry_name; ?></label>
                <input name="nome" type="text" value="<?php echo $name; ?>">
                <?php if ($error_name) { ?>
                <span class="error"><?php echo $error_name; ?></span>
                <?php } ?>
              </li>
              <li class="clearfix">
                <label for="tel">TELEFONE</label>
                <input name="tel" type="tel">
              </li>
              <li class="clearfix">
                <label for="email"><?php echo $entry_email; ?></label>
                <input name="email" type="email" value="<?php echo $email; ?>">
                <?php if ($error_email) { ?>
                <span class="error"><?php echo $error_email; ?></span>
                <?php } ?>
              </li>
              <li class="clearfix">
                <label for="subject">ASSUNTO</label>
                <input name="subject" type="text">
              </li>
            </ul>
            <div class="clear">
            </div>
            <?php if ($telephone) { ?>
            <div class="tel">
              <span class="ico"></span><span><small>21</small> . <?php echo $telephone; ?></span>
            </div>
            <?php } ?>
            <?php if ($fax) { ?>
            <div class="tel">
              <span class="ico"></span><span><small>21</small> . <?php echo $fax; ?></span>
            </div>
            <?php } ?>
          </div>
          <div class="grid_8 formulario">
            <ul>
              <li class="clearfix">
                <label for="msg"><?php echo $entry_enquiry; ?></label>
                <textarea name="msg" cols="" rows=""><?php echo $enquiry; ?></textarea>
                <?php if ($error_enquiry) { ?>
                <span class="error"><?php echo $error_enquiry; ?></span>
                <?php } ?>
              </li>
              <li class="clearfix">
                <input name="" type="submit" value="Enviar" class="comprar">
                <span class="seta"></span></li>
            </ul>
          </div>
        </div>
      </form>
      <figure class="grid_16 fig_contato"><img src="catalog/view/theme/margaux/assets/img/icons-contato.jpg" /></figure>
    </div>
    <div class="sombra">
    </div>
  </div>
  <?php echo $content_bottom; ?>
</div>
<?php echo $footer; ?>