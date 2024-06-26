<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evenheat
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/iconified/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/iconified/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/iconified/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/iconified/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/iconified/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/iconified/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/iconified/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/iconified/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/iconified/apple-touch-icon-152x152.png" />

<?php wp_head(); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61191124-48', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>

<header>
	<div class="container">
		<div class="row">
		    <div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) );?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/evenheat.jpg" alt="Evenheat">	
				</a>
			</div>

			<div class="visible-sm mob_phone">
				 	<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo str_replace(' ','',get_field('phone_number', 'option')); ?>"><?php the_field('phone_number', 'option'); ?></a>
				 </div>

			<div class="mobile_menu visible-xs">
				<div class="mobile_buttons">
			        <div id="menuBtn" class="menu_button"><i class="fa fa-bars"></i></div>
			    </div>
		    </div>
			
			<div class="header_content">
				 <div class="hidden-xs hidden-sm phone">
				 	<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo str_replace(' ','',get_field('phone_number', 'option')); ?>"><?php the_field('phone_number', 'option'); ?></a>
				 </div>
				 <nav>
					<?php wp_nav_menu( array('menu' => 'Navigation' )); ?>
			    </nav>
			     <div class="visible-xs phone">
				 	<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo str_replace(' ','',get_field('phone_number', 'option')); ?>"><?php the_field('phone_number', 'option'); ?></a>
				 </div>
			</div>
		</div>
    </div>

</header>
