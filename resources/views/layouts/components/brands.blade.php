<div class="brands bg-grey">
    <div class="container content-sm">
        <div id="owl-brands">
            @foreach (\App\Models\Brand::all() as $brand)
            <div>
                <a href="{{ 'http://' . $brand->url }}">
                    <img class="img-responsive transition" src="{{ asset($assetsSrc . $brand->image) }}" alt="{{ $brand->title }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
