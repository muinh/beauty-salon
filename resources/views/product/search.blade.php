@extends('layouts.main')
@section('title')
    {{ $title =  __('vocabulary.search') . ' - ' . __('vocabulary.metaDescription') }}
@endsection
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1 class="pull-left">{{ __('vocabulary.productsSearch') }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                <form action="{{ route('search', ['locale' => $locale]) }}" method="get" id="searchform" class="uk-form uk-navbar-content">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="term" placeholder="{{ __('vocabulary.searchPlaceholder') }}">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">&nbsp;<span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
                        </span>
                    </div>
                </form>
                <div class="clear-both"></div>
                <hr>
                <h3 class="pull-left">{{ __('vocabulary.productsFound') }}:<strong> {{ $products->count() }}</strong></h3>
                <div class="clear-both"></div>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6 prodotti-item">
                            <a href="{{ route('show-product', ['locale' => $locale, 'categoryId' => $product->category_id, 'productId' => $product->id]) }}">
                                <img class="img-responsive" src="{{ asset($assetsSrc . $product->mainImage ) }}" alt="{{ $product->name }}">
                                <div class="text-center prod-label">
                                    <span class="prod-color" style="background-color: {{ $product->brandColor }}">&nbsp;</span>{{ $product->translatedName ?? $product->name }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="clear-both"></div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'product', 'brands' => $brands])
        </div>
    </div>
@endsection
