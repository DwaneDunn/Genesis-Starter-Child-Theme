<?php
/**
 * Description
 *
 * @package     KnowTheCode\Developers\Lib
 * @since       1.0.0
 * @author       dwaneDunn
 * @link         http://dwanedunn.com
 * @license      GNU General Public License 2.0+
 */

namespace KnowTheCode\Developers\Lib;

//* Set Localization (do not remove)
load_child_theme_textdomain( 'CHILD_TEXT_DOMAIN', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'CHILD_TEXT_DOMAIN' ) );

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array(
	'404-page',
	'drop-down-menu',
	'headings',
	'rems',
	'search-form',
	'skip-links'
) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom header
add_theme_support( 'custom-header', array(
	'width'           => 600,
	'height'          => 160,
	'header-selector' => '.site-title a',
	'header-text'     => false,
	'flex-height'     => true,
) );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for after entry widget
add_theme_support( 'genesis-after-entry-widget-area' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Rename primary and secondary navigation menus
add_theme_support( 'genesis-menus', array(
	'primary'   => __( 'After Header Menu', 'CHILD_TEXT_DOMAIN' ),
	'secondary' => __( 'Footer Menu', 'CHILD_TEXT_DOMAIN' )
) );

//* Add Image Sizes
add_image_size( 'featured-image', 720, 400, true );
