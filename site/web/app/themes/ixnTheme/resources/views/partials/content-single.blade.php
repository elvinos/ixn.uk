<div class="container-fluid pageHeader">
  <div class ="row">
    <div class="page-heading-top col-lg-12">
      <span class="page-heading-title">News Post</span>
    </div>
  </div>
  <div class ="row">
    <div class="page-heading-bottom col-lg-12">
    </div>
  </div>
</div>
<article <?php echo 'class="' . join( ' ', get_post_class(  ) ) . '"';?> >
  <div id="postPage">
	  <?php
	  $thumbnail_id = get_post_thumbnail_id();
	  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'header', true);
	  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
	  ?>
    <header class="postHead">
      <div class="bcg imgFW container-fluid bcgimg" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
        <img src="<?php echo $thumbnail_url[0]; ?>" style="visibility: hidden;" />
      </div>
      <div class="container">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="metaPost">
          <p id="catMetaName"><?php
			  $categories = get_the_category();
			  $category_link = get_category_link($categories[0]->cat_ID);
			  if ( ! empty( $categories ) ) {
				  $catname = $categories[0]->name;
			  };?>
            <a href="<?php $category_link; ?>"> <?php echo $catname;?></a></p>
			<?php get_template_part('templates/entry-meta'); ?>
          <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo App\reading_time(); ?></p>
        </div>
      </div>
    </header>
    <div class="entry-content container">
		<?php the_content(); ?>
    </div>

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
</article>
