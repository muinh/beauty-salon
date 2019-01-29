<div class="header-v6 header-classic-white header-sticky">
    <div class="topbar bg-grey ">
        <div class="container" >
            <div class="row">
                <div class="col-xs-6" >
                    <ul class="top-socials list-inline">
                        <li><a href="https://www.facebook.com" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://plus.google.com" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://www.twitter.com" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://pinterest.com" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="http://www.youtube.com" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="bottom" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-xs-6 text-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm dropdown-toggle top-menu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('/img/flags/en.png') }}" alt="en">&nbsp<i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right lang-menu">
                            <li>
                                <a href="{{ url('/it') }}"><img src="{{ asset('/img/flags/it.png') }}" alt="Entra"></a>
                                <a href="{{ url('/en') }}"><img src="{{ asset('/img/flags/en.png') }}" alt="Enter"></a>
                                <a href="{{ url('/fr') }}"><img src="{{ asset('/img/flags/fr.png') }}" alt="Entrer"></a>
                                <a href="{{ url('/es') }}"><img src="{{ asset('/img/flags/es.png') }}" alt="Entrar"></a>
                                <a href="{{ url('/de') }}"><img src="{{ asset('/img/flags/de.png') }}" alt="Eingeben"></a>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-sm top-menu-btn">
                            &nbsp;<a href="{{ url('/admin') }}">
                                <img src="{{ asset('img/unlock.png') }}" alt="Admin Panel">
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="navbar mega-menu" role="navigation" >
        <div class="container container-space" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

                <!-- Navbar Brand -->
                <div class="navbar-brand"  >
                    <a href="{{ route('home', ['locale' => $locale]) }}"> <img alt="{{ config('app.name') }}" class="shrink-logo" src="{{ asset('img/logo.png') }}" > </a>
                </div>
                <!-- ENd Navbar Brand -->

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="active"> <a href="{{ route('home', $locale) }}">{{ __('vocabulary.home') }}</a></li>
                        <!-- End Home -->

                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">{{ __('vocabulary.company') }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('company-profile', $locale) }}" class="selected">{{ __('vocabulary.profile') }}</a></li>
                                <li><a href="{{ route('company-philosophy', $locale) }}">{{ __('vocabulary.philosophy') }}</a></li>
                                <li><a href="{{ route('company-history', $locale) }}">{{ __('vocabulary.history') }}</a></li>
                                <li><a href="{{ route('company-distribution', $locale) }}">{{ __('vocabulary.distribution') }}</a></li>
                            </ul>
                            <!-- End About Pages -->
                        </li>
                        <!-- Start Dropdpwn Categorie -->
                        <li class="dropdown"><a href="/#" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ __('vocabulary.products') }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('show-categories', $locale) }}">{{ __('vocabulary.categories') }}</a></li>
                                <li class="divider"></li>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('show-products-by-category', ['locale' => $locale, 'categoryId' => $category->id]) }}">
                                            {{ $category->title }}
                                        </a>
                                    </li>
                                @endforeach()
                            </ul>
                        </li>
                        <!-- End Dropdpwn Categorie -->
                        <!-- Start Dropdpwn Linee -->
                        <li class="dropdown">
                            <a href="/#" class="dropdown-toggle" data-toggle="dropdown" role="button">Lines</a>
                            <ul class="dropdown-menu">
                                @foreach($lines as $line)
                                    <li>
                                        <a href="{{ route('show-products-by-line', ['locale' => $locale, 'lineId' => $line->id]) }}">
                                            {{ $line->name }}
                                        </a>
                                    </li>
                                @endforeach()
                            </ul>
                        </li>
                        <!-- End Dropdpwn Linee -->
                        <!-- Designers-->
                        <li class="dropdown "> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">{{ __('vocabulary.designers') }}</a>
                            <ul class="dropdown-menu">
                                @foreach($designers as $designer)
                                    <li>
                                        <a href="{{ route('show-products-by-designer', ['locale' => $locale, 'designerId' => $designer->id]) }}">
                                            {{ $designer->name }}
                                        </a>
                                    </li>
                                @endforeach()
                            </ul>
                        </li>
                        <!-- /Designers -->

                        <!-- Design Center-->
                        <li class="dropdown "> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">{{ __('vocabulary.designCenters') }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('show-salon-layouts', ['locale' => $locale]) }}">{{ __('vocabulary.salonLayouts') }}</a></li>
                                <li><a href="{{ route('show-salon-pictures', ['locale' => $locale]) }}">{{ __('vocabulary.salonPictures') }}</a></li>
                                <li><a href="{{ route('show-salon-showrooms', ['locale' => $locale]) }}">{{ __('vocabulary.showrooms') }}</a></li>
                                <li><a href="{{ route('show-planner', ['locale' => $locale]) }}">{{ __('vocabulary.salonPlanner') }}</a></li>
                            </ul>
                        </li>
                        <!-- /Design Center -->

                        <!-- News-->
                        <li class="">
                            <a href="{{ route('show-news-list', ['locale' => $locale]) }}">{{ __('vocabulary.news') }}</a>
                        </li>
                        <!-- /News -->

                        <!-- Contatti -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">{{ __('vocabulary.contacts') }}</a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{ route('show-contact-emails', ['locale' => $locale]) }}" class="menulink">{{ __('vocabulary.emails') }}</a></li>
                                <li><a href="{{ route('show-info-form', ['locale' => $locale]) }}">{{ __('vocabulary.infoRequests') }}</a></li>
                                <li><a href="{{ route('show-application-form', ['locale' => $locale]) }}">{{ __('vocabulary.sendApplication') }}</a></li>
                                <li><a href="{{ route('show-catalog-request-form', ['locale' => $locale]) }}">{{ __('vocabulary.catalogRequests') }}</a></li>
                            </ul>
                        </li>
                        <!-- /Contatti -->

                        <li class="dropdown search-box">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                &nbsp;<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </a>
                            <ul class="dropdown-menu pull-right col-md-6">
                                <li>
                                    <form action="{{ route('search', ['locale' => $locale]) }}" method="get" id="searchform" class="uk-form uk-navbar-content">
                                        {{ csrf_field() }}
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="term" placeholder="{{ __('vocabulary.searchPlaceholder') }}">
                                            <span class="input-group-btn">
						                        <button class="btn btn-default" type="submit">&nbsp
                                                    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                                                </button>
						                    </span>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/navbar-collapse-->
        </div>
    </div>
    <!-- End Navbar -->
</div>
