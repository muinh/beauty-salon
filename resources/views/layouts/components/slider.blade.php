<div class="carousel slide carousel-v1 margin-bottom-30" id="myCarousel-1">
    <div class="carousel-inner">
        @foreach(\App\Models\Slider::all() as $slider)
            <div class="item active">
                <img src="{{ asset('/img/slider/' . $slider->image->url) }}" alt="{{ $slider->image->alt }}">
                <div class="carousel-caption"><p></p></div>
            </div>
        @endforeach
    </div>
    <div class="carousel-arrow">
        <a data-slide="prev" href="/#myCarousel-1" class="left carousel-control">
            <i class="fa fa-angle-left"></i>
        </a>
        <a data-slide="next" href="/#myCarousel-1" class="right carousel-control">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>
