<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
		</header>
		<nav>
			<ul class="main-nav">
				<?php wp_nav_menu(array('theme_location' => 'navigation') ); ?>
			</ul>
		</nav>
	