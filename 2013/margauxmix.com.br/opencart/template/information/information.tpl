<?php echo $header; ?><?php echo $column_left; ?><?php echo $column_right; ?>
<div id="content"><?php //echo $content_top; ?>
    
  <div id="main" role="main">
  <div class="container_16 clearfix">
    <!-- breadcrumb -->
    <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
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
        <?php echo $description; ?>
  </div>
  <div class="sombra">
  </div>
</div>  
  <!-- <div class="buttons">
    <div class="right"><a href="<?php echo $continue; ?>" class="button"><?php echo $button_continue; ?></a></div>
  </div> -->
  <?php echo $content_bottom; ?></div>
<?php echo $footer; ?>