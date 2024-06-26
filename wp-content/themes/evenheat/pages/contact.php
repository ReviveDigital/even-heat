<?php
/**
 * The template for displaying all single posts.
 Template Name: Contact Us
 * @package Evenheat
 */

get_header(); ?>

<div id="contact-us">

<?php get_template_part('inc/page-banner')?>

	<div class="container">

		<?php if ( function_exists('yoast_breadcrumb') ) {
	    	yoast_breadcrumb('<div class="breadcrumbs"> ','</div>');
		} ?>

		<div class="center_content">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>

		<div class="content_wrapper">
			<div class="left_content">
				<div class="contact_us_form">
					<h3>Send us a message</h3>
					<?php echo do_shortcode( '[gravityform id="1" title="true" description="true"]' ); ?>
				</div>
			</div>

			<div class="right_content">
				<div class="contact_info">
					<h2>Get in touch</h2>
					<div class="box">
						<p><strong>Address</strong></p>
						<?php the_field('address','option');?>
					</div>
					<div class="box">
						<p><strong>Phone</strong></p>
						<a href="tel:<?php echo str_replace(' ','',get_field('phone_number', 'option')); ?>"><?php the_field('phone_number', 'option'); ?></a>
						<p><strong>Email</strong></p>
						<a href="mailto:<?php the_field('email_address','option');?>"><?php the_field('email_address','option');?></a>
					</div>
				</div>

				<div class="map">
					<?php 
		            $location = get_field('map','option');
		            if( !empty($location) ):
		            ?>
		            <div class="acf-map">
		                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		            </div>
					<?php endif; ?>
				</div>

			</div>
		</div>

		<?php get_template_part('inc/latest-case-studies')?>

	</div>

</div>

<?php get_footer(); ?>
