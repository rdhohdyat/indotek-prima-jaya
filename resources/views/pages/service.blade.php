@php
    $services = [
        'transformator' => [
            'title' => 'Transformator Services',
            'subtitle' => 'INSTALLATION & MAINTENANCE',
            'description' => 'Providing end-to-end solutions for industrial transformers, ensuring optimal power distribution and system reliability.',
            'image' => asset('assets/services/service-transformer.png'),
            'icon' => 'solar:bolt-bold-duotone',
            'color' => 'sky',
            'features' => [
                'Installation and Commissioning',
                'Periodic Maintenance & Oil Testing',
                'Transformer Repair & Refurbishment',
                'Emergency Troubleshooting',
                'Power Quality Analysis'
            ]
        ],
        'valve' => [
            'title' => 'Valve Services',
            'subtitle' => 'REPAIR & CALIBRATION',
            'description' => 'Expert maintenance and repair services for all types of industrial valves, including control valves and safety relief valves.',
            'image' => asset('assets/services/service-valve.png'),
            'icon' => 'solar:settings-bold-duotone',
            'color' => 'amber',
            'features' => [
                'In-situ Repair and Refurbishment',
                'Testing & Calibration with Certification',
                'Valve Management & Diagnostics',
                'Supply of High-Quality Spare Parts',
                'Leak Detection & Prevention'
            ]
        ],
        'pump' => [
            'title' => 'Pump Services',
            'subtitle' => 'OVERHAUL & ALIGNMENT',
            'description' => 'Comprehensive pump engineering solutions to maximize uptime and energy efficiency of your pumping systems.',
            'image' => asset('assets/services/service-pump.png'),
            'icon' => 'solar:refresh-bold-duotone',
            'color' => 'emerald',
            'features' => [
                'Precision Laser Alignment',
                'Complete Overhaul & Component Repair',
                'Performance Analysis & Optimization',
                'Vibration Analysis & Diagnostics',
                'Mechanical Seal Replacement'
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
             style="background: url('{{ $currentService ? $currentService['image'] : asset('assets/background-service.webp') }}'); background-size: cover; background-position: center;">
        
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
                            {{ $currentService ? $currentService['subtitle'] : 'OUR SERVICES' }}
                        </span>
                        <h1 class="text-[54px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                            @if($currentService)
                                {!! str_replace(' Services', '<br><span class="text-sky-700">Services</span>', $currentService['title']) !!}
                            @else
                                Professional Industrial<br>
                                Supply & Business <span class="text-sky-700">Solutions</span>
                            @endif
                        </h1>
                    </div>

                    <p class="text-[16px] text-slate-600 leading-relaxed max-w-2xl font-medium">
                        {{ $currentService ? $currentService['description'] : 'PT. INDOTEK PRIMA JAYA is a trusted general supplier providing procurement, engineering tools, measuring instruments, mechanical, electrical, computer devices, and related industrial solutions to support your business operations with quality and reliability.' }}
                    </p>

                    @if($currentService)
                    <div class="pt-4">
                        <a href="{{ url('/contact') }}" class="inline-flex bg-sky-700 hover:bg-sky-800 text-white px-8 py-4 rounded-xl font-bold text-[14px] transition items-center gap-3 shadow-xl shadow-sky-600/20">
                            Request This Service
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
                <span class="text-sky-700 font-bold tracking-[0.2em] text-[12px] uppercase block mb-3">OUR CORE SERVICES</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">Comprehensive Business Solutions</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Procurement Solutions -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-700 mb-8 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:box-minimalistic-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Procurement Solutions</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        Efficient and reliable procurement tailored to your industry needs with competitive pricing and quality assurance.
                    </p>
                </div>

                <!-- General Supply -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-700 mb-8 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:cart-large-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">General Supply</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        Comprehensive supply of industrial products including tools, instruments, equipment, and consumables.
                    </p>
                </div>

                <!-- Industrial Support -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-700 mb-8 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Industrial Support</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        Technical and operational support to ensure smooth operations and maximize equipment performance.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @else
    <!-- Specific Service Detail Section -->
    <section class="py-24 bg-white overflow-hidden relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-aos="fade-right">
                    <div class="aspect-square rounded-[40px] overflow-hidden shadow-2xl shadow-slate-200">
                        <img src="{{ $currentService['image'] }}" class="w-full h-full object-cover" alt="{{ $currentService['title'] }}">
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-{{ $currentService['color'] }}-600/10 rounded-full blur-3xl"></div>
                </div>
                <div class="space-y-8" data-aos="fade-left">
                    <div class="space-y-4">
                        <div class="w-16 h-16 rounded-2xl bg-{{ $currentService['color'] }}-600 flex items-center justify-center text-white shadow-xl shadow-{{ $currentService['color'] }}-600/20">
                            <iconify-icon icon="{{ $currentService['icon'] }}" class="text-3xl"></iconify-icon>
                        </div>
                        <h2 class="text-4xl font-black text-slate-900 tracking-tight uppercase">Service Details</h2>
                        <p class="text-slate-500 text-lg leading-relaxed font-medium">
                            Our {{ strtolower($currentService['title']) }} are designed to meet the highest industry standards, combining technical expertise with state-of-the-art equipment.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-sm font-black text-slate-900 uppercase tracking-widest">Key Capabilities</h4>
                        <div class="grid grid-cols-1 gap-4">
                            @foreach($currentService['features'] as $feature)
                                <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 group hover:border-{{ $currentService['color'] }}-500 transition-colors">
                                    <div class="w-8 h-8 rounded-full bg-{{ $currentService['color'] }}-100 flex items-center justify-center text-{{ $currentService['color'] }}-600 shrink-0">
                                        <iconify-icon icon="solar:check-circle-bold" class="text-lg"></iconify-icon>
                                    </div>
                                    <span class="text-slate-700 font-bold text-sm">{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Our Service Process Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-sky-700 font-bold tracking-[0.2em] text-[12px] uppercase block mb-3">HOW WE WORK</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">Our Service Process</h2>
            </div>

            <div class="relative">
                <!-- Dotted Line Connector -->
                <div class="hidden lg:block absolute top-[60px] left-[10%] right-[10%] h-[2px] border-t-2 border-dashed border-slate-200 -z-10"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <!-- Step 1 -->
                    <div class="text-center space-y-6 group" data-aos="fade-up" data-aos-delay="0">
                        <div class="relative inline-block">
                            <div class="w-32 h-32 rounded-full bg-white border border-slate-100 flex items-center justify-center text-sky-700 shadow-xl group-hover:scale-110 transition-transform duration-500">
                                <iconify-icon icon="solar:chat-round-dots-linear" class="text-4xl"></iconify-icon>
                            </div>
                            <div class="absolute -top-2 -right-2 w-10 h-10 rounded-full bg-sky-700 text-white font-black flex items-center justify-center border-4 border-slate-50">1</div>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-slate-900 uppercase">Consultation</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">We listen to your needs and understand your business requirements.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="text-center space-y-6 group" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative inline-block">
                            <div class="w-32 h-32 rounded-full bg-white border border-slate-100 flex items-center justify-center text-sky-700 shadow-xl group-hover:scale-110 transition-transform duration-500">
                                <iconify-icon icon="solar:box-linear" class="text-4xl"></iconify-icon>
                            </div>
                            <div class="absolute -top-2 -right-2 w-10 h-10 rounded-full bg-sky-700 text-white font-black flex items-center justify-center border-4 border-slate-50">2</div>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-slate-900 uppercase">Product Sourcing</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">We source the best products from trusted brands that meet your specifications.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="text-center space-y-6 group" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative inline-block">
                            <div class="w-32 h-32 rounded-full bg-white border border-slate-100 flex items-center justify-center text-sky-700 shadow-xl group-hover:scale-110 transition-transform duration-500">
                                <iconify-icon icon="solar:delivery-linear" class="text-4xl"></iconify-icon>
                            </div>
                            <div class="absolute -top-2 -right-2 w-10 h-10 rounded-full bg-sky-700 text-white font-black flex items-center justify-center border-4 border-slate-50">3</div>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-slate-900 uppercase">Delivery & Support</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">We ensure timely delivery and provide full technical support for your operations.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="text-center space-y-6 group" data-aos="fade-up" data-aos-delay="300">
                        <div class="relative inline-block">
                            <div class="w-32 h-32 rounded-full bg-white border border-slate-100 flex items-center justify-center text-sky-700 shadow-xl group-hover:scale-110 transition-transform duration-500">
                                <iconify-icon icon="solar:hand-shake-linear" class="text-4xl"></iconify-icon>
                            </div>
                            <div class="absolute -top-2 -right-2 w-10 h-10 rounded-full bg-sky-700 text-white font-black flex items-center justify-center border-4 border-slate-50">4</div>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-slate-900 uppercase">Long-Term Partnership</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">We build lasting relationships and grow together with your business success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-[#0f172a] rounded-[40px] p-12 lg:p-20 relative overflow-hidden text-center lg:text-left shadow-2xl shadow-slate-900/40" data-aos="fade-up">
                <!-- Abstract Glow -->
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky-600/20 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
                    <div class="lg:col-span-8 space-y-6">
                        <div class="flex items-center gap-4 justify-center lg:justify-start">
                            <div class="w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl border border-white/20 flex items-center justify-center text-white">
                                <iconify-icon icon="solar:user-speak-bold-duotone" class="text-4xl"></iconify-icon>
                            </div>
                            <h2 class="text-3xl lg:text-5xl font-extrabold text-white leading-tight tracking-tight">Need the Right Solution<br>for Your Business?</h2>
                        </div>
                        <p class="text-slate-400 text-lg lg:text-xl font-medium max-w-2xl">
                            Our team is ready to provide the best products and services to support your operations.
                        </p>
                    </div>
                    <div class="lg:col-span-4 flex justify-center lg:justify-end">
                        <a href="{{ url('/contact') }}" class="group bg-white hover:bg-sky-700 text-[#0f172a] hover:text-white px-10 py-5 rounded-2xl font-black text-sm uppercase tracking-widest transition-all duration-300 shadow-xl shadow-black/20 flex items-center gap-4">
                            Contact Our Team
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-2xl transition-transform group-hover:translate-x-2"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
