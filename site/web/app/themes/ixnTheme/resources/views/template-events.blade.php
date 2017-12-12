{{--
	Template Name: Events Template
	--}}

	@extends('layouts.app')

	@section('content')

	@include('partials.page-header')

	

<section id="eventsPage events">
		<div class="container" id="events-container">
		<div class="row">
			<div class="col-lg-4">
				
				<div class= "WJtop">
						<span class="top-section section-divider">why join?</span>
					</div>
					<div class="WJbottom">
						<span id="events-home-text" class="homeText"> <?php echo the_field('why_join_text_events_page');?></span>

				</div>
			</div>

		

			 <?php

            $vargsposts = array(
                'post_type' => 'event',
                'posts_per_page'=>'10',
                'orderby'=>'post_date'
            );

            $the_queryposts = new WP_Query($vargsposts);
            $postCounter = 1;

            if (have_posts()) : while ($the_queryposts->have_posts()) : $the_queryposts->the_post();

            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'large', true);
            $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $content = get_the_excerpt();
            ?>

			<div class="col-lg-4">
				<div class="events-box">
					<!-- <span class= "eventDescription"> Hello this is about event </span> -->
					<div class="events-top" style="background-image: url(<?php echo $thumbnail_url[0];?>);"> 
					</div>
					<div class="events-bottom">
						<span class="eventName">
							<a href="<?php the_permalink(); ?>"> <?php the_Title() ?></a>
						</span>
						<span class="eventDateText"></br><?php echo the_field('event_date');?>, <?php echo the_field('event_time');?></span>
						<span class="eventDateText"></br><?php echo the_field('event_location');?></span>
						<span class="eventDescriptionText"></br></br><?php echo the_field('event_description');?></span>
					</div>
				</div>
			</div>



			 <?php
                $postCounter = $postCounter + 1;
                endwhile; endif;

                wp_reset_query();
                ?>

			</div> 
		</div>

</section>



	@endsection