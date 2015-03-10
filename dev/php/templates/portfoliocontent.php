<?php
	$args = array(
		'post_type' => 'portfolio',
		'posts_per_page'=>999
	);
	$slides = new WP_Query( $args );
	$num = count($slides);
	$counter = 0;
	if( $slides->have_posts() ) { 
		while( $slides->have_posts() ) {
			$slides->the_post(); 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			$image_url = $image[0];

			if($counter == 0) { 
				$active = 'd_active';
			} else {
				$active = '';
			}
			$counter++;

			
			
			?>
			<h3 class="<?php echo $active;?> tab_drawer_heading" rel="tab<?php echo $counter; ?>"><?php the_title(); ?></h3>
			<div id="tab<?php echo $counter; ?>" class="tab_content">
				<h3><?php the_title(); ?></h3>
			    <p><?php the_content(); ?></p>
			    <img src="<?php echo image_url; ?>" />
			</div>									
		  <?php
		}
	}
?>
