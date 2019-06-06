<?php
/*
 * Plugin Name: wfm-first
 * Description: First plugin from Serii
 * Plugin URI: http://portfolio.host1670806.hostland.pro/
 * Author URI: http://portfolio.host1670806.hostland.pro/
 * Author: Serii
 * */

require_once __DIR__.'/activate.php';
require_once __DIR__.'/deactivate.php';

register_activation_hook(__FILE__, 'wfm_activate');
register_deactivation_hook(__FILE__, 'wfm_deactivate');
register_uninstall_hook(__FILE__, 'wfm_uninstall');


