<div class="testimonials">
	<div class="container">
		<div class="test_box">
			<h2>What our customers say</h2>
			<div id="testimonials">
				<?php if(get_field('testimonials', 'option')): ?>
			        <?php while(has_sub_field('testimonials', 'option')): ?>
			        <div>
			            <?php the_sub_field('text'); ?>
			            <div class="client_name"><?php the_sub_field('client_name'); ?></div>
			       </div>
			    <?php endwhile; ?>
			    <?php endif; ?>
			</div>
		</div>
	</div>
</div>