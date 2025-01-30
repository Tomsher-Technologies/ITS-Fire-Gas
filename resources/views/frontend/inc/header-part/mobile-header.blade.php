<header class="header header--mobile" data-sticky="true">
    {{-- <div class="header__top">
            <div class="header__left">
                <p>Welcome to ITS Online Shopping Store !</p>
            </div>
            <div class="header__right">
                <ul class="navigation__extra">
                    <li><a href="#">Sell on ITS</a></li>
                    <li><a href="#">Tract your order</a></li>
                    <li>
                        <div class="ps-dropdown"><a href="#">US Dollar</a>
                            <ul class="ps-dropdown-menu">
                                <li><a href="#">Us Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div> --}}
    <div class="navigation--mobile">
        <div class="navigation__left">
            <a class="ps-logo" href="{{ route('home') }}" title="Home">
                <img src="{{ frontendAsset('img/logo_new.webp') }}" alt="{{ env('APP_NAME') }}" width="150">
            </a>
        </div>
        <div class="navigation__right">
            <div class="header__actions">
                <div class="ps-block--user-header">
                    <div class="ps-block__left">
                        <i class="iconly-Profile icli"></i>
                        @auth
                            @if (isAdmin())
                                <a href="{{ route('admin.dashboard') }}" title="My Acount"><i class="icon-user"></i></a>
                            @else
                                <a href="{{ route('dashboard') }}" title="My Acount"><i class="icon-user"></i></a>
                            @endif
                        @endauth
                    </div>
                    <div class="ps-block__right">
                        @auth
                            @if (isAdmin())
                                <a href="{{ route('admin.dashboard') }}" title="My Acount">My Acount</a>
                            @else
                                <a href="{{ route('dashboard') }}" title="My Acount">My Acount</a>
                            @endif
                            <a href="{{ route('logout') }}" title="Logout">Logout</a>
                        @else
                            <a href="{{ route('user.login') }}" title="Login">Login</a>
                            <a href="{{ route('user.login', [
                                'register' => true,
                            ]) }}"
                                title="Register">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="ps-search--mobile">
        <form class="ps-form--search-mobile" action="index.html" method="get">
            <div class="form-group--nest">
                <input class="form-control" type="text" placeholder="Search something..." />
                <button aria-label="Search"><i class="icon-magnifier"></i></button>
            </div>
        </form>
    </div> --}}
</header>
<div class="ps-site-overlay"></div>
<div class="ps-panel--sidebar" id="cart-mobile">
    <div class="ps-panel__header">
        <h3>Shopping Cart</h3>
    </div>
    <div class="navigation__content">

        @livewire('frontend.mini-cart', [
            'layout' => 2,
        ])


    </div>
</div>

<div class="ps-panel--sidebar" id="navigation-mobile">
    <div class="ps-panel__header">
        <h3>Categories</h3>
    </div>
    <div class="ps-panel__content">
        <div class="menu--product-categories">
            <ul class="menu--mobile">

                @foreach (getAllCategories()->where('parent_id', 0) as $cat)
                    @include('frontend.product.categories.mobile_menu_category', [
                        'category' => $cat,
                    ])
                @endforeach

            </ul>
        </div>
    </div>
</div>


<div class="ps-panel--sidebar" id="search-sidebar">
    @livewire('frontend.mobile-search')
</div>

<div class="ps-panel--sidebar" id="menu-mobile">
    <div class="ps-panel__header">
        <h3>Menu</h3>
    </div>
    <div class="ps-panel__content">
        <ul class="menu--mobile">


            @php
                $header_menu = getMenu(1);
            @endphp


            @foreach ($header_menu as $menu)
                @if ($menu['child'])
                    <li class="menu-item-has-children">
                        <a title="{{ $menu['label'] }}">{{ $menu['label'] }}</a>
                        <span class="sub-toggle"></span>
                        <ul class="sub-menu">
                            @foreach ($menu['child'] as $child)
                                <li class="">
                                    <a href="{{ $child['link'] }}" title="{{ $child['label'] }}">
                                        {{ $child['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{ $menu['link'] }}" title="{{ $menu['label'] }}">{{ $menu['label'] }}
                        </a>
                    </li>
                @endif
            @endforeach

        </ul>
    </div>
</div>

<div class="navigation--list">
    <div class="navigation__content">
        <a class="navigation__item ps-toggle--sidebar" href="#menu-mobile">
            <i class="icon-menu"></i>
            <span> Menu</span>
        </a>
        <a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile">
            <i class="icon-list4"></i>
            <span> Categories</span>
        </a>
        <a class="navigation__item ps-toggle--sidebar" href="#search-sidebar">
            <i class="icon-magnifier"></i>
            <span>
                Search</span>
        </a>
        <a class="navigation__item ps-toggle--sidebar" href="#cart-mobile">
            <i class="icon-bag2"></i>
            <span>
                Cart</span>
        </a>
    </div>
</div>

{{-- <div id="loader-wrapper">
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div> --}}
