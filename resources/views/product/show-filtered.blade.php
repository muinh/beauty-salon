@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1 class="pull-left">{{ $category->title }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                <div class="prod-filter">
                    <ul class="list-inline">
                        <li><a href="slidehtml">
                                <span class="prod-color all">&nbsp</span>All Brands
                            </a>
                        </li>
                        @foreach($brands as $brand)
                            <li>
                                <a href="{{ route('show-products-by-brand', ['locale' => $locale, 'brandId' => $brand->id, 'categoryId' => $category->id]) }}" class="mgbross">
                                    <span class="prod-color" style="background-color: {{ $brand->color }}">&nbsp</span>{{ $brand->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6 prodotti-item">
                            <a href="{{ route('show-product', ['locale' => 'en', 'categoryId' => $category->id, 'productId' => $product->id]) }}">
                                <img class="img-responsive" src="{{ asset($assetsSrc . $product->main_image) }}">
                                <div class="text-center prod-label">
                                    <span class="prod-color" style="background-color: {{ $product->brandId->color }}">&nbsp;</span>{{ $product->name }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="pull-right">
                    {{ $products->links() }}
                </div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'product', 'brands' => $brands])
        </div>
    </div>
@endsection
