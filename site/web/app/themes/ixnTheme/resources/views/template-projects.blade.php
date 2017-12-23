{{--
	Template Name: Projects Template
	--}}

@extends('layouts.app')

@section('content')

    @include('partials.page-header')

    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
	    <?php
	    if( $terms = get_terms( 'category', 'orderby=name' ) ) : // to make it simple I use default categories
		    echo '<select name="categoryfilter"><option>Select category...</option>';
		    foreach ( $terms as $term ) :
			    echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
		    endforeach;
		    echo '</select>';
	    endif;
	    ?>
        <label>
            <input type="radio" name="date" value="ASC" /> Date: Ascending
        </label>
        <label>
            <input type="radio" name="date" value="DESC" selected="selected" /> Date: Descending
        </label>
        <button>Apply filter</button>
        <input type="hidden" name="action" value="myFilter">
    </form>
    <div id="response"></div>
    <?php

    $vargsposts = array(
	    'post_type' => 'project',
	    'posts_per_page'=>'-1',
	    'orderby'=>'post_date'
    );

    $the_queryposts = new WP_Query($vargsposts);
    $postCounter = 1; ?>
    <section class="projects-display">
        <div class="container-fluid" id="projectsPageCont">
            <div class="row">
    <?php if (have_posts()) : while ($the_queryposts->have_posts()) : $the_queryposts->the_post();
	    $thumbnail_id = get_post_thumbnail_id();
	    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'large', true);
	    $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	    $categories = get_the_category();
	    $category_link = get_category_link($categories[0]->cat_ID);
		    ?>
                <div class="col-lg-6">
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
        <?php endwhile;endif; ?>
            </div>
        </div>

    </section>
    <script>
    jQuery(function($){
    $('#filter').submit(function(){
    var filter = $('#filter');
    $.ajax({
    url:filter.attr('action'),
    data:filter.serialize(), // form data
    type:filter.attr('method'), // POST
    beforeSend:function(xhr){
    filter.find('button').text('Processing...'); // changing the button label
    },
    success:function(data){
    filter.find('button').text('Apply filter'); // changing the button label back
        if (data.status === 'success') {
    $('#response').html(data); // insert data
            }
            else{
            filter.find('button').text('broken...');
        }

    }
    });
    return false;
    });
    });

    </script>
@endsection