{{--
	Template Name: About Template
	--}}

	@extends('layouts.app')

	@section('content')

	@include('partials.page-header')

	<section class=who-we-are-about> 
		<div class="container">
			<div class ="row">
				<div class="col-lg-12">
					<span class="section-divider">who we are</span>
					<span><br/></span>
					<span><br/></span>
					<span id="wwaAbout" class="homeText">
				<?php echo the_field('who_we_are_about_page');?></span>


				</div>


				<div class="col-lg-6 aboutBox">
					<div class="profile" id="aboutPageProfile">
						<div class="spacer"></div>
						<div class="img1"></div>
						<p class="aboutPageText"> <?php echo the_field('yun_fu_about_page');?></p>
						<a href="mailto:y.fu@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>




					</div>
				</div>



				<div class="col-lg-6  aboutBox">
					<div class="profile" id="aboutPageProfile">
						<div class="spacer"></div>
						<div class="img2"></div>
						<p class="aboutPageText"> <?php echo the_field('dean_about_page');?></p>
						<a href="mailto:d.mohamedally@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>



					</div>
				</div>
			</div>
		</div>
	</section> 

	<section class=what-we-do-about> 
		<div class="container">
			<div class ="row">
				<div class="col-lg-12">
						<span class="section-divider">what we do</span>
						<span><br/></span>
						<span><br/></span>
						<span id="wwdAbout" class="homeText"><?php echo the_field('what_we_do_about_page');?></span>


				</div>
			</div>
		</div>

	</section>












	@endsection