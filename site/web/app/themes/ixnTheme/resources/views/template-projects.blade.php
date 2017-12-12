{{--
	Template Name: Projects Template
	--}}

@extends('layouts.app')

@section('content')

    @include('partials.page-header')

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
                            <span class="project-name-text section-divider"><?php the_Title(); ?> <br/> </span>
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

        {{--<aside class="overlayProject">--}}
            {{--<!-- Button to close the overlay navigation -->--}}
            {{--<!-- Overlay content -->--}}
            {{--<div class="overlay-content">--}}
                {{--<a class="closeProject toggle-projects-overlay"><span></span></a>--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="innerbox">--}}
                                {{--<div class="innertop">--}}
                                    {{--<span class="project-name-text">IXN Website<br/></span>--}}
                                    {{--<span id="field">Partner: </span>--}}
                                    {{--<span id="value">Microsoft <br/></span>--}}
                                    {{--<span id="field">Catagory: </span>--}}
                                    {{--<span id="value">Tech Industry, Website <br/></span>--}}
                                    {{--<span id="field">Authors: </span>--}}
                                    {{--<span id="value">Alex Charles, Phoebe Staab, Giovanni Tenderinni <br/></span>--}}
                                    {{--<span id="field">Sumbission Date: </span>--}}
                                    {{--<span id="value"> 11/11/11</span>--}}
                                {{--</div>--}}
                                {{--<div class="innerbottom">--}}
                                    {{--<div class="vid">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div class="innerbox2">--}}
                                {{--<div class="poster">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</aside>--}}
    </section>
@endsection