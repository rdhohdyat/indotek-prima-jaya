@extends('layouts.app')

@section('title', 'News & Updates - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-18 pb-20 lg:pb-32 overflow-hidden bg-white">
        <!-- Mist Effect Top -->
        <div class="absolute top-0 left-0 w-full h-32 bg-linear-to-b from-slate-50 to-transparent z-10 pointer-events-none opacity-50"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <!-- Top Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-20">
                
                <!-- Left: Large Featured Article -->
                <div class="lg:col-span-8 space-y-8" data-aos="fade-up">
                    <a href="{{ route('news.detail') }}" class="group block relative h-80 lg:h-[500px] overflow-hidden rounded-lg shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1200" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Featured News">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                        <div class="absolute bottom-10 left-10 right-10 space-y-4">
                            <span class="inline-block px-3 py-1 rounded-full bg-sky-700 text-white text-[10px] font-black uppercase tracking-widest">Featured Article</span>
                            <h1 class="text-3xl lg:text-5xl font-black text-white tracking-tight leading-tight group-hover:text-sky-400 transition-colors">
                                The Future of Industrial Automation: Key Trends to Watch
                            </h1>
                        </div>
                    </a>
                    
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 bg-white p-8 rounded-lg shadow-sm border border-slate-100">
                        <div class="flex items-center gap-4 text-slate-400 text-xs font-bold uppercase tracking-widest">
                            <div class="flex items-center gap-2">
                                <iconify-icon icon="solar:calendar-linear" class="text-lg text-sky-700"></iconify-icon>
                                <span>May 15, 2026</span>
                            </div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-200"></div>
                            <span>8 min read</span>
                        </div>
                        <a href="{{ route('news.detail') }}" class="flex items-center gap-3 bg-slate-900 text-white px-8 py-3 rounded-md font-black text-[11px] uppercase tracking-widest hover:bg-sky-700 transition-all group/btn shadow-lg shadow-slate-900/10">
                            Read Full Article
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg transition-transform group-hover/btn:translate-x-1"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- Right: Small Article List -->
                <div class="lg:col-span-4 space-y-10" data-aos="fade-left">
                    <!-- Small Item 1 -->
                    <a href="#" class="grid grid-cols-12 gap-6 group">
                        <div class="col-span-8 space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 leading-snug group-hover:text-sky-700 transition-colors line-clamp-2">
                                PT. Indotek Prima Jaya Expands Strategic Partnership with Fuji Electric
                            </h3>
                            <p class="text-[13px] text-slate-500 line-clamp-2 leading-relaxed">
                                The collaboration aims to bring advanced automation solutions to the Indonesian manufacturing sector...
                            </p>
                            <div class="flex items-center gap-3 text-[11px] font-black uppercase tracking-widest">
                                <span class="text-sky-700">Company</span>
                                <div class="w-1 h-1 rounded-full bg-slate-200"></div>
                                <span class="text-slate-400">4 min read</span>
                            </div>
                        </div>
                        <div class="col-span-4 h-24 overflow-hidden rounded-lg shadow-md group-hover:shadow-lg transition-all">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=400" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="News 2">
                        </div>
                    </a>

                    <!-- Small Item 2 -->
                    <a href="#" class="grid grid-cols-12 gap-6 group">
                        <div class="col-span-8 space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 leading-snug group-hover:text-sky-700 transition-colors line-clamp-2">
                                New Safety Standards for Refinery Maintenance in 2024
                            </h3>
                            <p class="text-[13px] text-slate-500 line-clamp-2 leading-relaxed">
                                Understanding the latest regulations to ensure zero-accident operations in high-risk industrial environments...
                            </p>
                            <div class="flex items-center gap-3 text-[11px] font-black uppercase tracking-widest">
                                <span class="text-sky-700">Safety</span>
                                <div class="w-1 h-1 rounded-full bg-slate-200"></div>
                                <span class="text-slate-400">6 min read</span>
                            </div>
                        </div>
                        <div class="col-span-4 h-24 overflow-hidden rounded-lg shadow-md group-hover:shadow-lg transition-all">
                            <img src="https://images.unsplash.com/photo-1542337311-64d17ec23f14?auto=format&fit=crop&q=80&w=400" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="News 3">
                        </div>
                    </a>

                    <!-- Small Item 3 -->
                    <a href="#" class="grid grid-cols-12 gap-6 group">
                        <div class="col-span-8 space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 leading-snug group-hover:text-sky-700 transition-colors line-clamp-2">
                                How IoT is Transforming Supply Chain Management
                            </h3>
                            <p class="text-[13px] text-slate-500 line-clamp-2 leading-relaxed">
                                Real-time tracking and predictive analytics are becoming essential for modern logistics...
                            </p>
                            <div class="flex items-center gap-3 text-[11px] font-black uppercase tracking-widest">
                                <span class="text-sky-700">Technology</span>
                                <div class="w-1 h-1 rounded-full bg-slate-200"></div>
                                <span class="text-slate-400">2 min read</span>
                            </div>
                        </div>
                        <div class="col-span-4 h-24 overflow-hidden rounded-lg shadow-md group-hover:shadow-lg transition-all">
                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=400" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="News 4">
                        </div>
                    </a>
                </div>
            </div>

            <!-- Middle Row: Overlay Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
                <!-- Overlay Card 1 -->
                <a href="#" class="group relative h-[350px] overflow-hidden rounded-[32px] shadow-2xl" data-aos="zoom-in" data-aos-delay="0">
                    <img src="https://images.unsplash.com/photo-1521791136366-3e206e00072b?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Overlay 1">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-10 left-10 right-10 space-y-4">
                        <div class="flex items-center gap-3 text-[11px] font-black uppercase tracking-[0.2em] text-white/80">
                            <span>Industry</span>
                            <div class="w-1 h-1 rounded-full bg-white/30"></div>
                            <span>24 hours ago</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white leading-tight">
                            The Future of Sustainable Power Generation in Southeast Asia
                        </h3>
                    </div>
                </a>

                <!-- Overlay Card 2 -->
                <a href="#" class="group relative h-[350px] overflow-hidden rounded-[32px] shadow-2xl" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1473081556163-2a17de81fc97?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Overlay 2">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-10 left-10 right-10 space-y-4">
                        <div class="flex items-center gap-3 text-[11px] font-black uppercase tracking-[0.2em] text-white/80">
                            <span>Automation</span>
                            <div class="w-1 h-1 rounded-full bg-white/30"></div>
                            <span>24 hours ago</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white leading-tight">
                            Implementing Advanced Robotics for Precise Manufacturing
                        </h3>
                    </div>
                </a>
            </div>

            <!-- Bottom Section: Latest Articles -->
            <div class="space-y-12 mb-20">
                <div class="flex items-center justify-between border-b border-slate-100 pb-6" data-aos="fade-up">
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Lastest Articles</h2>
                    <a href="#" class="group flex items-center gap-2 text-[12px] font-black uppercase tracking-widest text-sky-600">
                        Show More
                        <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg transition-transform group-hover:translate-x-1"></iconify-icon>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Article Item -->
                    <div class="space-y-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="relative h-56 overflow-hidden rounded-lg group shadow-lg">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=600" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Grid Item">
                            <div class="absolute top-4 left-4">
                                <span class="bg-sky-700 text-white px-3 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider shadow-lg">Industry</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <span class="text-[11px] text-slate-400 font-bold uppercase tracking-widest">May 15, 2024</span>
                            <h4 class="text-lg font-bold text-slate-900 leading-snug group-hover:text-sky-700 transition-colors">
                                Key Benefits of Regular Maintenance for Industrial Boilers
                            </h4>
                            <p class="text-sm text-slate-500 leading-relaxed line-clamp-2">
                                Ensuring longevity and safety by following a rigorous scheduled maintenance plan for steam boilers...
                            </p>
                        </div>
                    </div>

                    <!-- Repeat for more items if needed -->
                    <div class="space-y-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative h-56 overflow-hidden rounded-lg group shadow-lg">
                            <img src="https://images.unsplash.com/photo-1513828583688-c52646db42da?auto=format&fit=crop&q=80&w=600" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Grid Item">
                            <div class="absolute top-4 left-4">
                                <span class="bg-sky-700 text-white px-3 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider shadow-lg">Business</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <span class="text-[11px] text-slate-400 font-bold uppercase tracking-widest">May 12, 2024</span>
                            <h4 class="text-lg font-bold text-slate-900 leading-snug group-hover:text-sky-700 transition-colors">
                                Building Trust Through Reliable Supply Chains
                            </h4>
                            <p class="text-sm text-slate-500 leading-relaxed line-clamp-2">
                                How integrity and quality assurance form the foundation of successful supplier partnerships...
                            </p>
                        </div>
                    </div>

                    <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative h-56 overflow-hidden rounded-lg group shadow-lg">
                            <img src="https://images.unsplash.com/photo-1549923746-c502d488b3ea?auto=format&fit=crop&q=80&w=600" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Grid Item">
                            <div class="absolute top-4 left-4">
                                <span class="bg-sky-700 text-white px-3 py-1 rounded-lg text-[10px] font-black uppercase tracking-wider shadow-lg">Support</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <span class="text-[11px] text-slate-400 font-bold uppercase tracking-widest">May 10, 2024</span>
                            <h4 class="text-lg font-bold text-slate-900 leading-snug group-hover:text-sky-700 transition-colors">
                                Enhancing Customer Experience with Expert Support
                            </h4>
                            <p class="text-sm text-slate-500 leading-relaxed line-clamp-2">
                                Why technical consultation is key to helping clients choose the right tools for their operations...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section (Clean Version) -->
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
@endsection
