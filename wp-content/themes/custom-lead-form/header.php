<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container header-container">
			<div class="site-branding">
				<h1 class="site-logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?> <span>Solutions</span></a></h1>
			</div>

			<button class="mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<i class="fas fa-bars"></i>
			</button>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'fallback_cb'    => function() {
							echo '<ul id="primary-menu">';
							echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
							echo '<li><a href="#features">Features</a></li>';
							echo '<li><a href="#lead-form">Contact Us</a></li>';
							echo '</ul>';
						}
					)
				);
				?>
			</nav>
		</div>
	</header>
