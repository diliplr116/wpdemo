<?php
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Your Name
 * @copyright         2019 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       WP Admin Change Color
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Dilip Modhavadiya
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Register the custom admin color scheme
function wp_custom_admin_color_scheme() {
    // Get plugin directory URL
    $theme_dir = plugin_dir_url( __FILE__ );

    // Add the color scheme
    wp_admin_css_color(
        'custom-scheme', // Color scheme ID
        __( 'Custom Scheme', 'textdomain' ), // Color scheme name
        $theme_dir . 'css/custom-scheme.css', // Path to the CSS file
        array( '#1e1e1e', '#0073aa', '#23282d', '#ffffff' ) // Colors used for the preview
    );
}
add_action( 'admin_init', 'wp_custom_admin_color_scheme' );