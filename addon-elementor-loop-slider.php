<?php

/**
 * Plugin Name: Elementor Addon for Loop Slider
 * Description: Convert grid of any post-type template into slider.
 * Version: 1.0.0
 * Author: Usama Khan
 * Author URI: https://github.com/usamakhan143
 * Requires PHP: 7.4
 * Text Domain: translate-addon-elementor-loop-slider-plugin
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!class_exists('AddonElementorLoopSlider')) {


	class AddonElementorLoopSlider
	{

		public function __construct()
		{
			// Define a constant to initialize the plugin path.
			define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));

			// Define a constant to initialize the frontend plugin path.
			define('MY_PLUGIN_URL', plugin_dir_url(__FILE__));

			// Call the packages that you are using in the plugin to enhance the functionality.
			// require_once(MY_PLUGIN_PATH . '/vendor/autoload.php');
		}

		public function initialize()
		{
			include_once(MY_PLUGIN_PATH . '/includes/utilities.php');
			include_once(MY_PLUGIN_PATH . '/includes/option-page.php');
			include_once(MY_PLUGIN_PATH . '/includes/addon-elementor-loop-slider.php');
		}
	}
} else {
	die('This class is already exist!');
}

$AddonElementorLoopSlider = new AddonElementorLoopSlider();
$AddonElementorLoopSlider->initialize();