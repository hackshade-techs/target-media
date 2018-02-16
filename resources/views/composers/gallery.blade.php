@foreach ($images as $image)
	
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 lunch dinner drinks">
	<div class="food-menu2-box">
		<div class="food-menu2-img-holder gallery-image">
			<div class="food-menu2-more-holder">
				<ul>
					<li>
						{{-- <a href="#">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a> --}}
					</li>
				</ul>
			</div>
			<!-- this is the first image-->
			<a href="#">
				<img class="img-responsive gallery-image-height" src="{{ asset($image->image) }}" alt="dish">
			</a>
		</div>
		<div class="food-menu2-title-holder">
			<h3>
				<a href="#">{{ $image->title }}</a>
			</h3>
		</div>
	</div>
</div>

@endforeach