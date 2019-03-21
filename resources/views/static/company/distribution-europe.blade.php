@extends('layouts.main')
@section('title')
    {{ $title =  __('vocabulary.distribution') . ' - ' . __('vocabulary.metaDescription') }}
@endsection
@section('content')
    @include('layouts.components.header')
    @include('layouts.components.breadcrumbs')
    <div class="container content" style="padding-top: 0;">
        <div class="row magazine-page margin-bottom-60">
            <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                <div class="clear-both margin-bottom-30"></div>
                <div class="mapholder visible-md-block visible-lg-block">
                    <a class="normalTip mondo" href="{{ route('company-distribution', ['locale' => $locale]) }}" title="{{ __('vocabulary.backWorld') }}"></a>
                    <div class="europemapholder">
                        <div class="europemap">
                            <a class="normalTip albania" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'albania']) }}" title="{{ __('vocabulary.albania') }}"></a>
                            <a class="normalTip andorra" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'andorra']) }}" title="{{ __('vocabulary.andorra') }}"></a>
                            <a class="normalTip lichtenstein" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'liechtenstein']) }}" title="{{ __('vocabulary.liechtenstein') }}"></a>
                            <a class="normalTip montenegro" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'serbia-and-montenegro']) }}" title="{{ __('vocabulary.serbia') }}"></a>
                            <a class="normalTip bosnia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'bosnia-and-herzegovina']) }}" title="{{ __('vocabulary.bosnia') }}"></a>
                            <a class="normalTip belarus" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'belarus']) }}" title="{{ __('vocabulary.belarus') }}"></a>
                            <a class="normalTip bulgaria" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'bulgaria']) }}" title="{{ __('vocabulary.bulgaria') }}"></a>
                            <a class="normalTip croazia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'croatia']) }}" title="{{ __('vocabulary.croatia') }}"></a>
                            <a class="normalTip czech" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'czech-republic']) }}" title="{{ __('vocabulary.czech') }}"></a>
                            <a class="normalTip danimarca" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'denmark']) }}" title="{{ __('vocabulary.denmark') }}"></a>
                            <a class="normalTip estonia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'estonia']) }}" title="{{ __('vocabulary.estonia') }}"></a>
                            <a class="normalTip luxemburg" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'luxembourg']) }}" title="{{ __('vocabulary.luxembourg') }}"></a>
                            <a class="normalTip belgio" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'belgium']) }}" title="{{ __('vocabulary.belgium') }}"></a>
                            <a class="normalTip spagna" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'spain']) }}" title="{{ __('vocabulary.spain') }}"></a>
                            <a class="normalTip portugal" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'portugal']) }}" title="{{ __('vocabulary.portugal') }}"></a>
                            <a class="normalTip uk" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'united-kingdom']) }}" title="{{ __('vocabulary.unitedKingdom') }}"></a>
                            <a class="normalTip francia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'france']) }}" title="{{ __('vocabulary.france') }}"></a>
                            <a class="normalTip greece" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'greece']) }}" title="{{ __('vocabulary.greece') }}"></a>
                            <a class="normalTip hungary" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'hungary']) }}" title="{{ __('vocabulary.hungary') }}"></a>
                            <a class="normalTip iceland" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'iceland']) }}" title="{{ __('vocabulary.iceland') }}"></a>
                            <a class="normalTip ireland" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'ireland']) }}" title="{{ __('vocabulary.ireland') }}"></a>
                            <a class="normalTip sanmarino" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'san-marino']) }}" title="{{ __('vocabulary.sanMarino') }}"></a>
                            <a class="normalTip italy" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'italy']) }}" title="{{ __('vocabulary.italy') }}"></a>
                            <a class="normalTip kosovo" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'serbia-and-montenegro']) }}" title="{{ __('vocabulary.serbia') }}"></a>
                            <a class="normalTip lettonia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'latvia']) }}" title="{{ __('vocabulary.latvia') }}"></a>
                            <a class="normalTip lituania" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'lithuania']) }}" title="{{ __('vocabulary.lithuania') }}"></a>
                            <a class="normalTip macedonia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'macedonia']) }}" title="{{ __('vocabulary.macedonia') }}"></a>
                            <a class="normalTip malta" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'malta']) }}" title="{{ __('vocabulary.malta') }}"></a>
                            <a class="normalTip moldavia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'moldova']) }}" title="{{ __('vocabulary.moldova') }}"></a>
                            <a class="normalTip olanda" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'netherlands']) }}" title="{{ __('vocabulary.netherlands') }}"></a>
                            <a class="normalTip norway" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'norway']) }}" title="{{ __('vocabulary.norway') }}"></a>
                            <a class="normalTip poland" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'poland']) }}" title="{{ __('vocabulary.poland') }}"></a>
                            <a class="normalTip romania" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'romania']) }}" title="{{ __('vocabulary.romania') }}"></a>
                            <a class="normalTip russia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'russia']) }}" title="{{ __('vocabulary.russia') }}"></a>
                            <a class="normalTip serbia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'serbia-and-montenegro']) }}" title="{{ __('vocabulary.serbia') }}"></a>
                            <a class="normalTip slovakia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'slovakia']) }}" title="{{ __('vocabulary.slovakia') }}"></a>
                            <a class="normalTip slovenia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'slovenia']) }}" title="{{ __('vocabulary.slovenia') }}"></a>
                            <a class="normalTip sweden" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'sweden']) }}" title="{{ __('vocabulary.sweden') }}"></a>
                            <a class="normalTip svizzera" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'switzerland']) }}" title="{{ __('vocabulary.switzerland') }}"></a>
                            <a class="normalTip austria" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'austria']) }}" title="{{ __('vocabulary.austria') }}"></a>
                            <a class="normalTip turchia" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'turkey']) }}" title="{{ __('vocabulary.turkey') }}"></a>
                            <a class="normalTip ucraina" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'ukraine']) }}" title="{{ __('vocabulary.ukraine') }}"></a>
                            <a class="normalTip monaco" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'monaco']) }}" title="{{ __('vocabulary.monaco') }}"></a>
                            <a class="normalTip finland" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'finland']) }}" title="{{ __('vocabulary.finland') }}"></a>
                            <a class="normalTip germany" href="{{ route('company-distribution-europe', ['locale' => $locale, 'country' => 'germany']) }}" title="{{ __('vocabulary.germany') }}"></a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="geolist visible-xs-block visible-sm-block">
                    <a class="btn btn-default margin-bottom-60" href="{{ route('company-distribution', ['locale' => $locale]) }}" title="{{ __('vocabulary.backWorld') }}">
                        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> {{ __('vocabulary.back') }}
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge">36</span><a href="https://www.gammabross.com/en/distribution-italy/" title="{{ __('vocabulary.italy') }}">{{ __('vocabulary.italy') }}</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">1</span><a href="2/albania/index.html" title="{{ __('vocabulary.albania') }}">{{ __('vocabulary.albania') }}</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">1</span><a href="5/andorra/index.html" title="{{ __('vocabulary.andorra') }}">{{ __('vocabulary.andorra') }}</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">1</span><a href="8/antarctica/index.html" title="{{ __('vocabulary.antarctica') }}">{{ __('vocabulary.antarctica') }}</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">1</span><a href="11/armenia/index.html" title="{{ __('vocabulary.armenia') }}">{{ __('vocabulary.armenia') }}</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">2</span><a href="14/austria/index.html" title="{{ __('vocabulary.austria') }}">{{ __('vocabulary.austria') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="15/azerbaijan/index.html" title="{{ __('vocabulary.azerbaijan') }}">{{ __('vocabulary.azerbaijan') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="20/belarus/index.html" title="{{ __('vocabulary.belarus') }}">{{ __('vocabulary.belarus') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="21/belgium/index.html" title="{{ __('vocabulary.belgium') }}">{{ __('vocabulary.belgium') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="27/bosnia-and-herzegovina/index.html" title="{{ __('vocabulary.bosnia') }}">{{ __('vocabulary.bosnia') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="33/bulgaria/index.html" title="{{ __('vocabulary.bulgaria') }}">{{ __('vocabulary.bulgaria') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="54/croatia/index.html" title="{{ __('vocabulary.croatia') }}">{{ __('vocabulary.croatia') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="57/czech-republic/index.html" title="{{ __('vocabulary.czech') }}">{{ __('vocabulary.czech') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="58/denmark/index.html" title="{{ __('vocabulary.denmark') }}">{{ __('vocabulary.denmark') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="67/estonia/index.html" title="{{ __('vocabulary.estonia') }}">{{ __('vocabulary.estonia') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="70/faroe-islands/index.html" title="{{ __('vocabulary.faroeIslands') }}">{{ __('vocabulary.faroeIslands') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="73/france/index.html" title="{{ __('vocabulary.france') }}">{{ __('vocabulary.france') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="79/georgia/index.html" title="{{ __('vocabulary.georgia') }}">{{ __('vocabulary.georgia') }}a</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="80/germany/index.html" title="{{ __('vocabulary.germany') }}">{{ __('vocabulary.germany') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="83/greece/index.html" title="{{ __('vocabulary.greece') }}">{{ __('vocabulary.greece') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">2</span>
                            <a href="97/hungary/index.html" title="{{ __('vocabulary.hungary') }}">{{ __('vocabulary.hungary') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="98/iceland/index.html" title="{{ __('vocabulary.iceland') }}">{{ __('vocabulary.iceland') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="122/liechtenstein/index.html" title="{{ __('vocabulary.liechtenstein') }}">{{ __('vocabulary.liechtenstein') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="123/lithuania/index.html" title="{{ __('vocabulary.lithuania') }}">{{ __('vocabulary.lithuania') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="126/macedonia,-the-former-yugoslav-republic-of/index.html" title="{{ __('vocabulary.macedonia') }}">{{ __('vocabulary.macedonia') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="132/malta/index.html" title="{{ __('vocabulary.malta') }}">{{ __('vocabulary.malta') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="140/moldova,-republic-of/index.html" title="{{ __('vocabulary.moldova') }}">{{ __('vocabulary.moldova') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="150/netherlands/index.html" title="{{ __('vocabulary.netherlands') }}">{{ __('vocabulary.netherlands') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="159/northern-mariana-islands/index.html" title="{{ __('vocabulary.northenMarianaIslands') }}">{{ __('vocabulary.northenMarianaIslands') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="160/norway/index.html" title="{{ __('vocabulary.norway') }}">{{ __('vocabulary.norway') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="171/poland/index.html" title="{{ __('vocabulary.poland') }}">{{ __('vocabulary.poland') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">4</span>
                            <a href="172/portugal/index.html" title="{{ __('vocabulary.portugal') }}">{{ __('vocabulary.portugal') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="176/romania/index.html" title="{{ __('vocabulary.romania') }}">{{ __('vocabulary.romania') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="189/serbia-and-montenegro/index.html" title="{{ __('vocabulary.serbia') }}">{{ __('vocabulary.serbia') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="193/slovakia/index.html" title="{{ __('vocabulary.slovakia') }}">{{ __('vocabulary.slovakia') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="194/slovenia/index.html" title="{{ __('vocabulary.slovenia') }}">{{ __('vocabulary.slovenia') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">12</span>
                            <a href="199/spain/index.html" title="{{ __('vocabulary.spain') }}">{{ __('vocabulary.spain') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="205/sweden/index.html" title="{{ __('vocabulary.sweden') }}">{{ __('vocabulary.sweden') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">2</span>
                            <a href="206/switzerland/index.html" title="{{ __('vocabulary.switzerland') }}">{{ __('vocabulary.switzerland') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">2</span>
                            <a href="223/ukraine/index.html" title="{{ __('vocabulary.ukraine') }}">{{ __('vocabulary.ukraine') }}</a>
                        </li>
                        <li class="list-group-item"><span class="badge">1</span>
                            <a href="225/united-kingdom/index.html" title="{{ __('vocabulary.unitedKingdom') }}">{{ __('vocabulary.unitedKingdom') }}</a>
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
                                <img class="img-responsive margin-bottom-30" src="{{ $dealer->image }}" alt="{{ $dealer->name }}">
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
