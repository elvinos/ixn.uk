{{--
	Template Name: Projects Template
	--}}

@extends('layouts.app')

@section('content')

    @include('partials.page-header')
        <div class="nav-links"><button>Apply filters</button></div>
    <?php
    $args = array(
	    'post_type' => 'project',
	    'posts_per_page'=>'-1',
	    'orderby'=>'post_date'
    );

    $the_queryposts = new WP_Query($args);
    $postCounter = 1; ?>
    <section class="projects-display">
        <div class="container-fluid" id="projectsPageCont">
            <div class="row" id="projectsList">
    <?php if (have_posts()) : while ($the_queryposts->have_posts()) : $the_queryposts->the_post();
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
        <?php endwhile;endif; wp_reset_postdata() ?>
            </div>
        </div>

    </section>
    <script type="text/javascript">
        (function($) {
            $(document).on( 'click', '.nav-links button', function( event ) {
                event.preventDefault();
                $.ajax({
                    url: ajaxfunction.ajaxurl,
                    type: 'post',
                    data: {
                        action: 'ajax_function',
                        query_vars: ajaxfunction.query_vars,
                    },
                    beforeSend: function() {
                        $('#projectsList').remove();
                        $(document).scrollTop();
                        $('#projectsPageCont').append( '<div class="page-content" id="loader">Loading New Posts...</div>' );
                    },
                    success: function( html ) {
                        $('#projectsPageCont #loader').remove();
                        $('#projectsPageCont').append( html );
                    }
                })
            })
        })(jQuery);
    </script>
@endsection