@php
    $services = [
        'transformator' => [
            'title' => __('Transformator Services'),
            'subtitle' => __('INSTALLATION & MAINTENANCE'),
            'description' => __('Providing end-to-end solutions for industrial transformers, ensuring optimal power distribution and system reliability.'),
            'image' => asset('assets/services/service-transformer.webp'),
            'banner' => asset('assets/services/service-tranfor-banner.webp'),
            'icon' => 'solar:bolt-bold-duotone',
            'color' => 'sky',
            'gallery' => [
                asset('assets/services/transform/1.webp'),
                asset('assets/services/transform/2.webp'),
                asset('assets/services/transform/3.webp'),
                asset('assets/services/transform/4.webp'),
                asset('assets/services/transform/5.webp'),
                asset('assets/services/transform/6.webp'),
                asset('assets/services/transform/7.webp'),
                asset('assets/services/transform/8.webp'),
            ]
        ],

        'pump' => [
            'title' => __('Pump Services'),
            'subtitle' => __('OVERHAUL & ALIGNMENT'),
            'description' => __('Comprehensive pump engineering solutions to maximize uptime and energy efficiency of your pumping systems.'),
            'image' => asset('assets/services/service-pump.webp'),
            'banner' => asset('assets/services/service-pump-banner.webp'),
            'icon' => 'solar:refresh-bold-duotone',
            'color' => 'sky',
            'gallery' => [
                asset('assets/services/pump/1.webp'),
                asset('assets/services/pump/2.webp'),
                asset('assets/services/pump/3.webp'),
                asset('assets/services/pump/4.webp'),
                asset('assets/services/pump/5.webp'),
                asset('assets/services/pump/6.webp'),
                asset('assets/services/pump/7.webp'),
                asset('assets/services/pump/8.webp'),
                asset('assets/services/pump/9.webp'),
            ]
        ]
    ];

    $currentService = $type && isset($services[$type]) ? $services[$type] : null;
@endphp

@extends('layouts.app')

@section('title', $currentService ? $currentService['title'] . ' - PT. Indotek Prima Jaya' : 'Our Services - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 pb-28 lg:pt-32 lg:pb-40 overflow-hidden" 
             style="background: url('{{ $currentService ? ($currentService['banner'] ?? $currentService['image']) : asset('assets/background-service.webp') }}'); background-size: cover; background-position: center;">
        
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
                        <span class="text-sky-700 font-bold tracking-[0.2em] text-[12px] uppercase block">
                            {{ $currentService ? $currentService['subtitle'] : __('OUR SERVICES') }}
                        </span>
                        <h1 class="text-[36px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                            @if($currentService)
                                {!! str_replace(' Services', '<br><span class="text-sky-700">Services</span>', $currentService['title']) !!}
                            @else
                                {!! __('Professional Industrial<br>Supply & Business <span class="text-sky-700">Solutions</span>') !!}
                            @endif
                        </h1>
                    </div>

                    <p class="text-[16px] text-slate-600 leading-relaxed max-w-2xl font-medium">
                        {{ $currentService ? $currentService['description'] : __('PT. INDOTEK PRIMA JAYA is a trusted general supplier providing procurement, engineering tools, measuring instruments, mechanical, electrical, computer devices, and related industrial solutions to support your business operations with quality and reliability.') }}
                    </p>

                    @if($currentService)
                    <div class="pt-4">
                        <a href="{{ url('/contact') }}" class="inline-flex bg-sky-700 hover:bg-sky-800 text-white px-8 py-4 rounded-xl font-bold text-[14px] transition items-center gap-3 shadow-xl shadow-sky-600/20">
                            {{ __('Request This Service') }}
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl"></iconify-icon>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Awan putih bagian bawah (Smooth Mist Effect) -->
        <div class="absolute -bottom-24 left-0 w-full h-64 pointer-events-none z-5">
            <div class="absolute inset-0 bg-linear-to-t from-white via-white/80 to-transparent"></div>
            <div class="absolute inset-x-0 bottom-0 h-full bg-[radial-gradient(50%_100%_at_50%_100%,rgba(255,255,255,1)_0%,rgba(255,255,255,0.8)_40%,rgba(255,255,255,0)_100%)] blur-2xl opacity-90"></div>
            <div class="absolute -bottom-10 left-0 w-full h-40 bg-white blur-[100px] opacity-60"></div>
            <div class="absolute bottom-0 right-0 w-2/3 h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(255,255,255,1)_0%,rgba(255,255,255,0.9)_30%,rgba(255,255,255,0)_75%)] blur-3xl opacity-100"></div>
            <div class="absolute -bottom-10 right-0 w-96 h-96 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9)_0%,rgba(255,255,255,0)_70%)] blur-3xl opacity-70"></div>
        </div>
    </section>

    @if(!$currentService)
    <!-- Core Services Section (Only for General Page) -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-sky-700 font-bold tracking-[0.2em] text-[12px] uppercase block mb-3">{{ __('OUR CORE SERVICES') }}</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">{{ __('Comprehensive Business Solutions') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Procurement Solutions -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-700 mb-8 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:box-minimalistic-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">{{ __('Procurement Solutions') }}</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        {{ __('Efficient and reliable procurement tailored to your industry needs with competitive pricing and quality assurance.') }}
                    </p>
                </div>

                <!-- General Supply -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-700 mb-8 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:cart-large-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">{{ __('General Supply') }}</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        {{ __('Comprehensive supply of industrial products including tools, instruments, equipment, and consumables.') }}
                    </p>
                </div>

                <!-- Industrial Support -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-700 mb-8 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">{{ __('Industrial Support') }}</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        {{ __('Technical and operational support to ensure smooth operations and maximize equipment performance.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    @else


    <!-- Project Gallery Section -->
    <section class="py-24 bg-slate-50 overflow-hidden relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-16" data-aos="fade-up">
                <div class="space-y-3">
                    <span class="text-{{ $currentService['color'] }}-600 font-black tracking-[0.2em] text-[11px] uppercase block">{{ __('PROJECT SHOWCASE') }}</span>
                    <h2 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight uppercase">{{ __('Recent ') }}<span class="text-{{ $currentService['color'] }}-600">{{ __('Work') }}</span></h2>
                </div>
                <p class="text-slate-500 font-medium max-w-md text-sm">{{ __('A visual representation of our expertise and the quality of work we deliver to our clients.') }}</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" data-aos="fade-up">
                @foreach($currentService['gallery'] as $index => $img)
                <div class="group relative aspect-square rounded-3xl overflow-hidden shadow-lg transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl hover:shadow-{{ $currentService['color'] }}-600/20" 
                     data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                    <img src="{{ $img }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Gallery Image {{ $index + 1 }}">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                        <span class="text-white font-bold text-xs uppercase tracking-widest">{{ __('Project Detail') }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif



    <!-- CTA Section (Sleeker & More Compact) -->
    <section class="py-16 bg-white overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-900 rounded-[32px] p-10 lg:p-12 relative overflow-hidden shadow-2xl shadow-slate-900/20" data-aos="fade-up">
                <!-- Soft Gradient Glow -->
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-sky-500/20 rounded-full blur-[80px]"></div>
                
                <div class="flex flex-col lg:flex-row items-center justify-between gap-10 relative z-10">
                    <div class="space-y-4 text-center lg:text-left">
                        <h2 class="text-2xl lg:text-3xl font-black text-white leading-tight uppercase tracking-tight">
                            {{ __('Need the Right Solution ') }}<span class="text-sky-400">{{ __('for Your Business?') }}</span>
                        </h2>
                        <p class="text-slate-400 text-sm font-medium max-w-xl">
                            {{ __('Our team is ready to provide the best products and services to support your operations.') }}
                        </p>
                    </div>
                    <div class="shrink-0">
                        <a href="{{ url('/contact') }}" class="group inline-flex items-center gap-3 bg-sky-600 hover:bg-white text-white hover:text-slate-900 px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all duration-300 shadow-xl shadow-sky-600/20">
                            {{ __('Contact Our Team') }}
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl transition-transform group-hover:translate-x-1"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
