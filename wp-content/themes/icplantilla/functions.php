<?php 
function mis_menus(){
	
	register_nav_menus(
			array( 'navigation' => __('Menú de navegación'),
		)
	);

}

add_action('init', 'mis_menus');

?>