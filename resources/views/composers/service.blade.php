@foreach ($services as $service)
  <div class="col-md-4 col-sm-6">
    <div class="box-hover-effect">
      <div class="effect-wrapper">
        <div class="thumb">
          <img class="img-fullwidth" src="assets/images/about/ab1.jpg" alt="project">
        </div>
        <div class="overlay-shade"></div>
        <div class="icons-holder icons-holder-middle">
          <div class="icons-holder-inner">
            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
              <a href="assets/images/about/ab1.jpg" data-lightbox-gallery="gallery1" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h3 class="text-theme-colored">{{ $service->title }}</h3>
    <p> {!! substr($service->description,0,100) !!} </p>
    @if (strlen($service->description) > 100)
      <a href="{{ url('/services/'.$service->slug) }}" class="btn btn-sm btn-theme-colored2 text-white mt-10 mb-30">Read more</a>
    @endif

  </div>
@endforeach
