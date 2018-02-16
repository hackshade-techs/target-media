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
			<h2>Contact Us</h2>
			<ul>
				<li>
					<a href="{{ url('/') }}">Home -</a> /</li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Contact Us Page Area Start Here -->
<div class="contact-us-page-area section-space">
	<div class="container">
		<!--<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   
                <div class="google-map-area">                               
                    <div id="googleMap" style="width:100%; height:395px;"></div>
                </div>
            </div>
        </div>-->
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="contact-us-left">
					<h2 class="title-bar-medium-left inner-sub-title">information</h2>
					<ul>
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i>
							<h3>Phone</h3>
							<p>+256-782-123-165</p>
						</li>
						<li>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<h3>Address</h3>
							<p>PO Box 1212, Entebbe, Uganda.</p>
						</li>
						<li>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<h3>E-mail</h3>
							<p>papatyaozturkg@gmail.com</p>
						</li>
						<li>
							<i class="fa fa-share-alt" aria-hidden="true"></i>
							<h3>Follow Us</h3>
							<ul class="contact-social">
								<li>
									<a href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-linkedin" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-pinterest" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-rss" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-google-plus" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="contact-us-right">
					<h2 class="title-bar-medium-left inner-sub-title">Send Us A Massege</h2>
					<div class="contact-form">
						@include('includes.success')
						@include('includes.errors')
						@include('includes.error')
						<form action="{{ route('contacts.store') }}" enctype="multipart/form-data" method="POST">
							{{ csrf_field() }}
							<fieldset>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required"
											 required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required"
											 required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="text" placeholder="Subject*" class="form-control" name="subject" id="form-subject" data-error="Subject field is required"
											 required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required"
											 required></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
										<div class="form-group margin-bottom-none">
											<button type="submit" class="ghost-on-hover-btn">Send</button>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
										<div class='form-response'></div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Contact Us Page Area End Here -->


@endsection