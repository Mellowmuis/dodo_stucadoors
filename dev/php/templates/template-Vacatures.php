<?php
/*
Template Name: Vacatures
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div id="vacature-formulier" class="u-gridCol12">
				<section id="first-tab-group" class="tabgroup content">
          <div id="tab1">
            <h3>Vacatures</h3>
            		<div>
	           			<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
				</section>

			</div>
			
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol2 contact-section content">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vca.png">
				<ul>
					<li>Doombos Stucadoor B.V.</li>
					<li>Sprinckelermaat 14</li>
					<li>3863 XB Nijkerk</li>
					<a href="tel:033-2571946"><li><img class="vca" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sitemaptelefoon.png"> 033-2571946</li></a>
					<a href="mailto:info@dodo-stukadoors.nl"><li><img class="vca" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sitemapmail.png">&nbspinfo@dodo-stukadoors.nl</li></a>
					<div class="sitemap">
						<br>
					<span>Sitemap</span>
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					<?php endif; ?>
					</div>
				</ul>
			</div>
			<div class="u-gridCol10 content certificering">
				<div class="u-gridRow">
					<div class="u-gridCol12 no-margin-right">
						<h2>Stucadoorsbedrijf Dodo: specialist in alle soorten stucwerk.</h2>
					</div>
					<div class="u-gridCol0 white-line"><hr></div>
				</div>
					<p>DODO is in het bezit van de volgende normeringen en certificeringen:</p>
					<ul>
						<li>NOA: Nederlandse Ondernemersverbond voor Afbouwbedrijven</li><br>
						<li>VCA: Veiligheid Checklist Aannemers</li>
					</ul>
					<p>Dodo werkt met Noa afbouwgarantie.</p>
			</div>

		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>