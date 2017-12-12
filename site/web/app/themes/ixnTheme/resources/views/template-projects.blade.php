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
        <div class="container">
            <div class="row">
    <?php if (have_posts()) : while ($the_queryposts->have_posts()) : $the_queryposts->the_post();
	    $thumbnail_id = get_post_thumbnail_id();
	    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'large', true);
	    $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	    $categories = get_the_category();
	    $category_link = get_category_link($categories[0]->cat_ID);
		    ?>
                <div class="col-md-6">
                    <div class="projects-box">
                        <div class="projects-top">
                            <span class="project-name-text"><?php the_Title(); ?> <br/> </span>
                            <span id="field">Partner: </span>
                            <span id="value"><?php echo the_field('partner'); ?> <br/></span>
                            <span id="field">Catagory: </span>
                            <a href="<?php echo $category_link ?>"><?php echo get_the_category_list(","); ?><br/></a>
                            <span id="field">Authors: </span>
                            <span id="value"><?php echo the_field('authors'); ?> <br/></span>
                            <span id="field">Sumbission Date: </span>
                            <span id="value"> <?php echo the_field('submission_date')?></span>
                            <span class="openProject toggle-projects-overlay" style="font-size:15px;cursor:pointer">MORE</span>
                        </div>
                        <div class="projects-bottom">
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