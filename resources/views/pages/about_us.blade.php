@extends('layouts.app')

@section('title')
    {{ $page->meta_title }}
@endsection

@section('keywords') 
	{{ $page->meta_keywords }}
@endsection 

@section('desc') 
	{{ $page->meta_description }}
@endsection 

@section('content')

<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background: url(img/inner-page-banner.jpg);">
	<div class="container">
		<div class="pagination-area">
			<h2>About Us</h2>
			<ul>
				<li>
					<a href="{{ url('/') }}">Home -</a> /</li>
				<li>About</li>
			</ul>
		</div>
	</div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- About Page Area Start Here -->
<div class="about-page-area">
	<img src="img/about1-bottom-back.png" class="img-responsive" alt="about1-bottom-back">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="about-page-left">
					<h2>About Us</h2>
					<p>
						<span>
							<span>2007</span> Vitamin cafe was established in 2007, we do indoors and outside catering, and vitamin cafe has space for
							celebrating all kinds of parties as it has the favourable grounds for such events. We have experience of 3years, in
							the UN(united nations) Entebbe base , we specialise in Turkish Kebaps,Mezes, and contintinental food.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="about-page-right">
					<div class="rc-carousel" data-loop="true" data-items="1" data-margin="15" data-autoplay="true" data-autoplay-timeout="10000"
					 data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
					 data-r-x-small-dots="true" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="1"
					 data-r-small-nav="false" data-r-small-dots="true" data-r-medium="1" data-r-medium-nav="false" data-r-medium-dots="true">
						<div class="about-page-img-holder">
							<img src="img/default/abou.png" class="img-responsive" alt="about1-banner">
						</div>
						<div class="about-page-img-holder">
							<img src="img/default/about2.jpg" class="img-responsive" alt="about1-banner">
						</div>
						<div class="about-page-img-holder">
							<img src="img/default/about3.jpg" class="img-responsive" alt="about1-banner">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="about-page-bottom">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="about-page-bottom-box border-right wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
						<div class="media">
							<a href="#" class="pull-left">
								<i class="flaticon-verified-protection"></i>
							</a>
							<div class="media-body">
								<h3>
									<a href="#">We Are Certified</a>
								</h3>
								<p>We deal in proffesional indoor and outside catering .</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="about-page-bottom-box wow zoomIn" data-wow-duration="2s" data-wow-delay="1.5s">
						<div class="media">
							<a href="#" class="pull-left">
								<i class="flaticon-coffee-cup"></i>
							</a>
							<div class="media-body">
								<h3>
									<a href="#">Cup Of Coffee</a>
								</h3>
								<p>We have delicious tea that you can access at our cafe.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About Page Area End Here -->
<!-- Award Area Start Here -->
<div class="award1-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<div class="award1-area-box">
					<i class="fa fa-smile-o" aria-hidden="true"></i>
					<h2 class="about-counter" data-num="5030">5030</h2>
					<p>Happy Clients</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<div class="award1-area-box">
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<h2 class="about-counter" data-num="2030">2030</h2>
					<p>Love People</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<div class="award1-area-box">
					<i class="fa fa-coffee" aria-hidden="true"></i>
					<h2 class="about-counter" data-num="3030">3030</h2>
					<p>Cup Of Coffee</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<div class="award1-area-box">
					<i class="fa fa-book" aria-hidden="true"></i>
					<h2 class="about-counter" data-num="4320">4320</h2>
					<p>Chef Recipes</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Award Area End Here -->


@endsection