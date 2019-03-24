<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<?php if(is_page_template('template-landing-page.php')) {?>
			<header>
				<div class="header"></div>
				<div class="header-top">
					<div class="header-top-left">
						<a class="brand" href="#">
							<img src="<?php echo get_stylesheet_directory_uri()?>/img/logo.png" alt="DataRobot" />
						</a>
					</div>
					<div class="header-top-right">
						<div class="slogan">Real-Life Machine Learning. As Real as it Gets.</div>
					</div>
				</div>
				<div class="header-bottom">
					<div class="header-bottom-left">
						<div class="title">Practical Machine Learning and AI with World-Class Data Scientists</div>
						<div class="sub-title">A development program for Ukrainian Software Engineers, Data Engineers, Data Scientists of all skill levels.</div>
						<div class="text">We need people like you to help us grow further. We offer a training program where you will be involved in customer-oriented Data Science activities, development of the DataRobot platform, or creating public-facing DS content.</div>
					</div>
					<div class="header-bottom-right">
						<form class="contact-form" method="POST">
							<div class="alert alert-success" role="alert" style="display: none;"></div>
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Full name" data-name="Full name" />
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" data-name="Email" />
							</div>
							<div class="form-group">
								<input type="text" name="position" class="form-control" placeholder="Current position" data-name="Current position" />
							</div>
							<div class="form-group">
								<input type="text" name="expertise" class="form-control" placeholder="What is your current expertise in Data Science?" data-name="Current expertise" />
							</div>
							<div class="form-group">
								<textarea name="message" class="form-control" placeholder="Why are you interested in this program and what would you like to achieve?" rows="10" data-name="Message"></textarea>
							</div>
							<button type="submit" class="btn btn-blue btn-full">Sign up for the program<span class="hide-sm"> for free</span></button>
						</form>
					</div>
				</div>
			</header>
		<?php } else {?>
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'nav-menu',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->
		<?php }?>
		<div id="main" class="site-main">
