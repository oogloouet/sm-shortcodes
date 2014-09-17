<?php
/*
 * Plugin Name:       SM Shortcodes
 * Description:       Simply add a shortcode to your post and pages in tinymce through GUI interface.
 * Version:           1.0.0
 * Author:            Syed Muneeb
 * Text Domain:       sm-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */
defined('ABSPATH') or die("You are not allowed to access this file directory");
function sm_enqueue_stylesheet()
{
    wp_enqueue_style('sm_style_css', plugins_url('css/sm-style.css',__FILE__));
    wp_enqueue_style('sm_font_awesome_css', plugins_url('css/font-awesome.min.css',__FILE__));
    wp_enqueue_script('sm_tabs_js', plugin_dir_url(__FILE__) . 'js/sm-tabs.js', array('jquery'), null, true );
    wp_enqueue_script('sm_toggle_main', plugin_dir_url(__FILE__) . 'js/sm-toggle-main.js', array('jquery'), null, true );
    wp_enqueue_script('sm_toggle_active', plugin_dir_url(__FILE__) . 'js/sm-active.js', array('jquery'), null, true );
}
add_action('wp_enqueue_scripts', 'sm_enqueue_stylesheet');
add_action('admin_enqueue_scripts' , 'sm_enqueue_stylesheet');

function sm_latest_jquery() {
    wp_enqueue_script('jquery');
}
add_action('init', 'sm_latest_jquery');

require_once plugin_dir_path(__FILE__) . 'includes/sm-plugin-registration.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-buttons.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-tabs.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-toggles.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-alerts.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-blockquotes.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-code.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-custom-heading.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-gap.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-highlight.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-image.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-line.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-prompt.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-progressbar.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-dropcap.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-maps.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-columns.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-share.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-private.php';
require_once plugin_dir_path(__FILE__) . 'includes/sm-video.php';
?>