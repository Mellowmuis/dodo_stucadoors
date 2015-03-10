<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol10 content second">
				<section id="first-tab-group" class="tabgroup">
					<?php include 'includes/portfoliocontent.php'; ?>
        		</section>
			</div>
			<div class="u-gridCol2 right-menu">
				<div class="tab ">
					<?php include 'includes/portfoliolist.php'; ?>
				</div>
			</div>
		</div>

		<div class="u-gridRow">
			<div class="u-gridCol2 contact-section content">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vca.png">
				<ul>
					<li>Doombos Stucadoor B.V.</li>
					<li>Sprinckelermaat 14</li>
					<li>3863 XB Nijkerk</li>
					<li>033-2571946</li>
					<li>info@dodo-stukadoors.nl</li>
					<div class="sitemap">
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
					<?php endif; ?>
					</div>
				</ul>
			</div>
			<div class="u-gridCol10 content">
				<div class="u-gridRow">
					<div class="u-gridCol8 no-margin-right">
						<h2>Stucadoorsbedrijf Dodo: specialist in alle soorten stucwerk.</h2>
					</div>
					<div class="u-gridCol4 white-line"><hr></div>
				</div>
				<p>Wij staan garant voor stucwerk van de beste kwaliteit. Van standaard stucwerk, tot de meest bijzondere toepassingen:. Met steeds vernieuwende materialen en 
				technieken en de uitstekende service is uw project bij ons in vertrouwde handen! Wij werken al jaren voor diverse aannemers, architecten, verwerkers, project 
				ontwikkelaars, particulieren en bedrijven. Werkend vanuit Nijkerk bestrijkt Dodo inmiddels ’t Gooi, Amsterdam en geheel Midden Nederland. Door onze jarenlange 
				ervaring, gedegen vakkennis en individuele begeleiding leveren we al jaren continuïteit en kwaliteit.</p>
			</div>

		</div>
	</div>
<?php get_footer(); ?>