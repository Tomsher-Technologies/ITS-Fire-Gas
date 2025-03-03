<div class="header__top">
    <div class="ps-container align-items-center">
        <div class="header__left">
            <a class="ps-logo" href="{{ route('home') }}" title="Home">
                <img src="{{ frontendAsset('img/logo_new.webp') }}" alt="{{ env('APP_NAME') }}" width="200">
            </a>
        </div>
        <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
            <div class="header__center position-relative flex-grow-1">
                <form class="ps-form--quick-search" action="{{ route('search') }}" method="get">
                    <div class="form-group--icon"><i class="icon-chevron-down"></i>
                        <select id="search-category" name="category" class="form-control">
                            <option value="0" selected="selected">All</option>
                            @foreach (getAllCategories()->where('parent_id', 0) as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @if ($item->child)
                                    @foreach ($item->child as $cat)
                                        @include('frontend.product.categories.menu_child_category', [
                                            'category' => $cat,
                                            'selected_id' => 0,
                                        ])
                                    @endforeach
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <input class="form-control" name="keyword" type="text" placeholder="I'm shopping for..."
                        id="input-search" value="" />
                    <button type="submit" aria-label="Search"><i class="icon-magnifier"></i></button>
                </form>
                <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100 mt-2" style="min-height: 40px;z-index: 1000;">
                    <div class="search-preloader absolute-top-center">
                        <div class="dot-loader"><div></div><div></div><div></div></div>
                    </div>
                    <div class="search-nothing d-none p-3 text-center fs-16">

                    </div>
                    <div id="search-content" class="text-left" style="max-height: 600px;overflow-y: auto;overflow-x: hidden;">

                    </div>
                </div>
            </div>
        </div>
        <div class="header__right">
            <div class="header__actions">
                {{-- <a class="header__extra" href="{{ route('enquiry.index') }}" title="Get A Quote">
                    <i class="iconly-Swap icli"></i>
                    <span class="count">
                        <i class="headerEnquiryCount">{{ enquiryCount() }}</i>
                    </span>
                </a> --}}
                <a class="header__extra" href="{{ route('wishlists.index') }}" title="Wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span class="count">
                        <i class="headerWishlistCount">{{ wishListCount() }}</i>
                    </span>
                </a>

                <div class="ps-cart--mini">
                    <a class="header__extra" href="{{ route('cart') }}" title="Cart">
                        <i class="iconly-Bag-2 icli"></i>
                        <span class="count"><i class="headerCartCount">{{ cartCount() }}</i></span>
                    </a>
                    @livewire('frontend.mini-cart')
                </div>
                <div class="ps-block--user-header">
                    <div class="ps-block__left">
                        <i class="iconly-Profile icli"></i>
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
</div>
