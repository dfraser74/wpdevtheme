<?php
/**
 * wpdevtheme functions and definitions
 * @package wpdevtheme
 */

/* SETUP THEME DEFAULTS AND REGISTER SUPPORT FOR WP FUNCTIONS.
------------------------------------------------------------------------- */

	if ( ! function_exists( 'wpdevtheme_setup' ) ) :

		function wpdevtheme_setup() {

        //  Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        //  Switch default core markup for search form & gallery to output valid HTML5.*/
    	add_theme_support( 'html5', array(
    		'search-form',
    		'gallery'
    	) );
    }
    endif; // devtheme setup
    add_action( 'after_setup_theme', 'wpdevtheme_setup' );



/* REGISTER & ENQUEUE STYLES
------------------------------------------------------------------------- */




/* REGISTER & ENQUEUE SCRIPTS
------------------------------------------------------------------------- */

