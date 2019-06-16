<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xian_Hong_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'xh-theme' ); ?></a>

	<header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-dark--custom">
          <div class="container">
            <a class="navbar-brand" href="/">XIANHONG ZHENG INC.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

			<!-- If te menu (WP admin area) is not set, then the "menu_class" is applied to "container". 
			In other words, it overwrites the "container_class"-->

			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => 'nav',
					'container_class' => 'collapse navbar-collapse',
					'menu_class' => 'navbar-nav ml-auto'
				));
			?>
          

            <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/mylistings.html">My Listings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/services.html">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact.html">Contact Me</a>
                </li>
              </ul>
            </div>-->
          </div>
        </nav>
      </header>

	<div id="content" class="site-content">
