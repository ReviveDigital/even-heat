<?php
/**
 * The template for displaying all single posts.
 Template Name: Testimonials
 * @package Evenheat
 */

get_header(); ?>

<div id="sub-pages">

<?php get_template_part('inc/page-banner')?>

	<div class="container">

		<?php if ( function_exists('yoast_breadcrumb') ) {
	    	yoast_breadcrumb('<div class="breadcrumbs"> ','</div>');
		} ?>

		<div class="content_wrapper">

			<div class="left_content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

				<div class="testimonial_page">
					 <?php if(get_field('testimonials', 'option')): ?>
			            <?php while(has_sub_field('testimonials', 'option')): ?>
			                <div class="entry">
				                <?php the_sub_field('text'); ?>
				                <div class="client_name"><?php the_sub_field('client_name'); ?></div>
			                </div>
			            <?php endwhile; ?>
			        <?php endif; ?>
				</div>
				
			</div>
			
			<div class="right_content">
				<?php get_template_part('inc/contact-right')?>
			</div>
			
		</div>

		<?php get_template_part('inc/latest-case-studies')?>

	</div>

</div>

<?php get_footer(); ?>
