{{--
	Template Name: About Template
	--}}

	@extends('layouts.app')

	@section('content')

	@include('partials.page-header')

	<section class="who-we-are-about" id="about"> 
		<div class="container">
			<div class ="row">
				<div class="col-12">
					<span class="section-divider">who we are</span>
				</div>
			</div>
			<div class="row">
				<span class="aboutText"><?php echo the_field('who_we_are_about_page');?></span>
			</div>
			<div class="row">
				<div class="col-lg-4 aboutBox">
					<div class="profile-box" id="aboutPageProfile">
						<div class="profileImg img3"></div>
						<p class="aboutPageText"> <?php echo the_field('roberts_about_page');?></p>
						<a href="mailto:graham.roberts@ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>
					</div>
				</div>
				<div class="col-lg-4 aboutBox">
					<div class="profile-box" id="aboutPageProfile">
						<div class="profileImg img1"></div>
						<p class="aboutPageText"> <?php echo the_field('yun_fu_about_page');?></p>
						<a href="mailto:y.fu@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>
					</div>
				</div>
				<div class="col-lg-4  aboutBox">
					<div class="profile-box" id="aboutPageProfile">
						<div class="profileImg img2"></div>
						<p class="aboutPageText"> <?php echo the_field('dean_about_page');?></p>
						<a href="mailto:d.mohamedally@cs.ucl.ac.uk" class="fa fa-envelope-o fa-lg" aria-hidden="true" id="faHome"></a>
					</div>
				</div>
			</div>
			<div class ="row">
				<div class="col-12">
					<span class="section-divider">what we do</span>
				</div>
			</div>
			<div class="row">
				<span class="aboutText"><?php echo the_field('what_we_do_about_page');?></span>
			</div>
		</div>
	</section>
	@endsection