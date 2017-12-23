<div class="container-fluid pageHeader">
    <div class="row">
        <div class="page-heading-top col-lg-12">
            <span class="page-heading-title">Project</span>
        </div>
    </div>
    <div class="row">
        <div class="page-heading-bottom col-lg-12">
        </div>
    </div>
</div>
<article <?php echo 'class="' . join( ' ', get_post_class() ) . '"';?> >
    <div id="postPage">
		<?php
		$thumbnail_id = get_post_thumbnail_id();
		$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'header', true );
		$thumbnail_image = get_posts( array( 'p' => $thumbnail_id, 'post_type' => 'attachment' ) );
            $poster_id = get_field('project_poster');
            $size = "medium"; // (thumbnail, medium, large, full or custom size)
            $posterImage = wp_get_attachment_image_src( $poster_id, $size );

		?>

        <header class="postHead">
            <div class="container">
                <div class="row" id="projectPostTitle">
                    <div class="col-md-12 projectPostTitleCol">
                        <span class="section-divider"><?php the_title(); ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="metaPost col-md-12">
                        <table class="projectTable">
                            <colgroup class="projectCols">
                                <col class="fieldCol">
                                <col class="valueCol">
                            </colgroup>
                            <tr>
                                <td class="fieldCol"><span>Partner: </span></td>
                                <td class="valueCol"><span><?php echo the_field( 'partner' ); ?> </span></td>
                            </tr>
                            <tr>
                                <td class="fieldCol"><span>Catagory: </span></td>
                                <td class="valueCol"><span><?php foreach ( ( get_the_category() ) as $category ) {
											echo $category->cat_name . ' ';
										}?></span></td>
                            </tr>
                            <tr>
                                <td class="fieldCol"><span>Authors: </span></td>
                                <td class="valueCol"><span><?php echo the_field( 'authors' ); ?> </span></td>
                            </tr>
                            <tr>
                                <td class="fieldCol"><span>Sumbission: </span></td>
                                <td class="valueCol"><span> <?php echo the_field( 'submission_date' )?></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </header>
        <section id="appImageSec">
            <div class="projectImage col-md-12 my-auto">
            @if(has_category('Mobile'))
                <div class="device-container iphone6Cont">
                    <div class="device-background"></div>
                    <div class="device-mockup iphone6">
            @else
                <div class="device-container macbookCont">
                    <div class="device-background"></div>
                    <div class="device-mockup macbook_2015">
            @endif
                        <div class="device">
                            <div class="screen">
                                <img src="<?php echo $thumbnail_url[0]; ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="aboutProjSec">
            <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-1 col-lg-11">
                    <span class="section-divider">About</span>
                </div>
            </div>
            </div>
                <div class="entry-content container">
                    <?php the_content(); ?>
                </div>
        </section>
        <section id="videoProjSec">
            <div class="container-fluid">
                <div class="row">
                    <div class="offset-lg-1 col-lg-11">
                        <span class="section-divider">Video</span>
                    </div>
                </div>
                <div class="row">
                    <div class="video-div">
                        <div class="home-back-box mx-auto">
                            <div class="spacerwwd"></div>
                            <div class="youtube-container col-lg-8">
                                <div class="youtube-player" data-id="w5F8rqN7rFA"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="posterProjSec">
            <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-1 col-lg-11">
                    <span class="section-divider">Poster</span>
                </div>
            </div>
                <div class="row">

                    <div class="mx-auto poster-image" ><img src="<?php echo $posterImage[0] ?>"></div>
                </div>
            </div>
        </section>
    </div>
</article>
