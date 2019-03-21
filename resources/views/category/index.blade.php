@extends('layouts.main')
@section('title')
    {{ $title =  __('vocabulary.categories') . ' - ' . __('vocabulary.metaDescription') }}
@endsection
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1 class="pull-left">{{ array_pop($steps) }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-md-4 col-sm-6 prodotti-item">
                            <a href="{{ route('show-products-by-category', ['locale' => $locale, 'slug' => $category->slug]) }}">
                                <img class="img-responsive" src="{{ asset($assetsSrc . $category->image)  }}">
                                <div class="text-center prod-label">
                                    {{ $category->title }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'product', 'brands' => $brands])
        </div>
    </div>
@endsection
