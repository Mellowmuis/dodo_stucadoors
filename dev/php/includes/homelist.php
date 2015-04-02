				<ul class="tabs first" id="homelistitems">
						<?php
							$args = array(
								'post_type' => 'dienst',
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
					<!--
					<li class="active" rel="tab1"><a>BETON CIRE</li></a>
					<li rel="tab2"><a>TRADITIONEEL STUCWERK</li></a>
					<li rel="tab3"><a>CEMENT STUCWERK</li></a>
					<li rel="tab4"><a>SIERPLEISTERWERK</li></a>
					<li rel="tab5"><a>BUITEN STUCWERK</li></a>
					<li rel="tab6"><a>LEEM STUCWERK</li></a>
					<li rel="tab7"><a>GLAD PLEISTERSTUCWERK</li></a>
					<li rel="tab8"><a>GEVELISOLATIE</li></a>
					<li rel="tab9"><a>LIJSTWERK</li></a>
					<li rel="tab10"><a>RESTAURATIE LIJSTWERK</li></a>
					<li rel="tab11"><a>RESTAURATIE/RENOVATIE</li></a> -->
				</ul>
