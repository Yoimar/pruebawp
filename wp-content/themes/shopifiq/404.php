<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<div style="position: relative;">

    <?php
		global $wpdb;
        $data = $wpdb->get_results("SELECT details FROM " . $wpdb->prefix . "envoo_pages WHERE type='error'");

		if ( isset($data[0]->details) && $data[0]->details != '0' ) {
    		$page = get_page( $data[0]->details );

			echo do_shortcode(str_replace("&nbsp;", "<p><br /></p>", $page->post_content));
		} else {
            echo '<div class="error_wrapper">
                <h1 class="error_title">404</h1>
                <h3 class="error_sub_title">' . esc_html__('error', 'shopifiq') . '</h3>
                <h4 class="error_text_large">' . esc_html__('Don’t worry you will be back on track in no time!', 'shopifiq') . '</h4>
            </div>';
        }
    ?>

</div>
<?php get_footer(); ?>
