<?php
/**
 * Plugin Name:       WooCommerce Quick Buy Order
 * Plugin URI:        https://wordpress.org/plugins/woocommerce-quick-buy-order/
 * Description:       Add Quick buy order form in woocommerce product single page and other page by product id. 
 * Version:           1.0
 * Author:            Baqir Farooq
 * Author URI:        http://baqirmemon.github.io/
 * Text Domain:       woocommerce-quick-buy-order
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt 
 * GitHub Plugin URI: @baqirmemon
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) { die; }
 
require_once(plugin_dir_path(__FILE__).'includes/common-functions.php');
require_once(plugin_dir_path(__FILE__).'bootstrap.php');
require_once(plugin_dir_path(__FILE__).'includes/class-dependencies.php');


if(WooCommerce_Quick_Buy_Dependencies()){
	if(!function_exists('WooCommerce_Quick_Buy')){
		function WooCommerce_Quick_Buy(){
			return WooCommerce_Quick_Buy::get_instance();
		}
	}
	WooCommerce_Quick_Buy();
}