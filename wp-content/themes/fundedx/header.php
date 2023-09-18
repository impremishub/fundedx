<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	<!-- top header badge -->
	<div class="top-badge-text bg-primary text-center text-light py-3">
		<p>CHOOSE THE BEST FUNDING MODEL FOR YOU</p>
	</div>

	<!-- desktop header -->
	<header id="masthead" class="site-header">
		<div class="site-branding wrapper">
			<div class="header-main">
				<!-- header logo -->
				<div class="header-logo">
					<a href="/"><?= get_header_logo(); ?></a>
				</div>

				<!-- main menu -->
				<div class="header-menu">
					<span class="mobile-menu js-mobile-open"></span>
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>

				<!-- header right -->
				<div class="header-right">
					<ul>
						<li>
							<a href="/login">
								<?= get_template_part('img/user-login.svg'); ?>
							</a>
						</li>
						<li>
							<a href="">TAKE THE CHALLENGE <?= get_template_part('img/arrow-up.svg'); ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<!-- mobile menu -->
	<div class="mobile-navigation">
		<span class="js-mobile-close"></span>
		<nav id="site-navigation" class="mobile-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mobile',
					'menu_id'        => 'mobile-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>
