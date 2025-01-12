<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<style>

	</style>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site"><a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e('Skip to content', 'underscores_theme'); ?></a>
		<header id="masthead" class="site-header fixed w-full bg-white shadow-md z-50">
			<div class="max-w-6xl mx-auto px-6 py-3">
				<div class="flex items-center justify-between">

					<div class="site-branding flex items-center gap-2 mx-auto lg:mx-0">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()):
							?>
							<h1 class="site-title font-bold"><a href="<?php echo esc_url(home_url('/')); ?>"
									rel="home"><?php bloginfo('name'); ?></a></h1>
							<?php
						else:
							?>
							<p class="site-title font-bold"><a href="<?php echo esc_url(home_url('/')); ?>"
									rel="home"><?php bloginfo('name'); ?></a></p>
							<?php
						endif;
						$underscores_theme_description = get_bloginfo('description', 'display');
						if ($underscores_theme_description || is_customize_preview()):
							?>
							<p class="site-description">
								<?php echo $underscores_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</p>
						<?php endif; ?>
					</div>

					<!-- Desktop Navigation -->
					<nav id="desktop-navigation" class="hidden lg:flex space-x-12">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
							'menu_class' => 'flex space-x-12',
							'container' => false,
							'link_class' => 'text-gray-600 hover:text-gray-900 transition-colors duration-200'
						));
						?>
					</nav>

					<!-- Desktop Auth Buttons -->
					<div class="hidden lg:flex items-center space-x-4">
						<?php if (is_user_logged_in()): ?>

							<a href="<?php echo wp_logout_url(home_url()); ?>"
								class="px-4 py-2 text-white bg-violet rounded-full hover:bg-violet/90 transition-colors duration-200">
								Logout
							</a>
						<?php else: ?>
							<a href="<?php echo wp_login_url(); ?>"
								class="px-4 py-2 text-black hover:text-gray-900 transition-colors duration-200">
								Log In
							</a>
							<a href="<?php echo wp_registration_url(); ?>"
								class="px-8 py-3 bg-violet text-white rounded-full hover:bg-violet/90 transition-colors duration-200">
								Sign Up
							</a>
						<?php endif; ?>
					</div>

					<!-- Mobile Menu Button -->
					<button id="mobile-menu-button" class="lg:hidden">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path class="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M4 6h16M4 12h16M4 18h16" />
							<path class="close-icon hidden" stroke-linecap="round" stroke-linejoin="round"
								stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>

				<!-- Mobile Menu -->
				<div id="mobile-menu"
					class="lg:hidden hidden mt-4 pb-4 border-t pt-4 transition-all duration-200 ease-in-out">
					<nav class="flex flex-col space-y-4 py-4">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_class' => 'flex flex-col space-y-4',
							'container' => false,
							'link_class' => 'text-gray-600 hover:text-gray-900 transition-colors duration-200'
						));
						?>
					</nav>

					<!-- Mobile-only Auth Buttons -->
					<div class="md:hidden flex flex-col space-y-2 mt-4">
						<?php if (is_user_logged_in()): ?>

							<a href="<?php echo wp_logout_url(home_url()); ?>"
								class="px-4 py-2 text-white bg-violet rounded-full hover:bg-violet/90 transition-colors duration-200">
								Logout
							</a>
						<?php else: ?>
							<a href="<?php echo wp_login_url(); ?>"
								class="px-4 py-2 text-black hover:text-gray-900 transition-colors duration-200">
								Log In
							</a>
							<a href="<?php echo wp_registration_url(); ?>"
								class="px-8 py-3 bg-violet text-white rounded-full hover:bg-violet/90 transition-colors duration-200">
								Sign Up
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</header>
		<script>
			document.getElementById('mobile-menu-button').addEventListener('click', function () {
				document.getElementById('mobile-menu').classList.toggle('hidden');
				document.querySelector('.menu-icon').classList.toggle('hidden');
				document.querySelector('.close-icon').classList.toggle('hidden');
			});
		</script>