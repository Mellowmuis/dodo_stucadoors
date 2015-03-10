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
            <h3>VOOR WIE?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Itaque sensibus rationem adiunxit et ratione effecta sensus non reliquit. Est enim effectrix multarum et magnarum voluptatum. Duo Reges: constructio interrete. Cum autem venissemus in Academiae non sine causa nobilitata spatia, solitudo erat ea, quam volueramus. Satis est ad hoc responsum. Quo modo autem philosophus loquitur? Tum Torquatus: Prorsus, inquit, assentior; Piso, familiaris noster, et alia multa et hoc loco Stoicos irridebat: Quid enim? Summum a vobis bonum voluptas dicitur. Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit?</p>
          </div>
          <div id="tab2">
            <h3>WANNEER?</h3>
            <p><br>Facit enim ille duo seiuncta ultima bonorum, quae ut essent vera, coniungi debuerunt; Aut unde est hoc contritum vetustate proverbium: quicum in tenebris? Haec quo modo conveniant, non sane intellego. Mene ergo et Triarium dignos existimas, apud quos turpiter loquare?<br></p>
          </div>
          <div id="tab3">
            <h3>WAAROM?</h3>
            <p>Tecum optime, deinde etiam cum mediocri amico. Hoc loco tenere se Triarius non potuit. Summum ením bonum exposuit vacuitatem doloris; Que Manilium, ab iisque M. Stoici autem, quod finem bonorum in una virtute ponunt, similes sunt illorum; Aeque enim contingit omnibus fidibus, ut incontentae sint.</p>
            </div>
          <div id="tab4">
            <h3>HOE?</h3>
            <p>Duarum enim vitarum nobis erunt instituta capienda. Hunc vos beatum; Primum cur ista res digna odio est, nisi quod est turpis? Ille incendat? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Semper enim ex eo, quod maximas partes continet latissimeque funditur, tota res appellatur. Quid censes in Latino fore? Vitiosum est enim in dividendo partem in genere numerare.</p>
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
					<div class="u-gridCol9 no-margin-right">
						<h2>Stucadoorsbedrijf Dodo: specialist in alle soorten stucwerk.</h2>
					</div>
					<div class="u-gridCol3 white-line"><hr></div>
				</div>
				<p>Wij staan garant voor stucwerk van de beste kwaliteit. Van standaard stucwerk, tot de meest bijzondere toepassingen:. Met steeds vernieuwende materialen en 
				technieken en de uitstekende service is uw project bij ons in vertrouwde handen! Wij werken al jaren voor diverse aannemers, architecten, verwerkers, project 
				ontwikkelaars, particulieren en bedrijven. Werkend vanuit Nijkerk bestrijkt Dodo inmiddels ’t Gooi, Amsterdam en geheel Midden Nederland. Door onze jarenlange 
				ervaring, gedegen vakkennis en individuele begeleiding leveren we al jaren continuïteit en kwaliteit.</p>
			</div>

		</div>
	</div>

<?php get_footer(); ?>
