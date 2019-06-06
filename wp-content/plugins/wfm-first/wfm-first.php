<?php
/*
 * Plugin Name: wfm-first
 * Description: First plugin from Serii
 * Plugin URI: http://portfolio.host1670806.hostland.pro/
 * Author URI: http://portfolio.host1670806.hostland.pro/
 * Author: Serii
 * */

register_activation_hook(__FILE__, 'wfm_activate');
function wfm_activate(){
//	wp_mail(get_bloginfo('admin_email'), 'плагин активирован', 'Плагин активирован, можете проверить');
//	var_dump(PHP_VERSION);
//	wp_die();
//	exit('версия php ' . PHP_VERSION);
//	wp_die('версия php ' . PHP_VERSION);
	$date = date('d-m-Y H:i:s');

	error_log($date . ' Плагин активирован', 3, __DIR__.'/wfr_logs.log');
}



