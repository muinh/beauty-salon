@component('mail::layout')

    # Info Request

    - {{ __('emails.firstName') }}:    {{ array_get($request, 'firstName') }}
    - {{ __('emails.lastName') }}:    {{ array_get($request, 'lastName') }}
    - {{ __('emails.email') }}:    {{ array_get($request, 'email') }}
    - {{ __('emails.phone') }}:    {{ array_get($request, 'phone') }}
    - {{ __('emails.reference') }}:    {{ array_get($request, 'reference') }}
    - {{ __('emails.coverLetter') }}:    {{ array_get($request, 'coverLetter') }}
    - {{ __('emails.cv') }}:    {{ url('/cvs/' . $fileName) }}

    @slot('footer')
        @component('mail::footer')
            © <?php echo date("Y"); env('APP_NAME')?> - {{ __('vocabulary.rightsReserved') }}
        @endcomponent
    @endslot

@endcomponent
