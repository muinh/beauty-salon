@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1>{{ $designer->name }}</h1>
                <div class="margin-bottom-30">
                    <div class="blog-img">
                        <img class="img-responsive" src="{{ asset($assetsSrc . $designer->image) }}">
                    </div>
                    <div>
                        <div>{{ $designer->description }}</div>
                        @if($designer->website)
                            <p>
                                <a href="{{ 'http://' . $designer->website }}" target="_blank" class="website">{{ __('vocabulary.website') }}</a>
                            </p>
                        @endif
                    </div>
                </div>
                <hr class="clear">
                <div class="materiali margin-bottom-30 margin-top-20">
                    <h2>{{ __('vocabulary.products') }}</h2>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4 prodotti-item">
                                <div class="text-center prod-label">
                                    <a href="{{ route('show-product', ['locale' => $locale, 'categoryId' => $product->category_id, 'productId' => $product->id]) }}">
                                        <img class="img-responsive" src="{{ asset($assetsSrc . $product->main_image) }}" alt="{{ $product->name }}">
                                        <div class="text-center prod-label">
                                            <span class="prod-color" style="background-color: {{ $product->brandId->color }}">&nbsp;</span>{{ $product->name }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pull-right">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'designer', 'brands' => $brands])
        </div>
    </div>
@endsection
