<div class="container-fluid pageHeader">
  <div class ="row">
    <div class="page-heading-top col-lg-12">
      <span class="page-heading-title">Project</span>
    </div>
  </div>
  <div class ="row">
    <div class="page-heading-bottom col-lg-12">
    </div>
  </div>
</div>
<article <?php echo 'class="' . join( ' ', get_post_class(  ) ) . '"';?> >
  <div id="postPage">
    <div class="container">
	  <?php
	  $thumbnail_id = get_post_thumbnail_id();
	  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'header', true);
	  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
	  ?>
    <header class="postHead">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="metaPost">
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

    </header>

        <section class="project-post-body">
            <div class="projectImage col-md-12 my-auto">
                  @if(has_category('Web'))
                    <div class="device-container">
                      <div class="device-mockup macbook_2015">
                        @elseif (has_category('Mobile'))
                          <div class="device-container iphone6Cont">
                            <div class="device-mockup iphone6">
                              @else
                                <div class="device-container">
                                  <div class="device-mockup macbook_2015">
                                    @endif
                                    <div class="device">
                                      <div class="screen">
                                        <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                        <img src="<?php echo $thumbnail_url[0]; ?>"
                                             class="img-fluid" alt="">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>
                      </div>
    <div class="row">
      <div class="offset-md-1 col-md-11">
        <span class="section-divider">About</span>
      </div>
    <div class="entry-content container">
		<?php the_content(); ?>
    </div>
      <div class="offset-md-1 col-md-11">
        <span class="section-divider">Video</span>
      </div>

      <div class="col-lg-8 order-lg-1">
        <div class="home-back-box">
          <div class="spacerwwd"></div>
          <div class="youtube-container">
            <div class="youtube-player" data-id="w5F8rqN7rFA"></div>
          </div>
        </div>
      </div>

      <div class="offset-md-1 col-md-11">
        <span class="section-divider">Poster</span>
      </div>
    </div>
            </div>
        </section>
    <div class="container postPageComments">
      <div class="row singleLinks">

		  <?php
		  $previous = get_previous_post();
		  $next = get_next_post();
		  if ( get_next_post() ) { ?>
        <div class="col-md-6 leftLink"><a href="<?php echo get_permalink($next);?>" class="arrowlink arrow-left" title="Previous"></a><div class="highlightLink"><a href="<?php echo get_permalink($next); ?>">
          <span class="highlight">
            <span><?php echo get_the_title($next); ?></span>
          </span>
            </a>
          </div></div>
		  <?php } if ( get_previous_post() ) { ?>
        <div class="col-md-6 rightLink"><a href="<?php echo get_permalink($previous);?>" class="arrowlink arrow-right" title="Next"></a><div class="highlightLink"><a href="<?php echo get_permalink($previous) ?>">
        <span class="highlight">
          <span><?php echo get_the_title($previous) ?></span>
        </span>
            </a>
          </div></div>

		  <?php } ?>
      </div>
    </div>
  </div>
  </div>
</article>
