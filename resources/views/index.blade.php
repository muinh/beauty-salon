@extends('layouts.base')
@section('title', 'Beauty & hair salon furniture & equipment - Gamma & Bross')
@section('content')
    <div class="wrapper" style="padding: 0;">

        <!-- Header -->
        <div class="prehome-head">
            <div class="container container-space">

                <img style="height: 40px;" src="{{ asset('img/logo-pre.png') }}" alt="GammaBross">



                <div class="pull-right hidden-xs prehome-brands">
                    <a href="http://www.gammastore.com/"><img src="{{ asset('img/brands/brand4.png') }}"></a>
                    <a href="http://www.mgbross.com/"><img src="{{ asset('img/brands/brand3.png') }}"></a>
                    <a href="http://www.gamma-state-of-the-art.com/"><img src="{{ asset('img/brands/brand2.png') }}"></a>
                    <a href="http://www.spalogic.net/"><img src="{{ asset('img/brands/brand1.png') }}"></a>
                </div>


            </div>
        </div>

        <!-- /Header -->

        <!-- Slider -->
        <!--=== Slider ===-->

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE -->
                    <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Echoes Collection">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('img/slider/echoes-collectio1n.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYER -->
                        <div class="tp-caption re-title-v2 sft"
                             data-x="center"
                             data-hoffset="0"
                             data-y="150"
                             data-speed="1400"
                             data-start="1000"
                             data-easing="easeOutBack"
                             data-endspeed="300"
                             data-endeasing="easeInQuad"
                             data-captionhidden="off"
                             style="z-index: 6"> Echoes Collection </div>

                        <!-- LAYER -->
                        <div class="tp-caption re-text-v2 sft"
                             data-x="center"
                             data-hoffset="0"
                             data-y="400"
                             data-speed="1600"
                             data-start="2000"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="off"
                             style="z-index: 6">
                            <a href="{{ url('/it') }}"><img src="{{ asset('/img/flags/it.png') }}" alt="Entra" class="icon-lang-prehome" ></a>
                            <a href="{{ url('/en') }}"><img src="{{ asset('/img/flags/en.png') }}" alt="Enter" class="icon-lang-prehome"></a>
                            <a href="{{ url('/fr') }}"><img src="{{ asset('/img/flags/fr.png') }}" alt="Entrer" class="icon-lang-prehome"></a>
                            <a href="{{ url('/es') }}"><img src="{{ asset('/img/flags/es.png') }}" alt="Entrar" class="icon-lang-prehome"></a>
                            <a href="{{ url('/de') }}"><img src="{{ asset('/img/flags/de.png') }}" alt="Eingeben" class="icon-lang-prehome"></a>

                        </div>
                    </li>
                    <!-- END SLIDE -->

                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
        <!--=== End Slider ===--><!-- /Slider -->
        @include('layouts.footer')
    </div>
@endsection
