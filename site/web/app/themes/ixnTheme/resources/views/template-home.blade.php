{{--
    Template Name: Home Template
    --}}
@extends('layouts.app')

@section('content')
    <?php
    $permalinkabout = get_permalink(get_page_by_path('about'));
    $permalinkprojects = get_permalink(get_page_by_path('projects'));
    $permalinkevents = get_permalink(get_page_by_path('events'));
    $permalinkcontact = get_permalink(get_page_by_path('contact'));
    $find = array( '//');
    $replace = 'http://';
    $outputabout= str_replace( $find, $replace, $permalinkabout );
    $outputprojects = str_replace( $find, $replace,  $permalinkprojects);
    $outputevents = str_replace( $find, $replace, $permalinkevents);
    $outputcontact = str_replace( $find, $replace, $permalinkcontact);
    ?>

    {{--Splash Page--}}
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-8 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5"><?php echo the_field('home_text');?></h1>
                    </div>
                </div>
            </div>
            <div id="mastArrow">
                <div class="arrow bounce">
                    <a class="fa fa-arrow-down fa-2x" href="#"></a>
                </div>
            </div>
        </div>
    </header>
    {{--Who we are--}}
    <section class="who-we-are" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class=" offset-lg-1 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-md-12 section-divider-row">
                            <span class="section-divider">who we are</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="wwabox">
                                 <span class="homeText"><?php echo the_field('who_we_are_text');?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 buttonRow">
	                        <?php echo '<a class="navLink" href= "' . $outputabout . '"> <button class="moreBtn draw-border float-right">More</button></a>' ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 aboutBox">
                            <div class="profile">
                                <div class="spacer"></div>
                                <div class="img1"></div>
                                <span class="aboutText">Dr. Yun Fu<br/>App Project Manager<br/>Teaching Fellow<br/>University College London<br/>
                            </span>
                                <a href="mailto:y.fu@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 aboutBox">
                            <div class="profile" id=>
                                <div class="spacer"></div>
                                <div class="img2"></div>
                                <span class="aboutText">Dr. Dean Mohamedally<br/>
                                Teaching Fellow<br/>
                                Director for Apps Engineering<br/>
                                University College London<br/>
                            </span>
                                <a href="mailto:d.mohamedally@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-do">
        <div class="container-fluid" id="wwdcontainer">
            <div class="row">
                <div class="col-lg-4 order-lg-2">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-12 section-divider-row">
                                <span class="section-divider">what we do</span>
                            </div>
                        </div>
                        <div class="row" id="wwdbox">
                            <span class="homeText"><?php echo the_field('what_we_do_text');?></span>

                             <div class="buttonRow" id="aboutButtonBox">
                            <?php echo '<a class="navLink" href= "' . $outputabout . '"> <button class="moreBtn draw-border mx-auto">+ About Us</button></a>' ?>

                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1">
                    <div class="home-back-box">
                        <div class="spacerwwd"></div>
                        <div class="youtube-container">
                            <div class="youtube-player" data-id="w5F8rqN7rFA"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <section id="stats">
        <div class="container" id="statscontainter">
            <div class="row">
                <div class="col-md-4 statsBox text-center">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <i id="icon" class="fa fa-cogs"></i>
                        </div>
                    </div>
                    <div class="row">
        <span class="iconsText"> <?php echo the_field('cogs_logo_text');?>
        </span>
                    </div>
                </div>
                <div class="col-md-4 statsBox">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <i id="icon" class="fa fa-code"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span class="iconsText"><?php echo the_field('code_symbol_logo_text');?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 statsBox">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <i id="desktop" class="fa fa-desktop"></i>
                            <i id="cell" class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span class="iconsText"> <?php echo the_field('responsive_design_text');?> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="hiwSec">
        <div class="container">
        <div class="row">
            <div class="col-md-12" id="hiwDivider">
                <span class="section-divider">how it works</span>
            </div>
        </div>
        </div>
        <div class="container hiwslide" id="hiwcontainer">
                <div class="carousel slide" id="slider" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                        <li data-target="#slider" data-slide-to="3"></li>
                        <li data-target="#slider" data-slide-to="4"></li>
                        <li data-target="#slider" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" >
                            <div class="row">
                                <div class="textBox col-md-6 my-auto">
                                    <div class="row">
                                        <div class="col-11 offset-1"><span class="hiwHead">Step 1</span></div>
                                        <div class="col-9 offset-2"><span> Get in touch with one of our coordinators, Dr. Yun Fu or Dr. Dean Mohamedally and tell them about your project. </span></div>
                                    </div>
                                </div>
                                <div class="hiwBox col-md-6" id="img1">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="textBox col-md-6 my-auto">
                                    <div class="row">
                                        <div class="col-11 offset-1"><span class="hiwHead">Step 2</span></div>
                                        <div class="col-9 offset-2"><span>Dr. Fu and Dr. Mohamedally consider your project and assign it the perfect group of UCL engineers. </span></div>
                                    </div>
                                </div>
                                <div class="hiwBox col-md-6" id="img2">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="textBox col-md-6 my-auto">
                                    <div class="row">
                                        <div class="col-11 offset-1"><span class="hiwHead">Step 3</span></div>
                                        <div class="col-9 offset-2"><span>Your team will get in touch with you to discuss design and and motivations behind the project. </span></div>
                                    </div>
                                </div>
                                <div class="hiwBox col-md-6" id="img3">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="textBox col-md-6 my-auto">
                                    <div class="row">
                                        <div class="col-11 offset-1"><span class="hiwHead">Step 4</span></div>
                                        <div class="col-9 offset-2"><span>Your team will iterate through several designs until you are happy the style of product prototype. </span></div>
                                    </div>
                                </div>
                                <div class="hiwBox col-md-6" id="img4">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="textBox col-md-6 my-auto">
                                    <div class="row">
                                        <div class="col-11 offset-1"><span class="hiwHead">Step 5</span></div>
                                        <div class="col-9 offset-2"><span>Your UCL team will handle all of the front-end and back-end development of your project.</span></div>
                                    </div>
                                </div>
                                <div class="hiwBox col-md-6" id="img5">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="textBox col-md-6 my-auto">
                                    <div class="row">
                                        <div class="col-11 offset-1"><span class="hiwHead">Step 6</span></div>
                                        <div class="col-9 offset-2"><span>Within a few short months, your project will transform from an idea into a beautiful custom product. </span></div>
                                    </div>
                                </div>
                                <div class="hiwBox col-md-6" id="img6">
                                </div>
                            </div>
                        </div>
                    </div>
                <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left arrowStyle"></i>
                </a>
                <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                    <i class="fa fa-chevron-right arrowStyle"></i>
                </a>
            </div>
        </div>

    </section>
    {{--Projects Section--}}

    <section id="projects">
        <div class="container-fluid" id="projects">
            <div class="row">
                <div class="offset-md-1 col-md-11">
                    <span class="section-divider">some of our projects</span>
                </div>
            </div>

            <?php

            $vargsposts = array(
            'post_type' => 'project',
            'posts_per_page'=>'-1',
            'orderby'=>'post_date'
            );

            $the_queryposts = new WP_Query($vargsposts);
            $postCounter = 1;

            if (have_posts()) : while ($the_queryposts->have_posts()) : $the_queryposts->the_post();
	        $thumbnail_id = get_post_thumbnail_id();
	        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'large', true);
	        $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	        $categories = get_the_category();
	        $category_link = get_category_link($categories[0]->cat_ID);
	        ?>
            {{--Featured Project One Macbook Right--}}
            <div class="row projectRow">
                <div class="col-lg-9 offset-lg-2 col-md-11 projectBox container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="projectHeading col-md-12">
                                    <span> <?php the_Title(); ?> </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="projectBody col-md-11 offset-md-1">
                                    <span><?php the_excerpt(); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 buttonRow">
	                               <!-- <?php echo '<a class="navLink" href= "' . $outputprojects . '"> <button class="moreBtn draw-border float-right">More</button></a>' ?> -->
                                </div>
                            </div>
                        </div>
                        <div class="projectImage col-md-6 my-auto">
                            <div class="device-container">
                                <div class="device-mockup macbook_2015">
                                    <div class="device">
                                        <div class="screen">
                                            <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                            <img src="<?php echo $thumbnail_url[0]; ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="button">
                                            <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
	        <?php endwhile;endif; ?>
            {{--Featured Project Two Iphone Left--}}
            <div class="row projectRow">
                <div class="col-lg-9 offset-lg-1 col-md-11 projectBox container-fluid">
                    <div class="row">
                        <div class="col-md-6 order-md-2">
                            <div class="row">
                                <div class="projectHeading col-md-12">
                                    <span>Featured Project One</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="projectBody col-md-11 offset-md-1">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.   Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 buttonRow">
                                    <!-- <?php echo '<a class="navLink" href= "' . $outputprojects . '"> <button class="moreBtn draw-border float-right">More</button></a>' ?> -->
                                </div>
                            </div>
                        </div>
                        <div class="projectImage col-md-6 my-auto order-md-1">
                            <div class="device-container iphone6Cont">
                                <div class="device-mockup iphone6">
                                    <div class="device">
                                        <div class="screen">
                                            <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                            <img src="@asset('images/demo-screen-1.jpg')" class="img-fluid" alt="">
                                        </div>
                                        <div class="button">
                                            <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="container" id="projectscontainer">
            <div class="row">
             <div class="col-md-12">
                <div class="see-more-projects-box" id="news">

        <?php echo '<a class="navLink" href= "' . $outputprojects . '"> <button class="moreBtn draw-border float-center">See More Projects</button></a>' ?>
    </div>
    </div>
</div>
</div>
    </section>
   
  

    <div class="container" id="news">
        <div class="row">
            <div class="col-md-11" id="hiwDivider">
                <span class="section-divider">latest news</span>
            </div>
        </div>
    </div>

    <section id="newsSec">
        <div class="blogSet homeBlogSet container">
	        <?php

	        $vargsposts = array(
		        'post_type' => 'post',
		        'posts_per_page'=>'3',
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
	        if($postCounter %7 == 0) {
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
	                            /* Function To Chop Blog Excerpts to length
*/
	                            // }
	                            if($postCounter == 1) {
		                            echo App\chop_string($contentclean, 350);
	                            }
	                            else{
		                            echo App\chop_string($contentclean, 150);
	                            }
	                            ?>                            </span>
                            </div>
                            <div class="blogArticleCatDiv">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago'; ?></span>
                            </div>
                        </div>
                    </div>
                </article>
		        <?php
		        $postCounter = $postCounter + 1;
		        endwhile; endif;

		        wp_reset_query();
		        ?>
            </div>
              <div class="container" id="newscontainer">
            <div class="row">
             <div class="col-md-12">
                <div class="see-more-projects-box" id="eventsHome">

        <?php echo '<a class="navLink" href= "' . $outputprojects . '"> <button class="moreBtn draw-border float-center">See More News</button></a>' ?>
    </div>
    </div>
</div>
</div>
    </section>
    <section class="eventsSec">
        <div class="container" id="eventscontainer">
            <div class="events-home-background-box">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="homepage-event-box">
                            <div class="events-text-box">
                                <span class="section-divider">events</span>
                                <p class="events-home-text"><?php echo the_field('events_home_page_text');?></p>
                            </div>
                            <?php echo '<a class="navLink" href= "' . $outputevents . '"> <button class="moreBtn draw-border float-right">More</button></a>' ?>
                        </div>
                    </div>


            <?php

            $vargsposts = array(
                'post_type' => 'event',
                'posts_per_page'=>'2',
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

                    <div class="col-12 col-sm-12 col-med-12 col-lg-4">
                        <div class="events-home-box">
                            <div class="events-home-top" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                            </div>
                            <div class="events-home-bottom">
                                <span class="eventName">
                                    <?php the_Title() ?>
                                </span>
                                <span></br> <?php echo the_field('event_date');?>, <?php echo the_field('event_time');?> </span>
                                <span></br> <?php echo the_field('event_location');?> </span>
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
        </div>


    </section>


     <section id="getInTouchSec">
       <div class="container-fluid" id="getInTouch">
           <div class="contentImg">
               <div class="row">
               <span class="imgFullText"> interested? <br/> get in touch.</span>
               </div>
               <div class="row buttonImg">
    <?php echo '<a class="navLink mx-auto" href= "' . $outputcontact . '"> <button class="moreBtn draw-border">Contact us</button> </a>' ?>
               </div>
           </div>
       </div>
   </section>
   
     <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="col-md-12">
                        <span class="section-divider">partners</span>
                    </div>
                </div>
                <div class="col-lg-7" id="logo-container">
                    <div class="row ">
                        <div class="col-6 col-md-2 my-auto mx-auto">
                            <div class="partLogo mx-auto" id="nhs" alt=""></div>
                        </div>
                        <div class="col-6 col-md-2 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="paars" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="citi" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="unicef" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="capita" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="amrc" alt=""></div>
                        </div>

                        <div class="col-6 col-md-2 my-auto mx-auto">
                            <div class="partLogo mx-auto" id="microsoft" alt=""></div>
                        </div>
                        <div class="col-6 col-md-2 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="ibm" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="atos" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="bosch" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="creditsuisse" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="deutsche" alt=""></div>
                        </div>

                         <div class="col-6 col-md-2 my-auto mx-auto">
                            <div class="partLogo mx-auto" id="google" alt=""></div>
                        </div>
                        <div class="col-6 col-md-2 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="jpmorgan" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="microsoftresearch" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="morganstanley" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="NTT" alt=""></div>
                        </div>
                        <div class="col-md-2 col-6 my-auto mx-auto">
                                <div class="partLogo mx-auto" id="santander" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php(the_post())
      @include('partials.content-'.get_post_type())
    @endwhile

    {!! get_the_posts_navigation() !!} --}}
@endsection
