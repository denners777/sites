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
            <h2><?php echo $text_edit_address; ?></h2>
            <div class="content">
              <ul class="form">
                <li class="clearfix">
                  <label><span class="required">*</span>
                    <?php echo $entry_firstname; ?></label>
                  <input type="text" name="firstname" value="<?php echo $firstname; ?>" />
                  <?php if ($error_firstname) { ?>
                  <span class="error"><?php echo $error_firstname; ?></span>
                  <?php } ?>
                </li>
                <li class="clearfix">
                  <label><span class="required">*</span>
                    <?php echo $entry_lastname; ?></label>
                  <input type="text" name="lastname" value="<?php echo $lastname; ?>" />
                  <?php if ($error_lastname) { ?>
                  <span class="error"><?php echo $error_lastname; ?></span>
                  <?php } ?>
                </li>
                <li class="clearfix">
                  <label><?php echo $entry_company; ?></label>
                  <input type="text" name="company" value="<?php echo $company; ?>" />
                </li>
                <?php if ($company_id_display) { ?>
                <li class="clearfix">
                  <label><?php echo $entry_company_id; ?></label>
                  <input type="text" name="company_id" value="<?php echo $company_id; ?>" />
                  <?php if ($error_company_id) { ?>
                  <span class="error"><?php echo $error_company_id; ?></span>
                  <?php } ?>
                </li>
                <?php } ?>
                <?php if ($tax_id_display) { ?>
                <li class="clearfix">
                  <label><?php echo $entry_tax_id; ?></label>
                  <input type="text" name="tax_id" value="<?php echo $tax_id; ?>" />
                  <?php if ($error_tax_id) { ?>
                  <span class="error"><?php echo $error_tax_id; ?></span>
                  <?php } ?>
                </li>
                <?php } ?>
                <li class="clearfix">
                  <label><span class="required">*</span>
                    <?php echo $entry_address_1; ?></label>
                  <input type="text" name="address_1" value="<?php echo $address_1; ?>" />
                  <?php if ($error_address_1) { ?>
                  <span class="error"><?php echo $error_address_1; ?></span>
                  <?php } ?>
                </li>
                <li class="clearfix">
                  <label><?php echo $entry_address_2; ?></label>
                  <input type="text" name="address_2" value="<?php echo $address_2; ?>" />
                </li>
                <li class="clearfix">
                  <label><span class="required">*</span>
                    <?php echo $entry_city; ?></label>
                  <input type="text" name="city" value="<?php echo $city; ?>" />
                  <?php if ($error_city) { ?>
                  <span class="error"><?php echo $error_city; ?></span>
                  <?php } ?>
                </li>
                <li class="clearfix">
                  <label><span id="postcode-required" class="required">*</span>
                    <?php echo $entry_postcode; ?></label>
                  <input type="text" name="postcode" value="<?php echo $postcode; ?>" />
                  <?php if ($error_postcode) { ?>
                  <span class="error"><?php echo $error_postcode; ?></span>
                  <?php } ?>
                </li>
                <li class="clearfix">
                  <label><span class="required">*</span>
                    <?php echo $entry_country; ?></label>
                  <select name="country_id">
                    <option value=""><?php echo $text_select; ?></option>
                    <?php foreach ($countries as $country) { ?>
                    <?php if ($country['country_id'] == $country_id) { ?>
                    <option value="<?php echo $country['country_id']; ?>" selected="selected"><?php echo $country['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $country['country_id']; ?>"><?php echo $country['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                  <?php if ($error_country) { ?>
                  <span class="error"><?php echo $error_country; ?></span>
                  <?php } ?>
                </li>
                <li class="clearfix">
                  <label><span class="required">*</span>
                    <?php echo $entry_zone; ?></label>
                  <select name="zone_id">
                  </select>
                  <?php if ($error_zone) { ?>
                  <span class="error"><?php echo $error_zone; ?></span>
                  <?php } ?>
                </li>
                <li class="clearfix">
                  <label><?php echo $entry_default; ?></label>
                  <div class="check">
                    <?php if ($default) { ?>
                    <input type="radio" name="default" value="1" checked="checked" />
                    <?php echo $text_yes; ?>
                    <input type="radio" name="default" value="0" />
                    <?php echo $text_no; ?>
                    <?php } else { ?>
                    <input type="radio" name="default" value="1" />
                    <?php echo $text_yes; ?>
                    <input type="radio" name="default" value="0" checked="checked" />
                    <?php echo $text_no; ?>
                    <?php } ?>
                  </div>
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
<script type="text/javascript"><!--
$('select[name=\'country_id\']').bind('change', function() {
	$.ajax({
		url: 'index.php?route=account/address/country&country_id=' + this.value,
		dataType: 'json',
		beforeSend: function() {
			$('select[name=\'country_id\']').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
		},		
		complete: function() {
			$('.wait').remove();
		},			
		success: function(json) {
			if (json['postcode_required'] == '1') {
				$('#postcode-required').show();
			} else {
				$('#postcode-required').hide();
			}
			
			html = '<option value=""><?php echo $text_select; ?></option>';
			
			if (json['zone'] != '') {
				for (i = 0; i < json['zone'].length; i++) {
        			html += '<option value="' + json['zone'][i]['zone_id'] + '"';
	    			
					if (json['zone'][i]['zone_id'] == '<?php echo $zone_id; ?>') {
	      				html += ' selected="selected"';
	    			}
	
	    			html += '>' + json['zone'][i]['name'] + '</option>';
				}
			} else {
				html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
			}
			
			$('select[name=\'zone_id\']').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('select[name=\'country_id\']').trigger('change');
//--></script>
<?php echo $footer; ?>