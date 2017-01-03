<?php echo $header; ?><?php echo $column_left; ?><?php echo $column_right; ?>

<div id="content">
  <?php //echo $content_top; ?>
  <div id="main" role="main">
    <div class="container_16 clearfix">
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
        <div class="grid_7 suffix_5">
          <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            <h2><?php echo $text_password; ?></h2>
            <div class="content">
              <ul class="form">
                  <li class="clearfix">
                  <label><span class="required">*</span>
                    <?php echo $entry_password; ?></label>
                  <input type="password" name="password" value="<?php echo $password; ?>" />
                  <?php if ($error_password) { ?>
                  <span class="error"><?php echo $error_password; ?></span>
                  <?php } ?>
                </li>
                <li class="clearfix">
                  <label><span class="required">*</span>
                    <?php echo $entry_confirm; ?></label>
                  <input type="password" name="confirm" value="<?php echo $confirm; ?>" />
                  <?php if ($error_confirm) { ?>
                  <span class="error"><?php echo $error_confirm; ?></span>
                  <?php } ?>
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