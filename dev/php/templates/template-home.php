<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol10 slideshow">

				<div class="slider-border">
					<div class="slider-border-text u-gridCol3"><h2>Welkom op Dodo Stucadoors. Ruim 20 jaar de meest betrouwbare partner voor al uw stucwerk!</h2></div>
	 				<div class="Slider">

						<?php

							$args = array(
								'post_type' => 'slides',
								'posts_per_page'=>999
							);
							$slides = new WP_Query( $args );
							$num = count($slides);
							$counter = 0;
							if( $slides->have_posts() ) {
								while( $slides->have_posts() ) {
									$slides->the_post();
									$counter++;
									?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
										  $image_url = $image[0];
									?>
									<div class="slide" style="">
										<img src="<?php echo $image_url; ?>" />
									</div>
									<?php
								}
							}
						?>
					</div>
				</div>	
			</div>
			<div class="u-gridCol2 right-menu">
				<?php include 'includes/homelist.php'; ?>
			</div>
		</div>

		<div class="u-gridRow">
			<div class="u-gridCol2 contact-section content footerpc">
				<img class="vca" src="<?php echo get_stylesheet_directory_uri(); ?>/img/vca.png">
				<ul class="vcalijst">
					<li>Doombos Stucadoor B.V.</li>
					<li>Sprinckelermaat 14</li>
					<li>3863 XB Nijkerk</li>
					<a class="wit" href="tel:033-2571946"><li><img class="vca" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sitemaptelefoon.png">033-2571946</li></a> 
					<a class="wit" href="mailto:info@dodo-stukadoors.nl"><li><img class="vca" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sitemapmail.png">&nbspinfo@dodo-stukadoors.nl</li></a>
					<div class="sitemap">
						<br>
					<span>Sitemap</span>
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					<?php endif; ?>
					</div>
				</ul>
			</div>
			<div class="u-gridCol10 content box" id="lijst-twee">
				<div class="u-gridRow">
					<div class="u-gridCol12 no-margin-right">
						<h2>Stucadoorsbedrijf Dodo: specialist in alle soorten stucwerk.</h2>
					</div>
				</div>
				<div class="tab_container second">
					<?php include 'includes/homecontent.php'; ?>
				</div>
					<!-- .tab_container -->
			</div>
			<div class="u-gridRow footermobile">
				<div class="u-gridCol12 content">
					<div>
						<span>Doombos Stucadoor B.V. </span> <span> Sprinckelermaat 14 </span> <span> 3863 XB Nijkerk </span> <span><a href="tel:033-2571946"><img class="vca" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sitemaptelefoon.png">033-2571946</a>
							<a href="mailto:info@dodo-stukadoors.nl"><img class="vca" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sitemapmail.png">&nbspinfo@dodo-stukadoors.nl</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
