@extends('layouts.app')

@section('title', 'News & Updates - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 pb-28 lg:pt-32 lg:pb-40 overflow-hidden" 
             style="background: url('{{ asset('assets/news-bg.png') }}'); background-size: cover; background-position: center;">
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-8 space-y-8 relative z-10" data-aos="fade-right">
                    <!-- Awan putih / gradient kabut -->
                    <div class="absolute -inset-x-12 -inset-y-10 -z-10 pointer-events-none">
                        <div class="w-full h-full 
                                        bg-[radial-gradient(ellipse_at_center,rgba(255,255,255,1)_0%,rgba(255,255,255,0.95)_38%,rgba(255,255,255,0.7)_58%,rgba(255,255,255,0)_78%)]
                                        blur-2xl">
                        </div>
                    </div>

                    <div class="space-y-3">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">LATEST UPDATES</span>
                        <h1 class="text-[54px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                            News &<br>
                            <span class="text-sky-600">Company</span> Insights
                        </h1>
                    </div>

                    <p class="text-[16px] text-slate-600 leading-relaxed max-w-2xl font-medium">
                        Stay updated with the latest trends in the industrial supply sector, company announcements, and expert insights from PT. INDOTEK PRIMA JAYA.
                    </p>
                </div>
            </div>
        </div>

        <!-- Awan putih bagian bawah (Smooth Mist Effect) -->
        <div class="absolute -bottom-24 left-0 w-full h-64 pointer-events-none z-[5]">
            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
            <div class="absolute inset-x-0 bottom-0 h-full bg-[radial-gradient(50%_100%_at_50%_100%,rgba(255,255,255,1)_0%,rgba(255,255,255,0.8)_40%,rgba(255,255,255,0)_100%)] blur-2xl opacity-90"></div>
            <div class="absolute -bottom-10 left-0 w-full h-40 bg-white blur-[100px] opacity-60"></div>
            <div class="absolute bottom-0 right-0 w-2/3 h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(255,255,255,1)_0%,rgba(255,255,255,0.9)_30%,rgba(255,255,255,0)_75%)] blur-3xl opacity-100"></div>
            <div class="absolute -bottom-10 right-0 w-96 h-96 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9)_0%,rgba(255,255,255,0)_70%)] blur-3xl opacity-70"></div>
        </div>
    </section>

    <!-- News Grid Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Featured Post -->
            <div class="mb-20" data-aos="fade-up">
                <div class="group relative bg-slate-50 rounded-[40px] overflow-hidden border border-slate-100 shadow-xl hover:shadow-2xl transition-all duration-500">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="h-64 lg:h-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1200" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Industrial News">
                        </div>
                        <div class="p-10 lg:p-16 flex flex-col justify-center space-y-6">
                            <div class="flex items-center gap-4">
                                <span class="bg-sky-100 text-sky-600 px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">Featured</span>
                                <span class="text-slate-400 text-xs font-bold">May 15, 2026</span>
                            </div>
                            <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 leading-tight">
                                Advancing Industrial Efficiency with Modern Measuring Tools
                            </h2>
                            <p class="text-slate-500 leading-relaxed font-medium">
                                Explore how the latest high-precision measuring instruments are revolutionizing the manufacturing sector in Indonesia, ensuring better quality control and operational performance.
                            </p>
                            <a href="#" class="inline-flex items-center gap-3 text-sky-600 font-black text-xs uppercase tracking-widest hover:gap-5 transition-all">
                                Read Full Article
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- News 1 -->
                <div class="group space-y-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="aspect-[4/3] rounded-[32px] overflow-hidden border border-slate-100 shadow-sm relative">
                        <img src="https://images.unsplash.com/photo-1473081556163-2a17de81fc97?auto=format&fit=crop&q=80&w=800" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Power Plant">
                        <div class="absolute top-6 left-6">
                            <span class="bg-white/90 backdrop-blur-md px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest text-slate-900 shadow-sm">Industry</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <span class="text-slate-400 text-[11px] font-bold">May 10, 2026</span>
                        <h3 class="text-xl font-bold text-slate-900 leading-tight group-hover:text-sky-600 transition-colors">
                            Supporting Indonesia's Power Plant Infrastructure Growth
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                            PT. INDOTEK PRIMA JAYA secures new supply contracts for major power plant projects across Sumatra and Java.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sky-600 font-bold text-[11px] uppercase tracking-widest hover:gap-3 transition-all pt-2">
                            Read More
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-base"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- News 2 -->
                <div class="group space-y-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="aspect-[4/3] rounded-[32px] overflow-hidden border border-slate-100 shadow-sm relative">
                        <img src="https://images.unsplash.com/photo-1542337311-64d17ec23f14?auto=format&fit=crop&q=80&w=800" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Refinery">
                        <div class="absolute top-6 left-6">
                            <span class="bg-white/90 backdrop-blur-md px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest text-slate-900 shadow-sm">Expansion</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <span class="text-slate-400 text-[11px] font-bold">May 05, 2026</span>
                        <h3 class="text-xl font-bold text-slate-900 leading-tight group-hover:text-sky-600 transition-colors">
                            New Strategic Partnership with Global Instrument Brands
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                            We are proud to announce our official distribution partnership with world-leading industrial instrument manufacturers.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sky-600 font-bold text-[11px] uppercase tracking-widest hover:gap-3 transition-all pt-2">
                            Read More
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-base"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- News 3 -->
                <div class="group space-y-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="aspect-[4/3] rounded-[32px] overflow-hidden border border-slate-100 shadow-sm relative">
                        <img src="https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?auto=format&fit=crop&q=80&w=800" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Technology">
                        <div class="absolute top-6 left-6">
                            <span class="bg-white/90 backdrop-blur-md px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest text-slate-900 shadow-sm">Technology</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <span class="text-slate-400 text-[11px] font-bold">April 28, 2026</span>
                        <h3 class="text-xl font-bold text-slate-900 leading-tight group-hover:text-sky-600 transition-colors">
                            Digital Transformation in Industrial Supply Chains
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                            Discover how we are integrating digital solutions to streamline procurement and delivery for our B2B partners.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sky-600 font-bold text-[11px] uppercase tracking-widest hover:gap-3 transition-all pt-2">
                            Read More
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-base"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pagination Placeholder -->
            <div class="mt-20 flex justify-center items-center gap-3" data-aos="fade-up">
                <button class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white hover:border-sky-600 transition-all">
                    <iconify-icon icon="solar:alt-arrow-left-linear"></iconify-icon>
                </button>
                <button class="w-10 h-10 rounded-full bg-sky-600 text-white font-bold text-sm">1</button>
                <button class="w-10 h-10 rounded-full border border-slate-200 text-slate-600 font-bold text-sm hover:border-sky-600 hover:text-sky-600 transition-all">2</button>
                <button class="w-10 h-10 rounded-full border border-slate-200 text-slate-600 font-bold text-sm hover:border-sky-600 hover:text-sky-600 transition-all">3</button>
                <button class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white hover:border-sky-600 transition-all">
                    <iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-white rounded-[40px] p-10 lg:p-16 border border-slate-100 shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-sky-50 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 leading-tight uppercase">Subscribe to Our Newsletter</h2>
                        <p class="text-slate-500 font-medium leading-relaxed">
                            Get the latest industrial updates and company news delivered directly to your inbox.
                        </p>
                    </div>
                    <div>
                        <form action="#" class="flex flex-col sm:flex-row gap-4">
                            <input type="email" class="grow bg-slate-50 border border-slate-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900" placeholder="Your email address">
                            <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white px-10 py-4 rounded-2xl font-black text-sm uppercase tracking-widest transition-all shadow-lg shadow-sky-600/20">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
