<?php
/**
 * The template for displaying all single posts.
 Template Name: FAQ's
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

				<div class="collapsable">
					<?php if(get_field('faq')): ?>
			        <?php while(has_sub_field('faq')): ?>
			        <div class="inner">
			            <div id="question" class="panel_bar">
			            	<?php the_sub_field('question'); ?><i class="fa fa-angle-down"></i>
			            </div>
			            <div class="text"><?php the_sub_field('answer'); ?></div>
			       </div>

				    <?php endwhile; ?>
				    <?php endif; ?>
				</div>
						
			</div>

			<?php get_template_part('inc/right-panel')?>

		</div>

		<?php get_template_part('inc/latest-case-studies')?>

	</div>

	<?//php get_template_part('inc/testimonials')?>

</div>

<?php get_footer(); ?>
