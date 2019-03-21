@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="team-v4">
            <h2>{{ __('vocabulary.pageNotFound') }}</h2>
            <p class="team-v4">{{ __('vocabulary.urlNotFound') }}</p>
            <h5><a href="{{ route('home', ['locale' => $locale]) }}">{{ __('vocabulary.homePage') }}</a></h5>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-2 col-sm-3 prodotti-item">
                        <a href="{{ route('show-product', ['categoryId' => $product->category_id, 'productId' => $product->id]) }}">
                            <img class="img-responsive" src="/img/products/{{ $product->mainImage->url }}" alt="{{ $product->mainImage->alt }}">
                            <div class="text-center prod-label">
                                <span class="prod-color gamma" style="background-color: {{ $product->brand->color }}">&nbsp;</span>{{ $product->name }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection



