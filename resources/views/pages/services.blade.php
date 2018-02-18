
@extends('layouts.app')
@section('title')
   Services
@endsection
@section('keywords')

@endsection

@section('description')

@endsection



@section('after_styles')

@endsection

@section('content')

<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="assets/images/slider/slideone.jpg">
    <div class="container pt-120 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-theme-colored2 font-36">Services</h2>
            <ol class="breadcrumb text-left mt-10 white">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Services</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Services -->
  <section class="bg-silver-light">
    <div class="container pb-40">
      <div class="section-content">
        <div class="row">
          @include('composers.service')
        </div>
      </div>
    </div>
  </section>


    <!-- Section About -->
    <section>
      <div class="container pt-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-uppercasetext-theme-colored mt-0">About <span class="text-theme-color-2">Our services</span></h2>
              <div class="diamond-line-left-theme-colored-2"></div>
              <p>We offer standard services that are rated with a 5 star in the market, we therefore give all the work givent to us our best so that we can provide our clients with tbe professional works they deserve.<a class="text-theme-color-2 font-13 ml-5" href="#">read more →</a></p>
              <div class="row">
                <div class="col-md-6">
                  <h4 class="font-weight-600">Quality</h4>
                  <p>For the time we have been in business, we always make sure we provide quality works to our clients.</p>
                  <a href="#" class="btn btn-theme-colored2 btn-flat btn-sm mt-10 mr-15 mb-sm-20">Read more</a>
                </div>
                <div class="col-md-6">
                  <h4 class="font-weight-600">Just on time</h4>
                  <p>We never forget to deliver all our services on time, we belive time is everything that rates our quality.</p> <br>
                  <a href="#" class="btn btn-theme-colored2 btn-flat btn-sm mt-10">Read more</a>
                </div>
              </div>
            </div>

            <div class="col-md-6">

              <div class="box-hover-effect about-video mt-sm-30">
                <div class="effect-wrapper">
                  <br>
                  <div class="thumb">
                    <img class="img-fullwidth" src="assets/images/slider/slidefive.jpg" alt="project">
                  </div>
                  <div class="video-button"></div>
                  <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=BmnKyhOZkNk" title="Youtube Video">Youtube Video</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

          </div>
        </div>
      </div>
    </div >
  </section>



</div>
<!-- end main-content -->

@endsection

@section('after_scripts')

@endsection
