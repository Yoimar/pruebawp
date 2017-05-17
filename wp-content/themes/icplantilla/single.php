<?php get_header(); ?>

<!-- Contenido del Post-->

<?php if (have_posts()): the_post();?>
	<section>
		<h2><?php the_title(); ?></h2>
		<time datatime="<?php the_time('Y-m-j') ?>">
						<?php the_time('j-m-Y') ?></time>
	<?php the_content(); ?>
	<address>
		Por <?php the_author_posts_link(); ?>
	</address>
	</section>
<?php else: ?>
	<p><?php _e('Aqui no hay nada'); ?></p>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>