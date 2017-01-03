<?php get_header(); ?>
<style type="text/css">
.play2 {
	margin: 60px auto;
}
.linha {
	padding: 15px;
	background-color: #1A1A1A;
	background-color: rgba(0, 0, 0, 0.7);
	color: rgba(0, 0, 0, 0.7);
	margin-bottom:25px !important;
}
.linha li {
	margin-bottom: 15px;
}
.linha li a {
	text-decoration: none;
}
.linha li a:hover .title {
	color: #999;
}
.linha li .title {
	color: #EBEBEB;
	font-size: 14px;
}
.social2{
	font-size: 20px;
	float: left;
	margin-right: 20px;
	color: #E8EEF3;
	margin-top: 2px;
	letter-spacing: 1px;
}
.widgets {
	margin-top: 15px !important;
	margin-bottom: -30px !important;
}
.w{
	border-bottom: 1px dashed #3C3C3C;
}
</style>

<h1 class="page-title">
  <?php the_title(); ?>
</h1>
<ul style="display: none;" class="unstyled article-nav clearfix" id="filters">
  <li><span>Ordenar por :</span></li>
  <li><a class="active" href="#" data-filter=".article-item">Tudo</a></li>
</ul>
<div class="row clearfix">
  <div class="span8 blog-single">
    <div class="article-item pf-gallery">
      <?php
        if (have_posts ()) { while (have_posts ()) { (the_post());
        ?>
      <?php if (has_post_format('video')) { ?>
      <div class="img-container">
        <div class="portfolio-video">
          <ul class="clearfix article-links-play">
            <?php $my_retrieved_array = ddListGet('blogVideo', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
            <li><a class="play" href="<?php echo $item['blog_video_link']; ?>" rel="prettyPhoto" title="">play</a></li>
            <?php } ?>
          </ul>
        </div>
        <?php $blogImg = ddListGet('blogImg', get_the_ID()); ?>
        <img src="<?php echo $blogImg[0]['img_url']; ?>" alt="" /> </div>
      <?php } else if (has_post_format('gallery')) {  ?>
      <div class="article-img img-slides">
        <ul class="unstyled slides_container">
          <?php $my_retrieved_array = ddListGet('postSlider', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
          <li class="img-item active"><a href="<?php echo $item['img_url']; ?>" rel="prettyPhoto" title="<?php echo $item['field_name']; ?>"><img src="<?php echo $item['img_url']; ?>" alt="" /></a> </li>
          <?php  } ?>
        </ul>
      </div>
      <?php } else { ?>
      <?php if (get_post_meta($post->ID, 'ddblogImg', true) != '') { ?>
      <div class="img-container">
        <?php $blogImg = ddListGet('blogImg', get_the_ID()); ?>
        <a href="<?php echo $blogImg[0]['img_url']; ?>" rel="prettyPhoto" title=""> <img class="portfolio-single-img" src="<?php echo $blogImg[0]['img_url']; ?>" alt="" /> </a> </div>
      <?php } ?>
      <?php } ?>
      <div class="page-content wsidebar clearfix">
        
      </div>
      <?php }
        } else { ?>
      <div class="post box">
        <h3>
          <?php _e('There is not post available.', 'localization'); ?>
        </h3>
      </div>
      <?php } ?>
    </div>
    <?php comments_template(); ?>
  </div>
  <div class="sidebar span4">
  <div class="page-content wsidebar clearfix">
          <div class="article-meta">
            <?php 
				$arc_year = get_the_time('Y'); 
				$arc_month = get_the_time('m'); 
				$arc_day = get_the_time('d'); 
			?>
            por
            <?php the_author_posts_link(); ?>
            em <a href="<?php echo get_day_link($arc_year, $arc_month, $arc_day); ?>">
            <?php the_time( get_option( 'date_format' ) ); ?>
            </a> </div>
          <div class="row w">
            <?php the_content(); ?>
          </div>
          <div style="display: none">
            <?php the_tags(); ?>
            posts_nav_link() paginate_comments_links() if ( ! isset( $content_width ) ) $content_width = 900;
            <?php wp_link_pages( $args ); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>
            <?php comment_form(); ?>
          </div>
          <ul class="widgets unstyled">
          
          <span class="social2">Compartilhe! </span>
          <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Single Blog Post")) ; ?>
      </ul>
        </div>
  </div>
  <div class="sidebar span4">
  <ul class="widgets unstyled linha">
    <?php
		$Ttax = get_the_category($post->ID);
		$tax = array();
		foreach($Ttax as $stax){
			$tax[] = $stax->slug ;
		}
		$arguments = array(
			 'category_name' => implode(', ',$tax),
			 'post_status' => 'publish',
			 'posts_per_page' => 4,
		);
		query_posts( $arguments );
        if (have_posts ()) { while (have_posts ()) { (the_post());
     ?>
    <li> <a href="<?php the_permalink(); ?>">
      <h1 class="title">
        <?php the_title(); ?>
      </h1>
      </a> 
      
      <!-- começa -->
      <?php if (has_post_format('video')) { ?>
      <div class="img-container">
        <div class="portfolio-video">
          <ul class="clearfix article-links-play">
            <?php $my_retrieved_array = ddListGet('blogVideo', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
            <li><a class="play" href="<?php echo $item['blog_video_link']; ?>" rel="prettyPhoto" title="">play</a></li>
            <?php } ?>
          </ul>
        </div>
        <?php $blogImg = ddListGet('blogImg', get_the_ID()); ?>
        <img src="<?php echo $blogImg[0]['img_url']; ?>" alt="" /> </div>
      <?php } else if (has_post_format('gallery')) {  ?>
      <div class="article-img img-slides">
        <ul class="unstyled slides_container">
          <?php $my_retrieved_array = ddListGet('postSlider', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
          <li class="img-item active"><a href="<?php echo $item['img_url']; ?>" rel="prettyPhoto" title="<?php echo $item['field_name']; ?>"><img src="<?php echo $item['img_url']; ?>" alt="" /></a> </li>
          <?php  } ?>
        </ul>
      </div>
      <?php } else { ?>
      <?php if (get_post_meta($post->ID, 'ddblogImg', true) != '') { ?>
      <div class="img-container">
        <?php $blogImg = ddListGet('blogImg', get_the_ID()); ?>
        <a href="<?php echo $blogImg[0]['img_url']; ?>" rel="prettyPhoto" title=""> <img class="portfolio-single-img" src="<?php echo $blogImg[0]['img_url']; ?>" alt="" /> </a> </div>
      <?php } ?>
      <?php } ?>
      
      <!-- termina -->
     </li>
    <?php  }//fim while
    }//fim if endif; ?>
  </ul>
</div>
</div>
</div>
<?php get_footer(); ?>
