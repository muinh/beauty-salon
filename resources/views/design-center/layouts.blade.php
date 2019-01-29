@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 news">
                <h1 class="pull-left clear-both">{{ array_pop($steps) }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                @foreach($layouts as $layout)
                    <h2 class="clear-both">{{ $layout->name }}</h2>
                    <div class="margin-bottom-30">
                        <h4>{{ $layout->description }}</h4>
                        <div class="row blog blog-medium">
                            <?php $images = json_decode($layout->images); ?>
                            @if(!is_null($images))
                                <div class="col-md-12">
                                    <div class="row blog blog-medium">
                                        @foreach($images as $index => $image)
                                            <div class="col-md-3 col-xs-3">
                                                <a class="fancybox" href="{{ asset('storage/' . $image) }}" data-rel="fancybox-button">
                                                    <img class="img-responsive" src="{{ asset('storage/' . $image) }}">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <hr />
                @endforeach
                <div class="pull-right">
                    {{ $layouts->links() }}
                </div>
                <div class="clear-both"></div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'design-center', 'brands' => $brands])
        </div>
    </div>
@endsection
