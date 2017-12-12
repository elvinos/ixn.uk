{{--
	Template Name: News Template
	--}}

	@extends('layouts.app')

	@section('content')

	@include('partials.page-header')
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

	@endsection