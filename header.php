<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic|Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
					<div class="front-page-nav">

							<div class="nav-back"></div>
							<div class="wrap">
							<div class="back-to-top"><a href="#top"><i class="fw-up-arrow"></i></a></div>
							<div class="header-icons">
								<a href="https://www.facebook.com/pages/Fenwicks-300/1482475272015286" target="_blank" class="fw-facebook"></a><a href="https://twitter.com/fenwicks300" target="_blank" class="fw-twitter"></a><a href="http://instagram.com/fenwicks300" target="_blank" class="fw-instagram"></a>
							</div>
							<div class="nav">
								<?php
								if ( is_front_page() ) {
									bones_front_page_nav();
								} else {
									bones_main_nav();
								}
								?>
							</div>

						</div>
					</div>
				</div> <?php // end #inner-header ?>

			</header> <?php // end header ?>
