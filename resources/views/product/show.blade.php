@extends('layouts.main')
@section('title')
    {{ $title =  $product->name . ' - ' . __('vocabulary.metaDescription') }}
@endsection
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1 class="pull-left">{{ $product->name }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                <div class="row margin-bottom-30">
                    <div class="col-md-7" style="margin-bottom: 30px;">
                        <div class="margin-bottom-20 border-ddd">
                            <img class="img-responsive" id="productimg" src="{{ asset($assetsSrc . $product->mainImage) }}" alt="{{ $product->name }}">
                        </div>
                        <a href="{{ route('show-catalog-request-form', ['locale' => $locale]) }}" class="btn btn-sm rounded btn-default" role="button">
                            <i class="fa fa-book"></i>&nbsp {{ __('vocabulary.catalogRequest') }}
                        </a>
                        <div class="a2a_kit a2a_default_style pull-right">
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_email"></a>
                            <a class="a2a_button_google_plus"></a>
                        </div>
                        <script type="text/javascript" src="https://static.addtoany.com/menu/page.js"></script>
                    </div>
                    <div class="col-md-5 prod-info">
                        <h6><i class="fa fa-hashtag"></i>&nbsp;{{ __('vocabulary.code') }}:</h6>
                        <b>{{ $product->code }}</b>
                        <hr>
                        <h6><i class="fa fa-info-circle"></i>&nbsp;{{ __('vocabulary.features') }}:</h6>
                        <p>{{ $product->description }}</p>
                        <hr>
                        <h6><i class="fa fa-tag"></i>&nbsp;{{ __('vocabulary.categories') }}:</h6>
                        <b><a href="{{ route('show-products-by-category', ['locale' => $locale, 'slug' => $product->categorySlug]) }}">{{ $category->title ?? $product->categoryTitle }}</a></b>
                        <hr>
                        <h6><i class="fa fa-shopping-bag"></i>&nbsp;{{ __('vocabulary.lines') }}:</h6>
                        <b><a href="{{ route('show-products-by-line', ['locale' => $locale, 'slug' => $product->lineSlug]) }}">{{ $line->name ?? $product->lineTitle }}</a></b>
                        <hr>
                        <h6><i class="fa fa-user"></i>&nbsp;{{ __('vocabulary.designer') }}:</h6>
                        <b><a href="{{ route('show-products-by-designer', ['locale' => $locale, 'slug' => $product->designerSlug]) }}">{{ $designer->name ?? $product->designerName}}</a></b>
                        <hr>
                        <h6><i class="fa fa-arrows"></i>&nbsp;{{ __('vocabulary.dimensions') }}:</h6>
                        <b>
                        {{ $product->dimensionsCm }}<br>
                        <small>{{ $product->dimensionsInch }}</small>
                        </b>
                        <hr>
                    </div>
                </div>
                <div class="materiali">
                    <div class="tab-v1">
                        <ul class="nav nav-tabs margin-bottom-20" style="border-bottom: 1px solid #ddd;">
                        </ul>
                        <div class="tab-content"></div>
                    </div>
                </div>
                <hr class="hr-xs">
                <hr class="hr-xs">
                <h4>{{ __('vocabulary.similarProducts') }}</h4>
                <div class="row margin-bottom-30 margin-top-30">
                    @foreach($similarProducts as $similarProduct)
                            <div class="col-md-3 col-sm-6 col-xs-6 prodotti-item">
                                <a href="{{ route('show-product', ['locale' => $locale, 'slug' => $similarProduct->categorySlug, 'productId' => $similarProduct->id]) }}">
                                    <img class="img-responsive" src="{{ asset($assetsSrc . $similarProduct->mainImage) }}" alt="{{ $similarProduct->name }}">
                                    <div class="text-center prod-label small">
                                        <span class="prod-color" style="background-color: {{ $similarProduct->brandColor }}">&nbsp;</span>{{ $similarProduct->name }}
                                    </div>
                                </a>
                            </div>
                    @endforeach
                </div>
                <hr>
                <h4>{{ __('vocabulary.sameLine') }}</h4>
                <div class="row margin-bottom-30 margin-top-30">
                    @foreach($sameLineProducts as $sameProduct)
                        <div class="col-md-3 col-sm-6 col-xs-6 prodotti-item">
                            <a href="{{ route('show-product', ['locale' => $locale, 'slug' => $sameProduct->categorySlug, 'productId' => $sameProduct->id]) }}">
                                <img class="img-responsive" src="{{ asset($assetsSrc . $sameProduct->mainImage) }}" alt="{{ $sameProduct->name }}">
                                <div class="text-center prod-label small">
                                    <span class="prod-color" style="background-color: {{ $sameProduct->brandColor }}">&nbsp;</span>{{ $sameProduct->name }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="materiali">
                    <div class="tab-v1">
                        <ul class="nav nav-tabs margin-bottom-20" style="border-bottom: 1px solid #ddd;">
                            <li class="active"><a href="#mat1" data-toggle="tab" aria-expanded="true"><h3>Gallery</h3></a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="mat1">
                                <div class="row margin-bottom-20">
                                    <?php $images = json_decode($product->images); ?>
                                    @if(!is_null($images))
                                        @foreach($images as $index => $image)
                                            <div class="col-xs-2">
                                                <a href="{{ asset($assetsSrc . $image) }}" class="fancybox" data-rel="fancybox-button">
                                                    <img class="img-responsive" src="{{ asset($assetsSrc . $image) }}">
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'product', 'brands' => $brands])
            </div>
        </div>
@endsection
