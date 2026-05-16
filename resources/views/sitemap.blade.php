<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Base Pages -->
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('/about') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/contact') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <!-- Products -->
    <url>
        <loc>{{ url('/product') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @php
        $products = [
            'zirconia-analyzer',
            'emissions-monitoring',
            'water-analyzer',
            'flow-meter',
            'transmitter',
            'fittings-regulator',
            'in-situ-oxygen-probe',
            'control-valve',
            'industrial-valve'
        ];
    @endphp
    @foreach($products as $product)
    <url>
        <loc>{{ url('/product/' . $product) }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    <!-- Services -->
    <url>
        <loc>{{ url('/service') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @php
        $services = [
            'transformator',
            'pump'
        ];
    @endphp
    @foreach($services as $service)
    <url>
        <loc>{{ url('/service/' . $service) }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    <!-- News -->
    <url>
        <loc>{{ url('/news') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @php
        $articles = [
            'meet-prinsipal-rusia',
            'prima-jaya-berbagi',
            'sponsor-sekolah-bola-RSS'
        ];
    @endphp
    @foreach($articles as $article)
    <url>
        <loc>{{ url('/news/' . $article) }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach
</urlset>
