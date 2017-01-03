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
      <!-- topo -->
      <header class="topo">
        <div class="clearfix" >
          <div class="grid_16 faixa omega">
            <h1><?php echo $heading_title; ?></h1>
          </div>
          <div class="grid_9 box_midle">
            <div class="content">
              <?php if ($description) { ?>
              <?php if ($description) { ?>
              <?php echo $description; ?>
              <?php } ?>
              <?php } ?>
            </div>
            <div class="sub_category">
              <?php if ($categories) { ?>
              <span><?php echo $text_refine; ?></span>
              <div class="category-list">
                <?php if (count($categories) <= 5) { ?>
                <ul>
                  <?php foreach ($categories as $category) { ?>
                  <li>
                    <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
                  </li>
                  <?php } ?>
                </ul>
                <?php } else { ?>
                <?php for ($i = 0; $i < count($categories);) { ?>
                <ul>
                  <?php $j = $i + ceil(count($categories) / 4); ?>
                  <?php for (; $i < $j; $i++) { ?>
                  <?php if (isset($categories[$i])) { ?>
                  <li>
                    <a href="<?php echo $categories[$i]['href']; ?>"><?php echo $categories[$i]['name']; ?></a>
                  </li>
                  <?php } ?>
                  <?php } ?>
                </ul>
                <?php } ?>
                <?php } ?>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="grid_7 box_right">
            <div class="ico">
              <?php if ($thumb) { ?>
              <div class="category-info">
                <?php if ($thumb) { ?>
                <div class="image">
                  <img src="<?php echo $thumb; ?>" alt="<?php echo $heading_title; ?>" />
                </div>
                <?php } ?>
              </div>
              <?php } ?>
            </div>
          </div>
            <div class="product-compare">
            <a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a>
          </div>
            <div class="selects">
            <?php if ($products) { ?>
            <div class="sort">
              <b><?php echo $text_sort; ?></b>
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
            <div class="limit">
              <b><?php echo $text_limit; ?></b>
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
            <?php } ?>
              </div>
            
        </div>
      </header>
      <!-- /topo -->
      <section>
        <?php if ($products) { ?>
        <!-- produto -->
        <?php foreach ($products as $product) { ?>
        <article class="grid_14 suffix_1 prefix_1 produtos">
          <figure class="grid_3 alpha">
            <?php if ($product['thumb']) { ?>
            <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" title="<?php echo $product['name']; ?>" alt="<?php echo $product['name']; ?>" /></a>
            <?php } ?>
            <div class="sombra">
            </div>
          </figure>
          <div class="content grid_8">
            <h2><?php echo $product['name']; ?></h2>
            <?php echo $product['description']; ?><span>
              
              <?php if ($product['price']) { ?>
      <div class="price">
        <?php if (!$product['special']) { ?>
        <?php echo $product['price']; ?>
        <?php } else { ?>
         <?php echo $product['special']; ?>
        <?php } ?>
        
      </div>
      <?php } ?>
              
          </span>
          </div>
          <div class="grid_3 omega">
            <a class="comprar" href="<?php echo $product['href']; ?>"><?php echo $button_cart; ?><span class="ir">
              >
            </span></a>
            <div class="wishlist">
              <span class="ir"></span>
              <a onclick="addToWishList('<?php echo $product['product_id']; ?>');"><?php echo $button_wishlist; ?></a>
            </div>
            <div class="compare">
              <span class="ir"></span>
              <a onclick="addToCompare('<?php echo $product['product_id']; ?>');"><?php echo $button_compare; ?></a>
            </div>
          </div>
        </article>
        <?php } ?>
        <!-- produto -->
        <?php } ?>
        <?php if (!$categories && !$products) { ?>
        <div class="content sem_prod">
          <?php echo $text_empty; ?>
        </div>
        <div class="but">
          <div class="right">
            <a href="<?php echo $continue; ?>" class="button"><?php echo $button_continue; ?></a>
          </div>
        </div>
        <?php } ?>
      </section>
      <div class="clear">
      </div>
      <!-- paginator -->
      <footer class="paginator">
        <div class="pagination grid_16 ">
          <div class="results">
            <?php if ($products) { ?>
            <?php echo $pagination; ?>
            <?php } ?>
          </div>
        </div>
      </footer>
      <!-- paginator -->
    </div>
    <div class="sombra">
    </div>
  </div>
  
  <?php //echo $content_bottom; ?>
</div>
<script type="text/javascript"><!--


view = $.cookie('display');

if (view) {
	display(view);
} else {
	display('list');
}
//--></script>
<?php echo $footer; ?>