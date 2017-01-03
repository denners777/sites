<?php echo $header; ?><?php echo $column_left; ?><?php echo $column_right; ?>

<div id="content">
  <?php //echo $content_top; ?>
  <div id="main" role="main">
    <div class="container_16 clearfix">
      <?php if ($success) { ?>
      <div class="success">
        <?php echo $success; ?>
      </div>
      <?php } ?>
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
        <div class="grid_7 suffix_5 ">
          <h5><?php echo $text_address_book; ?></h5>
          <?php foreach ($addresses as $result) { ?>
          <div class="content">
            <table style="width: 100%;">
              <tr>
                <td><?php echo $result['address']; ?></td>
                <td style="text-align: right;"><a href="<?php echo $result['update']; ?>" class="button link"><?php echo $button_edit; ?></a>
                  &nbsp;
                  <a href="<?php echo $result['delete']; ?>" class="button link"><?php echo $button_delete; ?></a></td>
              </tr>
            </table>
          </div>
          <?php } ?>
          <div class="botoes clearfix">
            <div class="left">
              <a href="<?php echo $back; ?>" class="button"><?php echo $button_back; ?></a>
            </div>
            <div class="right" style="float: right;">
              <a href="<?php echo $insert; ?>" class="button link"><?php echo $button_new_address; ?></a>
            </div>
          </div>
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