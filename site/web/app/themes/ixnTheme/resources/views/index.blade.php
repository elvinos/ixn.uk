@extends('layouts.app')
@extends('layouts.app')

@section('content')
    <?php
    $permalinkabout = get_permalink(get_page_by_path('about'));
    $permalinkprojects = get_permalink(get_page_by_path('projects'));
    $permalinkevents = get_permalink(get_page_by_path('events'));
    $find = array( '//');
    $replace = 'http://';
    $outputabout= str_replace( $find, $replace, $permalinkabout );
    $outputprojects = str_replace( $find, $replace,  $permalinkprojects);
    $outputevents = str_replace( $find, $replace, $permalinkevents);
    ?>

    {{--Splash Page--}}
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-8 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5">connect your next great tech project with the right UCL computer science
                            students</h1>
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
                                 <span class="homeText">Dr. Yun Fu and Dr. Dean Mohamadally started IXN in 2005 with the
                            intention linking up their capable students with industry partners in need of web
                            and app development projects. Since then, the organisation has completed over 50
                            apps and websites and has worked with over 20 industry partners.</span>
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
                        <div class="col-md-6 col-sm-12 aboutBox">
                            <div class="profile">
                                <div class="spacer"></div>
                                <div class="img1"></div>
                                <span class="aboutText">Dr. Yun Fu<br/>App Project Manager<br/>Teaching Fellow<br/>University College London<br/>
                            </span>
                                <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 aboutBox">
                            <div class="profile" id=>
                                <div class="spacer"></div>
                                <div class="img2"></div>
                                <span class="aboutText">Dr. Dean Mohamedally<br/>
                                Teaching Fellow<br/>
                                Director for Apps Engineering<br/>
                                University College London<br/>
                            </span>
                                <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-do">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 order-lg-2">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-12 section-divider-row">
                                <span class="section-divider">what we do</span>
                            </div>
                        </div>
                        <div class="row" id="wwdbox">
                            <span class="homeText">IXN links up it’s industry partners with the right student teams in order to complete well designed and efficient web and app development projects. Working closely with their clients from design to implementations, out teams are able to make stunning sites and apps for free within only a few short months. Whatever project you have in mind, we will find the right team for you. </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1">
                    <div class="home-back-box">
                        <div class="spacerwwd"></div>
                        {{--<div class="imgwwd"></div>--}}
                        <div class="youtube-container">
                            <div class="youtube-player" data-id="w5F8rqN7rFA"></div>
                        </div>
                        <div class="buttonRow">
                            <?php echo '<a class="navLink" href= "' . $outputabout . '"> <button class="moreBtn draw-border float-right">More</button></a>' ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <section id="statsBox">
        <div class="container">
            <div class="row">
                <div class="col-md-4 statsBox text-center">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <i id="icon" class="fa fa-cogs"></i>
                        </div>
                    </div>
                    <div class="row">
        <span class="iconsText"> Teams work collaboratively with clients from design to implementation.
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
                            <span class="iconsText"> Teams develop unique sites and app to suit each client'sunique needs.</span>
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
                            <span class="iconsText"> We develop mobile apps and responsive website that look great on many devices.</span>
                            <span class="iconsText"> We develop mobile apps and responsive website that look great on many devices.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--Projects Section--}}
    <section id="projects">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-1 col-md-11">
                    <span class="section-divider">some of our projects</span>
                </div>
            </div>
            {{--Featured Project One Macbook Right--}}
            <div class="row projectRow">
                <div class="col-lg-9 offset-lg-2 col-md-11 projectBox container-fluid">
                    <div class="row">
                        <div class="col-md-6">
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
	                                <?php echo '<a class="navLink" href= "' . $outputprojects . '"> <button class="moreBtn draw-border float-right">More</button></a>' ?>
                                </div>
                            </div>
                        </div>
                        <div class="projectImage col-md-6 my-auto">
                            <div class="device-container">
                                <div class="device-mockup macbook_2015">
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
	                                <?php echo '<a class="navLink" href= "' . $outputprojects . '"> <button class="moreBtn draw-border float-right">More</button></a>' ?>
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
    </section>
    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="col-md-12">
                        <span class="section-divider">partners</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row ">
                        <div class="col-6 col-md-4 my-auto mx-auto">
                                <div class="partLogo" id="nhs"></div>
                        </div>
                        <div class="col-6 col-md-4 my-auto mx-auto">
                                <div class="partLogo" id="paars"></div>
                        </div>
                        <div class="col-md-4 col-6 my-auto mx-auto">
                                <div class="partLogo" id="whatstat"></div>
                        </div>
                        <div class="col-md-4 col-6 my-auto mx-auto">
                                <div class="partLogo" id="scf"></div>
                        </div>
                        <div class="col-md-4 col-6 my-auto mx-auto">
                                <div class="partLogo" id="tp"></div>
                        </div>
                        <div class="col-md-4 col-6 my-auto mx-auto">
                                <div class="partLogo" id="amrc"></div>
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
        <div class="container hiwslide">
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
                                        <div class="col-9 offset-2"><span> Get in touch with one of our coordinators, Yun Fu or Dean and tell them about your project. </span></div>
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
                                        <div class="col-9 offset-2"><span>Dean and Yun will consider your project and assign it the perfect group of UCL developers.</span></div>
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
                                        <div class="col-9 offset-2"><span>Your team will get in touch with you to first the discuss design and and motivations behind the project.</span></div>
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
                                        <div class="col-9 offset-2"><span>Your team will iterate through several designs until you are happy the style of the app or site.</span></div>
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
                                        <div class="col-9 offset-2"><span>The team will handle all of the front-end and back-end development of your project.</span></div>
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
                                        <div class="col-9 offset-2"><span>Within a few short months, your project will transform from an idea into a beutiful custom app. </span></div>
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
   <section id="getInTouchSec">
       <div class="container-fluid" id="getInTouch">
           <div class="contentImg">
               <div class="row">
               <span class="imgFullText"> interested? <br/> get in touch.</span>
               </div>
               <div class="row buttonImg">
    <?php echo '<a class="navLink mx-auto" href= "' . $outputprojects . '"> <button class="moreBtn draw-border">Contact</button> </a>' ?>
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
        <div class="blogSet container">
            <div class="row">
                <article class="blogArticle mx-auto">

                    <div class="blogArticleContent">

                        <a href="#" class="blogImgLnk"></a>

                        <div class="blogImgDiv bcgimg"
                             style="background-image: url(@asset('images/splash2.jpg'));">
                        </div>
                        <div class="blogArticleInfo">

                            <h2 class="blogArticleTitle">
                                <a href="#"> Blog Title </a>
                            </h2>

                            <div class="blogArticleExcerpt">
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit…
                            </span>
                            </div>
                            <div class="blogArticleCatDiv">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago'; ?></span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="blogArticle mx-auto">

                    <div class="blogArticleContent">

                        <a href="#" class="blogImgLnk"></a>

                        <div class="blogImgDiv bcgimg"
                             style="background-image: url(@asset('images/splash2.jpg'));">
                        </div>
                        <div class="blogArticleInfo">

                            <h2 class="blogArticleTitle">
                                <a href="#"> Blog Title </a>
                            </h2>

                            <div class="blogArticleExcerpt">
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit…
                            </span>
                            </div>
                            <div class="blogArticleCatDiv">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago'; ?></span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="blogArticle mx-auto">

                    <div class="blogArticleContent">

                        <a href="#" class="blogImgLnk"></a>

                        <div class="blogImgDiv bcgimg"
                             style="background-image: url(@asset('images/splash2.jpg'));">
                        </div>
                        <div class="blogArticleInfo">

                            <h2 class="blogArticleTitle">
                                <a href="#"> Blog Title </a>
                            </h2>

                            <div class="blogArticleExcerpt">
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit…
                            </span>
                            </div>
                            <div class="blogArticleCatDiv">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago'; ?></span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="eventsSec">
        <div class="container">
            <div class="events-home-background-box">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="homepage-event-box">
                            <div class="events-text-box">
                                <h1 class="symbol">events</h1>
                                <p class="events-home-text">IXN links up it’s industry partners with the right student teams in order to complete well designed and efficient web and app development projects. Working closely with their clients from design to implementations, out teams are able to make
                                    stunning sites and apps for free within only a few short months. Whatever project you have in mind, we will find the right team for you. </p>
                            </div>
                            <button type="button" class="eventsbutton btn buttonbig" id="one">MORE</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="events-home-box">
                            <div class="events-home-top">
                            </div>
                            <div class="events-home-bottom">
                                <span class="eventName"> Event Name</span>
                                <span></br>Event Date: 01/01/01</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="events-home-box" id="events-box-2">
                            <div class="events-home-top">
                            </div>
                            <div class="events-home-bottom">
                                <span class="eventName"> Event Name</span>
                                <span></br>Event Date: 01/01/01</span>
                            </div>
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
