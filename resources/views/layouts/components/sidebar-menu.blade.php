<ul class="list-group sidebar-nav-v1" id="sidebar-nav">
    @if ($menus !== null)
        @foreach($menus as $id => $menu)
            <li class="list-group-item">
                <a href="{{ url(sprintf($sidebarTemplate, $id)) }}" class="selected">{{ $menu }}</a>
            </li>
        @endforeach
    @endif
</ul>
