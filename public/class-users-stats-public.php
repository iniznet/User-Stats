<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Users_Stats
 * @subpackage Users_Stats/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Users_Stats
 * @subpackage Users_Stats/public
 * @author     Your Name <email@example.com>
 */
class Users_Stats_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $users_stats    The ID of this plugin.
	 */
	private $users_stats;

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
	 * @param      string    $users_stats       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $users_stats, $version ) {

		$this->users_stats = $users_stats;
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
		 * defined in Users_Stats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Users_Stats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->users_stats, plugin_dir_url( __FILE__ ) . 'css/users-stats-public.css', array(), $this->version, 'all' );

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
		 * defined in Users_Stats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Users_Stats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->users_stats, plugin_dir_url( __FILE__ ) . 'js/users-stats-public.js', array( 'jquery' ), $this->version, false );

	}

}
