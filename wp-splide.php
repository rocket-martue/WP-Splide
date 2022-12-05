<?php
/**
 * Plugin name: WP Splide
 * Description: Splide を使用するためのプラグイン
 * Version: 1.0.0
 *
 * Author: Rocket Martue
 * Author URI: https://profiles.wordpress.org/rocketmartue/
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-splide
 *
 * @package wp-splide
 */

/**
 * Directory url of this plugin
 *
 * @var string
 */
define( 'WP_SPLIDE_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
 * Directory path of this plugin
 *
 * @var string
 */
define( 'WP_SPLIDE_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );


/**
 * js css の読み込み
 */
add_action(
	'wp_enqueue_scripts',
	function() {
		wp_enqueue_style(
			'wp-splide',
			WP_SPLIDE_URL . '/dist/css/splide.min.css',
			'',
			filemtime( WP_SPLIDE_PATH . '/dist/css/splide.min.css' )
		);

		wp_enqueue_script(
			'splide-js',
			WP_SPLIDE_URL . '/dist/js/splide.min.js',
			array( 'jquery' )
		);

		wp_enqueue_script(
			'splide-extension-auto-scroll-js',
			WP_SPLIDE_URL . '/dist/js/splide-extension-auto-scroll.min.js',
			array( 'jquery' )
		);

		//splide-extension-auto-scroll.min.js
	}
);