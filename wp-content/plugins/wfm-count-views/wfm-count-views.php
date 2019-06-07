<?php
/**
 * Plugin Name: wfm-count-views
 * Description: Счетчик просмотров записей
 */

register_activation_hook(__FILE__, 'wfm_create_table');


function wfm_create_table() {
	global $wpdb;

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';

	$table_name = 'wfm_count_views';
	$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

	$sql = "CREATE TABLE {$table_name} (
	id  bigint(20) unsigned NOT NULL auto_increment,
	views_count bigint(20) NOT NULL default '0',
	alert varchar(20) NOT NULL default '',
	meta longtext NOT NULL default '',
	address varchar(255) NOT NULL default '',
	PRIMARY KEY  (id),
	KEY alert (alert)
	)
	{$charset_collate};";

	dbDelta($sql);

}
