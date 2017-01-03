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
        <div class="grid_8 suffix_4 listra">
          <h5><?php echo $text_total; ?><b>
            <?php echo $total; ?>.</h5>
          <table class="list tab">
            <thead>
              <tr>
                <td class="left"><?php echo $column_date_added; ?></td>
                <td class="left"><?php echo $column_description; ?></td>
                <td class="right"><?php echo $column_amount; ?></td>
              </tr>
            </thead>
            <tbody>
              <?php if ($transactions) { ?>
              <?php foreach ($transactions  as $transaction) { ?>
              <tr>
                <td class="left"><?php echo $transaction['date_added']; ?></td>
                <td class="left"><?php echo $transaction['description']; ?></td>
                <td class="right"><?php echo $transaction['amount']; ?></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td class="center" colspan="5"><?php echo $text_empty; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <div class="botoes clearfix">
            <div class="right">
              <a href="<?php echo $continue; ?>" class="button link rig"><?php echo $button_continue; ?></a>
            </div>
          </div>
        </div>
        <div class="grid_4 list">
          <?php echo $content_bottom; ?>
        </div>
        <div class="clear">
        </div>
        <div class="grid_16">
          <div class="pagination">
            <?php echo $pagination; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="sombra">
    </div>
  </div>
  <h1></h1>
  <p></p>
</div>
<?php echo $footer; ?>