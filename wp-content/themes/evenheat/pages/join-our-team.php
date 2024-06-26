<?php
/**
 * The template for displaying all single posts.
 Template Name: Join Our Team
 * @package Evenheat
 */

get_header(); ?>

<div id="sub-pages">

<?php get_template_part('inc/page-banner')?>

	<div class="container">

		<?php get_template_part('inc/breadcrumb')?>

		<div class="content_wrapper">

			<div class="left_content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

				<div class="get_in_touch">
					<h3>Get in touch</h3>
					<div class="phone">
						<i class="fa fa-phone" aria-hidden="true"></i><?php the_field('phone_number','option'); ?>
					</div>
					<a href="<?php echo esc_url( home_url( '/contact-us/' ) );?>" class="btn">Contact us online</a>
				</div>

			</div>

			<?php get_template_part('inc/right-panel')?>

		</div>

		<?php get_template_part('inc/latest-case-studies')?>

	</div>

	<?//php get_template_part('inc/testimonials')?>

</div>

<?php get_footer(); ?>
