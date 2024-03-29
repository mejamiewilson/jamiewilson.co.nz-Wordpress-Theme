<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]--> 
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- DNS Prefetch -->
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		
	<script type="text/javascript" src="//use.typekit.net/kga3eld.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
	<!-- CSS + jQuery + JavaScript -->
	<?php wp_head(); ?>
	
</head>




<body <?php body_class(); ?>>

	<header class="clearfix">
		<div class="container clearfix">
			<div class="col col1 gutter"></div>
			<div class="col col10 wide-content">
				<img class="h1" src="<?php echo get_template_directory_uri(); ?>/img/blog.png" />
				<nav>
					<?php html5blank_nav(); ?>
				</nav>
			</div>
			<div class="col col1 gutter"></div>
		</div>
	</header>





<?php return false ?>


<!-- Logo -->
			<div id="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- SVG Logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
				</a>
			</div>











