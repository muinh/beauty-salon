@extends('layouts.main')
@section('title')
    {{ $title =  __('vocabulary.news') . ' - ' . __('vocabulary.metaDescription') }}
@endsection
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 news">
                <h1 class="pull-left">{{ array_pop($steps) }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                @foreach($news as $article)
{{--                    {{ dd($article) }}--}}
                    <div class="row blog blog-medium">
                        <div class="col-md-4">
                            <a href="{{ route('show-news', ['locale' => $locale, 'newsId' => $article->id]) }}">
                                <img class="img-responsive" src="{{ asset($assetsSrc . $article->mainImage) }}" alt="{{ $article->newsTranslationName ?? $article->name }}">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <h4>
                                <a href="{{ route('show-news', ['locale' => $locale, 'newsId' => $article->id]) }}">{{ $article->newsTranslationName ?? $article->name }}</a>
                            </h4>
                            <ul class="list-unstyled list-inline blog-info">
                                <li><i class="fa fa-calendar"></i> {{ $article->created_at }}</li>
                                <li><i class="fa fa-tags"></i>
                                    <a href="{{ route('show-news-by-category', ['locale' => $locale, 'newsCategoryId' => $article->newsCategoryId]) }}">
                                        {{ $article->newsCategoryTranslatedName ?? $article->newsCategoryName }}
                                    </a>
                                </li>
                            </ul>
                            <p>{{ str_limit($article->newsContent ?? $article->content, 200, '...') }}</p>
                            <a class="btn-u btn-u-default btn-u-sm" href="{{ route('show-news', ['locale' => $locale, 'newsId' => $article->id]) }}">
                                <i class="fa fa-caret-right"></i>&nbsp;&nbsp;{{ __('vocabulary.more') }}
                            </a>
                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="pull-right">
                    {{ $news->links() }}
                </div>
                <div class="clear-both"></div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => null, 'brands' => $brands])
            </div>
        </div>
@endsection
