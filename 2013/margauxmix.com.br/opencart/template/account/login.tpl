<?php echo $header; ?>
<?php // echo $column_left; ?>
<?php //echo $column_right; ?>

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
        <div class="grid_6 suffix_1 listra">
          <h5><?php echo $text_register; ?></h5>
          <p><?php echo $text_register_account; ?></p>
          <a href="<?php echo $register; ?>" class="comprar"><?php echo $button_continue; ?><span></span></a>
        </div>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
          <div class="grid_4 suffix_1 listra">
            <h5>LOGIN</h5>
            <ul>
              <li class="clearfix">
                <label for="email"><?php echo $entry_email; ?></label>
                <input id="email" name="email" type="email" value="<?php echo $email; ?>">
              </li>
              <li class="clearfix">
                <label for="senha"><?php echo $entry_password; ?></label>
                <input id="senha" name="password" type="password" value="<?php echo $password; ?>" >
              </li>
              <!-- <li>
                <a href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a>
              </li> -->
              <li class="clearfix">
                <input name="" type="submit" value="<?php echo $button_login; ?>" class="comprar">
                <span class="seta"></span>
              </li>
              <li>
                <?php if ($redirect) { ?>
                <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
                <?php } ?>
              </li>
            </ul>
          </div>
        </form>
        <div class="grid_4 list">
          <?php echo $content_bottom; ?>
        </div>
      </div>
    </div>
    <div class="sombra">
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$('#login input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#login').submit();
	}
});
//--></script>
<?php echo $footer; ?>