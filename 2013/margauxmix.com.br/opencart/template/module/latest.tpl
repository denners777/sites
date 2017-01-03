<div class="barra">
  <div class="container_16 clearfix">
    <div class="grid_16 linha_dupla">
      <h2><?php echo $heading_title; ?></h2>
    </div>
  </div>
  <div class="sombra">
  </div>
</div>
<section class="destaques container_16 clearfix">
  <?php foreach ($products as $product) { ?>
  <article class="grid_5 item">
    <figure>
      <?php if ($product['thumb']) { ?>
      <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" />
      <?php } ?>
    </figure>
    <div class="content">
      <h1><?php echo $product['name']; ?></h1>
      <p><?php echo $product['description']; ?></p>
      <span><?php echo $product['price']; ?></span>
      <a href="<?php echo $product['href']; ?>">COMPRAR <b class="ir">
        >
        </b></a>
    </div>
    <div class="sombra">
    </div>
  </article>
  <?php } ?>
</section>