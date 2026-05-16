@php
    $articles = [
        'meet-prinsipal-rusia' => [
            'title' => 'PT. Indotek Prima Jaya Meeting with Russian Principal for Strategic Collaboration',
            'date' => 'June 12, 2026',
            'category' => 'Strategic Partnership',
            'excerpt' => 'PT. Indotek Prima Jaya recently hosted a high-level meeting with our esteemed Russian principals to discuss the future of industrial automation.',
            'content' => 'In a significant step towards strengthening international industrial ties, PT. Indotek Prima Jaya hosted a comprehensive strategic meeting with our Russian principals. The discussion focused on the introduction of next-generation analytical equipment and the expansion of technical support services for the Indonesian market.',
            'image' => asset('assets/news/meet-prinsipal-rusia/meet-prinsipal-rusia.webp'),
            'read_time' => '8 min read',
            'gallery' => [asset('assets/news/meet-prinsipal-rusia/meet-prinsipal-rusia.webp')]
        ],
        'prima-jaya-berbagi' => [
            'title' => 'Indotek Prima Jaya Berbagi: A Social Responsibility Initiative',
            'date' => 'May 25, 2026',
            'category' => 'Social Responsibility',
            'excerpt' => 'Our annual community sharing event was successfully held to support local communities and foster togetherness.',
            'content' => 'Corporate Social Responsibility is at the heart of our values. Through our "Prima Jaya Berbagi" program, we conducted a charity event aimed at supporting underprivileged communities near our operational areas.',
            'image' => asset('assets/news/prima-jaya-berbagi/1.webp'),
            'read_time' => '4 min read',
            'gallery' => [asset('assets/news/prima-jaya-berbagi/1.webp'), asset('assets/news/prima-jaya-berbagi/2.webp'), asset('assets/news/prima-jaya-berbagi/3.webp')]
        ],
        'sponsor-sekolah-bola-RSS' => [
            'title' => 'Supporting Youth: Indotek Prima Jaya Sponsors RSS Soccer School',
            'date' => 'April 18, 2026',
            'category' => 'Sponsorship',
            'excerpt' => 'Investing in the next generation of Indonesian athletes and promoting a healthy lifestyle.',
            'content' => 'We are proud to announce our official sponsorship of the RSS Soccer School, providing improved training facilities and equipment for young athletes.',
            'image' => asset('assets/news/sponsor-sekolah-bola-RSS/1.webp'),
            'read_time' => '6 min read',
            'gallery' => [asset('assets/news/sponsor-sekolah-bola-RSS/1.webp'), asset('assets/news/sponsor-sekolah-bola-RSS/2.webp')]
        ]
    ];

    $currentArticle = $slug && isset($articles[$slug]) ? $articles[$slug] : null;
@endphp

@extends('layouts.app')

@section('title', $currentArticle ? $currentArticle['title'] . ' - News' : 'News & Updates - PT. Indotek Prima Jaya')

@section('content')
    @if($currentArticle)
    <!-- Article Detail View (Using a consistent premium layout) -->
    <article class="relative pt-32 pb-24 overflow-hidden bg-white">
        <div class="absolute top-0 left-0 w-full h-48 bg-linear-to-b from-slate-50 to-transparent z-10 pointer-events-none opacity-60"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="flex items-center gap-4 mb-8" data-aos="fade-up">
                <a href="{{ route('news') }}" class="text-xs font-black text-slate-400 hover:text-sky-600 transition-colors uppercase tracking-widest">News</a>
                <div class="w-1 h-1 rounded-full bg-slate-300"></div>
                <span class="text-xs font-black text-sky-600 uppercase tracking-widest">{{ $currentArticle['category'] }}</span>
            </div>
            <h1 class="text-2xl lg:text-6xl font-black text-slate-900 leading-tight tracking-tight mb-8" data-aos="fade-up">{{ $currentArticle['title'] }}</h1>
            <div class="mb-12" data-aos="fade-up">
                <!-- Spacing only -->
            </div>
            <div class="aspect-video rounded-[40px] overflow-hidden shadow-2xl mb-12" data-aos="zoom-in">
                <img src="{{ $currentArticle['image'] }}" class="w-full h-full object-cover" alt="{{ $currentArticle['title'] }}">
            </div>
            <div class="prose prose-lg max-w-none text-slate-600 font-medium leading-relaxed mb-16" data-aos="fade-up">
                <p class="text-lg lg:text-xl text-slate-900 font-bold mb-8">{{ $currentArticle['excerpt'] }}</p>
                <p>{{ $currentArticle['content'] }}</p>
            </div>
            @if(count($currentArticle['gallery']) > 1)
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up">
                @foreach($currentArticle['gallery'] as $img)
                <div class="aspect-video rounded-3xl overflow-hidden shadow-lg">
                    <img src="{{ $img }}" class="w-full h-full object-cover" alt="Gallery">
                </div>
                @endforeach
            </div>
            @endif
            <div class="mt-20 pt-10 border-t border-slate-100">
                <a href="{{ route('news') }}" class="inline-flex items-center gap-3 text-slate-900 font-black text-xs uppercase tracking-widest hover:text-sky-600 transition-colors">
                    <iconify-icon icon="solar:alt-arrow-left-linear" class="text-xl"></iconify-icon>
                    Back to All News
                </a>
            </div>
        </div>
    </article>
    @else
    <!-- Reverting to Original Layout Structure -->
    <section class="relative pt-18 pb-20 lg:pb-32 overflow-hidden bg-white">
        <div class="absolute top-0 left-0 w-full h-32 bg-linear-to-b from-slate-50 to-transparent z-10 pointer-events-none opacity-50"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-20">
                
                <!-- Left: Large Featured Article (Russian Principal) -->
                @php $featured = $articles['meet-prinsipal-rusia']; @endphp
                <div class="lg:col-span-8 space-y-8" data-aos="fade-up">
                    <a href="{{ route('news', 'meet-prinsipal-rusia') }}" class="group block relative h-80 lg:h-[500px] overflow-hidden rounded-lg shadow-2xl">
                        <img src="{{ $featured['image'] }}" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Featured News">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                        <div class="absolute bottom-10 left-10 right-10 space-y-4">
                            <span class="inline-block px-3 py-1 rounded-full bg-sky-700 text-white text-[10px] font-black uppercase tracking-widest">Featured Article</span>
                            <h2 class="text-lg lg:text-5xl font-black text-white tracking-tight leading-tight group-hover:text-sky-400 transition-colors">
                                {{ $featured['title'] }}
                            </h2>
                        </div>
                    </a>
                    
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 bg-white p-8 rounded-lg shadow-sm border border-slate-100">
                        <div class="flex items-center gap-4 text-slate-400 text-xs font-bold uppercase tracking-widest">
                            <span class="text-sky-700">{{ $featured['category'] }}</span>
                        </div>
                        <a href="{{ route('news', 'meet-prinsipal-rusia') }}" class="flex items-center gap-3 bg-slate-900 text-white px-8 py-3 rounded-md font-black text-[11px] uppercase tracking-widest hover:bg-sky-700 transition-all group/btn shadow-lg shadow-slate-900/10">
                            Read Full Article
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg transition-transform group-hover/btn:translate-x-1"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- Right: Small Article List (Charity & Sponsorship) -->
                <div class="lg:col-span-4 space-y-10" data-aos="fade-left">
                    @foreach(['prima-jaya-berbagi', 'sponsor-sekolah-bola-RSS'] as $slug)
                    @php $item = $articles[$slug]; @endphp
                    <a href="{{ route('news', $slug) }}" class="grid grid-cols-12 gap-6 group">
                        <div class="col-span-8 space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 leading-snug group-hover:text-sky-700 transition-colors line-clamp-2">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-[13px] text-slate-500 line-clamp-2 leading-relaxed">
                                {{ $item['excerpt'] }}
                            </p>
                            <div class="flex items-center gap-3 text-[11px] font-black uppercase tracking-widest">
                                <span class="text-sky-700">{{ $item['category'] }}</span>
                            </div>
                        </div>
                        <div class="col-span-4 h-24 overflow-hidden rounded-lg shadow-md group-hover:shadow-lg transition-all">
                            <img src="{{ $item['image'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="News Image">
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Bottom Section: Latest Articles Grid -->
            <div class="space-y-12 mb-20">
                <div class="flex items-center justify-between border-b border-slate-100 pb-6" data-aos="fade-up">
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Latest Articles</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach($articles as $slug => $article)
                    <div class="space-y-6" data-aos="fade-up">
                        <a href="{{ route('news', $slug) }}" class="block space-y-6 group">
                            <div class="relative h-56 overflow-hidden rounded-lg shadow-lg">
                                <img src="{{ $article['image'] }}" 
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Grid Item">
                                <div class="absolute top-4 left-4">
                                    <span class="bg-sky-700 text-white px-3 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider shadow-lg">{{ $article['category'] }}</span>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <h4 class="text-lg font-bold text-slate-900 leading-snug group-hover:text-sky-700 transition-colors line-clamp-2">
                                    {{ $article['title'] }}
                                </h4>
                                <p class="text-sm text-slate-500 leading-relaxed line-clamp-2">
                                    {{ $article['excerpt'] }}
                                </p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-8" data-aos="fade-up">
            <div class="space-y-4">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight uppercase">Stay Tuned</h2>
                <p class="text-slate-500 font-medium max-w-xl mx-auto uppercase tracking-wider">
                    Stay tuned for further updates and information regarding Indotek
                </p>
            </div>
        </div>
    </section>
    @endif
@endsection
