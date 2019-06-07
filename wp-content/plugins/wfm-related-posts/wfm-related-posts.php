<?php
/**
 * Plugin Name: wfm-related-posts
 * Description: Выводит похожие записи
 */
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
			$content .= '<a href="'.get_the_permalink().'">'.get_the_title().'</a></br>';
		} // end while
		$content .= '</div>';
	} // end if

	return $content;
}
