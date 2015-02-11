<?php
/*
Template Name: Over ons
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol10 content">
				<section id="first-tab-group" class="tabgroup">
          <div id="tab1">
            <h3>VOOR WIE?</h3>
            <p>Voor alle zakelijke en particuliere partijen die schade lijden door een calamiteit waarvan zij zelf de gevolgen niet kunnen overzien. </p>
          </div>
          <div id="tab2">
            <h3>WANNEER?</h3>
            <p>Een contra-expert schakelt u in bij een grote of complexe schade. <br><br></p>

          
          </div>
          <div id="tab3">
            <h3>WAAROM?</h3>
           

          
          </div>
          <div id="tab4">
            <h3>HOE?</h3>
            <p></p>
          </div>
         
        </section>

			</div>
			<div class="u-gridCol2 right-menu">
				<ul>
					<li><a href="#tab1">BETON CIRE</a></li>
					<li><a href="#tab2">TRADITIONEEL STUCWERK</a></li>
					<li><a href="">CEMENT STUCWERK</a></li>
					<li><a href="">SIERPLEISTERWERK</a></li>
					<li><a href="">BUITEN STUCWERK</a></li>
					<li><a href="">LEEM STUCWERK</a></li>
					<li><a href="">GLAD PLEISTERSTUCWERK</a></li>
					<li><a href="">GEVELISOLATIE</a></li>
					<li><a href="">LIJSTWERK</a></li>
					<li><a href="">RESTAURATIE LIJSTWERK</a></li>
					<li><a href="">RESTAURATIE/RENOVATIE</a></li>  
				</ul>
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
