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

function my_ajax_function(){

    $args = array(
	    'post_type' => 'project',

    );
	$the_queryposts = new WP_Query($args);

	ob_start(); ?>
<?php	if (have_posts()) : while ($the_queryposts->have_posts()) : $the_queryposts->the_post();
	    $thumbnail_id = get_post_thumbnail_id();
	    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'large', true);
?>
		<div class="col-lg-6 ">
			<span class="project-name-text section-divider"><?php the_Title(); ?> <br/> </span>
		</div>

<?php
    endwhile;
    else:
    echo "no results";
    endif;

    $content = ob_get_contents();
//	$query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );
	echo $content;

	die();
}
add_action('wp_ajax_ajax_function', __NAMESPACE__ . '\\my_ajax_function');
add_action('wp_ajax_nopriv_ajax_function', __NAMESPACE__ . '\\my_ajax_function');
