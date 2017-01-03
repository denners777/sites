<?php /*
  Template Name: Portfolio 4 Columns
 */ ?>
<?php get_header(); ?>
<?php
                global $paged;

                $arguments = array(
                    'post_type' => 'portfolio_posts',
					'posts_per_page' => 12,
                    'post_status' => 'publish',
					'ORDER' => 'DESC',
                    'paged' => $paged,

                );

                $portfolio_query = new WP_Query($arguments);

                dd_set_query($portfolio_query);
?>

<h1 class="page-title">
  <?php the_title(); ?>
</h1>
<ul class="unstyled article-nav clearfix" id="filters">
  <li><span>Ordenar por:</span></li>
  <li><a class="active" href="#" data-filter=".article-item">
    <?php _e('Todos', 'localization'); ?>
    </a></li>
  <?php
    $terms = get_terms("portfolio_categories");

    $count = count($terms);
    if ($count > 0) {

        foreach ($terms as $term) {
            echo '<li><a href="" data-filter="' . $term->name . '">' . $term->name . '</li></a>';
        }
    }
    ?>
</ul>
<div class="clearfix">
  <ul class="row article-items">
    <?php if ($portfolio_query->have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
    <li class="span3 article-item pf-gallery <?php echo custom_taxonomies_terms_text(); ?>">
      <?php if(get_post_meta($post->ID, 'ddportfolioSlider', true) != '') {  ?>
      <div class="article-img img-slides">
        <ul class="unstyled slides_container">
          <?php $my_retrieved_array = ddListGet('portfolioSlider', $post->ID);
					$ContIM = 0;
                foreach ($my_retrieved_array as $item) {
					if($ContIM<1){
					 ?>
          <li class="img-item active"><a href="<?php echo $item['img_url']; ?>" rel="prettyPhoto[gal<?php echo $post->ID ?>]" title="<?php echo $item['field_name']; ?>"><img src="<?php echo $item['img_url']; ?>" alt="" /></a> </li>
          <?php } $ContIM++;  } ?>
        </ul>
      </div>
      <?php } else { ?>
      <div class="article-img">
        <?php  if(get_post_meta($post->ID, 'ddportfolioVideo', true) != '') { ?>
        <div class="portfolio-video">
          <ul class="clearfix article-links-play">
            <?php $my_retrieved_array = ddListGet('portfolioVideo', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
            <li><a class="play" href="<?php echo $item['video_link']; ?>" rel="prettyPhoto" title="">play</a></li>
            <?php } ?>
          </ul>
        </div>
        <?php } else { ?>
        <div class="article-hover">
          <ul class="clearfix article-links">
            <li><a class="zoom" href="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" rel="prettyPhoto[gallery1]" title="<?php the_title(); ?>">
              <?php _e('Zoom', 'localization'); ?>
              </a></li>
            <li><a class="link" href="<?php the_permalink(); ?>">
              <?php _e('Link', 'localization'); ?>
              </a></li>
          </ul>
        </div>
        <?php } ?>
        <img src="<?php echo get_template_directory_uri(); ?>/includes/timthumb.php?q=100&amp;w=570&amp;zc=1&amp;src=<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" alt="" /> </div>
      <?php } ?>
      <div class="article-title"> <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        </a> </div>
      <div class="article-content clearfix">
        <div class="article-text">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </li>
    <?php endwhile; ?>
    <?php endif; ?>
  </ul>
  <?php
		kriesi_pagination();
		dd_restore_query();
  ?>
</div>
<?php get_footer(); ?>
