<?php 

require_once('wp-bootstrap-navwalker.php');

function mis_menus(){
	
	register_nav_menus(
			array( 'navigation' => __('Menú de navegación'),
		)
	);

}

add_action('init', 'mis_menus');


/*****
Activacion de Widgets
*****/

function mis_widgets(){
	register_sidebar(
		array(
		'name' => __('Sidebar'),
		'id' => 'sidebar',
		'before_widget' => '<div class="wigdet">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		)
	);
}

add_action('init', 'mis_widgets');

?>