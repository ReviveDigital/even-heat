<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package evenheat
 */

get_header(); ?>


<div id="case-studies">

<?php get_template_part('inc/page-banner')?>

	<div class="container">

		<?php get_template_part('inc/breadcrumb')?>

		<div class="center_content">
			<h1>Case Studies</h1>
		</div>

		<div class="content_wrapper">

			<?php 
	      	$args = array( 'post_type' => 'case-studies', 'orderby' => 'DATE','order' => 'DESC','paged' => get_query_var( 'paged'));
		      $loop = new WP_Query( $args );
		      if ( $loop->have_posts() ) {
		      while ( $loop->have_posts() ) : $loop->the_post(); ?>

		      <a href="<?php the_permalink(); ?>" class="box">
		            <?php 
		            $images = get_field('gallery');
		                if( $images ): 
		                    $image_1 = $images[0]; 
		            ?>                
		            <img src="<?php echo $images[0]['sizes']['case-study-archive']; ?>" alt="<?php echo $image['alt']; ?>" />
		            <span class="box_content">	
			            <span class="title"><?php the_title(); ?></span>
			            <span class="client_name"><?php the_field('client_name'); ?></span>
	            		<span class="view_case_link">View case study <i class="fa fa-angle-right" aria-hidden="true"></i></span>
					</span>
		            <?php endif; ?>
		      </a>

		      <?php endwhile;
		      }
		      wp_reset_query();
		      ?> 

            <?php wp_pagenavi(); ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
