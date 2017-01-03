<?php echo $header; ?>
<?php //echo $column_left; ?>
<?php //echo $column_right; ?>

<div id="content">
  <?php //echo $content_top; ?>
  <div id="main" role="main" class="conta">
    <div class="container_16 clearfix">
      <div class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <?php echo $breadcrumb['separator']; ?>
        <a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
        <?php } ?>
      </div>
      <div class="grid_10 suffix_2">
        <h1><?php echo $heading_title; ?></h1>
        <?php echo $text_message; ?>
        <a href="<?php echo $continue; ?>" class="comprar"><?php echo $button_continue; ?> <span></span></a>
      </div>
      <div class="grid_4 list">
        <?php echo $content_bottom; ?>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>