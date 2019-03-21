@extends('layouts.main')
@section('title')
    {{ $title =  __('vocabulary.catalogRequests') . ' - ' . __('vocabulary.metaDescription') }}
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
                <p> <strong>{{ env('APP_NAME') }}</strong> {{__('emails.catalog')}}.</p>
                <form id="catalog-request" name="catalog-request" method="post" action="{{ route('handle-catalog-request', ['locale' => $locale]) }}" enctype="multipart/form-data" >
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
                                        <input name="email" type="text" class="form-control validate[custom[email]]" id="email" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.phone') }}<span class="obbligatorio">*</span></label>
                                        <input name="phone" type="text" class="form-control validate[required]" id="phone" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.website') }}</label>
                                        <input name="website" type="text" class="form-control" id="website" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.fax') }}</label>
                                        <input name="fax" type="text" class="form-control" id="fax" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.company') }}</label>
                                        <input name="company" type="text" class="form-control" id="company" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.address') }}</label>
                                        <input name="address" type="text" class="form-control" id="address" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.city') }} <span class="obbligatorio">*</span></label>
                                        <input name="city" type="text" class="form-control validate[required]" id="city" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.state') }}</label>
                                        <input name="state" type="text" class="form-control" id="state" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.zipCode') }}</label>
                                        <input name="zipCode" type="text" class="form-control" id="zipCode" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{ __('emails.country') }} <span class="obbligatorio">*</span></label>
                                        <input name="country" type="text" class="form-control validate[required]" id="country" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <h3>{{ __('emails.typeOfBusiness') }}:</h3>
                                </div>
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <label>
                                            <input name="owner" type="checkbox" id="owner" value="{{ __('emails.owner') }}">{{ __('emails.owner') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <label>
                                            <input name="director" type="checkbox" id="director" value="{{ __('emails.director') }}">{{ __('emails.director') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <label>
                                            <input name="hairdresser" type="checkbox" id="hairdresser" value="{{ __('emails.hairdresser') }}">{{ __('emails.hairdresser') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <label>
                                            <input name="architect-designer" type="checkbox" id="architect-designer" value="{{ __('emails.architect') }}">{{ __('emails.architect') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input name="distributor" type="checkbox" id="distributor" value="{{ __('emails.distributor') }}">{{ __('emails.distributor') }}
                                            <span style="font-size:12px">({{ __('emails.pleaseUse') }})</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <label>
                                            <input name="other" type="checkbox" id="other" value="{{ __('emails.other') }}">{{ __('emails.other') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="other-text" type="text" class="form-control" id="other-text" placeholder="{{ __('emails.otherText') }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <h3>{{ __('emails.purposeOfRequest') }}:</h3>
                                </div>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label>
                                            <input name="purpose-of-request" type="radio" value="{{ __('emails.newSalon') }}" id="new-salon">{{ __('emails.newSalon') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="purpose-of-request-open-date" id="add-new-date" type="text" class="form-control" placeholder="{{ __('emails.expectedDate') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label>
                                            <input name="purpose-of-request" type="radio" value="{{ __('emails.addingMoreSalon') }}" id="one-more-salon">{{ __('emails.addingMoreSalon') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="purpose-of-request-more-date" id="one-more-salon-date" type="text" class="form-control" placeholder="{{ __('emails.expectedDate') }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="radio">
                                        <label>
                                            <input name="purpose-of-request" type="radio" value="{{ __('emails.fullRenewal') }}" id="full-renewal">{{ __('emails.fullRenewal') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="radio">
                                        <label>
                                            <input name="purpose-of-request" type="radio" value="{{ __('emails.partialRenewal') }}" id="partial-renewal">{{ __('emails.partialRenewal') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4 margin-top-10">
                                    <div class="form-group">
                                        <p>{{ __('emails.numberStylists') }}:</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 margin-top-10">
                                    <div class="form-group">
                                        <input name="number-of-stylists" id="number-of-stylists" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-4 margin-top-10">
                                    <div class="form-group">
                                        <p>{{ __('emails.salonSquare') }}:</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 margin-top-10">
                                    <div class="form-group">
                                        <input name="area" id="area" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <h3>{{ __('emails.productsRequired') }}:</h3>
                                </div>
                                <div class="col-sm-4 margin-top-10">
                                    <div class="form-group">
                                        <p>{{ __('emails.armchairs') }}:</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 margin-top-10">
                                    <div class="form-group">
                                        <input name="armchairs" id="armchairs" type="number" class="form-control" placeholder="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 margin-top-10">
                                    <div class="form-group">
                                        <p>{{ __('emails.workplaces') }}:</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 margin-top-10">
                                    <div class="form-group">
                                        <input name="workplaces" id="workplaces" type="number" class="form-control" placeholder="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 margin-top-10">
                                    <div class="form-group">
                                        <p>{{ __('emails.shampoo') }}:</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 margin-top-10">
                                    <div class="form-group">
                                        <input name="shampoo" id="shampoo" type="number" class="form-control" placeholder="0">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input name="design-services" type="checkbox" id="design-services" value="{{ __('emails.designServices') }}">{{ __('emails.designServices') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="design-services-note" type="text" class="form-control" id="design-services-note" placeholder="{{ __('emails.other2') }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <h3>{{ __('emails.howFind') }}:</h3>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select name="referrer" id="referrer" class="form-control">
                                            <option selected="" value=""> {{ __('emails.select') }} </option>
                                            <option value="Virgilio">Virgilio</option>
                                            <option value="Pagine Gialle Online">Pagine Gialle Online</option>
                                            <option value="Google Sponsored">Google</option>
                                            <option value="Yahoo">Yahoo</option>
                                            <option value="Yahoo Directory">Yahoo Directory</option>
                                            <option value="MSN">MSN</option>
                                            <option value="Cataloghi / Materiale promozionale dell'azienda">Cataloghi / Materiale promozionale</option>
                                            <option value="Riviste">Riviste </option>
                                            <option value="Fiere">Fiere </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="referrer-other" type="text" class="form-control" id="referrer-other" placeholder="{{ __('emails.other2') }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label>{{ __('emails.additionalInfo') }}:</label>
                                        <textarea name="notes" rows="4" class="form-control margin-bottom-20" id="notes"></textarea>
                                        <label>
                                            <input name="accepted" type="checkbox" id="accepted" value="1" class="form-control validate[required]" required>
                                            {{ __('emails.authorize') }}
                                        </label>
                                        <div>
                                            <small>{{ __('emails.personalData') }}</small>
                                        </div>
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
