<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package evenheat
 */

get_header(); ?>


<div id="blog">

	<div class="container">

		<?php get_template_part('inc/breadcrumb')?>

		<div class="content_wrapper">

			<div class="left_panel">
	
	            <h1><?php the_title(); ?></h1>

            	<?php the_content(); ?>

            	<?php if (get_field('gallery')) { ?>

            		<div class="blog_gallery">

						<h3>Gallery</h3>
					
		            	<?php 

						$images = get_field('gallery');

						if( $images ): ?>
						    <div class="case-study-images">
						           <?php foreach( $images as $image ): ?>
			            		<a href="<?php echo $image['sizes']['large'];?>">
							      <img src="<?php echo $image['sizes']['thumbnail'];?>" alt="<?php the_title(); ?>" />
							    </a>
					            <?php endforeach; ?>
						    </div>
						<?php endif; ?>

					</div>

				<?php } ?>

			</div>

			<div class="right_panel">
				<div class="box">
					<h2>Other entries</h2>
					<ul class="blog_list">
						<?php $args = array( 'post_type' => 'post');
						$wp_query = new WP_Query($args);
						while ( have_posts() ) : the_post(); ?>
						    <li><a href="<?php echo get_permalink();?>"><?php the_title() ?></a></li>
						<?php endwhile; ?>
					</ul>
				</div>

			</div>

		</div>

		<?php get_template_part('inc/latest-case-studies')?>

	</div>

	<?php get_template_part('inc/testimonials')?>

</div>

<?php get_footer(); ?>
