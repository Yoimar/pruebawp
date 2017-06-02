<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Hide/Show cat num
$cat_num_chk = get_option('cat_num_chk', '');
?>
<li <?php wc_product_cat_class( '', $category ); ?>>

	<?php do_action( 'woocommerce_before_subcategory', $category ); ?>

	<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">

		<span class="product-image-holder">
			<?php
				/**
				 * woocommerce_before_subcategory_title hook
				 *
				 * @hooked woocommerce_subcategory_thumbnail - 10
				 */
				do_action( 'woocommerce_before_subcategory_title', $category );
			?>
			<span class="product-image-holder-after"></span>
			<span class="product-image-hover">
				<span class="open"></span>
			</span>
		</span>

		<h3>
			<?php echo $category->name; ?>
			<?php if ( $category->count > 0 && $cat_num_chk != "on" ) : ?>
				(<?php echo $category->count; ?>)
			<?php endif; ?>
		</h3>
		<?php
			/**
			 * woocommerce_after_subcategory_title hook
			 */
			do_action( 'woocommerce_after_subcategory_title', $category );
		?>

	</a>

	<?php if ( isset($category->description) && $category->description != ""): ?>

		<div itemprop="description" class="desc">
			<?php echo $category->description; ?>
		</div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_after_subcategory', $category ); ?>

</li>
