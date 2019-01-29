@component('mail::layout')

    # Info Request

    - {{ __('emails.firstName') }}:    {{ array_get($request, 'firstName') }}
    - {{ __('emails.lastName') }}:    {{ array_get($request, 'lastName') }}
    - {{ __('emails.email') }}:    {{ array_get($request, 'email') }}
    - {{ __('emails.company') }}:    {{ array_get($request, 'company') }}
    - {{ __('emails.city') }}:    {{ array_get($request, 'city') }}
    - {{ __('emails.country') }}:    {{ array_get($request, 'country') }}
    - {{ __('emails.phone') }}:    {{ array_get($request, 'phone') }}
    - {{ __('emails.address') }}:    {{ array_get($request, 'address') }}
    - {{ __('emails.state') }}:    {{ array_get($request, 'state') }}
    - {{ __('emails.zipCode') }}:    {{ array_get($request, 'zipCode') }}
    - {{ __('emails.fax') }}:    {{ array_get($request, 'fax') }}
    - {{ __('emails.website') }}:    {{ array_get($request, 'website') }}
    - {{ __('emails.message') }}:    {{ array_get($request, 'message') }}

    @slot('footer')
        @component('mail::footer')
            © <?php echo date("Y"); env('APP_NAME')?> - {{ __('vocabulary.rightsReserved') }}
        @endcomponent
    @endslot

@endcomponent
