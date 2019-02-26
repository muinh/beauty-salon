@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1 class="pull-left">{{ $article->name }}</h1>
                <div class="clear-both"></div>
                <ul class="list-unstyled list-inline blog-info">
                    <li>
                        <i class="fa fa-calendar"></i>{{ $article->created_at->format('j M\\. Y') }}
                    </li>
                    <li><i class="fa fa-tags"></i>
                        <a href="{{ route('show-news-by-category', ['locale' => $locale, 'newsCategoryId' => $article->news_category_id]) }}">
                            {{ $article->newsCategoryId->name }}
                        </a>
                    </li>
                </ul>
                <div class="margin-bottom-40 margin-top-30">
                    <div class="blog-img">
                        <img class="img-responsive" src="{{ asset($assetsSrc . $article->mainImage) }}" alt="{{ $article->name }}">
                    </div>
                    {{ $article->content }}
                </div>
                <div class="clear-both"></div>
                <hr>
                <div class="row margin-top-30">
                    <?php $images = json_decode($article->images); ?>
                    @if(!is_null($images))
                        @foreach($images as $image)
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <a class="fancybox" data-rel="fancybox-button" href="{{ asset($assetsSrc . $image) }}">
                                    <img class="img-responsive margin-bottom-20" src="{{ asset($assetsSrc . $image) }}" />
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <hr>
                <a href="{{ url()->previous() }}" class="btn-u btn-u-sm btn-u-default pull-right">
                    <i class="fa fa-caret-left"></i>&nbsp;&nbsp;{{ __('vocabulary.back') }}
                </a>
                <div class="clear-both"></div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => null, 'brands' => $brands])
        </div>
    </div>
@endsection
