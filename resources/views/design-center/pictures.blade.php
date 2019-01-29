@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 news">
                <h1 class="pull-left">{{ array_pop($steps) }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                @foreach($pictures as $picture)
                    <div class="margin-bottom-30">
                        <h2>{{ $picture->name }}</h2>
                        <div class="row blog blog-medium">
                            <?php $images = json_decode($picture->images); ?>
                            @if(!is_null($images))
                                @foreach($images as $image)
                                    <div class="col-md-2 col-xs-4">
                                        <a class="fancybox" href="{{ asset('storage/' . $image) }}" data-rel="fancybox-button">
                                            <img class="img-responsive" src="{{ asset('storage/' . $image) }}">
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                            <div class="col-md-2"></div>
                        </div>
                        <hr>
                    </div>
                @endforeach
                <div class="pull-right">
                    {{ $pictures->links() }}
                </div>
                <div class="clear-both"></div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'design-center', 'brands' => $brands])
        </div>
    </div>
@endsection
