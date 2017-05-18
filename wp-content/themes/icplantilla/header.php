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
		<div class="jumbotron">
      		<div class="container">
				<header>
					<h1><?php bloginfo('name'); ?></h1>
				</header>
			</div>
		</div>
		<div class="navbar navbar-default">
  			<div class="container"> 
    			<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navigation-menu">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>
    			</div><!-- navbar-header -->
 
    			<!-- Collect the nav links, forms, and other content for toggling -->
    			<nav class="collapse navbar-collapse navigation-menu" role="navigation">
      				<?php wp_nav_menu( array(
      				  'menu' => 'Menu 1',
      				  'theme_location' => 'navigation',
      				  'depth' => 2,
      				  'container' => '',
      				  'container_class' => '',
      				  'menu_class' => 'nav navbar-nav',
      				  'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
      				  'walker' => new wp_bootstrap_navwalker())
      				);?>
    			</nav><!-- navigation -->
  			</div><!-- container -->
		</div><!-- navbar-default -->
	