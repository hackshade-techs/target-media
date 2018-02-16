<div class="slider1-area" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides"> 
            @foreach ($slides as $slide)  
                <img src="{{ asset($slide->image) }}" alt="slider" title="#slider-direction-{{ $slide->id }}"/>
                @endforeach
            </div>
        @foreach ($slides as $slide) 
        <div id="slider-direction-{{ $slide->id }}" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="title-container s-tb-c">
                    <h1 class="title1">{{ $slide->first_statement }}</h1>
                    <p>{{ $slide->second_statement }}</p>
                    <div class="slider-btn-area">
                        <a href="{{ url($slide->url_link) }}" class="ghost-btn">{{ $slide->button_text }}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>  
</div>