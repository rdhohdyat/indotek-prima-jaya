@php
    $products = [
        'zirconia-analyzer' => [
            'title' => __('Zirconia Analyzer'),
            'principal' => 'RB Technologies',
            'brand_logo' => asset('assets/distributors/rbt.webp'),
            'category' => __('Analyzer & Engineering'),
            'description' => __('High-precision oxygen analysis using advanced zirconia sensor technology for optimized combustion control and emission monitoring.'),
            'image' => asset('assets/products/rb-tech/1.webp'),
            'banner' => asset('assets/products/rb-tech-banner.webp'),
            'icon' => 'solar:chart-2-bold-duotone',
            'color' => 'sky',
            'gallery' => [
                asset('assets/products/rb-tech/1.webp'),
                asset('assets/products/rb-tech/2.webp'),
                asset('assets/products/rb-tech/3.webp'),
                asset('assets/products/rb-tech/4.webp'),
                asset('assets/products/rb-tech/5.webp'),
                asset('assets/products/rb-tech/6.webp'),
            ]
        ],
        'emissions-monitoring' => [
            'title' => __('Emissions Monitoring'),
            'principal' => 'Sick',
            'brand_logo' => asset('assets/distributors/sick.webp'),
            'category' => __('Analyzer & Engineering'),
            'description' => __('Continuous Emission Monitoring Systems (CEMS) designed to meet strict environmental regulations with reliable gas analysis.'),
            'image' => asset('assets/products/sick/1.webp'),
            'banner' => asset('assets/products/sick-banner.webp'),
            'icon' => 'solar:graph-bold-duotone',
            'color' => 'sky',
            'gallery' => [
                asset('assets/products/sick/1.webp'),
                asset('assets/products/sick/2.webp'),
                asset('assets/products/sick/3.webp'),
                asset('assets/products/sick/4.webp'),
            ]
        ],
        'water-analyzer-ecd' => [
            'title' => __('Water Analyzer (ECD)'),
            'principal' => 'ECD',
            'brand_logo' => asset('assets/distributors/ecd.webp'),
            'category' => __('Analyzer & Engineering'),
            'description' => __('Comprehensive water quality analysis solutions for pH, conductivity, dissolved oxygen, and turbidity in industrial processes.'),
            'image' => asset('assets/products/ecd/1.webp'),
            'banner' => asset('assets/products/ecd-banner.webp'),
            'icon' => 'solar:water-drops-bold-duotone',
            'color' => 'sky',
            'gallery' => [
                asset('assets/products/ecd/1.webp'),
                asset('assets/products/ecd/2.webp'),
                asset('assets/products/ecd/3.webp'),
            ]
        ],
        'water-analyzer-pi' => [
            'title' => __('Water Analyzer (PI)'),
            'principal' => 'Process Instruments',
            'brand_logo' => asset('assets/distributors/pi.webp'),
            'category' => __('Analyzer & Engineering'),
            'description' => __('Advanced water quality analyzers and controllers for a wide range of industrial applications.'),
            'image' => asset('assets/products/pi/1.webp'),
            'banner' => asset('assets/products/pi-banner.webp'),
            'icon' => 'solar:water-drops-bold-duotone',
            'color' => 'sky',
            'gallery' => [
                asset('assets/products/pi/1.webp'),
                asset('assets/products/pi/2.webp'),
                asset('assets/products/pi/3.webp'),
            ]
        ],
        'transmitter' => [
            'title' => __('Transmitter'),
            'principal' => 'PIEZUS',
            'brand_logo' => asset('assets/distributors/piezus.webp'),
            'category' => __('Automation & Instrumentation'),
            'description' => __('Precision pressure and level transmitters for reliable process monitoring in oil & gas, chemical, and general manufacturing.'),
            'image' => asset('assets/products/piezus/1.webp'),
            'banner' => asset('assets/products/piezus-banner.webp'),
            'icon' => 'solar:compass-bold-duotone',
            'color' => 'yellow',
            'gallery' => [
                asset('assets/products/piezus/1.webp'),
                asset('assets/products/piezus/2.webp'),
                asset('assets/products/piezus/3.webp'),
            ]
        ],
        'fittings-regulator' => [
            'title' => __('Fittings & Regulator'),
            'principal' => 'NAI LOK',
            'brand_logo' => asset('assets/distributors/nai-lok.webp'),
            'category' => __('Automation & Instrumentation'),
            'description' => __('High-quality instrumentation fittings and pressure regulators ensuring leak-free connections and stable gas/liquid pressure.'),
            'image' => asset('assets/products/nai-lok/1.webp'),
            'banner' => asset('assets/products/nai-lok-banner.webp'),
            'icon' => 'solar:widget-bold-duotone',
            'color' => 'yellow',
            'gallery' => [
                asset('assets/products/nai-lok/1.webp'),
                asset('assets/products/nai-lok/2.webp'),
            ]
        ],
        'saxon-probe' => [
            'title' => __('Liquid Analysis'),
            'principal' => 'Saxon',
            'brand_logo' => asset('assets/distributors/saxon.webp'),
            'category' => __('Analyzer & Engineering'),
            'description' => __('Advanced liquid analysis solutions including chlorine sensors, dissolved oxygen sensors, and TSS sensors.'),
            'image' => asset('assets/products/saxon/1.webp'),
            'banner' => asset('assets/products/saxon-banner.webp'),
            'icon' => 'solar:accumulator-bold-duotone',
            'color' => 'sky',
            'gallery' => [
                asset('assets/products/saxon/1.webp'),
                asset('assets/products/saxon/2.webp'),
                asset('assets/products/saxon/3.webp'),
                asset('assets/products/saxon/4.webp'),
            ]
        ],
        'control-valve' => [
            'title' => __('Control Valve'),
            'principal' => 'RTK - Regeltechnik',
            'brand_logo' => asset('assets/distributors/rtk.webp'),
            'category' => __('Automation & Instrumentation'),
            'description' => __('High-performance control valves for precise regulation of pressure, temperature, and flow rate in demanding industrial systems.'),
            'image' => asset('assets/products/rtk/1.webp'),
            'banner' => asset('assets/products/rtk-banner.webp'),
            'icon' => 'solar:settings-bold-duotone',
            'color' => 'yellow',
            'gallery' => [
                asset('assets/products/rtk/1.webp'),
                asset('assets/products/rtk/2.webp'),
            ]
        ],
        'industrial-valve' => [
            'title' => __('Pinch Valve'),
            'principal' => 'Red Valve',
            'brand_logo' => asset('assets/distributors/redvalve.webp'),
            'category' => __('Automation & Instrumentation'),
            'description' => __('Durable industrial valves designed for harsh conditions, providing reliable flow control and long service life.'),
            'image' => asset('assets/products/red/1.webp'),
            'banner' => asset('assets/products/read-valpet-banner.webp'),
            'icon' => 'solar:widget-add-bold-duotone',
            'color' => 'yellow',
            'gallery' => [
                asset('assets/products/red/1.webp'),
                asset('assets/products/red/2.webp'),
            ]
        ]
    ];

    $currentProduct = $slug && isset($products[$slug]) ? $products[$slug] : null;
@endphp

@extends('layouts.app')

@section('title', $currentProduct ? $currentProduct['title'] . ' - PT. Indotek Prima Jaya' : __('Our Products - PT. Indotek Prima Jaya'))

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-10 pb-16 lg:pt-32 lg:pb-40 overflow-hidden bg-cover bg-[80%_center] lg:bg-center"
        style="background-image: url('{{ $currentProduct ? ($currentProduct['banner'] ?? $currentProduct['image']) : asset('assets/hero/product.webp') }}');">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-8 space-y-6 lg:space-y-8 relative z-10" data-aos="fade-right">
                    <!-- Ambient Glow -->
                    <div class="absolute inset-x-0 -inset-y-10 -z-10 pointer-events-none">
                        <div class="w-full h-full 
                                                    bg-[radial-gradient(ellipse_at_center,rgba(255,255,255,1)_0%,rgba(255,255,255,0.95)_38%,rgba(255,255,255,0.7)_58%,rgba(255,255,255,0)_78%)]
                                                    blur-2xl">
                        </div>
                    </div>

                    <div class="space-y-3">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">
                            {{ $currentProduct ? $currentProduct['category'] : __('OUR PRODUCTS') }}
                        </span>
                        <h1
                            class="text-[28px] sm:text-[36px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.1] lg:leading-[1.05] tracking-tight uppercase">
                            @if($currentProduct)
                                {{ $currentProduct['title'] }}<br>
                                {!! __('Solutions') !!}</span>
                            @else
                                {!! __('High-Precision<br>Industrial <span class="text-sky-600">Equipment</span>') !!}
                            @endif
                        </h1>
                    </div>

                    <p class="text-[14px] lg:text-[16px] text-slate-600 leading-relaxed max-w-2xl font-medium">
                        {{ $currentProduct ? $currentProduct['description'] : __('We provide a wide range of high-quality industrial products from world-renowned principals, ensuring reliability and efficiency for your technical operations.') }}
                    </p>

                    @if($currentProduct)
                        <div class="flex flex-wrap items-center gap-6 pt-4">
                            <a href="{{ url('/contact') }}"
                                class="bg-sky-600 hover:bg-sky-700 text-white px-6 py-3 lg:px-8 lg:py-4 rounded-xl font-bold text-[13px] lg:text-[14px] transition flex items-center gap-2 lg:gap-3 shadow-xl shadow-sky-600/20">
                                {{ __('Get Quote') }}
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl"></iconify-icon>
                            </a>
                            <div
                                class="flex items-center gap-4 lg:gap-6 p-3 lg:p-4 rounded-2xl bg-white/50 backdrop-blur-sm border border-white/50 shadow-sm">
                                <div class="w-20 h-10 flex items-center justify-center">
                                    <img src="{{ $currentProduct['brand_logo'] }}"
                                        class="max-w-full max-h-full object-contain mix-blend-multiply"
                                        alt="{{ $currentProduct['principal'] }}">
                                </div>
                                <div class="flex flex-col">
                                    <span
                                        class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">{{ __('Principal') }}</span>
                                    <span class="text-sm font-black text-slate-900">{{ $currentProduct['principal'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Awan putih bagian bawah (Smooth Mist Effect) -->
        <div class="absolute -bottom-24 left-0 w-full h-40 lg:h-64 pointer-events-none z-10">
            <!-- Layer 1: Base smooth white transition -->
            <div class="absolute inset-0 bg-linear-to-t from-white via-white/80 to-transparent"></div>

            <!-- Layer 2: Misty radial clouds for depth -->
            <div
                class="absolute inset-x-0 bottom-0 h-full bg-[radial-gradient(50%_100%_at_50%_100%,rgba(255,255,255,1)_0%,rgba(255,255,255,0.8)_40%,rgba(255,255,255,0)_100%)] blur-2xl opacity-90">
            </div>

            <!-- Layer 3: Extra blur for softness -->
            <div class="absolute -bottom-10 left-0 w-full h-24 lg:h-40 bg-white blur-[100px] opacity-60"></div>

            <!-- Layer 4: Extra Dense Right Corner Cloud -->
            <div
                class="absolute bottom-0 right-0 w-full lg:w-2/3 h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(255,255,255,1)_0%,rgba(255,255,255,0.9)_30%,rgba(255,255,255,0)_75%)] blur-2xl lg:blur-3xl opacity-100">
            </div>

            <!-- Layer 5: High-position Right Puff -->
            <div
                class="absolute -bottom-10 right-0 w-64 h-64 lg:w-96 lg:h-96 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9)_0%,rgba(255,255,255,0)_70%)] blur-2xl lg:blur-3xl opacity-70">
            </div>
        </div>
    </section>

    @if($currentProduct)
        <!-- Unified Visual Gallery Section -->
        <section class="py-24 bg-white overflow-hidden relative">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <!-- Main Featured Image (Left) -->
                    <div class="lg:col-span-8" data-aos="fade-right">
                        <div
                            class="aspect-square lg:aspect-video overflow-hidden relative group border border-slate-100 rounded-2xl bg-white flex items-center justify-center p-8">
                            <img id="mainProductImage" src="{{ $currentProduct['image'] }}"
                                class="w-full h-full object-contain transition-all duration-500 group-hover:scale-105"
                                alt="{{ $currentProduct['title'] }}">
                        </div>
                    </div>

                    <!-- Gallery Grid (Right) -->
                    <div class="lg:col-span-4" data-aos="fade-left">
                        <div class="grid grid-cols-2 lg:grid-cols-2 gap-4">
                            {{-- First thumbnail is the original featured image --}}
                            <div class="thumbnail-item aspect-square overflow-hidden transition-all duration-500 hover:scale-[1.02] group cursor-pointer border-2 border-sky-600 rounded-xl bg-white p-4"
                                onclick="switchProductImage(this, '{{ $currentProduct['image'] }}')">
                                <img src="{{ $currentProduct['image'] }}"
                                    class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-110"
                                    alt="Main View">
                            </div>

                            @foreach($currentProduct['gallery'] as $index => $img)
                                @if($img !== $currentProduct['image'])
                                    <div class="thumbnail-item aspect-square overflow-hidden transition-all duration-500 hover:scale-[1.02] group cursor-pointer border border-slate-100 rounded-xl bg-white p-4"
                                        onclick="switchProductImage(this, '{{ $img }}')">
                                        <img src="{{ $img }}"
                                            class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-110"
                                            alt="Gallery {{ $index + 1 }}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <script>
                        function switchProductImage(element, imageUrl) {
                            const mainImage = document.getElementById('mainProductImage');

                            // Add fade out effect
                            mainImage.style.opacity = '0';
                            mainImage.style.transform = 'scale(0.95)';

                            setTimeout(() => {
                                mainImage.src = imageUrl;
                                mainImage.style.opacity = '1';
                                mainImage.style.transform = 'scale(1)';
                            }, 200);

                            // Update Active State for thumbnails
                            document.querySelectorAll('.thumbnail-item').forEach(item => {
                                item.classList.remove('border-sky-600');
                                item.classList.add('border-slate-100');
                            });
                            element.classList.remove('border-slate-100');
                            element.classList.add('border-sky-600');
                        }
                    </script>
                </div>
            </div>
        </section>
    @else
        <!-- All Products Listing (Fallback/Default Page) -->
        <section class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-2xl lg:text-4xl font-black text-slate-900 tracking-tight">{{ __('Our Product Portfolio') }}
                    </h2>
                    <p class="text-slate-500 mt-4 max-w-2xl mx-auto">
                        {{ __('Explore our range of industrial solutions from leading global brands.') }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1">
                    @foreach($products as $slug => $product)
                        <a href="{{ route('product', $slug) }}" class="group relative overflow-hidden aspect-4/5 bg-slate-50"
                            data-aos="fade-up">

                            <!-- Main Product Image -->
                            <img src="{{ $product['image'] }}"
                                class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                                alt="{{ $product['title'] }}">

                            <!-- Cinematic Overlay (Hover Only) -->
                            <div
                                class="absolute inset-0 bg-slate-900/0 group-hover:bg-slate-900/60 backdrop-blur-0 group-hover:backdrop-blur-sm transition-all duration-500 flex flex-col justify-end p-10 opacity-0 group-hover:opacity-100">
                                <div
                                    class="space-y-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-white flex items-center justify-center p-1">
                                            <img src="{{ $product['brand_logo'] }}"
                                                class="max-w-full max-h-full object-contain mix-blend-multiply" alt="Logo">
                                        </div>
                                        <span
                                            class="text-[10px] font-black text-sky-400 uppercase tracking-[0.3em]">{{ $product['principal'] }}</span>
                                    </div>
                                    <h3 class="text-3xl font-black text-white uppercase tracking-tight leading-none">
                                        {{ $product['title'] }}
                                    </h3>
                                    <p class="text-slate-300 text-sm font-medium leading-relaxed line-clamp-3 max-w-sm">
                                        {{ $product['description'] }}
                                    </p>
                                    <div class="pt-4">
                                        <span
                                            class="inline-flex items-center gap-2 text-sky-400 font-black text-[11px] uppercase tracking-widest border-b-2 border-sky-400 pb-1">
                                            {{ __('Explore Solution') }}
                                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg"></iconify-icon>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Permanent Minimal Label (Optional, for clarity) -->
                            <div class="absolute bottom-6 left-6 z-10 transition-opacity duration-300 group-hover:opacity-0">
                                <h4
                                    class="text-lg font-black text-slate-900 uppercase tracking-tight bg-white/80 backdrop-blur-md px-4 py-2 rounded-lg shadow-sm border border-white/50">
                                    {{ $product['title'] }}
                                </h4>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CTA Section (Sleeker & More Compact) -->
    <section class="py-16 bg-white overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-900 rounded-[32px] p-10 lg:p-12 relative overflow-hidden shadow-2xl shadow-slate-900/20"
                data-aos="fade-up">
                <!-- Soft Gradient Glow -->
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-sky-500/10 rounded-full blur-[80px]"></div>

                <div class="flex flex-col lg:flex-row items-center justify-between gap-10 relative z-10">
                    <div class="space-y-4 text-center lg:text-left">
                        <h2 class="text-xl lg:text-3xl font-black text-white leading-tight uppercase tracking-tight">
                            {!! __('Ready to <span class="text-sky-400">Optimize Operations?</span>') !!}
                        </h2>
                        <p class="text-slate-400 text-sm font-medium max-w-xl">
                            {{ __('Consult with our technical experts to find the perfect product solution for your specific industrial needs.') }}
                        </p>
                    </div>
                    <div class="shrink-0">
                        <a href="{{ url('/contact') }}"
                            class="group inline-flex items-center gap-3 bg-white hover:bg-sky-600 text-slate-900 hover:text-white px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all duration-300 shadow-xl shadow-black/20">
                            {{ __('Get Expert Consultation') }}
                            <iconify-icon icon="solar:alt-arrow-right-linear"
                                class="text-xl transition-transform group-hover:translate-x-1"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection