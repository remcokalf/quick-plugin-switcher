<?php
/**
 * @link              https://dineshinaublog.wordpress.com
 * @since             1.0
 * @package           quick-plugin-switcher
 *
 * Plugin Name:       Quick Plugin Switcher
 * Plugin URI:        https://dineshinaublog.wordpress.com/quick-plugin-switcher
 * Description:       This simplifies plugin handling operations by adding a new bulk action "Switch" on this page and also adds easy "Activate Again" & "Deactivate Again" links on plugin notices. You can delete a plugin directly from deactivated notice too.
 * Version:           1.4.1
 * Author:            Dinesh Kumar Yadav
 * Author URI:        https://dineshinaublog.wordpress.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quick-plugin-switcher
 * Domain Path:       /languages
 */
defined( 'ABSPATH' ) || exit; //Exit if accessed directly

/**
 * The code that runs during QPS deactivation.
 * This action is documented in includes/class-dkqps-deactivator.php
 */
function deactivate_dk_quick_plugin_switcher() {
	$dkqps_core = new DKQPS_Core();
	/**
	 * @since 1.4
	 * Delete the option key dkqps_ssp_plugin on plugin deactivation
	 */
	$dkqps_core->dkqps_delete_option_key();
}

register_deactivation_hook( __FILE__, 'deactivate_dk_quick_plugin_switcher' );

/**
 * The core QPS class that is used to define internationalization and admin-specific hooks
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dkqps-core.php';

/**
 * Begins execution of the QPS.
 * @since    1.0
 */
function run_dkqps_core() {

	$plugin = new DKQPS_Core();
	$plugin->run();
}

run_dkqps_core();
