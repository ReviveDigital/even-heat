<div class="slider home-slider">

    <?php if(get_field('slider')): ?>

    <?php while(has_sub_field('slider')): ?>

        <div class="item">
            <?php
            $get_slider_image = wp_get_attachment_image_src(get_sub_field('image'), 'slider');
            ?>
           <figure style="background-image:url(<?php echo $get_slider_image[0];?>);">
            <div class="container">
	           <figcaption>
				<div class="title">
					<a href="<?php the_sub_field( 'button' ); ?>"><?php the_sub_field( 'title' ); ?></a>
				</div>
					<span class="hidden-xs"><?php the_sub_field( 'text' ); ?></span>
					<a href="<?php the_sub_field( 'button' ); ?>" class="btn">Learn More</a>
				</figcaption>
				</div>
			</figure>
        </div> 
        
    <?php endwhile; ?>
<?php endif; ?>

</div>
