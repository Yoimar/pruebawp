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
	//$size = $attributes['width'].'x'.$attributes['height'];
	//echo '<img src="http://placehold.it/'.$size.'"/>';
	$width = (isset($attributes['width'])) ? $attributes['width'] : get_option('default_size_width');
	$height = (isset($attributes['height']))? $attributes['height'] : get_option('default_size_height');
	$text = (isset($attributes['text']))? $attributes['text'] : get_option('default_text');

	if(get_option('service') ==1 ){
		$url = 'http://placehold.it/'.$width.'x'.$height;
	}
	elseif(get_option('service') ==2 ){
		$url = 'http://lorempixel.com/'.$width.'/'.$height;
	}
	elseif(get_option('service') ==3 ){
		$url = 'http://placekitten.com/'.$width.'/'.$height;
	}

	echo '<img src="'.$url.'"/>';
}
function aPlaceHolderSettings(){
	if(!current_user_can('manage_options')){
		wp_die (__('Usted no posee la suficiente informacion'));
	}
	//aqui va el html

	echo '
		<div class="container-fluid">
			<h2> Configuración del aPlaceHolder </h2>
			<form action="options.php" method="post">';
			//levantar declaro el grupo y coloco el gancho para enlazar configuraciones con el settings del aplaceholder para enlazar con las variables de abaja	
			settings_fields('aplaceholder-settings');
			//ejecuto el grupo 
			do_settings_sections('aplaceholder-settings');
			echo '
			<label> Servicio de aPlaceHolder</label>';
			$option1 = (get_option('servicio') == 1) ? 'selected' : '';
			$option2 = (get_option('servicio') == 2) ? 'selected' : '';
			$option3 = (get_option('servicio') == 3) ? 'selected' : '';

			echo '
				<select name="service" id="service">
					<option value="1" '.$option1.'>Placehold.it</option>
					<option value="2" '.$option2.'>LoremPixel</option>
					<option value="3" '.$option3.'>PlaceKitten</option>
				</select>
			<p></p>
			<label>Tamaño por defecto (width*height)</label>
				<input type="number" value="'.get_option('default_size_width').'" name="default_size_width" id="default_size_width" placeholder="250" />x
				<input type="number" value="'.get_option('default_size_height').'" name="default_size_height" id="default_size_height" placeholder="250" />
			<p></p>
			<label> Texto por defecto</label>
				<input	type="text" value="'.get_option('default_text').'" name="default_text" id="default_text" />			
			'; 
			submit_button();
			echo '
			</form>
		</div>
	';

}
function aPlaceHolderPluginMenu(){
	//primero nombre del menu
	//segundo Nombre del Plugin
	//tercero gancho que indicaque hace
	//cuarto idpara invocarlo 
	//quinto funcion queejecuta 
	add_options_page('aPlaceHolderSettings','aPlaceHolder','manage_options','aplaceholder_settings','aPlaceHolderSettings');
}

function aPlaceHolderRegisterSettings(){
	register_setting('aplaceholder-settings', 'service');
	register_setting('aplaceholder-settings', 'default_size_width');
	register_setting('aplaceholder-settings', 'default_size_height');
	register_setting('aplaceholder-settings', 'default_text'); 
}


function aPlaceHolderAddButton(){
	if (current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ){
		add_filter('mce_external_plugins', 'aPlaceHolderButtonPlugin');
		add_filter('mce_buttons', 'aPlaceHolderRegisterButton');
	}
}

function aPlaceHolderButtonPlugin(){
	$plugin_array['aplaceholder'] = plugins_url('aplaceholder.js', __FILE__ );
	return $plugin_array;
}

function aPlaceHolderRegisterButton($buttons){
	array_push($buttons, 'aplaceholder');
	return $buttons;
}

add_action('admin_menu','aPlaceHolderPluginMenu');
add_action('admin_init','aPlaceHolderRegisterSettings');
add_action('init', 'aPlaceHolderAddButton');


add_shortcode( 'aplaceholder', 'aPlaceHolder');
?>

<div id="aplaceholder">
	
</div>