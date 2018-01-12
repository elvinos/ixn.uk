{{--
	Template Name: Projects Template
	--}}

@extends('layouts.app')

@section('content')

    @include('partials.page-header')
    <div class="container-fluid formCont">
        <div class="row">
            <form id="filter">
                <div class="container filterCont">
                    <div class="row filterRow">
                    <div class="select-cont col-md-12 col-lg-5">
                    <?php
                    if( $terms = App\get_terms_by_post_type(array('category') , array('project') ) ) :
                        echo '<select class="selectbox" name="categoryfilter"><option>Select category...</option>';
                        foreach ( $terms as $term ) :
                            echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
                        endforeach;
                        echo '</select>';
                    endif;
                    ?>
                    </div>
                    <div class="col-9 col-lg-4 offset-lg-1 my-auto mx-auto">
                        <div class="style4">
                        <span id="radioTitle">Date:</span>
                        <input type="radio" id="style4radio1" name="date" value="ASC" />
                        <label for="style4radio1"></label>
                        <span class="radioSpan">Ascending</span>
                        <input type="radio" id="style4radio2" name="date" value="DESC" />
                        <label for="style4radio2"></label>
                        <span class="radioSpan">Descending</span>
                        </div>
                    </div>
                    <div class="col-3 col-lg-2">
                        <button class="moreBtn draw-border float-right" id="filterBtn">Filter</button>
                        <input type="hidden" name="action" value="ajax_function">
                        </div>
                    </div>
                </div>
            </form>
            <div id="response"></div>
        </div>
    </div>
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
	    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full', true);
        $poster_id = get_field('project_poster');
        $poster_pdf_id = get_field('pdfposter');
        $posterImage = wp_get_attachment_image_src( $poster_id, 'full' );
        $posterUrl = wp_get_attachment_url( $poster_pdf_id );
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
                        @if(empty($poster_pdf_id))
                            <div class="projects-bottom"
                                 style="background-image: url(<?php echo $posterImage[0]; ?>);">
                            </div>
                        @else
                            <div class="projects-bottom"
                                 style="background-image: url(<?php echo $posterUrl; ?>);">
                            </div>
                        @endif
                    </div>
                </div>
        <?php endwhile;endif; wp_reset_postdata() ?>
            </div>
        </div>

    </section>
    <script>
        jQuery(function($){
            $('#filter').submit(function(){
                var filter = $('#filter');
                $.ajax({
                    url:ajaxfunction.ajaxurl,
                    data:filter.serialize(), // form data
                    type:'post', // POST
                    beforeSend:function(xhr){
                        filter.find('button').text('Filtering');
                        $('#projectsList').remove();
                        $(document).scrollTop();
                        $('#projectsPageCont').append( '<div class="page-content" id="loader">Loading New Posts...</div>' );},
                    success:function(html){
                        filter.find('button').text('Filter');
                        $('#projectsPageCont #loader').remove();
                        $('#projectsPageCont').append( html );
                    },
                    error: function()
                    {
                        $('#projectsPageCont').append('<span> Error</span>');
                    }
                });
                return false;
            });
        });

    </script>
@endsection