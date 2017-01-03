<?php



include 'shortcodes.php';



add_filter( 'widget_text', 'shortcode_unautop');

add_filter( 'widget_text', 'do_shortcode');



add_filter( 'the_excerpt', 'shortcode_unautop');

add_filter( 'the_excerpt', 'do_shortcode');









  add_theme_support( 'post-thumbnails' ); 

  add_theme_support( 'post-formats', array( 'gallery', 'audio', 'video', 'link', 'image', 'quote' ) );

add_theme_support('automatic-feed-links');

// Ready for theme localisation

load_theme_textdomain('localization');



include("includes/metaboxes/metaboxes.php");

require TEMPLATEPATH . '/option-tree/index.php';

require_once TEMPLATEPATH . '/includes/comment-list.php';



/* ==OTHER FUNCTION === */



function ddTimthumb($img, $width, $height) {



    return get_template_directory_uri() . '/includes/timthumb.php?q=100&amp;zc=1&amp;src=' . $img . '&amp;w=' . $width . '&amp;h=' . $height;

}



// Register our menues



add_theme_support('nav-menus');



register_nav_menu('main_menu', 'Main Menu');



function display_home2() {

    echo '<ul class="nav">

		<li class="homelink"><a href="' . home_url() . '">Home</a></li>';

    wp_list_pages('title_li=&depth=3');

    echo '</ul>';

}



// Registering our sidebar



if (function_exists('register_sidebar')) {

register_sidebar(array(

'name' => 'Homepage',

'before_widget' => '<li class="span4"><div id="%1$s" class="%2$s">',

'after_widget' => '</div></li>',

'before_title' => '<h3>',

'after_title' => '</h3>',

));

}



if (function_exists('register_sidebar')) {

register_sidebar(array(

'name' => 'Pages',

'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',

'after_widget' => '</div></li>',

'before_title' => '<h3>',

'after_title' => '</h3>',

));

}





if (function_exists('register_sidebar')) {

register_sidebar(array(

'name' => 'Portfolio',

'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',

'after_widget' => '</div></li>',

'before_title' => '<h3>',

'after_title' => '</h3>',

));

}



if (function_exists('register_sidebar')) {

register_sidebar(array(

'name' => 'Single Portfolio Post',

'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',

'after_widget' => '</div></li>',

'before_title' => '<h3>',

'after_title' => '</h3>',

));

}



if (function_exists('register_sidebar')) {

register_sidebar(array(

'name' => 'Blog',

'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',

'after_widget' => '</div></li>',

'before_title' => '<h3>',

'after_title' => '</h3>',

));

}

if (function_exists('register_sidebar')) {

register_sidebar(array(

'name' => 'Single Blog Post',

'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',

'after_widget' => '</div></li>',

'before_title' => '<h3>',

'after_title' => '</h3>',

));

}



if (function_exists('register_sidebar')) {

register_sidebar(array(

'name' => 'Archive And Category',

'before_widget' => '<li class="widget"><div id="%1$s" class="%2$s">',

'after_widget' => '</div></li>',

'before_title' => '<h3>',

'after_title' => '</h3>',

));

}





//Save image via AJAX

add_action('wp_ajax_ddpanel_ajax_upload', 'ddpanel_ajax_upload'); //Add support for AJAX save



function ddpanel_ajax_upload(){



	global $wpdb; //Now WP database can be accessed





	$image_id=$_POST['data'];

	$image_filename=$_FILES[$image_id];

	$override['test_form']=false; //see http://wordpress.org/support/topic/269518?replies=6

	$override['action']='wp_handle_upload';



	$uploaded_image = wp_handle_upload($image_filename,$override);



	if(!empty($uploaded_image['error'])){

		echo 'Error: ' . $uploaded_image['error'];

	}

	else{

		update_option($image_id, $uploaded_image['url']);

		echo $uploaded_image['url'];

	}



	die();



}



// Set custom query + Take it off + Related Post



function dd_set_query($custom_query=null) { global $wp_query, $wp_query_old, $post, $orig_post;



	$wp_query_old = $wp_query;



	$wp_query = $custom_query;



	$orig_post = $post;



}



function dd_restore_query() {  global $wp_query, $wp_query_old, $post, $orig_post;



	$wp_query = $wp_query_old;



	$post = $orig_post;



	setup_postdata($post);



}



// Page Navigation



function kriesi_pagination($pages = '', $range = 2)

{

     $showitems = ($range * 2)+1;



     global $paged;

     if(empty($paged)) $paged = 1;



     if($pages == '')

     {

         global $wp_query;

         $pages = $wp_query->max_num_pages;

         if(!$pages)

         {

             $pages = 1;

         }

     }



     if(1 != $pages)

     {

         echo "<ul class='unstyled blog-pagination clearfix'>";

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";

         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";



         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<li><span class='current'>".$i."</span></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";

             }

         }



         if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";

         echo "</ul>\n";

     }

}



include('includes/functions/portfolio/portfolio.php');

include('includes/functions/testimonials/testimonials.php');





$metaFields = array(



		array(



			'type' => 'img',

			'name' => 'img_url',

			'title' => 'Image URL'



		),



		array(



			'type' => 'text',

			'name' => 'field_name',

			'title' => 'Field Title'



		)



	);



$metaFields2 = array(



		array(



			'type' => 'img',

			'name' => 'img_url',

			'title' => 'Image URL'



		)



	);



$metaFields3 = array(



    array(



			'type' => 'img',

			'name' => 'testimonials_avatar',

			'title' => 'Avatar'



		),

		array(



			'type' => 'text',

			'name' => 'testimonials_link',

			'title' => 'Link Text'



		),



    array(



			'type' => 'text',

			'name' => 'testimonials_url',

			'title' => 'Link URL'



		)



	);

$metaFields4 = array(



   

		array(



			'type' => 'text',

			'name' => 'video_link',

			'title' => 'Video Link URL'



		)



	);



$metaFields5 = array(



		array(



			'type' => 'img',

			'name' => 'img_url',

			'title' => 'Image URL'



		),





	);



$metaFields6 = array(



   

		array(



			'type' => 'text',

			'name' => 'blog_video_link',

			'title' => 'Video Link URL'



		)



	);

$metaFields7 = array(



   

		array(



			'type' => 'text',

			'name' => 'blog_link_link',

			'title' => 'Link Format URL'



		)



	);









ddCreateNewListMetabox('portfolioSlider', $metaFields, 'portfolio_posts', 'high', 'Gallery Image');

ddCreateNewListMetabox('blogImg', $metaFields2, 'post', 'high', 'Blog Image');

ddCreateNewListMetabox('testimonials', $metaFields3, 'testimonials_posts', 'high', 'Testimonial Info');

ddCreateNewListMetabox('portfolioVideo', $metaFields4, 'portfolio_posts', 'high', 'Video Post');

ddCreateNewListMetabox('postSlider', $metaFields5, 'post', 'high', 'Gallery Format');

ddCreateNewListMetabox('blogVideo', $metaFields6, 'post', 'high', 'Video Format');

ddCreateNewListMetabox('blogLink', $metaFields7, 'post', 'high', 'Link Format');





add_filter( 'image_slider_fields', 'new_slider_fields', 10, 2 );



function new_slider_fields( $image_slider_fields, $id ) {

  if ( $id == 'slides' ) {

    $image_slider_fields = array(

      array(

        'name'  => 'image',

        'type'  => 'text',

        'label' => 'Post Image URL',

        'class' => ''

      ),

      array(

        'name'  => 'link',

        'type'  => 'text',

        'label' => 'Post URL',

        'class' => ''

      ),

        array(

        'name'  => 'slidetitle',

        'type'  => 'text',

        'label' => 'Slide Title',

        'class' => ''

      ),

        array(

        'name'  => 'slidetext',

        'type'  => 'textarea',

        'label' => 'Slide Text',

        'class' => ''

      )



    );

  }

  return $image_slider_fields;

}





function synapseScripts() {



    wp_register_script('script', get_template_directory_uri() . '/js/script.js');

    wp_register_script('twitter', get_template_directory_uri() . '/js/twitter.js');

    wp_register_script('prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js');

    wp_register_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js');

    wp_register_script('alerts', get_template_directory_uri() . '/js/bootstrap-alerts.js');

    wp_register_script('formScript', get_template_directory_uri() . '/js/formScript.js');

    wp_register_script('jplayer', get_template_directory_uri() . '/js/jquery.jplayer.min.js');

    wp_register_script('respond', get_template_directory_uri() . '/js/respond.min.js');

    wp_register_script('slides', get_template_directory_uri() . '/js/slides.js');



    //enqueues our scripts. let's enqueue jquery first to just make sure its loaded first in any case



    wp_enqueue_script('jquery');

    wp_enqueue_script('twitter');

    wp_enqueue_script('script');

    wp_enqueue_script('prettyphoto');

    wp_enqueue_script('isotope');

    wp_enqueue_script('bootstrap');

    wp_enqueue_script('formScript');

    wp_enqueue_script('jplayer');

    wp_enqueue_script('respond');

    wp_enqueue_script('slides');



}



add_action('wp_enqueue_scripts', 'synapseScripts');







include("includes/widget-twitter.php");

include("includes/widget-flickr.php");

include("includes/widget-testimonials.php");

include("includes/widget-recentposts.php");



function people_init() {

	// create a new taxonomy

	register_taxonomy(

		'portfolio_categories',

		'portfolio_posts',

		array(

			'label' => __( 'Portfolio Categories' ),

			'sort' => true,

			'args' => array( 'orderby' => 'term_order' ),

			'rewrite' => array( 'slug' => 'portfolio' ),

                

		)

	);

}

add_action( 'init', 'people_init' );



function custom_taxonomies_terms_text() {

	global $post, $post_id;

	// get post by post id

	$post = &get_post($post->ID);

	// get post type by post

	$post_type = $post->post_type;

	// get post type taxonomies

	$taxonomies = get_object_taxonomies($post_type);

	foreach ($taxonomies as $taxonomy) {

		// get the terms related to post

		$terms = get_the_terms( $post->ID, $taxonomy );

		if ( !empty( $terms ) ) {

			$out = array();

			foreach ( $terms as $term )

				$out[] = ''.$term->name.'';

			$return = join( ' ', $out );

		}

		return $return;

	}

} 



function custom_taxonomies_terms_text2() {

	global $post, $post_id;

	// get post by post id

	$post = &get_post($post->ID);

	// get post type by post

	$post_type = $post->post_type;

	// get post type taxonomies

	$taxonomies = get_object_taxonomies($post_type);

	foreach ($taxonomies as $taxonomy) {

		// get the terms related to post

		$terms = get_the_terms( $post->ID, $taxonomy );

		if ( !empty( $terms ) ) {

			$out = array();

			foreach ( $terms as $term )

				$out[] = ''.$term->name.'';

			$return = join( ', ', $out );

		}

		return $return;

	}

} 



//Google Maps Shortcode

function fn_googleMaps($atts, $content = null) {

   extract(shortcode_atts(array(

      "width" => '640',

      "height" => '480',

      "src" => ''

   ), $atts)); 

   return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'&amp;output=embed"></iframe>';

}

add_shortcode("googlemap", "fn_googleMaps");





