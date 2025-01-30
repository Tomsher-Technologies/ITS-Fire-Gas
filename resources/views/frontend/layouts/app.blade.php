<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! SEO::generate() !!}

    @yield('meta')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">
    <!-- Favicon -->
    <link rel="icon" href="{{ frontendAsset('img/fav_icon.png') }}">

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet"> --}}

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

    <link rel="stylesheet" href="{{ frontendAsset('fonts/Linearicons/Linearicons/Font/demo-files/demo.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('css/bulk-style.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('plugins/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('plugins/owl-carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('plugins/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('plugins/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('plugins/lightGallery-master/dist/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('plugins/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ frontendAsset('css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    {{ get_setting('header_script') }}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-219712994-1"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-219712994-1');
    </script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-54TMVXE8G8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-54TMVXE8G8');
    </script>


    <script src="{{ frontendAsset('plugins/jquery.min.js') }}"></script>

    @livewireStyles

    @yield('header')

    <style>
        .menu--mobile .sub-menu {
            padding-left: 15px;
        }
    </style>

<script>
window['_fs_host'] = 'fullstory.com';
window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
window['_fs_org'] = 'o-1XM1CQ-na1';
window['_fs_namespace'] = 'FS';
!function(m,n,e,t,l,o,g,y){var s,f,a=function(h){
return!(h in m)||(m.console&&m.console.log&&m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].'),!1)}(e)
;function p(b){var h,d=[];function j(){h&&(d.forEach((function(b){var d;try{d=b[h[0]]&&b[h[0]](h[1])}catch(h){return void(b[3]&&b[3](h))}
d&&d.then?d.then(b[2],b[3]):b[2]&&b[2](d)})),d.length=0)}function r(b){return function(d){h||(h=[b,d],j())}}return b(r(0),r(1)),{
then:function(b,h){return p((function(r,i){d.push([b,h,r,i]),j()}))}}}a&&(g=m[e]=function(){var b=function(b,d,j,r){function i(i,c){
h(b,d,j,i,c,r)}r=r||2;var c,u=/Async$/;return u.test(b)?(b=b.replace(u,""),"function"==typeof Promise?new Promise(i):p(i)):h(b,d,j,c,c,r)}
;function h(h,d,j,r,i,c){return b._api?b._api(h,d,j,r,i,c):(b.q&&b.q.push([h,d,j,r,i,c]),null)}return b.q=[],b}(),y=function(b){function h(h){
"function"==typeof h[4]&&h[4](new Error(b))}var d=g.q;if(d){for(var j=0;j<d.length;j++)h(d[j]);d.length=0,d.push=h}},function(){
(o=n.createElement(t)).async=!0,o.crossOrigin="anonymous",o.src="https://"+l,o.onerror=function(){y("Error loading "+l)}
;var b=n.getElementsByTagName(t)[0];b&&b.parentNode?b.parentNode.insertBefore(o,b):n.head.appendChild(o)}(),function(){function b(){}
function h(b,h,d){g(b,h,d,1)}function d(b,d,j){h("setProperties",{type:b,properties:d},j)}function j(b,h){d("user",b,h)}function r(b,h,d){j({
uid:b},d),h&&j(h,d)}g.identify=r,g.setUserVars=j,g.identifyAccount=b,g.clearUserCookie=b,g.setVars=d,g.event=function(b,d,j){h("trackEvent",{
name:b,properties:d},j)},g.anonymize=function(){r(!1)},g.shutdown=function(){h("shutdown")},g.restart=function(){h("restart")},
g.log=function(b,d){h("log",{level:b,msg:d})},g.consent=function(b){h("setIdentity",{consent:!arguments.length||b})}}(),s="fetch",
f="XMLHttpRequest",g._w={},g._w[f]=m[f],g._w[s]=m[s],m[s]&&(m[s]=function(){return g._w[s].apply(this,arguments)}),g._v="2.0.0")
}(window,document,window._fs_namespace,"script",window._fs_script);
</script>

</head>

<body>
    <!-- aiz-main-wrapper -->
    @include('frontend.inc.header')

    @yield('content')

    @include('frontend.inc.footer')

    @yield('modal')

    @include('frontend.inc.product_quick_view')

    <!-- SCRIPTS -->
    <script src="{{ frontendAsset('plugins/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/popper.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/masonry.pkgd.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/slick/slick/slick.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/slick-animation.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/lightGallery-master/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/sticky-sidebar/dist/sticky-sidebar.min.js') }}"></script>
    <script src="{{ frontendAsset('plugins/select2/dist/js/select2.full.min.js') }}"></script>
    {{-- <script src="{{ frontendAsset('plugins/gmap3.min.js') }}"></script> --}}
    <script src="{{ frontendAsset('js/main.js') }}"></script>
    <script src="{{ frontendAsset('js/product_functions.js') }}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    @yield('script')

    @stack('scripts')

    {{ get_setting('footer_script') }}

    <div class="whtsapp-link">
        <a href="https://wa.link/ki5sfu" target="_blank">
            <div class="whatsapp-icon">
                <img src="{{ asset('assets/img/whats-app-logo.svg') }}" alt="whatsapp-chat" style="margin-top: 0px;">
            </div>
            <h5>Chat Now</h5>
        </a>
    </div>

    <script>
        var config = {
            routes: {
                prodcut_quick_view: "{{ route('product.quick_view') }}",
                newsletter: "{{ route('subscribers.store') }}",
                enquiry_add: "{{ route('enquiry.add') }}",
                enquiry_remove: "{{ route('enquiry.remove') }}",
                wishlist_add: "{{ route('wishlists.store') }}",
                cart_add: "{{ route('cart.addToCart') }}",
                cart_remove: "{{ route('cart.removeFromCart') }}",
                ajax_search: "{{ route('search.ajax') }}",
            },
            csrf: "{{ csrf_token() }}",
        };

        if ($('#currency-change').length > 0) {
            $('#currency-change .ps-dropdown-menu a').each(function() {
                $(this).on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var currency_code = $this.data('currency');
                    $.post('{{ route('currency.change') }}', {
                            _token: "{{ csrf_token() }}",
                            currency_code: currency_code
                        },
                        function(data) {
                            location.reload();
                        });

                });
            });
        }

        $('#input-search').on('keyup', function(){
            search();
        });

        $('#search-category').on('change', function(){
            search();
        });

        $('#input-search').on('focus', function(){
            // search();
        });

        function search(){
            var searchKey = $('#input-search').val();
            var searchCategory = $('#search-category').val();
            // alert(searchCategory);
            if(searchKey.length > 0){
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', {_token: '{{ csrf_token() }}', keyword:searchKey, category:searchCategory}, function(data){
                    if(data == '0'){
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+searchKey+'"</strong>');
                        $('.search-preloader').addClass('d-none');

                    }
                    else{
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            }
            else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        $(document).on('click', function (event) {
            const target = $(event.target);
            if (!target.closest('#searchDiv').length) {
                $('#searchDiv').hide(); // Hide the div
                $('.typed-search-box').addClass('d-none');
            }
        });

    </script>

    @livewireScripts

    <script>
        window.addEventListener('updateCartCount', event => {
            $('.headerCartCount').html(event.detail.count);
        })
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6565be531db16644c555700a/1hgamutq7';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
