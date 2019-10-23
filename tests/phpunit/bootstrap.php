<?php
/**
 * Unit test bootstrap file.
 *
 * @package CommandPalette
 */

// Define test environment.
define( 'CP_PHPUNIT', true );

// Define fake ABSPATH.
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', sys_get_temp_dir() );
}
// Define fake PLUGIN_ABSPATH.
if ( ! defined( 'PLUGIN_ABSPATH' ) ) {
	define( 'PLUGIN_ABSPATH', sys_get_temp_dir() . '/wp-content/plugins/wc-vendors-pro/' );
}
require_once __DIR__ . '/../../vendor/autoload.php';

require_once __DIR__ . '/includes/CPTestCase.php';

WP_Mock::setUsePatchwork( true );
WP_Mock::bootstrap();
