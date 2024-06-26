<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package evenheat
 */

get_header(); ?>

<div id="case-studies">

<?php get_template_part('inc/page-banner')?>

	<div class="container">

		<?php get_template_part('inc/breadcrumb')?>

		<div class="content_wrapper">

			<div class="left_content">
				<h1><?php the_title(); ?></h1>
				<div class="company_name"><?php the_field('company_name'); ?></div>
				<?php the_content(); ?>
				<a href="<?php echo esc_url( home_url( '/case-studies/' ) );?>" class="back_link hidden-xs"><i class="fa fa-angle-left" aria-hidden="true"></i> Back to case studies</a>
			</div>

			<div class="right_content">

				<div class="case-study">

				<?php 

				$images = get_field('gallery');

				if( $images ): ?>

				    <div id="case-study-carousel" class="case-study-images">
			            <?php foreach( $images as $image ): ?>
						    <a href="<?php echo $image['sizes']['large'];?>">
						      <img src="<?php echo $image['sizes']['case-studies'];?>" alt="<?php the_title(); ?>" />
						    </a>
			            <?php endforeach; ?>
				    </div>
				<?php endif; ?>

				<div class="controls">
			        <div class="prev"><i class="fa fa-angle-left"></i></div>
			        <div class="next"><i class="fa fa-angle-right"></i></div>
			    </div>

				</div>

				<a href="<?php echo esc_url( home_url( '/case-studies/' ) );?>" class="back_link visible-xs"><i class="fa fa-angle-left" aria-hidden="true"></i> Back to case studies</a>

				<div class="contact_box">
					<p>Call us for more information</p>
					<div class="phone">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<?php the_field('phone_number','option'); ?>
					</div>
				</div>

			</div>

		</div>

	</div>

	<?//php get_template_part('inc/testimonials')?>

</div>

<?php get_footer();?>
