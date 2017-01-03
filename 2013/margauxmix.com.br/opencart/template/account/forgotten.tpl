<?php echo $header; ?><?php echo $column_left; ?><?php echo $column_right; ?>

<div id="content">
  <?php //echo $content_top; ?>
  <div id="main" role="main">
    <div class="container_16 clearfix">
      <?php if ($error_warning) { ?>
      <div class="warning">
        <?php echo $error_warning; ?>
      </div>
      <?php } ?>
      <!-- breadcrumb -->
      <div class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <?php echo $breadcrumb['separator']; ?>
        <a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
        <?php } ?>
      </div>
      <!-- /breadcrumb -->
      <div class="clear">
      </div>
      <!-- titulo -->
      <div class="grid_16 faixa">
        <h4><?php echo $heading_title; ?></h4>
      </div>
      <!-- /titulo -->
      <div class="conta">
        <div class="grid_8 suffix_4 listra">
          <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            <p><?php echo $text_email; ?></p>
            <h2><?php echo $text_your_email; ?></h2>
            <div class="content">
              <ul class="form">
                  <li class="clearfix">
                  <label><?php echo $entry_email; ?></label>
                  <input type="text" name="email" value="" />
                </li>
              </ul>
            </div>
            <div class="botoes clearfix">
              <div class="left">
                <a href="<?php echo $back; ?>" class="button"><?php echo $button_back; ?></a>
              </div>
              <div class="right">
                <input type="submit" value="<?php echo $button_continue; ?>" class="button" />
                <span class="seta"></span>
              </div>
            </div>
          </form>
        </div>
        <div class="grid_4 list">
          <?php echo $content_bottom; ?>
        </div>
      </div>
    </div>
    <div class="sombra">
    </div>
  </div>
</div>
<?php echo $footer; ?>