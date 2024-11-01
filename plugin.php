<?php
/*
Plugin Name: tas258 Link Icons
Plugin URI: https://tas2580.net/downloads/wp-link-icons/
Description: Display an icon after all external links.
Version: 1.0.0
Author: tas2580
Author URI: https://tas2580.net
License: GPLv2
*/

wp_enqueue_style( 'link-icons', plugins_url('css/style.css',__FILE__), array(), '1.0', 'screen' );
wp_enqueue_script('link-icons', plugins_url('js/script.js',__FILE__), array('jquery'), '1.0', true);

