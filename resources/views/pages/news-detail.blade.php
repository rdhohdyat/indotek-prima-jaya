@extends('layouts.app')

@section('title', 'Article Title - PT. Indotek Prima Jaya')

@section('content')
    <!-- Article Hero Section -->
    <section class="relative pt-12 pb-20 lg:pt-16 overflow-hidden bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <nav class="flex mb-8 text-[11px] font-bold uppercase tracking-widest text-slate-400 gap-2 items-center" data-aos="fade-right">
                <a href="{{ route('news') }}" class="hover:text-sky-600 transition-colors">News</a>
                <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xs"></iconify-icon>
                <span class="text-slate-900">Industry Insights</span>
            </nav>

            <!-- Article Header -->
            <div class="space-y-6 mb-12 text-center lg:text-left" data-aos="fade-up">
                <h1 class="text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-[1.1]">
                    The Future of Industrial Automation: Key Trends to Watch in 2026
                </h1>
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-6 text-slate-400 text-sm font-medium">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-900 overflow-hidden border border-white shadow-sm">
                            <iconify-icon icon="solar:user-circle-linear" class="text-xl"></iconify-icon>
                        </div>
                        <span class="text-slate-900">Admin Indotek</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <iconify-icon icon="solar:calendar-linear" class="text-lg"></iconify-icon>
                        <span>May 15, 2026</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <iconify-icon icon="solar:clock-circle-linear" class="text-lg"></iconify-icon>
                        <span>8 min read</span>
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="relative rounded-2xl lg:rounded-3xl overflow-hidden shadow-2xl mb-16 aspect-video lg:aspect-21/9" data-aos="zoom-in">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1200" 
                     class="w-full h-full object-cover" alt="Featured Image">
                <div class="absolute inset-0 bg-linear-to-t from-slate-900/40 to-transparent"></div>
            </div>

            <!-- Article Content -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-8 space-y-8" data-aos="fade-up">
                    <div class="prose prose-slate prose-lg max-w-none text-slate-600 leading-relaxed font-medium">
                        <p class="text-xl text-slate-900 font-bold leading-relaxed mb-8">
                            As we move further into 2026, the industrial landscape is undergoing a radical transformation. Automation is no longer just a luxury for large-scale manufacturers; it has become a necessity for survival in a competitive global market.
                        </p>
                        <p>
                            Industrial automation is the use of control systems, such as computers or robots, and information technologies for handling different processes and machineries in an industry to replace a human being. It is the second step beyond mechanization in the scope of industrialization.
                        </p>
                        
                        <h3 class="text-2xl font-black text-slate-900 mt-12 mb-4">1. Artificial Intelligence in Predictive Maintenance</h3>
                        <p>
                            AI-driven predictive maintenance is revolutionizing how factories operate. By analyzing data from sensors in real-time, AI can predict when a machine is likely to fail before it actually does. This allows companies to perform maintenance exactly when needed, reducing downtime and saving costs.
                        </p>
                        
                        <blockquote class="border-l-4 border-sky-600 pl-6 my-10 italic text-2xl font-bold text-slate-800 leading-relaxed bg-slate-50 py-8 pr-8 rounded-r-2xl">
                            "Automation is not just about replacing labor; it's about amplifying human potential and creating smarter, safer industrial environments."
                        </blockquote>

                        <h3 class="text-2xl font-black text-slate-900 mt-12 mb-4">2. The Rise of Collaborative Robots (Cobots)</h3>
                        <p>
                            Unlike traditional industrial robots that operate in cages, cobots are designed to work alongside human employees. They are equipped with advanced sensors to ensure safety, making them ideal for tasks that require precision and human flexibility.
                        </p>

                        <div class="my-12 rounded-2xl overflow-hidden shadow-lg border border-slate-100">
                            <img src="https://images.unsplash.com/photo-1513828583688-c52646db42da?auto=format&fit=crop&q=80&w=800" 
                                 class="w-full h-auto" alt="Supporting Image">
                            <p class="p-4 bg-slate-50 text-xs text-slate-400 text-center italic font-bold">Cobots working in tandem with factory technicians to improve output quality.</p>
                        </div>

                        <p>
                            In conclusion, the future of industrial automation is bright and full of opportunities. At PT. Indotek Prima Jaya, we are committed to bringing these cutting-edge solutions to our clients, ensuring they stay ahead of the curve in this rapidly evolving industry.
                        </p>
                    </div>

                    <!-- Tags & Share -->
                    <div class="pt-12 border-t border-slate-100 flex flex-col sm:flex-row justify-between items-center gap-8">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-1.5 rounded-full bg-slate-100 text-slate-600 text-[11px] font-bold uppercase tracking-wider">Automation</span>
                            <span class="px-4 py-1.5 rounded-full bg-slate-100 text-slate-600 text-[11px] font-bold uppercase tracking-wider">Industry 4.0</span>
                            <span class="px-4 py-1.5 rounded-full bg-slate-100 text-slate-600 text-[11px] font-bold uppercase tracking-wider">Technology</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-[11px] font-black text-slate-400 uppercase tracking-widest">Share:</span>
                            <div class="flex gap-2">
                                <a href="#" class="w-10 h-10 rounded-full border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white hover:border-sky-600 transition-all">
                                    <iconify-icon icon="solar:share-linear"></iconify-icon>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white hover:border-sky-600 transition-all">
                                    <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white hover:border-sky-600 transition-all">
                                    <iconify-icon icon="ri:twitter-x-fill"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-4 space-y-12">
                    <!-- Related News -->
                    <div class="space-y-6" data-aos="fade-left">
                        <h4 class="text-[13px] font-black text-slate-900 uppercase tracking-widest border-b border-slate-200 pb-4 flex items-center gap-3">
                            <div class="w-1.5 h-6 bg-sky-600 rounded-full"></div>
                            Related News
                        </h4>
                        <div class="space-y-6">
                            <a href="#" class="group block space-y-3">
                                <div class="h-32 rounded-xl overflow-hidden shadow-md">
                                    <img src="https://images.unsplash.com/photo-1549923746-c502d488b3ea?auto=format&fit=crop&q=80&w=400" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Related">
                                </div>
                                <h5 class="text-sm font-bold text-slate-900 group-hover:text-sky-600 transition-colors leading-snug">
                                    Why Technical Consultation is Key to Success
                                </h5>
                                <p class="text-[11px] text-slate-400 font-medium">May 12, 2026</p>
                            </a>
                            <a href="#" class="group block space-y-3">
                                <div class="h-32 rounded-xl overflow-hidden shadow-md">
                                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=400" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Related">
                                </div>
                                <h5 class="text-sm font-bold text-slate-900 group-hover:text-sky-600 transition-colors leading-snug">
                                    Efficiency Redefined with New Analyzers
                                </h5>
                                <p class="text-[11px] text-slate-400 font-medium">May 10, 2026</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Navigation -->
    <section class="py-12 border-t border-slate-100 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <a href="#" class="group flex items-center gap-4 text-left">
                    <div class="w-10 h-10 rounded-full border border-slate-100 flex items-center justify-center text-slate-400 group-hover:bg-slate-900 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:alt-arrow-left-linear"></iconify-icon>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Previous</p>
                        <p class="text-sm font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Digital Twins Technology</p>
                    </div>
                </a>
                <div class="w-px h-12 bg-slate-100 hidden sm:block"></div>
                <a href="#" class="group flex items-center gap-4 text-right">
                    <div>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Next</p>
                        <p class="text-sm font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Smart Grid Solutions</p>
                    </div>
                    <div class="w-10 h-10 rounded-full border border-slate-100 flex items-center justify-center text-slate-400 group-hover:bg-slate-900 group-hover:text-white transition-all">
                        <iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
