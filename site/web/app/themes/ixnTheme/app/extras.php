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
	wp_reset_postdata();

	ob_start(); ?>
	<?php


	$args = array(
        'post_type' => 'project',
	    'posts_per_page'=>'-1',
        'orderby' => 'date',
        'order' => $_POST['date']
    );

        if( isset( $_POST['categoryfilter'] ) )
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $_POST['categoryfilter']
            )
        );

	query_posts($args);
	?>

        <div class="row" id="projectsList">
			<?php if (have_posts()) : while( have_posts() ): the_post();
				$thumbnail_id = get_post_thumbnail_id();
				$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'large', true);
				?>
                <div class="col-lg-6 ">
                    <div class="projects-box">
                        <div class="projects-top">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="project-name-text section-divider"><?php the_Title(); ?> <br/> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-10">
                                    <table class="projectTable">
                                        <colgroup class="projectCols">
                                            <col class="fieldCol">
                                            <col class="valueCol">
                                        </colgroup>
                                        <tr>
                                            <td class="fieldCol"><span>Partner: </span></td>
                                            <td class="valueCol"> <span><?php echo the_field('partner'); ?> </span></td>
                                        </tr>
                                        <tr>
                                            <td class="fieldCol"><span>Catagory: </span></td>
                                            <td class="valueCol"><span><?php foreach((get_the_category()) as $category) {
														echo $category->cat_name . ' ';}?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="fieldCol"> <span>Authors: </span></td>
                                            <td class="valueCol"><span><?php echo the_field('authors'); ?> </span></td>
                                        </tr>
                                        <tr>
                                            <td class="fieldCol"><span>Sumbission: </span></td>
                                            <td class="valueCol"><span> <?php echo the_field('submission_date')?></span></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-xl-2 mt-auto mx-auto projButtonCol">
                                    <a class="navLink" href= "<?php the_permalink(); ?>"> <button class="moreBtn draw-border mx-auto" id="projectButton">More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="projects-bottom"
                             style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                        </div>
                    </div>
                </div>
			<?php endwhile;endif; wp_reset_postdata();

    $content = ob_get_clean();

	echo $content;

	die();

}
add_action('wp_ajax_ajax_function', __NAMESPACE__ . '\\my_ajax_function');
add_action('wp_ajax_nopriv_ajax_function', __NAMESPACE__ . '\\my_ajax_function');

function get_terms_by_post_type( $taxonomies, $post_types ) {

	global $wpdb;

	$query = $wpdb->prepare(
		"SELECT t.*, COUNT(*) from $wpdb->terms AS t
        INNER JOIN $wpdb->term_taxonomy AS tt ON t.term_id = tt.term_id
        INNER JOIN $wpdb->term_relationships AS r ON r.term_taxonomy_id = tt.term_taxonomy_id
        INNER JOIN $wpdb->posts AS p ON p.ID = r.object_id
        WHERE p.post_type IN('%s') AND tt.taxonomy IN('%s')
        GROUP BY t.term_id",
		join( "', '", $post_types ),
		join( "', '", $taxonomies )
	);

	$results = $wpdb->get_results( $query );

	return $results;

}
add_filter('get_terms_by_post_type', __NAMESPACE__ . '\\get_terms_by_post_type');