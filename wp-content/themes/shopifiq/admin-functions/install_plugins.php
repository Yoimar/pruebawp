<?php

require_once  get_template_directory() . '/admin-functions/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'shopifiq_register_required_plugins');

function shopifiq_register_required_plugins() {

    $plugins = array(
        array(
            'name' => 'Revolution Slider WP',
            'slug' => 'revslider',
            'source' => 'http://astudio.si/preview/plugins/revslider.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false,
            'external_url' => '',
        ),
        array(
            'name' => 'WP-PageNavi',
            'slug' => 'wp-pagenavi',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false,
            'external_url' => '',
        ),
        array(
            'name' => 'WooCommerce',
            'slug' => 'woocommerce',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false,
            'external_url' => '',
        )
    );

    $theme_text_domain = 'shopifiq';

    $config = array(
        'domain' => $theme_text_domain,
        'default_path' => '',
        'parent_slug' => 'themes.php',
        'menu' => 'install-required-plugins', 
        'has_notices' => true,
        'is_automatic' => true,
        'message' => ''
    );

    tgmpa($plugins, $config);
}
