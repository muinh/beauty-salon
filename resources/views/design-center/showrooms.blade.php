@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 news">
                <h1 class="pull-left">{{ array_pop($steps) }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                @foreach($showrooms as $showroom)
                    <div class="margin-bottom-30">
                        <h2>{{ $showroom->title }}</h2>
                        <div class="row blog blog-medium">
                            <div class="col-md-5"><b>{{ $showroom->name }}</b><br>
                                {{ $showroom->contacts }}
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <?php $images = json_decode($showroom->images); ?>
                                    @if(!is_null($images))
                                        @foreach($images as $image)
                                            <div class="col-md-4 col-xs-6">
                                                <a class="fancybox" href="{{ asset('storage/' . $image) }}" data-rel="fancybox-button" title="{{ $showroom->title }}">
                                                    <img class="img-responsive margin-bottom-20" src="{{ asset('storage/' . $image) }}" alt="{{ $showroom->name }}">
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
                <div class="pull-right">
                    {{ $showrooms->links() }}
                </div>
                <div class="clear-both"></div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'design-center', 'brands' => $brands])
        </div>
    </div>
@endsection

