 <?php
/**
 * The template for displaying all single posts.
 Template Name: Home Page
 * @package Evenheat
 */

get_header(); ?>

<div id="home-page">

<?php get_template_part('inc/slider')?>

	<div class="container">
		<div class="home_block">
			<h1><?php the_field('welcome_title'); ?></h1>
      <div class="welcome_text">
			 <?php the_content(); ?>
      </div>
		</div>
	</div>

	<?php get_template_part('inc/service-boxes')?>

  <div class="home_case_studies">
    <div class="container">
      <h2>Latest case study</h2>
      <div class="inner">
        <div class="case_study_entry">
          <div id="home-case-study-carousel">
            <?php
                $args = array( 'post_type' => 'case-studies', 'orderby' => 'DATE','order' => 'DESC', 'posts_per_page' => 3);
                  $loop = new WP_Query( $args );
                  if ( $loop->have_posts() ) {
                  while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div>

                    <div class="box">
                      <div class="home_case_content">
                        <h2><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
                        <span class="company_name"><?php the_field('company_name'); ?></span>
                        <p><?= get_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
                      </div>
                      <div class="home_case_img">
                        <?php
                        $images = get_field('gallery');
                            if( $images ):
                                $image_1 = $images[0];
                        ?>
                        <img src="<?php echo $images[0]['sizes']['case-studies-home']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                       </div>
                    </div>
                  </div>
                  <?php endwhile;
                  }
                  wp_reset_query();
                  ?>
                </div>
              </div>
              <div class="current-box">
                <div class="content">
                  <h3>Current Projects</h3>
                  <?php the_field('current_projects_description'); ?>
                  <p><?php the_field('completion_date'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="view_more">
            <a href="<?php echo esc_url( home_url( '/case-studies/' ) );?>" class="btn">View more case studies</a>
      </div>
  </div>
</div>

<?php get_footer(); ?>
