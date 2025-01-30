{{-- 
<div class="">
    @php
        $has_results = false;
    @endphp
    @if (count($categories) > 0)
        @php
            $has_results = true;
        @endphp
        <div class="px-2 py-1 text-uppercase fs-10 text-right text-muted bg-soft-secondary">{{translate('Category Suggestions')}}</div>
        <ul class="list-group list-group-raw">
            @foreach ($categories as $key => $category)
                <li class="list-group-item py-1">
                    <a class="text-reset hov-text-primary" href="{{ route('products.category', $category->slug) }}">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div> --}}
<div class="" id="searchDiv">
    @php
        $has_results = false;
    @endphp
    @if (count($products) > 0)
        @php
            $has_results = true;
        @endphp
        <div class="px-4 py-3 text-uppercase fs-10 text-right text-muted bg-soft-secondary">{{translate('Products')}}</div>
        <ul class="list-group list-group-raw">
            @foreach ($products as $key => $product)
                <li class="list-group-item">
                    <a class="text-reset" href="{{ route('product', $product->slug) }}">
                        <div class="d-flex search-product align-items-center">
                            <div class="mr-3">
                                <img class="size-40px img-fit rounded" style=" width: 40px;" src="{{ get_product_image($product->thumbnail_img) ?? frontendAsset('img/placeholder.webp') }}">
                            </div>
                            <div class="flex-grow-1 overflow--hidden minw-0">
                                <div class="product-name text-truncate fs-14 mb-5px">
                                    {{ Str::limit($product->name, 75) }}
                                </div>
                                @if (!$product->hide_price)
                                    <div class="">
                                        @if(home_base_price($product) != home_discounted_base_price($product))
                                            <del class="opacity-60 fs-15">{{ home_base_price($product) }}</del>
                                        @endif
                                        <span class="fw-600 fs-16 text-primary">{{ home_discounted_base_price($product) }}</span>
                                    </div>
                                @endif   
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div>

