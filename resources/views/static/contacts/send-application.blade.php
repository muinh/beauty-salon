@extends('layouts.main')
@section('title')
    {{ $title =  __('vocabulary.sendApplication') . ' - ' . __('vocabulary.metaDescription') }}
@endsection
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1 class="pull-left">{{ array_pop($steps) }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                <div class="item active">
                    <img src="{{ asset($assetsSrc . $sliderRand->image) }}" style="width:100%">
                    <div class="carousel-caption"><p></p></div>
                </div>
                <h4>{{ __('emails.jobOpenings') }}:</h4>
                <p>{{ env('APP_NAME') }} {{ __('emails.lookingFor') }}:</p>
                <form id="send-application" name="send-application" method="post" action="{{ route('handle-send-application', ['locale' => $locale]) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="tag-box tag-box-v3 form-page">
                        <div class="panel-body">
                            <div class="row margin-bottom-40">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.firstName') }} <span class="obbligatorio">*</span></label>
                                        <input name="firstName" type="text" class="form-control validate[required]" id="firstName" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.lastName') }} <span class="obbligatorio">*</span></label>
                                        <input name="lastName" type="text" class="form-control validate[required]" id="lastName" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.email') }} <span class="obbligatorio">*</span></label>
                                        <input name="email" type="email" class="form-control validate[custom[email]]" id="email" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.phone') }} <span class="obbligatorio">*</span></label>
                                        <input name="phone" type="text" class="form-control validate[required]" id="phone" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.reference') }}.</label>
                                        <input name="reference" type="text" class="form-control" id="reference" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.cv') }}</label>
                                        <input type="file" name="cv" id="cv">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>{{ __('emails.coverLetter') }}</label>
                                        <textarea name="coverLetter" rows="4" class="form-control margin-bottom-20" id="coverLetter"></textarea>
                                        <label>
                                            <input name="accepted" type="checkbox" id="accepted" value="1" class="form-control validate[required]" required>
                                            {{ __('emails.authorize') }}
                                        </label>
                                        <div><small>{{ __('emails.personalData') }}</small></div>
                                        <hr>
                                        <button type="submit" class="btn-u btn-u-default pull-right">{{ __('emails.send') }}</button>
                                        <span><span class="obbligatorio">*</span> {{ __('emails.requiredInfo') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @include('layouts.components.sidebar', ['menuType' => 'contacts', 'brands' => $brands])
        </div>
    </div>
@endsection
