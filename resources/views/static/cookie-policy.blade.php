@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <div>
                    {!! __('vocabulary.cookiePolicy') !!}
                </div>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'company', 'brands' => $brands])
        </div>
    </div>
@endsection



