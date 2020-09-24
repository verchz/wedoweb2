<?php
/**
 * Plugin Name: Elementor Pro: Hide licence activation message
 * Description: Hide Elementor Pro licence activation message.
 * Plugin URI: https://elementor.com/
 * Author: Elementor.com
 * Version: 1.0.0
 * Author URI: https://elementor.com/
 *
 * Text Domain: elementor-pro
 */

function my_admin_styles() { echo '<style>.notice.elementor-message { display: none !important; }</style>'; }
add_action('admin_head' , 'my_admin_styles');

?>