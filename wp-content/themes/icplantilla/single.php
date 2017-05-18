<?php get_header(); ?>
<div class="container">
<!-- Contenido del Post-->

<?php if (have_posts()): the_post();?>
	<div class="container">
	<section>
		<div class="jumbotron">
      		<div class="container">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
		<time datatime="<?php the_time('Y-m-j') ?>">
						<?php the_time('j-m-Y') ?></time>
	<?php the_content(); ?>
	<address>
		Por <?php the_author_posts_link(); ?>
	</address>
	</section>
	</div>
<?php else: ?>
	<p><?php _e('Aqui no hay nada'); ?></p>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>