<ul class="tabs" id="homelistitems">
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
					$active = 'class="active"';
				} else {
					$active = '';
				}
				$counter++;

				?>
				
				<li  <?php echo $active; ?> rel="tab<?php echo $counter; ?>"><a><?php the_title(); ?></a></li>
				<?php
			}
		}
	?>
</ul>