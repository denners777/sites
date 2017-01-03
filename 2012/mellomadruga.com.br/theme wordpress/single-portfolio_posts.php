<?php get_header(); $IMGSRC = array();?>
<style type="text/css">
.play2 {
	margin: 60px auto;
}
.widgets {
	margin-top: 15px !important;
	margin-bottom: -30px !important;
}
.linha {
	padding: 15px;
	background-color: #1A1A1A;
	background-color: rgba(0, 0, 0, 0.7);
	color: rgba(0, 0, 0, 0.7);
	margin-bottom: 75px !important;
}
.linha li {
	margin-bottom: 15px;
	padding-bottom:30px;
}
.linha li .titletab {
	font-size: 22px;
	color: #EBEBEB;
	letter-spacing: -2px;
	text-align:center;
}
.linha li a {
	text-decoration: none;
}
.linha li a:hover .title {
	color: #999;
	font-family: UniversLTStd57CnRegular;
}
.linha li .title {
	color: #EBEBEB;
	font-size: 14px;
	font-family: UniversLTStd57CnRegular;
}
.social2 {
	font-size: 20px;
	float: left;
	margin-right: 20px;
	color: #E8EEF3;
	margin-top: 2px;
	letter-spacing: 1px;
}
.w {
	border-bottom: 1px dashed #3C3C3C;
}
.linha li table{
	margin-top: 15px;	
}
.linha li .boxnav a span {
	font-size: 18px;
	color: #FFF;
	text-align:center;
	font-family:UniversLTStd57CnRegular;
}
</style>

<div class="row">
  <div class="span8">
    <h1 class="page-title">
      <?php the_title(); ?>
    </h1>
  </div>
  <div class="span4"> </div>
</div>
<ul style="display: none;" class="unstyled article-nav clearfix" id="filters">
  <li><span>Ordenar por:</span></li>
  <li><a class="active" href="#" data-filter=".article-item">Todos</a></li>
</ul>
<div class="row clearfix">
  <div class="span8 blog-single">
    <div class="article-item pf-gallery">
      <?php
        if (have_posts ()) { while (have_posts ()) { (the_post());
				        ?>
      <?php  if(get_post_meta($post->ID, 'ddportfolioVideo', true) != '') { ?>
      <div class="img-container">
        <div class="portfolio-video">
          <ul class="clearfix article-links-play">
            <?php $my_retrieved_array = ddListGet('portfolioVideo', $post->ID);

                foreach ($my_retrieved_array as $item) { 
				?>
            <li><a class="play" href="<?php echo $item['video_link']; ?>" rel="prettyPhoto" title="">play</a></li>
            <?php } ?>
          </ul>
        </div>
        <img class="portfolio-single-img" src="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" alt="" /> </div>
      <?php } else if(get_post_meta($post->ID, 'ddportfolioSlider', true) != '') {  ?>
      <div class="article-img img-slides">
        <ul class="unstyled slides_container">
          <?php $my_retrieved_array = ddListGet('portfolioSlider', $post->ID);
                foreach ($my_retrieved_array as $item) { $IMGSRC[] = $item['img_url']; ?>
          <li class="img-item active"><a href="<?php echo $item['img_url']; ?>" rel="prettyPhoto[gal<?php echo $post->ID ?>]" title="<?php echo $item['field_name']; ?>"><img src="<?php echo $item['img_url']; ?>" alt="" /></a> </li>
          <?php  } ?>
        </ul>
      </div>
      <?php } else { ?>
      <div class="img-container"> <a href="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" rel="prettyPhoto" title="Gallery Post Format Img"> <img class="portfolio-single-img" src="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" alt="" /> </a> </div>
      <?php } ?>
      <?php }
        } else { ?>
      <div class="post box">
        <h3>
          <?php _e('O post não está disponível.', 'localization'); ?>
        </h3>
      </div>
      <?php } ?>
    </div>
    <?php comments_template(); ?>
  </div>
  <div class="sidebar span4">
    <div class="page-content wsidebar clearfix">
      <div class="article-text">
        <div class="article-meta"> Por
          <?php the_author(); $cat = get_the_tags();	echo $cat;?>
          em
          <?php the_time( get_option( 'date_format' ) ); ?>
        </div>
        <div class="row w">
          <?php the_content(); ?>
        </div>
      </div>
      <ul class="widgets unstyled">
        <span class="social2">Compartilhe! </span>
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Single Blog Post")) ; ?>
      </ul>
    </div>
  </div>
  <div class="sidebar span4">
    <ul class="widgets unstyled linha">
      <li><div class="titletab">CONHEÇA OUTROS PROJETOS</div>
        <div class="boxnav">
          <table border="0" width="85%" align="center">
            <tr> 
              <td width="15%" align="center" valign="middle"><a rel="tooltip" title="Anterior" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"><img src="<?php bloginfo('template_url') ?>/img/left.png" width="35" /></a></td>
              <td width="30%" align="center" valign="middle"><a rel="tooltip" title="Anterior" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"><span> Anterior</span></a></td>
              <td width="10%" align="center" valign="middle"><a rel="tooltip" title="Grade Soluções" href="<?php echo home_url(); ?>/?p=<?php echo get_option_tree('fullportfolio') ?>"> <i class="icon-th icon-white"></i> </a></td>
              <td width="30%" align="center" valign="middle"><a rel="tooltip" title="Próximo" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"><span>Próximo</span></a></td>
              <td width="15%" align="center" valign="middle"><a rel="tooltip" title="Próximo" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"><img src="<?php bloginfo('template_url') ?>/img/right.png" width="35" /></a></td>
               
           </tr>
          </table>
        </div>
        <!-- <ul class="portfolio-single-nav unstyled">
          <li></li>
          <li></li>
          <li></li>
        </ul> --> 
      </li>
      <?php
            
		    global $paged;
				$Ttax = get_the_terms($post->ID, 'portfolio_categories', '','','');
				//print_r($Ttax);
				$tax = array();
				if(!empty($Ttax)){
					foreach($Ttax as $stax){
						$tax[] = $stax->slug;
					}
				}
					$args = array(
						  'post_type' => 'portfolio_posts',
						  'portfolio_categories' => implode(',',$tax),
						  'post_status' => 'publish',
						  'posts_per_page' => 4,
						  'paged' => $paged,
					);
				
                $loop = new WP_Query( $args );
				//print_r($loop);
				while ( $loop->have_posts() ) : $loop->the_post(); 
?>
      <li> <a href="<?php the_permalink(); ?>">
        <h1 class="title">
          <?php the_title(); ?>
        </h1>
        </a>
        <?php  if(get_post_meta($post->ID, 'ddportfolioVideo', true) != '') { ?>
        <div class="img-container">
          <div class="portfolio-video">
            <ul class="clearfix article-links-play">
              <?php $my_retrieved_array = ddListGet('portfolioVideo', $post->ID);

                foreach ($my_retrieved_array as $item) { ?>
              <li><a class="play play2" href="<?php echo $item['video_link']; ?>" rel="prettyPhoto" title="">play</a></li>
              <?php } ?>
            </ul>
          </div>
          <a href="<?php the_permalink(); ?>"><img class="portfolio-single-img" src="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" alt="" /></a> </div>
        <?php } else if(get_post_meta($post->ID, 'ddportfolioSlider', true) != '') {  ?>
        <div class="article-img img-slides">
          <ul class="unstyled slides_container">
            <?php $my_retrieved_array = ddListGet('portfolioSlider', $post->ID);
				$contt = 0;
                foreach ($my_retrieved_array as $item) {
					if($contt < 2){ ?>
            <li class="img-item active"><a href="<?php echo $item['img_url']; ?>" rel="prettyPhoto" title="<?php echo $item['field_name']; ?>"><img src="<?php echo $item['img_url']; ?>" alt="" /></a> </li>
            <?php } $contt++;  } ?>
          </ul>
        </div>
        <?php } else { ?>
        <div class="img-container"> <a href="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" rel="prettyPhoto" title="Gallery Post Format Img"> <img class="portfolio-single-img" src="<?php echo get_post_meta($post->ID, 'portfolioImg', true) ?>" alt="" /> </a> </div>
        <?php } endwhile; ?>
      </li>
    </ul>
  </div>
</div>
</div>
<?php foreach($IMGSRC as $SRC){ ?>
<link rel="image_src" href="<?php echo $SRC ?>" />
<?php } ?>
<?php get_footer(); ?>
