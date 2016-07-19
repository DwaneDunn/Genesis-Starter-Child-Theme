<?php
/**
 * Description
 *
 * @package     KnowTheCode\Developers\Functions
 * @since       1.0.0
 * @author       dwaneDunn
 * @link         http://dwanedunn.com
 * @license      GNU General Public License 2.0+
 */

namespace KnowTheCode\Developers\Functions;

//* Setup Theme
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

//* Add Image upload and Color select to WordPress Theme Customizer
require_once( get_stylesheet_directory() . '/lib/customize.php' );

//* Include Customizer CSS
include_once( get_stylesheet_directory() . '/lib/output.php' );
