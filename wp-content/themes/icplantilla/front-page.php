<?php get_header(); ?>
<div class="container"> 
<?php if(have_posts()): the_post(); ?>
	<section class="container">
		<h2>
			<?php the_title(); ?>
		</h2>
		<?php the_content(); ?>
	</section>


<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>