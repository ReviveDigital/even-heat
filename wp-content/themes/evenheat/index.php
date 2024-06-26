<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package evenheat
 */

get_header(); ?>

<div id="blog">

	<div class="container">

		<?php get_template_part('inc/breadcrumb')?>

		<div class="content_wrapper">

			<div class="left_panel">
		
		            <h1>Found on the job</h1>

	            	<?php 
			      	$args = array( 'post_type' => 'post', 'orderby' => 'DATE','order' => 'DESC','paged' => get_query_var( 'paged'),'posts_per_page' => 3);
				      $loop = new WP_Query( $args );
				      if ( $loop->have_posts() ) {
				      while ( $loop->have_posts() ) : $loop->the_post(); ?>

				      <div class="blog_entry">
				             <?php 
				            $images = get_field('gallery');
				                if( $images ): 
				                    $image_1 = $images[0]; 
				            ?>                
				            <div class="blog_img">
				            	<a href="<?php the_permalink(); ?>">
				            		<img src="<?php echo $images[0]['sizes']['blog-image']; ?>" alt="<?php echo $image['alt']; ?>" />
				            	</a>
				            </div>              
				            <div class="blog_content">
					            <a href="<?php the_permalink(); ?>">
					            	<h3><?php the_title(); ?></h3>
					            </a>
					            <p><?= get_excerpt(); ?></p>
			            		<a href="<?php the_permalink(); ?>" class="view_case_link">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
			            	</div>
			            <?php endif; ?>
			      	</div>

				      <?php endwhile;
				      }
				      wp_reset_query();
				      ?> 

            <?php wp_pagenavi(); ?>

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

