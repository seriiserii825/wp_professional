<?php
/**
 * Plugin Name: wfm-related-posts
 * Description: Выводит похожие записи
 */

add_action('wp_enqueue_scripts', 'wfm_style_scripts');
function wfm_style_scripts(){
	wp_enqueue_style('wfm_style-css', plugins_url('css/wfm_style.css', __FILE__));

	wp_enqueue_script('wfm_scripts-js', plugins_url('js/jquery.tools.min.js', __FILE__), ['jquery']);
	wp_enqueue_script('wfm_scripts-js', plugins_url('js/wfm-scripts.js', __FILE__), ['jquery']);
}

add_filter('the_content', 'wfm_related_posts');
function wfm_related_posts($content){
	if(!is_single()) return $content;

	$id = get_the_ID();
	$categories = get_the_category($id);
	$cats_id = [];

	foreach ( $categories as $category ) {
		$cats_id[] = $category->term_id;
	}

	$related_posts = new WP_Query([
		'posts_per_page' => 6,
		'category__in' => $cats_id,
		'orderby' => 'rand',
		'post__not_in' => [$id]
	]);

	if ( $related_posts->have_posts() ) {
		$content .= '<div class="related-posts">';
		while ( $related_posts->have_posts() ) {
			$related_posts->the_post();
			if(has_post_thumbnail()) {
				$img = get_the_post_thumbnail(get_the_ID(), [ 150,  150], ['alt' => get_the_title(), 'title' => get_the_title()]);
			}else{
				$img = '<img src="'.plugins_url('images/no_img.jpg', __FILE__).'" alt="'.get_the_title().'" title="'.get_the_title().'" width="150" height="150" />';
			}

			$content .= '<a href="'.get_the_permalink().'">'.$img.'</a></br>';
		}
		$content .= '</div>';
	} // end if

	return $content;
}
