<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($items as $item)
        <url>
            @if ('product' == $type)
                <loc>{{ route('product', $item->slug) }}</loc>
                @if ($item->thumbnail_img)
                @endif
            @else
                <loc>{{ route('products.category', $item->slug) }}</loc>
            @endif
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>
