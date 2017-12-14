<?php

namespace App;

/**
* Function To Chop Blog Excerpts to length
*/

function chop_string($str, $len) {
if (strlen($str) < $len)
return $str;

$str = substr($str,0,$len);
if ($spc_pos = strrpos($str," "))
$str = substr($str,0,$spc_pos);

return $str . '<span class="readMore">... Read more</span> ';
}

add_filter('chop_string', __NAMESPACE__ . '\\chop_string');

// Fucntion to calculate post Reading Time
function reading_time() {
	$post = get_post();
	$content = get_post_field( 'post_content', $post->ID );
	$word_count = str_word_count( strip_tags( $content ) );
	$readingtime = ceil($word_count / 200);

	if ($readingtime == 1) {
		$timer = " Minute";
	} else {
		$timer = " Minutes";
	}
	$totalreadingtime = $readingtime . $timer;

	return $totalreadingtime;
}
add_filter('reading_time', __NAMESPACE__ . '\\reading_time');

function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> $_POST['date'] // ASC или DESC
	);

	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryfilter']
			)
		);

	// create $args['meta_query'] array if one of the following fields is filled
	if( isset( $_POST['price_min'] ) && $_POST['price_min'] || isset( $_POST['price_max'] ) && $_POST['price_max'] || isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
		$args['meta_query'] = array( 'relation'=>'AND' ); // AND means that all conditions of meta_query should be true

	// if both minimum price and maximum price are specified we will use BETWEEN comparison
	if( isset( $_POST['price_min'] ) && $_POST['price_min'] && isset( $_POST['price_max'] ) && $_POST['price_max'] ) {
		$args['meta_query'][] = array(
			'key' => '_price',
			'value' => array( $_POST['price_min'], $_POST['price_max'] ),
			'type' => 'numeric',
			'compare' => 'between'
		);
	} else {
		// if only min price is set
		if( isset( $_POST['price_min'] ) && $_POST['price_min'] )
			$args['meta_query'][] = array(
				'key' => '_price',
				'value' => $_POST['price_min'],
				'type' => 'numeric',
				'compare' => '>'
			);

		// if only max price is set
		if( isset( $_POST['price_max'] ) && $_POST['price_max'] )
			$args['meta_query'][] = array(
				'key' => '_price',
				'value' => $_POST['price_max'],
				'type' => 'numeric',
				'compare' => '<'
			);
	}


	// if post thumbnail is set
	if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
		$args['meta_query'][] = array(
			'key' => '_thumbnail_id',
			'compare' => 'EXISTS'
		);

	$query = new WP_Query( $args );

	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
			echo '<h2>' . $query->post->post_title . '</h2>';
		endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;

	die();
}


add_action('wp_ajax_myfilter', __NAMESPACE__ . '\\misha_filter_function');
add_action('wp_ajax_nopriv_myfilter',__NAMESPACE__ . '\\misha_filter_function');