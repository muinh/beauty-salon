@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1 class="pull-left">{{ array_pop($steps) }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                <div class="item active">
                    <img src="{{ asset($assetsSrc . $sliderRand->image) }}" style="width:100%">
                    <div class="carousel-caption"><p></p></div>
                </div>
                <ul class="list-unstyled margin-bottom-30">
                    {!! __('vocabulary.emailsContacts') !!}
                </ul>
                <div class="map-responsive">
                    <iframe src="{!! __('vocabulary.emailsMapLink') !!}" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'contacts', 'brands' => $brands])
        </div>
    </div>
@endsection
