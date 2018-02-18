@extends('layouts.app')
@section('title')
   Home
@endsection
@section('keywords')

@endsection

@section('description')

@endsection



@section('after_styles')

@endsection

@section('content')
<div class="main-content">
  <!-- Section: home -->
  <section id="home">
    <div class="container-fluid p-0">

        @include('includes.slider')
      <script type="text/javascript">
        var tpj=jQuery;
        var revapi34;
        tpj(document).ready(function() {
          if(tpj("#rev_slider_home").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_home");
          }else{
            revapi34 = tpj("#rev_slider_home").show().revolution({
              sliderType:"standard",
              jsFileLocation:"js/revolution-slider/js/",
              sliderLayout:"fullscreen",
              dottedOverlay:"none",
              delay:5000,
              navigation: {
                keyboardNavigation:"on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"on",
                touch:{
                  touchenabled:"on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                }
                ,
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                }
              },
              viewPort: {
                enable:true,
                outof:"pause",
                visible_area:"80%"
              },
              responsiveLevels:[1240,1024,778,480],
              gridwidth:[1240,1024,778,480],
              gridheight:[600,550,500,450],
              lazyType:"none",
              parallax: {
                type:"scroll",
                origo:"enterpoint",
                speed:400,
                levels:[5,10,15,20,25,30,35,40,45,50],
              },
              shadow:0,
              spinner:"off",
              stopLoop:"off",
              stopAfterLoops:-1,
              stopAtSlide:-1,
              shuffle:"off",
              autoHeight:"off",
              hideThumbsOnMobile:"off",
              hideSliderAtLimit:0,
              hideCaptionAtLimit:0,
              hideAllCaptionAtLilmit:0,
              debugMode:false,
              fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
              }
            });
          }
        }); /*ready*/
      </script>
    <!-- END REVOLUTION SLIDER -->

    </div>
  </section>

  <!-- Divider: Call To Action -->
  <section class="bg-theme-colored2">
    <div class="container pt-0 pb-0">
      <div class="row">
        <div class="call-to-action sm-text-center pt-30 pb-20 pb-sm-30">
          <div class="col-md-9">
            <h3 class="mt-5 text-white font-weight-600">WELCOME TO TARGET  MEDIA  - EXPERTS IN MEDIA </h3>
          </div>
          <div class="col-md-3 text-right flip sm-text-center">
            <a class="btn btn-theme-colored btn-lg font-weight-600 mt-5" href="#">Place and Order<i class="fa fa-angle-double-right font-18 ml-10"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Features -->
  <section id="features">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="feature-item maxwidth400 mt-30 mb-sm-30">
              <div class="thumb">
                <img src="assets/images/services/advertone.jpg" alt="" class="img-fullwidth">
                <div class="title">
                  <a href="#"><h3> Advertising<i class="fa fa-globe pull-right"></i></h3></a>
                  <p>We develop innovative and creative concepts to execution of radio, TV, print and outdoor and other channels. ( LED screens, Website, Magazine, Street/Highway banners • Video shooting & Editing • Scripting</p>
                  <a href="#" class="text-theme-colored2">Read More <span class="fa fa-angle-right"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="feature-item maxwidth400 mt-30 mb-sm-30">
              <div class="thumb">
                <img src="assets/images/services/graphics.jpg" alt="" class="img-fullwidth">
                <div class="title">
                  <a href="#"><h3> Graphic Designing<i class="fa fa-pie-chart pull-right"></i></h3></a>
                  <p>We take the time to get to know your business and understand your needs. Once your designs are complete, you receive professional digital copies that you can get printed at any printer for all your future needs.</p>
                  <a href="#" class="text-theme-colored2">Read More <span class="fa fa-angle-right"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="feature-item maxwidth400 mt-30 mb-sm-30">
              <div class="thumb">
                <img src="assets/images/services/printing.jpg" alt="" class="img-fullwidth">
                <div class="title">
                  <a href="#"><h3> Printing<i class="fa fa-line-chart pull-right"></i></h3></a>
                  <p>Indoor & outdoor • Books • Business cards • Posters • Banners ( Roll-up and pop-ups) • Billboards skins • Fliers • Calendars • Executive Diaries</p>
                  <a href="#" class="text-theme-colored2">Read More <span class="fa fa-angle-right"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Features -->
  <section id="features">
    <div class="container pb-30">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h2 class="title text-center font-28 font-weight-600 mb-40 mt-0">Target Media Core <span class="text-theme-colored2">Services</span> We offfer </h2>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-3">
            <div class="icon-box text-center">
              <a href="#" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                <i class="pe-7s-users font-weight-600 text-theme-colored2 font-48"></i>
              </a>
              <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="#">Branding </a></h4>
              <p>
T-shirts ,Caps, Pens, Uniforms (corporate shirts & blouses), umbrellas , Adhesive UV stickers ,Illuminated signs  Wall branding ,Signage (Signboards, sign posts in-store.

</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box text-center">
              <a href="#" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                <i class="pe-7s-display1 font-weight-600 text-theme-colored2 font-48"></i>
              </a>
              <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="#">Mememtos</a></h4>
              <p> At Target Media wonders we have all the best services including Corporate visual Identity ,Letterheads/ business cards , General office stationery.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box text-center">
              <a href="#" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                <i class="pe-7s-graph1 font-weight-600 text-theme-colored2 font-48"></i>
              </a>
              <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="#">Photograhy</a></h4>
              <p>We have the best photograhy offers for your events like weddings, graducation parties, business meetings ,birthday ceremonies.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box text-center">
              <a href="#" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                <i class="pe-7s-headphones font-weight-600 text-theme-colored2 font-48"></i>
              </a>
              <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="#">Gardents/Events</a></h4>
              <p>We also have a codusive environment where we can hold these events, with a well decorated gardens, to give you the best.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- second sectin -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-3">
            <div class="icon-box text-center">
              <a href="#" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                <i class="pe-7s-users font-weight-600 text-theme-colored2 font-48"></i>
              </a>
              <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="#">Plastic Cards</a></h4>
              <p>We provide you with well branded plastic cards for your company employees, and they are long lasting.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box text-center">
              <a href="#" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                <i class="pe-7s-display1 font-weight-600 text-theme-colored2 font-48"></i>
              </a>
              <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="#">Gifts</a></h4>
              <p>We also have all kinds of gifts for any event, or gathering, which suits you all the time and for everyone.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box text-center">
              <a href="#" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                <i class="pe-7s-graph1 font-weight-600 text-theme-colored2 font-48"></i>
              </a>
              <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="#">Business Cards</a></h4>
              <p>We also create for you cutting edge business card designs that will create a great image for your business.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box text-center">
              <a href="#" class="icon icon-gray icon-bordered bg-hover-theme-colored2 icon-circled icon-xl">
                <i class="pe-7s-headphones font-weight-600 text-theme-colored2 font-48"></i>
              </a>
              <h4 class="icon-box-title font-weight-600 text-uppercase"><a class="" href="#">Screen Printing</a></h4>
              <p>Quality is what we provide, for all the T-shirts we brand, we offer screen printing for them at low costs.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- end of second section  -->
    </div>
  </section>

  <!-- Section About -->
  <section>
    <div class="container pt-50">
      <div class="section-content">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-uppercasetext-theme-colored mt-0">About <span class="text-theme-color-2">Target Media</span></h2>
            <div class="diamond-line-left-theme-colored-2"></div>
            <p>We work in a very competitive and fast-moving industry and clients have high expectations, we therefore give all the work givent to us our best so that we can provide our clients with tbe professional works they deserve.<a class="text-theme-color-2 font-13 ml-5" href="#">read more →</a></p>
            <div class="row">
              <div class="col-md-6">
                <h4 class="font-weight-600">Our Mission</h4>
                <p>To consistently & professionally satisfy the advertising needs; indoor & outdoor and printing in South Sudan</p>
                <a href="#" class="btn btn-theme-colored2 btn-flat btn-sm mt-10 mr-15 mb-sm-20">Read more</a>
              </div>
              <div class="col-md-6">
                <h4 class="font-weight-600">Our Vission</h4>
                <p>To be the most preferred advertising and printing agency in South Sudan</p> <br>
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

    <!-- Divider: Funfact -->
    <section class="layer-overlay overlay-theme-colored-9" data-bg-img="assets/images/slider/slideone.jpg">
      <div class="container pt-40 pb-sm-30">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="text-white">See Our Awesome Statistics</h2>
            <div class="diamond-line-centered-theme-colored2"></div>
            <p class="font-16 text-white mt-0 mb-30"> For the time we have been in business,below are some of our Statistics and progress in business.</p>
          </div>
        </div>
        <div class="row mt-30 text-center">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact">
              <i class="pe-7s-smile mb-20 text-white"></i>
              <h2 data-animation-duration="2000" data-value="754" class="animate-number text-white font-42 font-weight-600 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase">Happy Clients</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact">
              <i class="pe-7s-notebook mb-20 text-white"></i>
              <h2 data-animation-duration="2000" data-value="11" class="animate-number text-white font-42 font-weight-600 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase">Years of Experience</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact">
              <i class="pe-7s-users mb-20 text-white"></i>
              <h2 data-animation-duration="2000" data-value="690" class="animate-number text-white font-42 font-weight-600 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase">Companies Branded</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact">
              <i class="pe-7s-study mb-20 text-white"></i>
              <h2 data-animation-duration="2000" data-value="30" class="animate-number text-white font-42 font-weight-600 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase">Awards winning</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Team -->
  <!-- Section: Client Say -->
  <section class="layer-overlay overlay-theme-colored-9 parallax" data-bg-img="assets/images/slider/slidefive.jpg">
    <div class="container pt-90 pb-70">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="text-uppercase text-white title">See What Our<span class="text-theme-colored2"> Client's Say</span></h2>
            <div class="line-bottom-centered"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="owl-carousel-1col nav-testimonials" data-dots="true">
            <div class="item">
              <div class="testimonial-wrapper text-center">
                <div class="content pt-10">
                  <p class="font-17 text-white font-weight-300">we love your works you do in the advertising field, its greate</p>
                  <div class="thumb mt-30"><img class="img-circle img-thumbnail mb-15" alt="" src="assets/images/testimonials/s1.jpg" width="72"></div>
                  <h5 class="author text-white mt-0 mb-5">Obwot Solomon - <span class="text-theme-colored2 font-14">Director</span></h5>
                  <p class="text-gray-darkgray">26th October 2017</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-wrapper text-center">
                <div class="content pt-10">
                  <p class="font-17 text-white font-weight-300">I Like the way you branded our company, your great.</p>
                  <div class="thumb mt-30"><img class="img-circle img-thumbnail mb-15" alt="" src="assets/images/testimonials/s2.jpg" width="72"></div>
                  <h5 class="author text-white mt-0 mb-5">Wenareeba Innocent - <span class="text-theme-colored2 font-14">Developer</span></h5>
                  <p class="text-gray-darkgray">2nd October 2017</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-wrapper text-center">
                <div class="content pt-10">
                  <p class="font-17 text-white font-weight-300">There is no outstanding work that you can get better than target media's, i like the work.</p>
                  <div class="thumb mt-30"><img class="img-circle img-thumbnail mb-15" alt="" src="assets/images/testimonials/s3.jpg" width="72"></div>
                  <h5 class="author text-white mt-0 mb-5">Matovu Ronald - <span class="text-theme-colored2 font-14">Programmer</span></h5>
                  <p class="text-gray-darkgray">26th October 2017</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section id="team">
    <div class="container pb-20">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="text-uppercase title">Meet Our<span class="text-theme-colored2"> Team</span></h2>
            <div class="diamond-line-centered-theme-colored2"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="single-member maxwidth400 mb-30">
              <div class="team-thumb">
                <img src="assets/images/team/1.jpg" alt="" class="img-fullwidth">
                <h4 class="text-uppercase font-raleway text-white font-16 line-bottom-center m-0">Oliver Queen <span class="text-white font-12 ml-5">- Founder</span></h4>
              </div>
              <div class="team-bottom-part bg-white p-15">
                <p class="mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled mt-15">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="single-member maxwidth400 mb-30">
              <div class="team-thumb">
                <img src="assets/images/team/2.jpg" alt="" class="img-fullwidth">
                <h4 class="text-uppercase font-raleway text-white font-16 line-bottom-center m-0">Oliver Queen <span class="text-white font-12 ml-5">- Founder</span></h4>
              </div>
              <div class="team-bottom-part bg-white p-15">
                <p class="mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled mt-15">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="single-member maxwidth400 mb-30">
              <div class="team-thumb">
                <img src="assets/images/team/3.jpg" alt="" class="img-fullwidth">
                <h4 class="text-uppercase font-raleway text-white font-16 line-bottom-center m-0">Oliver Queen <span class="text-white font-12 ml-5">- Founder</span></h4>
              </div>
              <div class="team-bottom-part bg-white p-15">
                <p class="mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled mt-15">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="single-member maxwidth400 mb-30">
              <div class="team-thumb">
                <img src="assets/images/team/4.jpg" alt="" class="img-fullwidth">
                <h4 class="text-uppercase font-raleway text-white font-16 line-bottom-center m-0">Oliver Queen <span class="text-white font-12 ml-5">- Founder</span></h4>
              </div>
              <div class="team-bottom-part bg-white p-15">
                <p class="mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled mt-15">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->




  <!-- Divider: Clients -->


</div>
<!-- Divider: Clients -->
<section class="clients bg-theme-colored2">
  <div class="container pt-0 pb-0">
    <div class="row">
      <div class="col-md-12">
        <!-- Section: Clients -->
        <div class="owl-carousel-6col clients-logo transparent text-center">
          <div class="item"> <a href="#"><img src="assets/images/clients/w1.png" alt=""></a></div>
          <div class="item"> <a href="#"><img src="assets/images/clients/w2.png" alt=""></a></div>
          <div class="item"> <a href="#"><img src="assets/images/clients/w3.png" alt=""></a></div>
          <div class="item"> <a href="#"><img src="assets/images/clients/w4.png" alt=""></a></div>
          <div class="item"> <a href="#"><img src="assets/images/clients/w5.png" alt=""></a></div>
          <div class="item"> <a href="#"><img src="assets/images/clients/w6.png" alt=""></a></div>
          <div class="item"> <a href="#"><img src="assets/images/clients/w3.png" alt=""></a></div>
          <div class="item"> <a href="#"><img src="assets/images/clients/w5.png" alt=""></a></div>
          <div class="item"> <a href="#"><img src="assets/images/clients/w4.png" alt=""></a></div>
          <div class="item"> <a href="#"><img src="assets/images/clients/w6.png" alt=""></a></div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('after_scripts')

@endsection
