<?php
/**
 * Plugin Name: wfm-hooks
 */

add_filter('the_title', 'wfm_title');
function wfm_title($title){
	if(is_admin()) return $title;

	$title = $title . '<hr>';

	return $title;
}

add_filter('the_content', 'wfm_content');
function wfm_content($content){
	if(is_user_logged_in()) return $content;

	if(is_page()) return $content;

	return '<h1><a href="'. home_url().'/wp-login.php">Для просмотра контента, авторизуйтесь</a></h1>';
}

add_action('comment_post', 'wfm_comment_post');
function wfm_comment_post(){
	header('Content-Type: text/html; charset=utf-8');

	wp_mail(get_bloginfo('admin_email'), 'Коментарий отправлен', 'Коментарий отправлен');
}