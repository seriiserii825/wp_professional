<?php
if( ! defined('WP_UNINSTALL_PLUGIN') ) exit;

header('Content-Type: text/html; charset=utf-8');

wp_mail(get_bloginfo('admin_email'), 'плагин  удален', 'Плагин успешно удален, можете проверить');

