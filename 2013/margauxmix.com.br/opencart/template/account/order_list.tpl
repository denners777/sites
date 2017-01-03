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
        <div class="grid_9 suffix_3">
          <?php if ($orders) { ?>
          <?php foreach ($orders as $order) { ?>
          <div class="order-list">
            <div class="order-id">
              <b><?php echo $text_order_id; ?></b> #<?php echo $order['order_id']; ?>
            </div>
            <div class="order-status">
              <b><?php echo $text_status; ?></b>
              <?php echo $order['status']; ?>
            </div>
            <div class="order-content">
              <div>
                <b><?php echo $text_date_added; ?></b>
                <?php echo $order['date_added']; ?><br />
                <b><?php echo $text_products; ?></b>
                <?php echo $order['products']; ?>
              </div>
              <div>
                <b><?php echo $text_customer; ?></b>
                <?php echo $order['name']; ?><br />
                <b><?php echo $text_total; ?></b>
                <?php echo $order['total']; ?>
              </div>
              <div class="order-info">
                <a href="<?php echo $order['href']; ?>"><img src="catalog/view/theme/default/image/info.png" alt="<?php echo $button_view; ?>" title="<?php echo $button_view; ?>" /></a>
                &nbsp;&nbsp;
                <a href="<?php echo $order['reorder']; ?>"><img src="catalog/view/theme/default/image/reorder.png" alt="<?php echo $button_reorder; ?>" title="<?php echo $button_reorder; ?>" /></a>
              </div>
            </div>
          </div>
          <?php } ?>
          <?php } else { ?>
          <div class="content">
            <?php echo $text_empty; ?>
          </div>
          <?php } ?>
          <div class="botoes clearfix">
            <div class="right">
              <a href="<?php echo $continue; ?>" class="button link rig"><?php echo $button_continue; ?></a>
            </div>
          </div>
        </div>
        <div class="grid_4 list">
          <?php echo $content_bottom; ?>
        </div>
        <?php if ($orders) { ?>
        <div class="clear">
        </div>
        <div class="grid_16">
          <div class="pagination">
            <?php echo $pagination; ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="sombra">
    </div>
  </div>
</div>
<?php echo $footer; ?>