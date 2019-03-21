@extends('layouts.main')
@section('title')
    {{ $title =  __('vocabulary.salonPlanner') . ' - ' . __('vocabulary.metaDescription') }}
@endsection
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1>{{ array_pop($steps) }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                <div class="margin-bottom-30">
                    <div class="planner">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="planner-map">&nbsp</div>
                            </div>
                            <div class="col-md-6">
                                <a class="fancybox planner-button margin-bottom-20" data-rel="fancybox-button" title="" href="http://www.beautydesign.com/SalonPlanner_cm/home.htm" target="_blank">
                                    <h4>
                                        {{ __('vocabulary.clickPlanner') }}
                                        <small>{{ __('vocabulary.versionInCm') }}</small>
                                    </h4>
                                </a>
                                <a class="fancybox planner-button" data-rel="fancybox-button" title="" href="http://www.beautydesign.com/SalonPlanner/home.htm" target="_blank">
                                    <h4>
                                        {{ __('vocabulary.clickPlanner') }}
                                        <small>{{ __('vocabulary.versionInInch') }}</small>
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h2>{{ __('vocabulary.welcomeLaunchPad') }}</h2>
                    <p>{!! __('vocabulary.launchPadText') !!}</p>
                </div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'design-center', 'brands' => $brands])
        </div>
    </div>
@endsection
