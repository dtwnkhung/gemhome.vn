@isset($menus)   

    <ul class="clearfix"
        data-menu="{{ !!is_null(Route::current()) ? false : Route::current()->getName() . \Request::path() }}"
    >
        @foreach ($menus as $menu)
            @if ($menu->parent_id == '0')
                <li id="sticky-nav-menu-item-{{ $menu->id }}"
                class="@if(\Request::path() == trim($menu->link, '/')) active @endif menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub narrow">
                    <a href="{{ $menu->link }}" class=" current "><span class="item_outer"><span class="item_text">
                    {{ $menu->title }}
                    </span><span class="plus"></span><i
                        class="mkdf-menu-arrow _fa _fa-angle-down"></i></span></a>
                    @if (count($menu->childs) > 0)
                        <ul>
                            @foreach ($menu->childs as $child)
                                <li>
                                    <a href="{{ $child->link }}">{!! $child->title !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>

@endif