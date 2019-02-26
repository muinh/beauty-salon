@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <div class="clear-both margin-bottom-30"></div>
                <div class="mapholder visible-md-block visible-lg-block">
                    <div class="mondomap">
                        <a class="normalTip africa" href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'africa']) }}" title="{{ __('vocabulary.africa') }}"></a>
                        <a class="normalTip sudamerica" href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'south-america']) }}" title="{{ __('vocabulary.southAmerica') }}"></a>
                        <a class="normalTip nordamerica" href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'north-america']) }}" title="{{ __('vocabulary.northAmerica') }}"></a>
                        <a class="normalTip europa" href="{{ route('company-distribution-europe', ['locale' => $locale]) }}" title="{{ __('vocabulary.europe') }}"></a>
                        <a class="normalTip asia" href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'asia']) }}" title="{{ __('vocabulary.asia') }}"></a>
                        <a class="normalTip oceania" href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'oceania']) }}" title="{{ __('vocabulary.oceania') }}"></a>
                    </div>
                </div>
                <div class="geolist visible-xs-block visible-sm-block">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="badge">94</span>
                            <a href="{{ route('company-distribution-europe', ['locale' => $locale]) }}" title="{{ __('vocabulary.europe') }}">{{ __('vocabulary.europe') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">53</span>
                            <a href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'africa']) }}" title="{{ __('vocabulary.africa') }}">{{ __('vocabulary.africa') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">42</span>
                            <a href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'asia']) }}" title="{{ __('vocabulary.asia') }}">{{ __('vocabulary.asia') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">24</span>
                            <a href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'north-america']) }}" title="{{ __('vocabulary.northAmerica') }}">{{ __('vocabulary.northAmerica') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">15</span>
                            <a href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'south-america']) }}" title="{{ __('vocabulary.southAmerica') }}">{{ __('vocabulary.southAmerica') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">16</span>
                            <a href="{{ route('company-distribution', ['locale' => $locale, 'country' => 'oceania']) }}" title="{{ __('vocabulary.oceania') }}">{{ __('vocabulary.oceania') }}</a>
                        </li>
                    </ul>
                </div>
                @if(!$dealers->isEmpty())
                    <div class="distributoriholder">
                        <h2>{{ __('vocabulary.dealersIn') }} {{ ucfirst($dealers->first()->country_name) }}</h2>
                        @foreach($dealers as $dealer)
                            <div class="distributorebox">
                                <hr>
                                <h3 class="title-v4">{{ $dealer->name }}</h3>
                                <img class="img-responsive margin-bottom-30" src="{{ asset($assetsSrc . $dealer->image) }}" alt="{{ $dealer->name }}">
                                {{ $dealer->address }}
                                <div class="google-map margin-top-30">
                                    <iframe src="{{ $dealer->map }}" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        @endforeach
                        <div class="clear"></div>
                    </div>
                @endif
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'company', 'brands' => $brands])
        </div>
    </div>
@endsection



