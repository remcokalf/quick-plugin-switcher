<?php
/**
 * Fired during plugin deactivation
 *
 * @link       https://dineshinaublog.wordpress.com
 * @since      1.0
 *
 * @package    quick-plugin-switcher
 * @subpackage quick-plugin-switcher/includes
 */

/**
 * This class defines all code necessary to run during the QPS's deactivation.
 *
 * @since      1.0
 * @package    quick-plugin-switcher
 * @subpackage quick-plugin-switcher/includes
 * @author     Dinesh Kumar Yadav <dineshinau@gmail.com>
 */
class DKQPS_Deactivator {

	/**
	 * Sending an email to plugin developer for QPS's deactivation
	 * @since    1.0
	 */
	public static function deactivate() {
		$to = 'dkwpplugins@gmail.com';
		$subject = "Dectivated on the site: ".site_url();
		$message = 'QPS is deactivated on home url: '.home_url();
		wp_mail($to, $subject, $message);
	}
}
