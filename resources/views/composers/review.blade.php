<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
    <div class="client-reviews-right">
        <h2>Client Reviews</h2>
        <p>What Client Say</p>
        <div class="rc-carousel"
            data-loop="true"
            data-items="3"
            data-margin="30"
            data-autoplay="false"
            data-autoplay-timeout="10000"
            data-smart-speed="2000"
            data-dots="false"
            data-nav="false"
            data-nav-speed="false"
            data-r-x-small="1"
            data-r-x-small-nav="false"
            data-r-x-small-dots="true"
            data-r-x-medium="1"
            data-r-x-medium-nav="false"
            data-r-x-medium-dots="true"
            data-r-small="1"
            data-r-small-nav="false"
            data-r-small-dots="true"
            data-r-medium="1"
            data-r-medium-nav="false"
            data-r-medium-dots="true">
            @foreach ($reviews->chunk(2) as $chunk)
            <ul>
            	@foreach ($chunk as $review)
                <li>
                    <div class="media">
                        <a href="#" class="pull-left">
                            <img src="img/client/1.png" alt="client" class="img-responsive">
                        </a>
                        <div class="media-body">
                            <h3><a href="#">{{ $review->name }}</a></h3>
                            <p>{{ $review->client_say }}</p>
                            <ul class="rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                @endforeach
                
            </ul> 
            @endforeach
            
        </div>
    </div>
</div>

@foreach ($reviews as $review)

@endforeach