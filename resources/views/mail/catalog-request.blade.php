@component('mail::layout')

    # {{ __('emails.catalogRequest') }}

    ## {{ __('emails.consumerInfo') }}

    - {{ __('emails.firstName') }}:    {{ array_get($request, 'firstName') }}
    - {{ __('emails.lastName') }}:    {{ array_get($request, 'lastName') }}
    - {{ __('emails.email') }}:    {{ array_get($request, 'email') }}
    - {{ __('emails.phone') }}:    {{ array_get($request, 'phone') }}
    - {{ __('emails.website') }}:    {{ array_get($request, 'website') }}
    - {{ __('emails.fax') }}:    {{ array_get($request, 'fax') }}
    - {{ __('emails.company') }}:    {{ array_get($request, 'company') }}
    - {{ __('emails.address') }}:    {{ array_get($request, 'address') }}
    - {{ __('emails.city') }}:    {{ array_get($request, 'city') }}
    - {{ __('emails.state') }}:    {{ array_get($request, 'state') }}
    - {{ __('emails.zipCode') }}:    {{ array_get($request, 'zipCode') }}
    - {{ __('emails.country') }}:    {{ array_get($request, 'country') }}

    ## {{ __('emails.marketingInfo') }}

    - {{ __('emails.typeOfBusiness') }}:
    {{ __('emails.owner') }}: {{ array_get($request, 'owner') }}
    {{ __('emails.director') }}: {{ array_get($request, 'director') }}
    {{ __('emails.hairdresser') }}: {{ array_get($request, 'hairdresser') }}
    {{ __('emails.architect') }}: {{ array_get($request, 'architect-designer') }}
    {{ __('emails.distributor') }}: {{ array_get($request, 'distributor') }}
    @if(array_get($request, 'other'))
        {{ __('emails.other') }}: {{ array_get($request, 'other-text') }}
    @endif

    - {{ __('emails.purposeOfRequest') }}:
    {{ __('emails.purposeOfRequest') }}: {{ array_get($request, 'purpose-of-request') }}
    {{ __('emails.openDate') }}: {{ array_get($request, 'purpose-of-request-open-date') }}
    {{ __('emails.openExtraDate') }}: {{ array_get($request, 'purpose-of-request-more-date') }}
    {{ __('emails.numberStylists') }}: {{ array_get($request, 'number-of-stylists') }}
    {{ __('emails.areaOf') }}: {{ array_get($request, 'area') }}

    - {{ __('emails.productsRequired') }}:
    {{ __('emails.armchairs') }}: {{ array_get($request, 'armchairs') }}
    {{ __('emails.workplaces') }}: {{ array_get($request, 'workplaces') }}
    {{ __('emails.shampoo') }}: {{ array_get($request, 'shampoo') }}
    {{ __('emails.designServices') }}: @if(array_get($request, 'design-services')) {{ array_get($request, 'design-services-note') }} @endif

    - {{ __('emails.referer') }}: {{ array_get($request, 'referer') }}
    - {{ __('emails.otherReferer') }}: {{ array_get($request, 'referer-other') }}
    - {{ __('emails.notes') }}: {{ array_get($request, 'notes') }}

    @slot('footer')
        @component('mail::footer')
            © <?php echo date("Y"); env('APP_NAME')?> - {{ __('vocabulary.rightsReserved') }}
        @endcomponent
    @endslot

@endcomponent
