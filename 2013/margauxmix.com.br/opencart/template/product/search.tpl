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
      <div class="conta busca">
        <div class="grid_5 suffix_1 listra">
          <h5><?php echo $text_critea; ?></h5>
          <ul>
            <li class="clearfix"><?php echo $entry_search; ?>
              <?php if ($filter_name) { ?>
              <input type="text" name="filter_name" value="<?php echo $filter_name; ?>" />
              <?php } else { ?>
              <input type="text" name="filter_name" value="<?php echo $filter_name; ?>" onclick="this.value = '';" onkeydown="this.style.color = '000000'" style="color: #999;" />
              <?php } ?>
            </li>
            <li class="clearfix">
                <select name="filter_category_id">
                <option value="0"><?php echo $text_category; ?></option>
                <?php foreach ($categories as $category_1) { ?>
                <?php if ($category_1['category_id'] == $filter_category_id) { ?>
                <option value="<?php echo $category_1['category_id']; ?>" selected="selected"><?php echo $category_1['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $category_1['category_id']; ?>"><?php echo $category_1['name']; ?></option>
                <?php } ?>
                <?php foreach ($category_1['children'] as $category_2) { ?>
                <?php if ($category_2['category_id'] == $filter_category_id) { ?>
                <option value="<?php echo $category_2['category_id']; ?>" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_2['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $category_2['category_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_2['name']; ?></option>
                <?php } ?>
                <?php foreach ($category_2['children'] as $category_3) { ?>
                <?php if ($category_3['category_id'] == $filter_category_id) { ?>
                <option value="<?php echo $category_3['category_id']; ?>" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_3['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $category_3['category_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_3['name']; ?></option>
                <?php } ?>
                <?php } ?>
                <?php } ?>
                <?php } ?>
              </select>
            </li>
            <li class="clearfix">
              <?php if ($filter_sub_category) { ?>
              <input type="checkbox" name="filter_sub_category" value="1" id="sub_category" checked="checked" />
              <?php } else { ?>
              <input type="checkbox" name="filter_sub_category" value="1" id="sub_category" />
              <?php } ?>
              <label for="sub_category"><?php echo $text_sub_category; ?></label>
            </li>
            <li class="clearfix">
              <?php if ($filter_description) { ?>
              <input type="checkbox" name="filter_description" value="1" id="description" checked="checked" />
              <?php } else { ?>
              <input type="checkbox" name="filter_description" value="1" id="description" />
              <?php } ?>
              <label for="description"><?php echo $entry_description; ?></label>
            </li>
            <li class="clearfix">
                <input type="button" class="comprar" value="<?php echo $button_search; ?>" id="button-search" class="button" />
                <span class="seta"></span>
            </li>
          </ul>
        </div>
        <div class="grid_10">
          <?php if ($products) { ?>
          <h5><?php echo $text_search; ?></h5>
          <div class="limit">
            <?php echo $text_limit; ?>
            <select class="show" onchange="location = this.value;">
              <?php foreach ($limits as $limits) { ?>
              <?php if ($limits['value'] == $limit) { ?>
              <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
              <?php } else { ?>
              <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
              <?php } ?>
              <?php } ?>
            </select>
          </div>
          <div class="sort">
            <?php echo $text_sort; ?>
            <select class="order" onchange="location = this.value;">
              <?php foreach ($sorts as $sorts) { ?>
              <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
              <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
              <?php } else { ?>
              <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
              <?php } ?>
              <?php } ?>
            </select>
          </div>
          <div class="product-compare">
            <a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a>
          </div>
          <ul>
            <?php foreach ($products as $product) { ?>
            <li class="clearfix">
              <div>
                <?php if ($product['thumb']) { ?>
                <figure class="image">
                  <a href="<?php echo $product['href']; ?>">
                    <img src="<?php echo $product['thumb']; ?>" title="<?php echo $product['name']; ?>" alt="<?php echo $product['name']; ?>" />
                  </a>
                </figure>
                <?php } ?>
                <span class="name">
                  <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                </span>
                <div class="description">
                  <?php echo $product['description']; ?>
                </div>
                <?php if ($product['price']) { ?>
                <div class="price">
                  <?php if (!$product['special']) { ?>
                  <?php echo $product['price']; ?>
                  <?php } else { ?>
                  <span class="price-new"><?php echo $product['special']; ?></span>
                  <?php } ?>
                </div>
                <?php } ?>
                <div class="cart">
                  <input type="button" value="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');" class="comprar" />
                  <span class="seta"></span>
                </div>
                <div class="wishlist">
                  <span class="ir"></span><a onclick="addToWishList('<?php echo $product['product_id']; ?>');"><?php echo $button_wishlist; ?></a>
                </div>
                <div class="compare">
                  <span class="ir"></span><a onclick="addToCompare('<?php echo $product['product_id']; ?>');"><?php echo $button_compare; ?></a>
                </div>
              </div>
            </li>
            <?php } ?>
          </ul>
          <?php } else { ?>
          <div class="content">
            <?php echo $text_empty; ?>
          </div>
          <?php }?>
        </div>
        <div class="clear">
        </div>
        <?php if ($products) { ?>
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
  <?php echo $content_bottom; ?>
</div>
<script type="text/javascript"><!--
$('#content input[name=\'filter_name\']').keydown(function(e) {
  if (e.keyCode == 13) {
    $('#button-search').trigger('click');
  }
});

$('#button-search').bind('click', function() {
  url = 'index.php?route=product/search';

  var filter_name = $('#content input[name=\'filter_name\']').attr('value');

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_category_id = $('#content select[name=\'filter_category_id\']').attr('value');

  if (filter_category_id > 0) {
    url += '&filter_category_id=' + encodeURIComponent(filter_category_id);
  }

  var filter_sub_category = $('#content input[name=\'filter_sub_category\']:checked').attr('value');

  if (filter_sub_category) {
    url += '&filter_sub_category=true';
  }

  var filter_description = $('#content input[name=\'filter_description\']:checked').attr('value');

  if (filter_description) {
    url += '&filter_description=true';
  }

  location = url;
});

function display(view) {
  if (view == 'list') {
    $('.product-grid').attr('class', 'product-list');

    $('.product-list > div').each(function(index, element) {
      html  = '<div class="right">';
      html += '  <div class="cart">' + $(element).find('.cart').html() + '</div>';
      html += '  <div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
      html += '  <div class="compare">' + $(element).find('.compare').html() + '</div>';
      html += '</div>';			

      html += '<div class="left">';

      var image = $(element).find('.image').html();

      if (image != null) { 
        html += '<div class="image">' + image + '</div>';
      }

      var price = $(element).find('.price').html();

      if (price != null) {
        html += '<div class="price">' + price  + '</div>';
      }

      html += '  <div class="name">' + $(element).find('.name').html() + '</div>';
      html += '  <div class="description">' + $(element).find('.description').html() + '</div>';

      var rating = $(element).find('.rating').html();

      if (rating != null) {
        html += '<div class="rating">' + rating + '</div>';
      }

      html += '</div>';


      $(element).html(html);
    });		

$('.display').html('<b><?php echo $text_display; ?></b> <?php echo $text_list; ?> <b>/</b> <a onclick="display(\'grid\');"><?php echo $text_grid; ?></a>');

$.cookie('display', 'list'); 
} else {
  $('.product-list').attr('class', 'product-grid');

  $('.product-grid > div').each(function(index, element) {
    html = '';

    var image = $(element).find('.image').html();

    if (image != null) {
      html += '<div class="image">' + image + '</div>';
    }

    html += '<div class="name">' + $(element).find('.name').html() + '</div>';
    html += '<div class="description">' + $(element).find('.description').html() + '</div>';

    var price = $(element).find('.price').html();

    if (price != null) {
      html += '<div class="price">' + price  + '</div>';
    }	

    var rating = $(element).find('.rating').html();

    if (rating != null) {
      html += '<div class="rating">' + rating + '</div>';
    }

    html += '<div class="cart">' + $(element).find('.cart').html() + '</div>';
    html += '<div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
    html += '<div class="compare">' + $(element).find('.compare').html() + '</div>';

    $(element).html(html);
  });	

  $('.display').html('<b><?php echo $text_display; ?></b> <a onclick="display(\'list\');"><?php echo $text_list; ?></a> <b>/</b> <?php echo $text_grid; ?>');

  $.cookie('display', 'grid');
}
}

view = $.cookie('display');

if (view) {
  display(view);
} else {
  display('list');
}
//--></script>
<?php echo $footer; ?>