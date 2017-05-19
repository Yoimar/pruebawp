<?php 
/***
* Plugin Name: aPlaceHolder
* Plugin URI: http://www.urbina.yoimar.com
* Description: Un Plugin para la clase de Wordpress
* Version: 1.0
* Author: Yoimar Urbina
* Author URI: http://www.lurhy.com
* Licencia: MIT
**/

function aPlaceHolder($attributes){
	$size = $attributes['width'].'x'.$attributes['height'];
	echo '<img src="http://placehold.it/'.$size.'"/>';
}

add_shortcode( 'aplaceholder', 'aPlaceHolder');
?>