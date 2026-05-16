@php
    $products = [
        'zirconia-analyzer' => [
            'title' => 'Zirconia Analyzer',
            'principal' => 'RB Technologies',
            'category' => 'Analyzer & Engineering',
            'description' => 'High-precision oxygen analysis using advanced zirconia sensor technology for optimized combustion control and emission monitoring.',
            'image' => 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=1200',
            'icon' => 'solar:chart-2-bold-duotone',
            'color' => 'sky',
            'features' => [
                'Fast Response Time (< 5 seconds)',
                'High Temperature Capability up to 1400°C',
                'Minimal Maintenance Requirements',
                'Digital Communications (HART, Modbus)',
                'Auto-Calibration Functionality'
            ]
        ],
        'emissions-monitoring' => [
            'title' => 'Emissions Monitoring',
            'principal' => 'Sick',
            'category' => 'Analyzer & Engineering',
            'description' => 'Continuous Emission Monitoring Systems (CEMS) designed to meet strict environmental regulations with reliable gas analysis.',
            'image' => 'https://images.unsplash.com/photo-1516937941344-00b4e0337589?auto=format&fit=crop&q=80&w=1200',
            'icon' => 'solar:graph-bold-duotone',
            'color' => 'sky',
            'features' => [
                'Multi-component Gas Analysis',
                'Robust Design for Harsh Environments',
                'Compliant with International Standards',
                'Remote Diagnostics Support',
                'Integrated Data Management'
            ]
        ],
        'water-analyzer' => [
            'title' => 'Water Analyzer',
            'principal' => 'ECD, Process Instruments',
            'category' => 'Analyzer & Engineering',
            'description' => 'Comprehensive water quality analysis solutions for pH, conductivity, dissolved oxygen, and turbidity in industrial processes.',
            'image' => 'https://images.unsplash.com/photo-1543674892-7d64d45df18b?auto=format&fit=crop&q=80&w=1200',
            'icon' => 'solar:water-drops-bold-duotone',
            'color' => 'sky',
            'features' => [
                'Self-Cleaning Sensors',
                'Highly Accurate Measurements',
                'Modular Controller Interface',
                'Easy Calibration Procedures',
                'Weatherproof & Durable Housing'
            ]
        ],
        'transmitter' => [
            'title' => 'Transmitter',
            'principal' => 'PIEZUS',
            'category' => 'Automation & Instrumentation',
            'description' => 'Precision pressure and level transmitters for reliable process monitoring in oil & gas, chemical, and general manufacturing.',
            'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1200',
            'icon' => 'solar:compass-bold-duotone',
            'color' => 'amber',
            'features' => [
                'Wide Range of Pressure Scales',
                'Compact and Robust Design',
                'Intrinsically Safe Options',
                'High Long-term Stability',
                'Versatile Connection Types'
            ]
        ],
        'control-valve' => [
            'title' => 'Control Valve',
            'principal' => 'RTK - Regeltechnik',
            'category' => 'Automation & Instrumentation',
            'description' => 'High-performance control valves for precise regulation of pressure, temperature, and flow rate in demanding industrial systems.',
            'image' => 'https://images.unsplash.com/photo-1517089535811-0ce2eb31c9af?auto=format&fit=crop&q=80&w=1200',
            'icon' => 'solar:settings-bold-duotone',
            'color' => 'amber',
            'features' => [
                'Electric & Pneumatic Actuation',
                'Superior Tight Sealing Capabilities',
                'Customizable Flow Characteristics',
                'Low Noise Trim Options',
                'Easy Maintenance & Long Service Life'
            ]
        ],
        'fittings-regulator' => [
            'title' => 'Fittings & Regulator',
            'principal' => 'NAI LOK',
            'category' => 'Automation & Instrumentation',
            'description' => 'High-quality instrumentation fittings and pressure regulators ensuring leak-free connections and stable gas/liquid pressure.',
            'image' => 'https://images.unsplash.com/photo-1580901233033-9c88219b666d?auto=format&fit=crop&q=80&w=1200',
            'icon' => 'solar:widget-bold-duotone',
            'color' => 'amber',
            'features' => [
                'Dual Ferrule Design for Safety',
                'Precision Machined Components',
                'High Corrosion Resistance',
                'Ultra-High Pressure Compatibility',
                'Vibration Resistant Connections'
            ]
        ]
    ];

    $currentProduct = $slug && isset($products[$slug]) ? $products[$slug] : null;
@endphp

@extends('layouts.app')

@section('title', $currentProduct ? $currentProduct['title'] . ' - PT. Indotek Prima Jaya' : 'Our Products - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 pb-28 lg:pt-32 lg:pb-40 overflow-hidden" 
             style="background: url('{{ $currentProduct ? $currentProduct['image'] : 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=2000' }}'); background-size: cover; background-position: center;">
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-8 space-y-8 relative z-10" data-aos="fade-right">
                    <!-- Ambient Glow -->
                    <div class="absolute -inset-x-12 -inset-y-10 -z-10 pointer-events-none">
                        <div class="w-full h-full 
                                        bg-[radial-gradient(ellipse_at_center,rgba(255,255,255,1)_0%,rgba(255,255,255,0.95)_38%,rgba(255,255,255,0.7)_58%,rgba(255,255,255,0)_78%)]
                                        blur-2xl">
                        </div>
                    </div>

                    <div class="space-y-3">
                        <span class="text-sky-700 font-bold tracking-[0.2em] text-[12px] uppercase block">
                            {{ $currentProduct ? $currentProduct['category'] : 'OUR PRODUCTS' }}
                        </span>
                        <h1 class="text-[54px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                            @if($currentProduct)
                                {{ $currentProduct['title'] }}<br>
                                <span class="text-sky-700">Solutions</span>
                            @else
                                High-Precision<br>
                                Industrial <span class="text-sky-700">Equipment</span>
                            @endif
                        </h1>
                    </div>

                    <p class="text-[16px] text-slate-600 leading-relaxed max-w-2xl font-medium">
                        {{ $currentProduct ? $currentProduct['description'] : 'We provide a wide range of high-quality industrial products from world-renowned principals, ensuring reliability and efficiency for your technical operations.' }}
                    </p>

                    @if($currentProduct)
                    <div class="flex flex-wrap items-center gap-6 pt-4">
                        <a href="{{ url('/contact') }}" class="bg-sky-700 hover:bg-sky-800 text-white px-8 py-4 rounded-xl font-bold text-[14px] transition flex items-center gap-3 shadow-xl shadow-sky-600/20">
                            Get Quote
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl"></iconify-icon>
                        </a>
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Principal:</span>
                            <span class="text-sm font-black text-slate-900">{{ $currentProduct['principal'] }}</span>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Smooth Mist Effect -->
        <div class="absolute -bottom-24 left-0 w-full h-64 pointer-events-none z-5">
            <div class="absolute inset-0 bg-linear-to-t from-white via-white/80 to-transparent"></div>
        </div>
    </section>

    @if($currentProduct)
    <!-- Product Detail Section -->
    <section class="py-24 bg-white overflow-hidden relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative" data-aos="fade-right">
                    <div class="aspect-square rounded-[48px] overflow-hidden shadow-2xl shadow-slate-200 border border-slate-100 p-8 bg-slate-50">
                        <img src="{{ $currentProduct['image'] }}" class="w-full h-full object-contain mix-blend-multiply" alt="{{ $currentProduct['title'] }}">
                    </div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-{{ $currentProduct['color'] }}-600/10 rounded-full blur-3xl"></div>
                </div>
                
                <div class="space-y-10" data-aos="fade-left">
                    <div class="space-y-6">
                        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-{{ $currentProduct['color'] }}-50 border border-{{ $currentProduct['color'] }}-100 text-{{ $currentProduct['color'] }}-700">
                            <iconify-icon icon="{{ $currentProduct['icon'] }}" class="text-xl"></iconify-icon>
                            <span class="text-xs font-black uppercase tracking-widest">Technical Specifications</span>
                        </div>
                        <h2 class="text-4xl font-black text-slate-900 tracking-tight">Engineered for <span class="text-{{ $currentProduct['color'] }}-600">Performance</span></h2>
                        <p class="text-slate-500 text-lg leading-relaxed font-medium">
                            Our {{ strtolower($currentProduct['title']) }} from {{ $currentProduct['principal'] }} is the industry standard for reliability. Built with high-grade materials and cutting-edge technology to withstand the toughest industrial conditions.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 gap-4">
                        @foreach($currentProduct['features'] as $feature)
                            <div class="flex items-center gap-4 p-5 rounded-3xl bg-slate-50 border border-slate-100 group hover:border-{{ $currentProduct['color'] }}-500 transition-all duration-300">
                                <div class="w-10 h-10 rounded-2xl bg-white shadow-sm flex items-center justify-center text-{{ $currentProduct['color'] }}-600 shrink-0 group-hover:bg-{{ $currentProduct['color'] }}-600 group-hover:text-white transition-colors">
                                    <iconify-icon icon="solar:check-circle-bold" class="text-xl"></iconify-icon>
                                </div>
                                <span class="text-slate-700 font-bold text-[15px]">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <!-- All Products Listing (Fallback/Default Page) -->
    <section class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-black text-slate-900 tracking-tight">Our Product Portfolio</h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto">Explore our range of industrial solutions from leading global brands.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($products as $slug => $product)
                <a href="{{ route('product', $slug) }}" class="group bg-slate-50 rounded-[32px] p-8 border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500" data-aos="fade-up">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-6">
                        <img src="{{ $product['image'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <span class="text-[10px] font-black text-sky-600 uppercase tracking-[0.2em] mb-2 block">{{ $product['principal'] }}</span>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-sky-700 transition-colors uppercase">{{ $product['title'] }}</h3>
                    <p class="text-slate-500 text-xs mt-3 line-clamp-2 leading-relaxed">{{ $product['description'] }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto space-y-8" data-aos="fade-up">
                <h2 class="text-3xl lg:text-5xl font-black text-slate-900 tracking-tight">Ready to optimize your operations?</h2>
                <p class="text-slate-500 text-lg font-medium">Consult with our technical experts to find the perfect product solution for your specific industrial needs.</p>
                <div class="flex justify-center gap-6">
                    <a href="{{ url('/contact') }}" class="bg-sky-700 hover:bg-sky-800 text-white px-10 py-5 rounded-2xl font-black text-sm uppercase tracking-widest transition-all shadow-xl shadow-sky-600/20">
                        Inquiry Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
