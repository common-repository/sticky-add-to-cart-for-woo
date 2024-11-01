<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              wizplugins.com
 * @since             1.0.0
 * @package           Satcwoo
 *
 * @wordpress-plugin
 * Plugin Name: Sticky add to cart for Woo
 * Plugin URI:        wizplugins.com/sticky-add-to-cart-for-woo
 * Description:       Adds a sticky add to cart on your product pages.
 * Version:           1.0.2
 * Author:            Wiz Plugins
 * Author URI:        wizplugins.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       satcwoo
 * Domain Path:       /languages
 *
 */
// If this file is called directly, abort.
//

if ( function_exists( 'satcfw_fs' ) ) {
    satcfw_fs()->set_basename( false, __FILE__ );
    return;
}


if ( !function_exists( 'satcfw_fs' ) ) {
    // Create a helper function for easy SDK access.
    function satcfw_fs()
    {
        global  $satcfw_fs ;
        
        if ( !isset( $satcfw_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $satcfw_fs = fs_dynamic_init( array(
                'id'             => '3612',
                'slug'           => 'sticky-add-to-cart-for-woo',
                'type'           => 'plugin',
                'public_key'     => 'pk_80e080f48b1a598bd13a9d7b0a006',
                'is_premium'     => false,
                'premium_suffix' => 'Pro',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'menu'           => array(
                'slug'   => 'sticky_add_to_cart_for_woo',
                'parent' => array(
                'slug' => woocommerce,
            ),
            ),
                'is_live'        => true,
            ) );
        }
        
        return $satcfw_fs;
    }
    
    // Init Freemius.
    satcfw_fs();
    // Signal that SDK was initiated.
    do_action( 'satcfw_fs_loaded' );
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SATCWOO_VERSION', '1.0.2' );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-satcwoo-activator.php
 */
function activate_satcwoo()
{
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-satcwoo-activator.php';
    Satcwoo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-satcwoo-deactivator.php
 */
function deactivate_satcwoo()
{
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-satcwoo-deactivator.php';
    Satcwoo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_satcwoo' );
register_deactivation_hook( __FILE__, 'deactivate_satcwoo' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-satcwoo.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_satcwoo()
{
    $plugin = new Satcwoo();
    $plugin->run();
}

run_satcwoo();

if ( !function_exists( 'satcfw_fs_uninstall_cleanup' ) ) {
    /**
     * Plugin uninstall cleanup.
     *
     * @since 1.0.0
     */
    function satcfw_fs_uninstall_cleanup()
    {
        // Delete all the plugin options
        delete_option( 'satc_settings' );
    }
    
    satcfw_fs()->add_action( 'after_uninstall', 'satcfw_fs_uninstall_cleanup' );
}
