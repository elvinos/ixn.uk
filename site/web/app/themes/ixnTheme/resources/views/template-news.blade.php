{{--
	Template Name: News Template
	--}}

	@extends('layouts.app')
	@section('content')
	@include('partials.page-header')
	<section id="newsSec">
		<div class="blogSet homeBlogSet container">
			<?php

			$vargsposts = array(
				'post_type' => 'post',
				'posts_per_page'=>'-1',
				'orderby'=>'post_date'
			);

			$the_queryposts = new WP_Query($vargsposts);
			$postCounter = 1;
			if (have_posts()) : while ($the_queryposts->have_posts()) : $the_queryposts->the_post();
			$thumbnail_id = get_post_thumbnail_id();
			$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'large', true);
			$thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			$content = get_the_excerpt();
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			$categories = get_the_category();
			$category_link = get_category_link($categories[0]->cat_ID);
			$contentclean = strip_tags($content);
			if ( ! empty( $categories ) ) {
				$catname = $categories[0]->name;
			};
			if($postCounter %3 == 0) {
				echo '</div> <div class="blogSet">';
				$postCounter = 1;
			}
			?>
			<article class="blogArticle mx-auto">
				<div class="blogArticleContent">
					<a href="<?php the_permalink(); ?>" class="blogImgLnk"></a>
					<div class="blogImgDiv bcgimg"
						 style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
					</div>
					<div class="blogArticleInfo">
						<h2 class="blogArticleTitle">
							<a href="<?php the_permalink(); ?>"> <?php the_Title() ?></a>
						</h2>
						<div class="blogArticleExcerpt">
                            <span>
                            <?php
                            /* Function To Chop Blog Excerpts to length */
                            if($postCounter == 1) {echo App\chop_string($contentclean, 350);}
                            else{echo App\chop_string($contentclean, 150);}
                            ?>
                            </span>
						</div>
						<div class="blogArticleCatDiv">
							<span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago'; ?></span>
						</div>
					</div>
				</div>
			</article>
			<?php $postCounter = $postCounter + 1; endwhile; endif;wp_reset_query();?>
		</div>
	</section>
@endsection