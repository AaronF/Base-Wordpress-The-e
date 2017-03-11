<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
</head>
<body>
<div class="header">
	<nav class="navbar navbar-default main-nav">
		<div class="container relative">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" data-target="#navbar-collapse-1" data-toggle="collapse" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Logo"/>
				</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
                <?php
                $nav_options = array(
                	'theme_location'  => 'main-menu',
                	'menu_class'      => 'nav navbar-nav navbar-right'
                );

                wp_nav_menu($nav_options);
                ?>
			</div>
		</div>
	</nav>
</div>
