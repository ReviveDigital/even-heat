<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evenheat
 */

?>

<footer>
	<div class="container">

		<div class="hidden-xs hidden-sm box">
			<h3>Navigation</h3>
			<div class="left">
				<?php wp_nav_menu( array('menu' => 'Left Footer Nav' )); ?>
			</div>
			<div class="right">
				<?php wp_nav_menu( array('menu' => 'Right Footer Nav' )); ?>
			</div>
		</div>

		<div class="box contact">
			<h3>Contact Us</h3>
				<div class="left">
					<?php the_field('address','option');?>
				</div>
				<div class="right">
				<div class="info">
					<p><strong>Phone</strong></p>
					<div class="phone"><a href="tel:<?php echo str_replace(' ','',get_field('phone_number', 'option')); ?>"><?php the_field('phone_number', 'option'); ?></a></div>
				</div>
				<div class="info">
					<p><strong>Email</strong></p>
					<a href="mailto:<?php the_field('email_address','option');?>"><?php the_field('email_address','option');?></a>
				</div>
				<div class="info">
					<a href="<?php the_field('facebook','option');?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</div>
				</div>
		</div>

		<div class="box copyright">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gas-safe.png" class="gas_safe" alt="Evenheat are Gas Safe Registered">
			<p>© Copyright Evenheat UK Ltd Website by: <a href="https://revive.digital" rel="nofollow" target="_blank">Revive.Digital</a></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	$('#animatedElement').click(function() {
		$(this).addClass("slideUp");
	});
</script>

</body>
</html>
