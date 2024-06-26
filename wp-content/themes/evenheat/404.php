<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package evenheat
 */

get_header(); ?>

<div id="sub-pages">

<?php get_template_part('inc/page-banner')?>

	<div class="container">

		<?php get_template_part('inc/breadcrumb')?>

		<div class="content_wrapper">

			<div class="left_content">
				<h1>Oops! That page can’t be found.</h1>
				<p>It looks like nothing was found at this location. <a href="<?php echo esc_url( home_url( '/' ) );?>">Click here</a> to go back home.</p>
			</div>

			<?php get_template_part('inc/right-panel')?>

		</div>

		<?php get_template_part('inc/latest-case-studies')?>

	</div>

	<?php get_template_part('inc/testimonials')?>

</div>

<?php get_footer(); ?>