<?php
/*
Template Name: Over ons
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol12 content">
				<section id="first-tab-group" class="tabgroup">
          <div id="tab1">
            <h3>Wie zijn wij</h3>
            <p>Stucadoorsbedrijf Dodo: specialist in alle soorten stucwerk.
            	Wij staan garant voor stucwerk van de beste kwaliteit. Van standaard stucwerk, tot de meest bijzondere toepassingen. Met steeds vernieuwende materialen en technieken en de uitstekende service is uw project bij ons in vertrouwde handen! Wij werken al jaren voor diverse aannemers, architecten, verwerkers, project ontwikkelaars, particulieren en bedrijven. Werkend vanuit Nijkerk bestrijkt DODO inmiddels geheel midden Nederland. Door onze jarenlange ervaring, gedegen vakkennis en individuele begeleiding leveren we al jaren continuïteit en kwaliteit.
				Wij besteden uitgebreid aandacht aan de verschillende technieken en materialen voor de diverse eindafwerkingen. Wij zijn van mening dat het eindresultaat moet passen bij het interieur en moet aansluiten bij de wensen van de klant. Wij komen graag bij u langs om u te laten kennismaken met de talloze mogelijkheden en technieken, het stellen van uw vragen en voor persoonlijk advies. Mogelijkheden bijna onbeperkt en qua prijs zeer aantrekkelijk.</p>
          </div>
        		</section>
			</div>
			<div class="u-gridCol2 right-menu">
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

<?php get_footer(); ?>
