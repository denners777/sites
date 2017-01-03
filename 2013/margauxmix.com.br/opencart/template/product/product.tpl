<?php echo $header; ?>
<?php //echo $column_left; ?>
<?php //echo $column_right; ?>

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
      <!-- produto -->
      <section class="produto container_16 clearfix">
        <div class="grid_9">
          <?php if ($thumb || $images) : ?>
          <?php if ($thumb) : ?>
          <figure class="alpha grid_9 omega principal">
            <a id='zoom1' href="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>" class="lightbox cloud-zoom" rel="position: 'inside' , showTitle: false, adjustX: 10, adjustY:-4">
              <img src="<?php echo $thumb; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" id="image" />
            </a>
          </figure>
          <?php endif; ?>
            
          <?php if ($thumb) : $i = 1; ?>
            
            <figure class="grid_3 alpha thumbs">
                <a href="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>" class="lightbox cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo $thumb; ?>'">
                  <img src="<?php echo $thumb; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" />
                </a>
            </figure>
          <?php endif; ?>
          <?php if ($images): ?>
          <?php $i = (isset($i)) ? $i : 0; ?>
          <?php foreach ($images as $image): ?>
          <?php 
            if($i == 0):
                $class = "alpha";
            elseif($i == 1):
                $class = "";
            elseif($i == 2):
                $class = "omega";
                endif;
          ?>
          <figure class="grid_3 <?php echo $class; ?> thumbs">
            <a href="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>" class="lightbox cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo $image['thumb']; ?>'">
              <img src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" />
            </a>
          </figure>
          <?php $i++; $i = ($i>2) ? $i = 0: $i; ?>
          <?php endforeach; ?>
          <?php endif; ?>
          <?php endif; ?>
        </div>
        <article class="content grid_7 product-info">
          <h1><?php echo $heading_title; ?></h1>
          <div class="description">
            <!-- description -->
            
            <?php echo $description; ?>
            
            <!-- /description -->
          </div>
          <?php if ($price) { ?>
          <?php if (!$special) { ?>
          <span><?php echo $price; ?></span>
          <?php } else { ?>
          <span><?php echo $special; ?></span>
          <?php } ?>
          <?php } ?>
          <div class="alpha grid_7 omega escolher">
            <ul>
              <li>
                <label for="qtd"><?php echo $text_qty; ?></label>
                <input type="text" name="quantity" size="2" value="<?php echo $minimum; ?>" />
                <input type="hidden" name="product_id" size="2" value="<?php echo $product_id; ?>" />
              </li>
              <li class="meio">
                <div class="wishlist">
                  <span class="ir"></span>
                  <a onclick="addToWishList('<?php echo $product_id; ?>');"><?php echo $button_wishlist; ?></a>
                </div>
                <div class="compare">
                  <span class="ir"></span>
                  <a onclick="addToCompare('<?php echo $product_id; ?>');"><?php echo $button_compare; ?></a>
                </div>
              </li>
              <li class="cart">
                <input type="button" value="<?php echo $button_cart; ?>" id="button-cart" class="button comprar" />
                <span class="seta"></span>
              </li>
            </ul>
          </div>
          <div class="alpha grid_7 omega share">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_default_style">
              <a class="addthis_button_compact"><?php echo $text_share; ?></a>
              <a class="addthis_button_email"></a>
              <a class="addthis_button_print"></a>
              <a class="addthis_button_facebook"></a>
              <a class="addthis_button_twitter"></a>
            </div>
            <script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js"></script>
            <!-- AddThis Button END -->
            
          </div>
          <div class="option">
            <?php if ($options) { ?>
            <div class="options">
              <h2><?php echo $text_option; ?></h2>
              <br />
              <?php foreach ($options as $option) { ?>
              <?php if ($option['type'] == 'select') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <select name="option[<?php echo $option['product_option_id']; ?>]">
                  <option value=""><?php echo $text_select; ?></option>
                  <?php foreach ($option['option_value'] as $option_value) { ?>
                  <option value="<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                  <?php if ($option_value['price']) { ?>
                  (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                  <?php } ?>
                  </option>
                  <?php } ?>
                </select>
              </div>
              <br />
              <?php } ?>
              <?php if ($option['type'] == 'radio') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <?php foreach ($option['option_value'] as $option_value) { ?>
                <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" id="option-value-<?php echo $option_value['product_option_value_id']; ?>" />
                <label for="option-value-<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                  <?php if ($option_value['price']) { ?>
                  (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                  <?php } ?>
                </label>
                <br />
                <?php } ?>
              </div>
              <br />
              <?php } ?>
              <?php if ($option['type'] == 'checkbox') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <?php foreach ($option['option_value'] as $option_value) { ?>
                <input type="checkbox" name="option[<?php echo $option['product_option_id']; ?>][]" value="<?php echo $option_value['product_option_value_id']; ?>" id="option-value-<?php echo $option_value['product_option_value_id']; ?>" />
                <label for="option-value-<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                  <?php if ($option_value['price']) { ?>
                  (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                  <?php } ?>
                </label>
                <br />
                <?php } ?>
              </div>
              <br />
              <?php } ?>
              <?php if ($option['type'] == 'image') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <table class="option-image">
                  <?php foreach ($option['option_value'] as $option_value) { ?>
                  <tr>
                    <td style="width: 1px;"><input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" id="option-value-<?php echo $option_value['product_option_value_id']; ?>" /></td>
                    <td><label for="option-value-<?php echo $option_value['product_option_value_id']; ?>"><img src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" /></label></td>
                    <td><label for="option-value-<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                        <?php if ($option_value['price']) { ?>
                        (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                        <?php } ?>
                      </label></td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <br />
              <?php } ?>
              <?php if ($option['type'] == 'text') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['option_value']; ?>" />
              </div>
              <br />
              <?php } ?>
              <?php if ($option['type'] == 'textarea') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <textarea name="option[<?php echo $option['product_option_id']; ?>]" cols="40" rows="5"><?php echo $option['option_value']; ?></textarea>
              </div>
              <br />
              <?php } ?>
              <?php if ($option['type'] == 'file') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <input type="button" value="<?php echo $button_upload; ?>" id="button-option-<?php echo $option['product_option_id']; ?>" class="button">
                <input type="hidden" name="option[<?php echo $option['product_option_id']; ?>]" value="" />
              </div>
              <br />
              <?php } ?>
              <?php if ($option['type'] == 'date') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['option_value']; ?>" class="date" />
              </div>
              <br />
              <?php } ?>
              <?php if ($option['type'] == 'datetime') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['option_value']; ?>" class="datetime" />
              </div>
              <br />
              <?php } ?>
              <?php if ($option['type'] == 'time') { ?>
              <div id="option-<?php echo $option['product_option_id']; ?>" class="option">
                <?php if ($option['required']) { ?>
                <span class="required">*</span>
                <?php } ?>
                <b><?php echo $option['name']; ?>:</b><br />
                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['option_value']; ?>" class="time" />
              </div>
              <br />
              <?php } ?>
              <?php } ?>
            </div>
            <?php } ?>
          </div>
          <?php if ($tags) { ?>
          <div class="tags">
            <b><?php echo $text_tags; ?></b>
            <?php for ($i = 0; $i < count($tags); $i++) { ?>
            <?php if ($i < (count($tags) - 1)) { ?>
            <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>
            ,
            <?php } else { ?>
            <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>
            <?php } ?>
            <?php } ?>
          </div>
          <?php } ?>
        </article>
      </section>
      <!-- /produto -->
    </div>
    <?php if ($products) { ?>
    <!-- barra -->
    <div class="barra">
      <div class="container_16 clearfix">
        <div class="grid_16 linha_dupla">
          <h2>RECOMENDAMOS</h2>
        </div>
      </div>
      <div class="sombra">
      </div>
    </div>
    <!-- /barra -->
    <section class="container_16 clearfix">
      <?php $j = 0; ?>
      <!-- recomendado -->
      <?php foreach ($products as $product) { ?>
      <article class="grid_5 recomendado">
        <?php if ($product['thumb']) { ?>
        <figure>
          <a href="<?php echo $product['href']; ?>">
            <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" />
          </a>
          <div class="sombra">
          </div>
        </figure>
        <?php } ?>
        <div class="content">
          <h3>
            <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
          </h3>
          <?php if ($product['price']) { ?>
          <?php if (!$product['special']) { ?>
          <span><?php echo $product['price']; ?></span>
          <?php } else { ?>
          <span><?php echo $product['special']; ?></span>
          <?php } ?>
          <?php } ?>
          <a href="<?php echo $product['href']; ?>" class="comprar"><?php echo $button_cart; ?></a>
          </span>
          </a>
        </div>
      </article>
      <?php 
            $j++;
            if($j > 2){
                $j = 0;
      ?>
      <div class="grid_1">
      </div>
      <?php }
        ?>
      <?php } ?>
      <!-- /recomendado -->
      <?php } ?>
    </section>
    <div class="sombra">
    </div>
  </div>
  <?php echo $content_bottom; ?>
</div>
<!--<script type="text/javascript">
$('.colorbox').colorbox({
	overlayClose: true,
	opacity: 0.5
});
</script>//-->
<script type="text/javascript"><!--
$('#button-cart').bind('click', function() {
	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
		dataType: 'json',
		success: function(json) {
			$('.success, .warning, .attention, information, .error').remove();
			
			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						$('#option-' + i).after('<span class="error">' + json['error']['option'][i] + '</span>');
					}
				}
			} 
			
			if (json['success']) {
				$('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
					
				$('.success').fadeIn('slow');
					
				$('#cart-total').html(json['total']);
				
				$('html, body').animate({ scrollTop: 0 }, 'slow'); 
			}	
		}
	});
});
//--></script>
<?php if ($options) { ?>
<script type="text/javascript" src="catalog/view/javascript/jquery/ajaxupload.js"></script>
<?php foreach ($options as $option) { ?>
<?php if ($option['type'] == 'file') { ?>
<script type="text/javascript"><!--
new AjaxUpload('#button-option-<?php echo $option['product_option_id']; ?>', {
	action: 'index.php?route=product/product/upload',
	name: 'file',
	autoSubmit: true,
	responseType: 'json',
	onSubmit: function(file, extension) {
		$('#button-option-<?php echo $option['product_option_id']; ?>').after('<img src="catalog/view/theme/default/image/loading.gif" class="loading" style="padding-left: 5px;" />');
		$('#button-option-<?php echo $option['product_option_id']; ?>').attr('disabled', true);
	},
	onComplete: function(file, json) {
		$('#button-option-<?php echo $option['product_option_id']; ?>').attr('disabled', false);
		
		$('.error').remove();
		
		if (json['success']) {
			alert(json['success']);
			
			$('input[name=\'option[<?php echo $option['product_option_id']; ?>]\']').attr('value', json['file']);
		}
		
		if (json['error']) {
			$('#option-<?php echo $option['product_option_id']; ?>').after('<span class="error">' + json['error'] + '</span>');
		}
		
		$('.loading').remove();	
	}
});
//--></script>
<?php } ?>
<?php } ?>
<?php } ?>
<script type="text/javascript"><!--
$('#review .pagination a').live('click', function() {
	$('#review').fadeOut('slow');
		
	$('#review').load(this.href);
	
	$('#review').fadeIn('slow');
	
	return false;
});			

$('#review').load('index.php?route=product/product/review&product_id=<?php echo $product_id; ?>');

$('#button-review').bind('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=<?php echo $product_id; ?>',
		type: 'post',
		dataType: 'json',
		data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : '') + '&captcha=' + encodeURIComponent($('input[name=\'captcha\']').val()),
		beforeSend: function() {
			$('.success, .warning').remove();
			$('#button-review').attr('disabled', true);
			$('#review-title').after('<div class="attention"><img src="catalog/view/theme/default/image/loading.gif" alt="" /> <?php echo $text_wait; ?></div>');
		},
		complete: function() {
			$('#button-review').attr('disabled', false);
			$('.attention').remove();
		},
		success: function(data) {
			if (data['error']) {
				$('#review-title').after('<div class="warning">' + data['error'] + '</div>');
			}
			
			if (data['success']) {
				$('#review-title').after('<div class="success">' + data['success'] + '</div>');
								
				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').attr('checked', '');
				$('input[name=\'captcha\']').val('');
			}
		}
	});
});
//--></script>
<script type="text/javascript"><!--
$('#tabs a').tabs();
//--></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript"><!--
if ($.browser.msie && $.browser.version == 6) {
	$('.date, .datetime, .time').bgIframe();
}

$('.date').datepicker({dateFormat: 'yy-mm-dd'});
$('.datetime').datetimepicker({
	dateFormat: 'yy-mm-dd',
	timeFormat: 'h:m'
});
$('.time').timepicker({timeFormat: 'h:m'});
//--></script>
<?php echo $footer; ?>