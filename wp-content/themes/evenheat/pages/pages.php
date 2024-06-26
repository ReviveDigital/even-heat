<?php
/**
 * The template for displaying all single posts.
 Template Name: Sub Pages
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
			</div>

			<?php get_template_part('inc/right-panel')?>

		</div>

		<?php get_template_part('inc/latest-case-studies')?>

	</div>

	<?//php get_template_part('inc/testimonials')?>

</div>

<?php get_footer(); ?>
