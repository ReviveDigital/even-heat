<div class="latest_case_studies">
	<div class="container">
		<h2>Latest case studies</h2>
		<?php
        $args = array('post_type' => 'case-studies', 'posts_per_page' => 3);
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {$the_query->the_post();?>

  
             <a href="<?php the_permalink(); ?>" class="box">
                      <?php 
                      $images = get_field('gallery');
                          if( $images ): 
                              $image_1 = $images[0]; 
                      ?>                
                      <img src="<?php echo $images[0]['sizes']['case-study-thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                      <span class="overlay">  
                          <span class="case_title"><?php echo the_title();?></span>
                          <span class="company_name"><?php the_field('company_name'); ?></span>
                          <span class="btn">View <span class="hidden-xs hidden-sm">case study</span></span>
                      </span>
                      <?php endif; ?>
                </a>
 
            <?php }
            
         } else {

        }
        wp_reset_postdata();

        ?>
         <div class="view_more">
              <a href="<?php echo esc_url( home_url( '/case-studies/' ) );?>" class="btn">View more case studies</a>
        </div>

	</div>
</div>