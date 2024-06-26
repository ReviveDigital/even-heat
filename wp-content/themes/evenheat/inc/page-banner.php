<?php if (get_field('page_banner')) { ?>
	<div class="page_banner">
	    <?php
	    $get_page_banner = wp_get_attachment_image_src(get_field('page_banner'), 'page-banner');
	    ?>
	    <img src="<?php echo $get_page_banner[0]; ?>" class="img-responsive" alt="<?php the_title(); ?>" />
	</div>
<?php } ?>