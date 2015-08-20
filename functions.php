<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Oggi' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.1.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );


//* Enqueue Foundation
function foundation_func() {
	$ss_url = get_stylesheet_directory_uri();
	wp_enqueue_script('foundation', $ss_url . '/js/foundation.min.js');
}
add_action('wp_enqueue_scripts', 'foundation_func');

function foundation_style() { 	
		$ss_url = get_stylesheet_directory_uri();
		wp_enqueue_style('foundation-style', $ss_url . '/css/foundation.min.css');
}
add_action('wp_enqueue_scripts', foundation_style);



// * adds Woocommerce support for Genesis Framework
//*--------------------------------------------------------------------------------
add_theme_support( 'genesis-connect-woocommerce' );

//* Remove Genesis Header and add custom header
//*--------------------------------------------------------------------------------
remove_action('genesis_site_title', 'genesis_seo_site_title');
remove_action('genesis_site_description', 'genesis_seo_site_description');

function oggi_header() {
	?>
		<img id="logo" src="http://oggi.pushbrand.com/wp-content/uploads/2015/08/oggi-logo.png" />
	<?php
	get_product_search_form();
}
add_action('genesis_header', 'oggi_header');

//* Remove Navigation then add to header
//*--------------------------------------------------------------------------------
remove_action('genesis_after_header', 'genesis_do_nav');
add_action('genesis_header','genesis_do_nav');

remove_action( 'genesis_after_header', 'genesis_do_nav' );

include(get_stylesheet_directory_uri() . '/custom-includes/rodrigo.php');
include(get_stylesheet_directory_uri() . '/custom-includes/tony.php');


?>