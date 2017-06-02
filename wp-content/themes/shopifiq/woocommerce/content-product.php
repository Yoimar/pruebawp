<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;

// Ensure visibilty
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$count = $wpdb->get_var("
		SELECT COUNT(meta_value) FROM $wpdb->commentmeta
		LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
		WHERE meta_key = 'rating'
		AND comment_post_ID = $post->ID
		AND comment_approved = '1'
		AND meta_value > 0
	");

$rating = $wpdb->get_var("
	SELECT SUM(meta_value) FROM $wpdb->commentmeta
	LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
	WHERE meta_key = 'rating'
	AND comment_post_ID = $post->ID
	AND comment_approved = '1'
");
?>
<li <?php post_class(); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

		<div class="product-image-holder">
			<a href="<?php echo get_permalink(); ?>">
				<?php
	                if(videoFeatured()):
	                   echo do_shortcode(videoFeatured());
	                else:
	                    do_action( 'woocommerce_before_shop_loop_item_title' );
				?>
					<div class="product-image-holder-after"></div>
					<div class="product-image-hover <?php if ( get_option('shop_hover', '') && get_option('shop_hover', '') == "on" ){ echo "both-active"; } ?>">
						<?php if ( get_option('shop_hover', '') && get_option('shop_hover', '') == "on" ): ?>
							<a rel="lightbox" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>" class="enlarge"></a>
						<?php endif; ?>
						<a href="<?php echo get_permalink(); ?>" class="open"></a>
					</div>
				<?php endif; ?>
			</a>
		</div>


		<a href="<?php echo get_permalink(); ?>"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></a>
		<?php
				$average = 0;
				if ( $rating ) {
					$average = number_format($rating / $count, 2);
				}

				if ( $post->comment_status == "open" && get_option('woocommerce_enable_review_rating') == "yes" ) {
					echo '<div itemprop="aggregateRating" class="clearfix product-rating" itemscope itemtype="http://schema.org/AggregateRating">';

						echo '<div class="star-rating" title="'.sprintf(__('Rated %s out of 5', 'woocommerce'), $average).'"><span style="width:'.($average*16).'px"><span itemprop="ratingValue" class="rating">'.$average.'</span> '.__('out of 5', 'woocommerce').'</span></div>';

					echo '</div>';
				}

		?>
		<?php
			$len = strlen(strip_tags($post->post_excerpt));
			if($len>get_option('shop_dec_len', '180')) {
				$len = "...";
			} else {
				$len = "";
			}
		?>
		<?php if ($post->post_excerpt && $post->post_excerpt != "") echo '<div itemprop="description" class="desc">' . mb_substr ( strip_tags($post->post_excerpt), 0, get_option('shop_dec_len', '180')) . $len . '</div>'; ?>


		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
		?>


	<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>

</li>
