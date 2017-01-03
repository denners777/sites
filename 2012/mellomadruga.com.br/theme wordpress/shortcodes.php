<?php

// 
// 
// 
// BUTTONS SHORTCODES
// 
// 
// 
// 
// 

function button($atts, $content = null) {  
    extract(shortcode_atts(array(  
        "color" => 'salmon',
        "type" => 'small',
        "url" => '#',
        "radius" => '3'  
    ), $atts));  
    return '<a class="'.$color.' rounded'.$radius.' button-'.$type.'" href="'.$url.'">'.$content.'</a>';  
}  
add_shortcode("button", "button");  


// 
// 
// 
// COLUMNS SHORTCODES
// 
// 
// 
// 
// 


// ROW

function row( $atts, $content = null ) {

   return '<div class="row">' . do_shortcode($content) . '</div>';

}

add_shortcode('row', 'row');

// FULL

function full( $atts, $content = null ) {

   return '<div class="span12">' . do_shortcode($content) . '</div>';

}

add_shortcode('full', 'full');

// ONE HALF

function onehalf( $atts, $content = null ) {

   return '<div class="span6">' . do_shortcode($content) . '</div>';

}

add_shortcode('onehalf', 'onehalf');

// ONE THIRD

function onethird( $atts, $content = null ) {

   return '<div class="span4">' . do_shortcode($content) . '</div>';

}

add_shortcode('onethird', 'onethird');

// ONE FOURTH

function onefourth( $atts, $content = null ) {

   return '<div class="span3">' . do_shortcode($content) . '</div>';

}

add_shortcode('onefourth', 'onefourth');

// ONE SIXTH

function onesixth( $atts, $content = null ) {

   return '<div class="span2">' . do_shortcode($content) . '</div>';

}

add_shortcode('onesixth', 'onesixth');

// TWO THIRDS

function twothirds( $atts, $content = null ) {

   return '<div class="span8">' . do_shortcode($content) . '</div>';

}

add_shortcode('twothirds', 'twothirds');

// THREE FOURTHS

function threefourths( $atts, $content = null ) {

   return '<div class="span9">' . do_shortcode($content) . '</div>';

}
add_shortcode('threefourths', 'threefourths');


// DANGER ALERT

function alertdanger( $atts, $content = null ) {

   return '<div class="alert alert-danger alert-block fade in"><a class="close" data-dismiss="alert" href="#">&times;</a>' . do_shortcode($content) . '</div>';

}
add_shortcode('alertdanger', 'alertdanger');

// INFO ALERT

function alertinfo( $atts, $content = null ) {

   return '<div class="alert alert-info alert-block fade in"><a class="close" data-dismiss="alert" href="#">&times;</a>' . do_shortcode($content) . '</div>';

}
add_shortcode('alertinfo', 'alertinfo');

// SUCCESS ALERT

function alertsuccess( $atts, $content = null ) {

   return '<div class="alert alert-success alert-block fade in"><a class="close" data-dismiss="alert" href="#">&times;</a>' . do_shortcode($content) . '</div>';

}
add_shortcode('alertsuccess', 'alertsuccess');

// SUCCESS ALERT

function alert( $atts, $content = null ) {

   return '<div class="alert alert-block fade in"><a class="close" data-dismiss="alert" href="#">&times;</a>' . do_shortcode($content) . '</div>';

}
add_shortcode('alert', 'alert');


// TABS

add_shortcode( 'tabgroup', 'jqtools_tab_group' );

function jqtools_tab_group( $atts, $content ){

$GLOBALS['tab_count'] = 0;

do_shortcode( $content );

if( is_array( $GLOBALS['tabs'] ) ){

foreach( $GLOBALS['tabs'] as $tab ){

$tabs[] = '<li><a data-toggle="tab" href="#'.str_replace( ' ', '', $tab['title'] ).'">'.$tab['title'].'</a></li>';

$panes[] = '<div class="tab-pane fade in" id="'.str_replace( ' ', '', $tab['title'] ).'">'.$tab['content'].'</div>';

}

$return = "\n".'<!-- the tabs --> <ul id="tab" class="nav nav-tabs">'.implode( "\n", $tabs ).'</ul>'."\n".'<!-- tab "panes" --><div id="myTabContent" class="tab-content">'.implode( "\n", $panes ).'</div>'."\n";

}

return $return;

}

add_shortcode( 'tab', 'jqtools_tab' );

function jqtools_tab( $atts, $content ){

extract(shortcode_atts(array(

'title' => 'Tab %d'

), $atts));

$x = $GLOBALS['tab_count'];

$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'content' =>  $content );

$GLOBALS['tab_count']++;

}

 
// ACCORDION

function accordion( $atts, $content = null ) {

   return '<div class="accordion" id="accordion2">' . do_shortcode($content) . '</div>';

}
add_shortcode('accordion', 'accordion');

// ACCORDION ITEM

function accordionitem( $atts, $content = null ) {
    
     extract(shortcode_atts(array(  
        "title" => '' 
    ), $atts));  

     return '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#'.str_replace( ' ', '', $title ).'">'.$title.'</a><div id="'.str_replace( ' ', '', $title ).'" class="accordion-body collapse"><div class="accordion-inner">' . do_shortcode($content) . '</div></div></div></div>';

}
add_shortcode('accordionitem', 'accordionitem');




// 
// 
// 
// BUG FIXES SHORTCODES
// 
// 
// 
// 
// 

function webtreats_formatter($content) {
	$new_content = '';

	/* Matches the contents and the open and closing tags */
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';

	/* Matches just the contents */
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';

	/* Divide content into pieces */
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	/* Loop over pieces */
	foreach ($pieces as $piece) {
		/* Look for presence of the shortcode */
		if (preg_match($pattern_contents, $piece, $matches)) {

			/* Append to content (no formatting) */
			$new_content .= $matches[1];
		} else {

			/* Format and append to content */
			$new_content .= wptexturize(wpautop($piece));
		}
	}

	return $new_content;
}

// Remove the 2 main auto-formatters
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

// Before displaying for viewing, apply this function
add_filter('the_content', 'webtreats_formatter', 99);
add_filter('widget_text', 'webtreats_formatter', 99);


//Long posts should require a higher limit, see http://core.trac.wordpress.org/ticket/8553
@ini_set('pcre.backtrack_limit', 500000);
