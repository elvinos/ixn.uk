{{--
	Template Name: Events Template
	--}}

	@extends('layouts.app')

	@section('content')

	@include('partials.page-header')

	

<section id="eventsPage events">
		<div class="container" id="events-container">
		<div class="row">
			<div class="col-12">
				<span class="top-section section-divider">why join?</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="WJbottom">
					<span id="events-home-text"> <?php echo the_field('why_join_text_events_page');?></span>
			</div>
		</div>
					<?php $vargsposts = array('post_type' => 'event', 'posts_per_page' => '10', 'orderby' => 'post_date');
					$the_queryposts = new WP_Query( $vargsposts );
					$postCounter = 1;
					if (have_posts()) : while ($the_queryposts->have_posts()) : $the_queryposts->the_post();
					$thumbnail_id = get_post_thumbnail_id();
					$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'large', true );
					$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
					$content = get_the_content(); ?>
						<div class="col-lg-4 col-md-6 events-home-box">
							<div class="events-content">
								<div class="events-home-top" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
									<div class="eventHomeName"><?php the_Title() ?></div>
								</div>
								<div class="events-home-bottom" id="eventPageContent">
									<table class="eventTable">
										<colgroup class="eventCols">
											<col class="fieldCol">
											<col class="valueCol">
										</colgroup>
										<tr>
											<td class="fieldCol"><span>Date: </span></td>
											<td class="valueCol"> <span><?php echo the_field('event_date'); ?> </span></td>
										</tr>
										<tr>
											<td class="fieldCol"><span>Time: </span></td>
											<td class="valueCol"><span><?php echo the_field( 'event_time' );?></span></td>
										</tr>
										<tr>
											<td class="fieldCol"> <span>Location: </span></td>
											<td class="valueCol"><span><?php echo the_field('event_location'); ?> </span></td>
										</tr>
									</table>
									<span class="eventDescriptionText"><?php echo the_field('event_description');?></span>
								</div>
							</div>
						</div>
						<?php $postCounter = $postCounter + 1; endwhile; endif; wp_reset_query();?>
					</div>
				</div>
</section>



	@endsection