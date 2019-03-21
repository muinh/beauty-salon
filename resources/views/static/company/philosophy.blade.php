@extends('layouts.main')
@section('title')
    {{ $title =  __('vocabulary.philosophy') . ' - ' . __('vocabulary.metaDescription') }}
@endsection
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <div class="item active">
                    <img src="{{ asset($assetsSrc . $sliderRand->image) }}" style="width:100%">
                    <div class="carousel-caption"><p></p></div>
                </div>
                {!! __('vocabulary.philosophyText') !!}
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'company', 'brands' => $brands])

        </div>
    </div>
@endsection
