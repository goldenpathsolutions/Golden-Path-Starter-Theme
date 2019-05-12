<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*********************************************************************************************************************
 * Load theme function files individually
 */
$includes = array(
	'/includes/_includes.php',  // starting point for including theme setup, helpers, layouts, shortcodes, etc.
);
foreach( $includes as $include){
	include_once( __DIR__ . $include);
}