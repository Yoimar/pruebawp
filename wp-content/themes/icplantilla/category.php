<?php get_header(); ?>

	<h2><?php single_cat_title(); ?></h2>

<?php if (have_posts()): ?>
	<section>
		<?php while (have_posts()): the_post(); ?>
			<article>
				<header>
					<h2>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<time datatime="<?php the_time('Y-m-j') ?>">
						<?php the_time('j-m-Y') ?>
					</time>
				</header>
				<?php the_excerpt(); ?>
				<footer>
					<address> 
					Por <?php the_author_posts_link(); ?>
					</address>
					<?php the_tags('<ul><li>','</li><li>', '</li><ul>'); ?>
				</footer>
			</article>
		<?php endwhile; ?>
		<div class="pagination">
			<span class="in-left"><?php next_posts_link('<<Entradas Antiguas'); ?></span>	
			<span class="in-right"><?php previous_posts_link('Entradas Recientes >>'); ?></span>	
		</div>
	</section>
<?php else: ?>
	<p><?php _e('Aqui no hay nada'); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>