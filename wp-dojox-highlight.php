<?php
/*
Plugin Name: WP Dojox Syntax Highlighter
Plugin URI: http://saquery.com/worpdress
Description: Wordpress Syntax Highlighter Plugin. 
Version: 0.3
Author: Stephan Ahlf
Author URI: http://saquery.com
*/

	/* Please use this Variable to point to special style sheet. */	
	$wp_dojox_highlight_theme = "http://ajax.googleapis.com/ajax/libs/dojo/1.4.1/dojox/highlight/resources/pygments/native.css";

	/* Please do NOT change code below! */
	function wpDojoxHighlight_wp_head(){
		global $wp_dojox_highlight_theme;
		echo "<!-- wp-dojox-highlight plugin start - http://saquery.com/wordpress -->";
		echo "\n<link href=\"http://ajax.googleapis.com/ajax/libs/dojo/1.4.1/dojox/highlight/resources/highlight.css\" rel=\"stylesheet\"/>";
		echo "\n<link id=\"syntaxSheet\" href=\"".$wp_dojox_highlight_theme."\" rel=\"stylesheet\"/>";
		echo "\n<script djConfig=\"parseOnLoad: true\" src=\"http://ajax.googleapis.com/ajax/libs/dojo/1.4.1/dojo/dojo.xd.js\"></script>";
		echo "\n<link href=\"".get_bloginfo('home')."/wp-content/plugins/wp-dojox-syntax-highlighter/dh.css\" rel=\"stylesheet\"/>";
		echo "\n<script src=\"".get_bloginfo('home')."/wp-content/plugins/wp-dojox-syntax-highlighter/dh.js\"></script>";
		echo "<!-- wp-dojox-highlight end -->\n";
	}
	add_action('wp_head', 'wpDojoxHighlight_wp_head');

?>