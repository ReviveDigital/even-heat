<div class="right_content">
	<div class="box">
		<h2><?php if($post->post_parent) { 
			$parent_title = get_the_title($post->post_parent);
			echo $parent_title.'';
			 } else { ?>
			 <?php the_title(); ?>
			<?php }?> 
		</h2>
		<ul>
		    <?php
		      global $post;
		      $parent_id = wp_get_post_parent_id( $post->ID );
		      $top_parent = $post->ID;
		      while( $parent_id ){
		          if( $parent_id > 0 ){
		              $top_parent = $parent_id;
		          }
		          $parent_id = wp_get_post_parent_id( $parent_id );
		      }
		      $args = array( 
		          'sort_column' => 'menu_order', 
		          'sort_order' => 'asc',
		          'title_li' => '',
		          'child_of' => $top_parent,
		          'echo' => 1
		      );
		      $children = wp_list_pages($args);
		  ?>
		</ul>

	</div>

	<?php get_template_part('inc/contact-right')?>

</div>