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
      <div class="grid_5 suffix_1 listra list">
        <h5><?php echo $text_my_account; ?></h5>
        <div class="content">
          <ul>
            <li>
              <a href="<?php echo $edit; ?>"><?php echo $text_edit; ?></a>
            </li>
            <li>
              <a href="<?php echo $password; ?>"><?php echo $text_password; ?></a>
            </li>
            <li>
              <a href="<?php echo $address; ?>"><?php echo $text_address; ?></a>
            </li>
            <li>
              <a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="grid_5 suffix_1 listra list">
        <h5><?php echo $text_my_orders; ?></h5>
        <div class="content">
          <ul>
            <li>
              <a href="<?php echo $order; ?>"><?php echo $text_order; ?></a>
            </li>
            <!--<li>
              <a href="<?php echo $download; ?>"><?php echo $text_download; ?></a>
            </li>
            <?php if ($reward) { ?>
            <li>
              <a href="<?php echo $reward; ?>"><?php echo $text_reward; ?></a>
            </li>-->
            <?php } ?>
            <li>
              <a href="<?php echo $return; ?>"><?php echo $text_return; ?></a>
            </li>
            <li>
              <a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a>
            </li>
          </ul>
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
