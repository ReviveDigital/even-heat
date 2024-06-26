<div class="service_boxes">
	<?php if(get_field('service_boxes', 'option')): ?>
		<?php while(has_sub_field('service_boxes', 'option')): ?>
			<a href="<?php the_sub_field('link','option'); ?>" class="box">
				<?php
				$service_boxes = wp_get_attachment_image_src(get_sub_field('image'), 'service-boxes');?>
				<img src="<?php echo $service_boxes[0]; ?>" alt="<?php the_sub_field( 'title' ); ?>" />
				<span class="overlay">
					<h2><?php the_sub_field('title'); ?></h2>
					<span class="read_more">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></span>
				</span>
			</a>
		<?php endwhile; ?>
	<?php endif; ?>

	 <div class="view_more">
          <a href="<?php echo esc_url( home_url( '/our-services/' ) );?>" class="btn">View all services</a>
    </div>

</div>