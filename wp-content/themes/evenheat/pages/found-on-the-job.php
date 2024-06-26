<?php
/**
 * The template for displaying all single posts.
 Template Name: Found On The Job
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

				<?php 

				$images = get_field('gallery');

				if( $images ): ?>
			    <div class="gallery_entry">
		            <?php foreach( $images as $image ): ?>
		                 <div class="popup-gallery">
                        	<img src="<?php echo $image['sizes']['gallery-images'];?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
                        	<span class="overlay">
                        		<?php echo $image['title']; ?>
                        	</span>
	                    </div>
		            <?php endforeach; ?>
			    </div>
	            
	            <?php endif; ?>

			</div>

			<?php get_template_part('inc/right-panel')?>

		</div>

		<?php get_template_part('inc/latest-case-studies')?>

	</div>

	<?//php get_template_part('inc/testimonials')?>

</div>

<?php get_footer(); ?>
