@if ($menuType === 'product')
    <div class="tab-v1">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#cat" data-toggle="tab">{{ __('vocabulary.categories') }}</a></li>
            <li><a href="#lin" data-toggle="tab">{{ __('vocabulary.lines') }}</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="cat">
                <ul class="list-group sidebar-nav-v1 margin-bottom-30" id="sidebar-nav">
                    @isset($categoryMenus)
                        @foreach($categoryMenus as $id => $menu)
                            <li class="list-group-item">
                                <a href="{{ route('show-products-by-category', ['locale' => $locale, 'categoryId' => $id]) }}" class="selected">
                                    {{ $menu }}
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="tab-pane fade in " id="lin">
                <ul class="list-group sidebar-nav-v1 margin-bottom-30" id="sidebar-nav">
                    @isset($lineMenus)
                        @foreach($lineMenus as $id => $menu)
                            <li class="list-group-item">
                                <a href="{{ route('show-products-by-line', ['locale' => $locale, 'lineId' => $id]) }}" class="selected">{{ $menu }}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
@elseif ($menuType === 'company')
    <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
        <li class="list-group-item"><a href="{{ route('company-profile', 'en') }}" class="selected">{{ __('vocabulary.profile') }}</a></li>
        <li class="list-group-item"><a href="{{ route('company-philosophy', 'en') }}">{{ __('vocabulary.philosophy') }}</a></li>
        <li class="list-group-item"><a href="{{ route('company-history', 'en') }}">{{ __('vocabulary.history') }}</a></li>
        <li class="list-group-item"><a href="{{ route('company-distribution', 'en') }}">{{ __('vocabulary.distribution') }}</a></li>
    </ul>
@elseif ($menuType === 'designer')
    <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
        @foreach($designerMenus as $id => $name)
            <li class="list-group-item">
                <a href="{{ route('show-products-by-designer', ['locale' => $locale, 'designerId' => $id]) }}" class="selected">{{ $name }}</a>
            </li>
        @endforeach
    </ul>
@elseif ($menuType === 'design-center')
    <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
        <li class="list-group-item"><a href="{{ route('show-salon-layouts', ['locale' => $locale]) }}" class="selected">{{ __('vocabulary.salonLayouts') }}</a></li>
        <li class="list-group-item"><a href="{{ route('show-salon-pictures', ['locale' => $locale]) }}">{{ __('vocabulary.salonPictures') }}</a></li>
        <li class="list-group-item"><a href="{{ route('show-salon-showrooms', ['locale' => $locale]) }}">{{ __('vocabulary.showrooms') }}</a></li>
        <li class="list-group-item"><a href="{{ route('show-planner', ['locale' => $locale]) }}">{{ __('vocabulary.salonPlanner') }}</a></li>
    </ul>
@elseif ($menuType === 'contacts')
    <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
        <li class="list-group-item"><a href="{{ route('show-contact-emails', ['locale' => $locale]) }}" class="menulink">{{ __('vocabulary.emails') }}</a></li>
        <li class="list-group-item"><a href="{{ route('show-info-form', ['locale' => $locale]) }}">{{ __('vocabulary.infoRequests') }}</a></li>
        <li class="list-group-item"><a href="{{ route('show-application-form', ['locale' => $locale]) }}">{{ __('vocabulary.sendApplication') }}</a></li>
        <li class="list-group-item"><a href="{{ route('show-catalog-request-form', ['locale' => $locale]) }}">{{ __('vocabulary.catalogRequests') }}</a></li>
    </ul>
@endif
