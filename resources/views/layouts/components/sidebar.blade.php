<div class="col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9 margintopsidebar">
    <div class="sidebar">
        @include('layouts.components.sidebar-menu-nav', ['menuType' => $menuType])
        <div class="hidden-xs brandsthumbnails">
            <div class="row">
                @foreach($brands as $brand)
                    <div class="col-sm-6">
                        <a href="{{ 'http://' . $brand->url }}">
                            <img class="img-responsive transition" src="{{ asset($assetsSrc . $brand->image) }}" alt="{{ $brand->title }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="hidden-xs">
            <h6>{{ __('vocabulary.sidebar.salonPictures') }}</h6>
            <a href="{{ route('show-salon-pictures', $locale) }}">
                <img class="img-responsive margin-bottom-20 side-ban" src="{{ asset('/img/sidebar/salon-photo.jpeg') }}" alt="{{ __('vocabulary.sidebar.salonPictures') }}">
            </a>
            <h6>{{ __('vocabulary.sidebar.salonTrends') }}</h6>
            <a href="http://www.salontrends.net/" target="_blank">
                <img class="img-responsive margin-bottom-20 side-ban" src="{{ asset('/img/sidebar/salon2.jpg') }}" alt="{{ __('vocabulary.sidebar.salonTrends') }}">
            </a>
        </div>
    </div>
</div>
