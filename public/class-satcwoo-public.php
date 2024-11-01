<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       wizplugins.com
 * @since      1.0.0
 *
 * @package    Satcwoo
 * @subpackage Satcwoo/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Satcwoo
 * @subpackage Satcwoo/public
 * @author     Wiz Plugins <hello@wizplugins.com>
 */
class Satcwoo_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $satcwoo    The ID of this plugin.
	 */
	private $satcwoo;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $satcwoo       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $satcwoo, $version ) {

		$this->satcwoo = $satcwoo;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Satcwoo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Satcwoo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->satcwoo, plugin_dir_url( __FILE__ ) . 'css/satcwoo-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Satcwoo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Satcwoo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->satcwoo, plugin_dir_url( __FILE__ ) . 'js/satcwoo-public.js', array( 'jquery' ), $this->version, false );

	}

}


include 'class-general-display.php';

include 'class-redirection.php';
include 'class-simple-products.php';

include 'class-variable-products.php';
include 'class-style-options.php';
include 'class-mobile-display.php';


