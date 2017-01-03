<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Foundation Helper for CodeIgniter.
 *
 * See http://foundation.zurb.com/ for more information about Foundation.
 *
 * @package		helpers
 * @author		Jan Lindblom <jan@powcorp.se>
 * @copyright	Copyright (c) 2012, POW! Corp.
 * @license		MIT
 * @version		0.3
 */
if (!function_exists('p')) {

    /**
     * Create a paragraph element.
     * 
     * @param string $data content of the paragraph.
     * @param string $class class of this paragraph.
     * @return string a string with the generated HTML.
     */
    function p($data = '', $class = '') {
        $class = ($class != '') ? ' class="' . $class . '"' : $class;
        return "<p" . $class . ">" . $data . "</p>";
    }

}

if (!function_exists('strong')) {

    /**
     * Create a paragraph element.
     * 
     * @param string $data content of the paragraph.
     * @param string $class class of this paragraph.
     * @return string a string with the generated HTML.
     */
    function strong($data = '', $class = '') {
        $class = ($class != '') ? ' class="' . $class . '"' : $class;
        return "<strong" . $class . ">" . $data . "</strong>";
    }

}

if (!function_exists('div')) {

    /**
     * Create a div element.
     * 
     * @param string $data content of the div.
     * @param string $class class of this div.
     * @return string a string with the generated HTML.
     */
    function div($data = '', $class = '', $id = '') {
        $class = ($class != '') ? ' class="' . $class . '"' : $class;
        $id = ($id != '') ? ' id="' . $id . '"' : $id;
        return "<div" . $class . $id . ">" . $data . "</div>";
    }

}

if (!function_exists('div_open')) {

    /**
     * Open a div.
     * 
     * @param string $class class of this div.
     * @return string a string with the generated HTML.
     */
    function div_open($class = '') {
        $class = ($class != '') ? ' class="' . $class . '"' : $class;
        return "<div" . $class . ">";
    }

}

if (!function_exists('div_close')) {

    /**
     * Close a div.
     * 
     * @return string a string with the generated HTML.
     */
    function div_close($num = 1) {
        return str_repeat("</div>", $num);
    }

}

if (!function_exists('hr')) {

    function hr() {
        return '<hr/>';
    }

}


if (!function_exists('script_tag')) {

    function script_tag($src = '', $language = 'javascript', $type = 'text/javascript', $index_page = FALSE) {
        $CI = & get_instance();

        $script = '<script ';

        if (is_array($src)) {
            foreach ($src as $v) {
                if ($k == 'src' AND strpos($v, '://') === FALSE) {
                    if ($index_page === TRUE) {
                        $script .= ' src="' . $CI->config->site_url($v) . '"';
                    } else {
                        $script .= ' src="' . $CI->config->slash_item('base_url') . $v . '"';
                    }
                } else {
                    $script .= "$k=\"$v\"";
                }
            }

            $script .= ">\n";
        } else {
            if (strpos($src, '://') !== FALSE) {
                $script .= ' src="' . $src . '" ';
            } elseif ($index_page === TRUE) {
                $script .= ' src="' . $CI->config->site_url($src) . '" ';
            } else {
                $script .= ' src="' . $CI->config->slash_item('base_url') . $src . '" ';
            }

            $script .= 'language="' . $language . '" type="' . $type . '"';

            $script .= '>' . "\n";
        }


        $script .= '</script>';

        return $script;
    }

}

if (!function_exists('link_tag_array_css')) {
    
    function link_tag_array_css($links = array(),$path = null){
        $tag_css = NULL;
        foreach ($links as $css){
            $tag_css.= link_tag($path.$css).PHP_EOL;
        }
        return $tag_css;
    }

}

function base64url_encode($data) { 
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
}
function base64url_decode($data) { 
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
}
/* End of file morehtml_helper.php */
/* Location: ./application/helpers/morehtml_helper.php */