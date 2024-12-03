<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/main.css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header role="banner">

		<div class="site-name half left">
			
			<!-- site name and description  -->
			<h1 id="site-title" class="one-half-left">
				<a href="" title="Creating a WordPress theme from static html - home" rel="home">WordPress Theme Building</a>
			</h1>
			<h2 id="site-description">Creating a WordPress theme from static html</h2>
		
		</div>

		<!-- an aside in the header - this will be populated via a widget area later -->	
		<aside class="header widget-area half right" role="complementary">
		
			<div class="widget-container">	
				This will be a widget area in the header - address details (or anything else you like) goes here
			</div><!-- .widget-container -->

		</aside><!-- .half right -->
	
	</header><!-- header -->
	
	<!-- full width navigation menu - delete nav element if using top navigation -->
	<nav class="menu main">
	  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<div class="skip-link screen-reader-text"><a href="#content" title="Skip to content">Skip to content</a></div>
		<!-- <ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Latest news</a></li>
			<li><a href="#">Featured articles</a></li>
		</ul> -->

		<?php
		wp_nav_menu( array(
			'theme_location' => 'main_menu' //functions.php 의 변수명과 동일하게 설정
		) );
		?>
		<?php
			//get_search_form()
		?>
		<form action="http://localhost/wordpress/">
			<input type="search" name="s">
			<button>검색</button>
		</form>
	</nav><!-- .main -->

	<div class="main">