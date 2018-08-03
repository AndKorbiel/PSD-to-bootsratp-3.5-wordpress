<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reen-from-PSD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php wp_title(''); ?></title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/search-form.js"></script>

	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'reen-from-psd' ); ?></a>

	<header id="masthead" class="site-header">
		
			<div id="header">

	<div id="contact-bar">
	
		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
		
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="#"><i class="far fa-envelope"></i>info@reen.com</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#"><i class="fas fa-mobile-alt"></i>+00 (123) 456 78 90</a>
			  </li>
			</ul>
			
			<div id ="icons">
			<i class="fab fa-facebook-f"></i> <i class="fab fa-google-plus-g"></i> <i class="fab fa-twitter"></i> <i class="fab fa-pinterest"></i>  <i class="fab fa-behance"></i> <i class="fab fa-dribbble"></i>
			</div>

		</nav>
		</div>  
		
	</div>
	
	<div id="logo-bar">

		<div class="container">

				<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-6 logo col-xs-6">	
								<?php if ( function_exists( 'the_custom_logo' ) ) {
								    the_custom_logo();
								} ?>
							</div>	

						<div class="col-lg-9 col-md-9 col-sm-4 col-xs-3">		
							
									<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
									  <div class="container">
										<!-- Brand and toggle get grouped for better mobile display -->
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>
										
											<?php
											wp_nav_menu( array(
												'theme_location'    => 'primary',
												'depth'             => 3,
												'container'         => 'div',
												'container_class'   => 'collapse navbar-collapse',
												'container_id'      => 'bs-example-navbar-collapse-1',
												'menu_class'        => 'nav navbar-nav',
												'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
												'walker'            => new wp_bootstrap_navwalker())
											 );
											?>
										</div>
									</nav>

						</div>

						<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">

							<i class="fas fa-search" id="search-button"></i>

							<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline" id="search-form">
							    <fieldset>
									<div class="input-group">
										<input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
										<span class="input-group-btn">
											<button type="submit" class="btn btn-default"><?php _e("Search","wpbootstrap"); ?></button>
										</span>
									</div>
							    </fieldset>
							</form>

						</div>
							
				</div>
		</div>
	</div>
	
</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
