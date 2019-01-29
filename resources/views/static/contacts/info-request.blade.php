@extends('layouts.main')
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <h1 class="pull-left">{{ array_pop($steps) }}</h1>
                <div class="clear-both margin-bottom-30"></div>
                <div class="item active">
                    <img src="{{ asset('storage/' . $sliderRand->image) }}" style="width:100%">
                    <div class="carousel-caption"><p></p></div>
                </div>
                <h4>{{ __('emails.fillForm') }} <strong>{{ env('APP_NAME') }}</strong></h4>
                <form id="info-request" name="info-request" method="post" action="{{ route('handle-info-form', ['locale' => $locale]) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="tag-box tag-box-v3 form-page">
                        <div class="panel-body">
                            <div class="row margin-bottom-40">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.firstName') }} <span class="obbligatorio">*</span></label>
                                        <input name="firstName" type="text" class="form-control validate[required]" id="firstName" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('emails.company') }}</label>
                                        <input name="company" type="text" class="form-control" id="company" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('emails.city') }}</label>
                                        <input name="city" type="text" class="form-control" id="city" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('emails.country') }}</label>
                                        <input name="country" type="text" class="form-control" id="country" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone <span class="obbligatorio">*</span></label>
                                        <input {{ __('emails.phone') }}="phone" type="text" class="form-control validate[required]" id="phone" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('emails.email') }} <span class="obbligatorio">*</span></label>
                                        <input name="email" type="email" class="form-control validate[custom[email]]" id="email" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.lastName') }} <span class="obbligatorio">*</span></label>
                                        <input name="lastName" type="text" class="form-control validate[required]" id="lastName" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('emails.address') }}</label>
                                        <input name="address" type="text" class="form-control" id="address" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('emails.state') }}</label>
                                        <input name="state" type="text" class="form-control" id="state" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('emails.zipCode') }}</label>
                                        <input name="zipCode" type="text" class="form-control" id="zipCode" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('emails.fax') }}</label>
                                        <input name="fax" type="text" class="form-control" id="fax" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('emails.website') }}</label>
                                        <input name="website" type="text" class="form-control" id="website" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('emails.message') }}</label>
                                        <textarea name="message" rows="4" class="form-control margin-bottom-20" id="message"></textarea>
                                        <label>
                                            <input name="accepted" type="checkbox" id="accepted" value="1" class="form-control validate[required]">
                                            {{ __('emails.authorize') }}</label>
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
