<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
    <div class="menu-line"></div>
    <div class="u-gridContainer">
        <div class="u-gridRow">
            <div class="u-gridCol2 logo-back">
                <a href="/home"><img class="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>
            </div>
            <div class="u-gridCol10">
                <div class="Bot-Nav">
                    <div class="u-gridContainer">
                        <div class="bellenenmail">
                            <a class="withover" href="tel:0332571946"><span>Tel: 033-2571946 </span> <br></a>
                            <a class="withover" href="mailto:info@dodo-stukadoors.nl"><span>Mail: info@dodo-stukadoors.nl</span></a>
                        </div>
                    	<div class="Nav-toggle u-cf">
                    		<a class="Navigation-menuToggle" id="js-navCollapse">
                    			<svg class="Icon Icon--inline" viewBox="0 0 128 128">
                    				<use xlink:href="#icon-menu2"></use>
                    			</svg>
                    		</a>
                    	</div>

                    	<?php include 'includes/navigation.php'; ?>
                    	
                    	<div class="Mob-contact-ico">
                    		<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:033-2571946">
                    			<svg class="Icon Icon--inline" viewBox="0 0 128 128">
                    				<use xlink:href="#icon-phone"></use>
                    			</svg>
                    		</a>
                    	
                                <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@dodo-stukadoors.nl">
                    			<svg class="Icon Icon--inline" viewBox="0 0 128 128">
                    				<use xlink:href="#icon-envelope"></use>
                    			</svg>
                    		</a>
                    	</div><!-- header-contact -->
                    </div>
                </div>
            </div>
        </div>
    </div>