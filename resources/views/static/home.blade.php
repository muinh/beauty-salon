@extends('layouts.main')
@section('title', 'Hair salon furniture & beauty salon equipment - Gamma & Bross')
@section('content')
    @include('layouts.components.header')
    <!-- Slider -->
    <!--=== Slider ===-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @foreach($sliders as $slider)
                    <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000">
                        <img class="homeimage" src="{{ asset('storage/' . $slider->image) }}" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!--=== End Slider ===-->
    <!-- /Slider -->
    <div class=" margin-bottom-60 margin-top-60">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="title-v2 margin-top-20">{!! __('vocabulary.homeHeader') !!}</h1>
                    <p class="margin-bottom-20">
                    <p>
                        {!! __('vocabulary.homeText') !!}
                    </p>
                    <a href="{{ route('company-profile') }}" class="btn-u margin-bottom-20">{!! __('vocabulary.more') !!}</a>
                </div>
                <div class="col-md-3">
                    <h3>{!! __('vocabulary.categories') !!}</h3>
                    <ul class="list-group sidebar-nav-v1">
                        @foreach($categories as $index => $category)
                            @if($index <= $maxCategories)
                                <li role="presentation" class="list-group-item">
                                    <a href="{{ route('show-products-by-category', ['locale' => $locale, 'categoryId' => $category->id]) }}">{{ $category->title }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <a href="{{ route('show-categories') }}" class="btn-u">{!! __('vocabulary.products') !!}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="headline-center">
        <!--=== prod parallax ===-->
        <div class="parallax-team parallaxBg">
            <div class="container content">
                <div class="title-box-v2">
                    <h2>{!! __('vocabulary.productHighlights') !!}</h2>
                </div>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3 col-sm-6">
                            <div class="team-v2">
                                <a href="{{ route('show-product', [
                                            'locale' => $locale,
                                            'categoryId' => $product->category_id,
                                            'productId' => $product->id
                                        ]) }}">
                                    <img class="img-responsive" src="{{ asset('storage/' . $product->main_image) }}" alt="{{ $product->name }}" />
                                </a>
                                <div class="inner-team">
                                    <h3>
                                        <a href="{{ route('show-product', [
                                            'locale' => $locale,
                                            'categoryId' => $product->category_id,
                                            'productId' => $product->id
                                        ]) }}">{{ $product->name }}
                                        </a>
                                    </h3>
                                    <p>
                                        <strong>{{ $product->categoryId->title }}</strong>
                                    </p>
                                    <p>
                                        <strong>{{ $product->brandId->name }}</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> </div>
    <div>
        <div class="container content-sm home-news margin-bottom-20">
            <div class="text-center margin-bottom-30">
                <h2 class="title-v2 title-center">{!! __('vocabulary.latestNews') !!}</h2>
            </div>
            <div class="row">
                @foreach($latestNews as $article)
                    <div class="col-sm-4">
                        <div class="thumbnails-v1 margin-bottom-20">
                            <?php $images = json_decode($article->images); ?>
                            @if(!is_null($images))
                                @foreach($images as $index => $image)
                                    @if($index === 0)
                                        <div class="thumbnail-img">
                                            <img class="img-responsive" src="{{ asset('storage/' . $image) }}" alt="{{ $article->name }}">
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            <div class="caption">
                                <h3>
                                    <a href="{{ route('show-news', ['locale' => $locale, 'newsId' => $article->id]) }}">
                                        {{ $article->name }}
                                    </a>
                                </h3>
                                <small>{{ $article->created_at->format('j M\\. Y') }}</small>
                                <p>{{ str_limit($article->content, 200, '...') }}</p>
                                <a href="{{ route('show-news', ['locale' => $locale, 'newsId' => $article->id]) }}" class="btn-u">{!! __('vocabulary.more') !!}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
