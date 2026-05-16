@extends('layouts.app')

@section('title', 'Home - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative hero-bg pt-12 pb-20 lg:pt-24 lg:pb-32 overflow-hidden">
        <!-- Optional: Add a subtle overlay to match the sky blend -->

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Hero Content -->
                <div class="lg:col-span-5 space-y-10 relative z-10" data-aos="fade-right">
                    <!-- Awan putih / gradient kabut -->
                    <div class="absolute -inset-x-12 -inset-y-10 -z-10 pointer-events-none">
                        <div class="w-full h-full 
                                                        bg-[radial-gradient(ellipse_at_center,rgba(255,255,255,1)_0%,rgba(255,255,255,0.95)_38%,rgba(255,255,255,0.7)_58%,rgba(255,255,255,0)_78%)]
                                                        blur-2xl">
                        </div>
                    </div>

                    <div class="space-y-4">
                        <span class="text-sky-500 font-bold tracking-widest text-[13px] uppercase block">
                            {{ __('SUPPLYING SOLUTIONS. DELIVERING TRUST.') }}
                        </span>

                        <h1 class="text-[36px] lg:text-[72px] font-extrabold text-[#1a202c] leading-[1.05] tracking-tight">
                            {!! __('Trusted General<br>Supplier for<br>Industry & Trade') !!}
                        </h1>
                    </div>

                    <p class="text-[15px] text-slate-500 leading-relaxed max-w-md font-medium">
                        {{ __('PT. INDOTEK PRIMA JAYA is a general supplier company providing Engineering Tools, Measuring Instruments, Mechanical, Electrical, Computer Devices, and other industrial needs for private and government sectors.') }}
                    </p>

                    <div class="flex flex-wrap gap-5 pt-2">
                        <a href="{{ route('about') }}"
                            class="bg-sky-700 hover:bg-sky-800 text-white px-9 py-4 rounded-md font-bold text-[14px] transition flex items-center gap-4 shadow-xl shadow-sky-600/10 group"
                            aria-label="Learn more about our company profile and history">
                            {{ __('Learn More') }}
                            <iconify-icon icon="solar:alt-arrow-right-linear"
                                class="text-xl transition-transform group-hover:translate-x-1"></iconify-icon>
                        </a>


                        <a href="{{ route('contact') }}"
                            class="bg-white hover:bg-slate-50 text-sky-500 border-2 border-sky-500 px-9 py-4 rounded-md font-bold text-[14px] transition flex items-center gap-4 shadow-sm group">
                            {{ __('Contact Us') }}
                            <iconify-icon icon="solar:alt-arrow-right-linear"
                                class="text-xl transition-transform group-hover:translate-x-1"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Awan putih bagian bawah (Smooth Mist Effect) -->
        <div class="absolute -bottom-24 left-0 w-full h-64 pointer-events-none z-5">
            <!-- Layer 1: Base smooth white transition -->
            <div class="absolute inset-0 bg-linear-to-t from-white via-white/80 to-transparent"></div>

            <!-- Layer 2: Misty radial clouds for depth -->
            <div
                class="absolute inset-x-0 bottom-0 h-full bg-[radial-gradient(50%_100%_at_50%_100%,rgba(255,255,255,1)_0%,rgba(255,255,255,0.8)_40%,rgba(255,255,255,0)_100%)] blur-2xl opacity-90">
            </div>

            <!-- Layer 3: Extra blur for softness -->
            <div class="absolute -bottom-10 left-0 w-full h-40 bg-white blur-[100px] opacity-60"></div>

            <!-- Layer 4: Extra Dense Right Corner Cloud -->
            <div
                class="absolute bottom-0 right-0 w-2/3 h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(255,255,255,1)_0%,rgba(255,255,255,0.9)_30%,rgba(255,255,255,0)_75%)] blur-3xl opacity-100">
            </div>

            <!-- Layer 5: High-position Right Puff -->
            <div
                class="absolute -bottom-10 right-0 w-96 h-96 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9)_0%,rgba(255,255,255,0)_70%)] blur-3xl opacity-70">
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-16 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                <!-- About Image -->
                <div class="lg:col-span-4" data-aos="fade-right" data-aos-duration="1000">
                    <div class="relative group">
                        <img src="{{ asset('assets/office.webp') }}" alt="Indotek Building"
                            class="w-full h-[450px] rounded-2xl shadow-2xl object-cover object-left transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-slate-900/10 shadow-inner"></div>
                    </div>
                </div>

                <!-- About Content -->
                <div class="lg:col-span-4 space-y-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="space-y-4">
                        <span class="text-yellow-500 font-black tracking-[0.2em] text-[11px] uppercase block"
                            data-aos="fade-up" data-aos-delay="300">{{ __('ABOUT US') }}</span>
                        <h2 class="text-4xl lg:text-5xl font-black text-slate-900 leading-[1.1] tracking-tight"
                            data-aos="fade-up" data-aos-delay="400">
                            {{ __('Your Reliable Partner for Sustainable Growth') }}
                        </h2>
                    </div>

                    <div class="space-y-4 text-slate-500 text-sm leading-relaxed font-medium" data-aos="fade-up"
                        data-aos-delay="500">
                        <p>{{ __('Founded in 2020, PT. INDOTEK PRIMA JAYA has grown to become a trusted general supplier for various industries in Indonesia.') }}</p>
                        <p>{{ __('We provide innovative business solutions and high-quality products that meet industry standards. Our commitment is to prioritize quality and trust to ensure harmonious and sustainable business continuity.') }}</p>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="600">
                        <a href="{{ route('about') }}"
                            class="inline-flex bg-slate-900 hover:bg-sky-700 text-white px-8 py-4 rounded-xl font-black text-[11px] uppercase tracking-widest transition-all items-center gap-3 shadow-xl shadow-slate-900/10 hover:shadow-sky-700/20"
                            aria-label="Explore our story and corporate journey">
                            {{ __('Explore Our Story') }}
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="lg:col-span-4">
                    <div class="space-y-8">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Integrity -->
                            <div class="flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-colors group"
                                data-aos="fade-left" data-aos-delay="400">
                                <div
                                    class="w-14 h-14 bg-white text-sky-600 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-slate-100 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300">
                                    <iconify-icon icon="solar:shield-check-linear" class="text-3xl"></iconify-icon>
                                </div>
                                <div class="space-y-1">
                                    <h3 class="font-black text-slate-900 text-lg uppercase tracking-tight">{{ __('Integrity') }}</h3>
                                    <p class="text-xs text-slate-500 leading-relaxed font-medium">{{ __('Upholding the highest ethical standards in every business interaction.') }}</p>
                                </div>
                            </div>

                            <!-- Dedication -->
                            <div class="flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-colors group"
                                data-aos="fade-left" data-aos-delay="500">
                                <div
                                    class="w-14 h-14 bg-white text-sky-600 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-slate-100 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300">
                                    <iconify-icon icon="solar:bolt-linear" class="text-3xl"></iconify-icon>
                                </div>
                                <div class="space-y-1">
                                    <h3 class="font-black text-slate-900 text-lg uppercase tracking-tight">{{ __('Dedication') }}</h3>
                                    <p class="text-xs text-slate-500 leading-relaxed font-medium">{{ __('Fully committed to providing innovative and effective solutions.') }}</p>
                                </div>
                            </div>

                            <!-- Loyalty -->
                            <div class="flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-colors group"
                                data-aos="fade-left" data-aos-delay="600">
                                <div
                                    class="w-14 h-14 bg-white text-sky-600 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-slate-100 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300">
                                    <iconify-icon icon="solar:users-group-rounded-linear" class="text-3xl"></iconify-icon>
                                </div>
                                <div class="space-y-1">
                                    <h3 class="font-black text-slate-900 text-lg uppercase tracking-tight">{{ __('Loyalty') }}</h3>
                                    <p class="text-xs text-slate-500 leading-relaxed font-medium">{{ __('Building long-term, trustworthy partnerships with our clients.') }}</p>
                                </div>
                            </div>

                            <!-- Excellence -->
                            <div class="flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-colors group"
                                data-aos="fade-left" data-aos-delay="700">
                                <div
                                    class="w-14 h-14 bg-white text-sky-600 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-slate-100 group-hover:bg-sky-700 group-hover:text-white transition-all duration-300">
                                    <iconify-icon icon="solar:medal-star-linear" class="text-3xl"></iconify-icon>
                                </div>
                                <div class="space-y-1">
                                    <h3 class="font-black text-slate-900 text-lg uppercase tracking-tight">{{ __('Excellence') }}</h3>
                                    <p class="text-xs text-slate-500 leading-relaxed font-medium">{{ __('Striving for perfection in every product and service we deliver.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Products Section (Clean Gallery) -->
    <section class="py-28 bg-white relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row justify-between items-end gap-8 mb-20" data-aos="fade-up">
                <div class="space-y-4 max-w-2xl text-center lg:text-left">
                    <span class="text-yellow-500 font-black tracking-[0.3em] text-[11px] uppercase block">{{ __('OUR PRODUCT') }}</span>
                    <h2 class="text-3xl lg:text-4xl font-black text-slate-900 leading-tight tracking-tight uppercase">
                        {{ __('Precision Engineered ') }}<span class="text-sky-500">{{ __('Solutions') }}</span>
                    </h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
                <!-- 1. Zirconia Analyzer -->
                <a href="{{ route('product', 'zirconia-analyzer') }}" class="group block" data-aos="fade-up"
                    data-aos-delay="0">
                    <div class="space-y-6">
                        <div class="aspect-video rounded-[32px] overflow-hidden bg-slate-50">
                            <img src="{{ asset('assets/products/rb-tech/1.webp') }}"
                                class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700"
                                alt="Zirconia Analyzer">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <span class="text-[10px] font-black text-sky-600 uppercase tracking-widest block">RB
                                    Technologies</span>
                                <h3
                                    class="text-xl font-black text-slate-900 group-hover:text-sky-600 transition-colors uppercase tracking-tight">
                                    Zirconia Analyzer</h3>
                            </div>
                            <img src="{{ asset('assets/distributors/rbt.webp') }}"
                                class="h-6 w-auto object-contain mix-blend-multiply opacity-40 group-hover:opacity-100 transition-opacity"
                                alt="RB Technologies">
                        </div>
                    </div>
                </a>

                <!-- 2. Emissions Monitoring -->
                <a href="{{ route('product', 'emissions-monitoring') }}" class="group block" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="space-y-6">
                        <div class="aspect-video rounded-[32px] overflow-hidden bg-slate-50">
                            <img src="{{ asset('assets/products/sick/1.webp') }}"
                                class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700"
                                alt="Emissions Monitoring">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <span
                                    class="text-[10px] font-black text-sky-600 uppercase tracking-widest block">Sick</span>
                                <h3
                                    class="text-xl font-black text-slate-900 group-hover:text-sky-600 transition-colors uppercase tracking-tight">
                                    Emissions Monitoring</h3>
                            </div>
                            <img src="{{ asset('assets/distributors/sick.webp') }}"
                                class="h-6 w-auto object-contain mix-blend-multiply opacity-40 group-hover:opacity-100 transition-opacity"
                                alt="Sick">
                        </div>
                    </div>
                </a>



                <!-- 4. Transmitter -->
                <a href="{{ route('product', 'transmitter') }}" class="group block" data-aos="fade-up" data-aos-delay="300">
                    <div class="space-y-6">
                        <div class="aspect-video rounded-[32px] overflow-hidden bg-slate-50">
                            <img src="{{ asset('assets/products/piezus/1.webp') }}"
                                class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700"
                                alt="Transmitter">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <span
                                    class="text-[10px] font-black text-yellow-500 uppercase tracking-widest block">PIEZUS</span>
                                <h3
                                    class="text-xl font-black text-slate-900 group-hover:text-yellow-500 transition-colors uppercase tracking-tight">
                                    Transmitter</h3>
                            </div>
                            <img src="{{ asset('assets/distributors/piezus.webp') }}"
                                class="h-6 w-auto object-contain mix-blend-multiply opacity-40 group-hover:opacity-100 transition-opacity"
                                alt="PIEZUS">
                        </div>
                    </div>
                </a>

                <!-- 5. Water Analyzer -->
                <a href="{{ route('product', 'water-analyzer') }}" class="group block" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="space-y-6">
                        <div class="aspect-video rounded-[32px] overflow-hidden bg-slate-50">
                            <img src="{{ asset('assets/products/ecd/1.webp') }}"
                                class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700"
                                alt="Water Analyzer">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <span class="text-[10px] font-black text-sky-600 uppercase tracking-widest block">ECD,
                                    Process
                                    Instruments</span>
                                <h3
                                    class="text-xl font-black text-slate-900 group-hover:text-sky-600 transition-colors uppercase tracking-tight">
                                    Water Analyzer</h3>
                            </div>
                            <img src="{{ asset('assets/distributors/ecd.webp') }}"
                                class="h-6 w-auto object-contain mix-blend-multiply opacity-40 group-hover:opacity-100 transition-opacity"
                                alt="ECD">
                        </div>
                    </div>
                </a>

                <!-- 6. Fittings & Regulator -->
                <a href="{{ route('product', 'fittings-regulator') }}" class="group block" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="space-y-6">
                        <div class="aspect-video rounded-[32px] overflow-hidden bg-slate-50">
                            <img src="{{ asset('assets/products/nai-lok/1.webp') }}"
                                class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700"
                                alt="Fittings & Regulator">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <span class="text-[10px] font-black text-yellow-500 uppercase tracking-widest block">NAI
                                    LOK</span>
                                <h3
                                    class="text-xl font-black text-slate-900 group-hover:text-yellow-500 transition-colors uppercase tracking-tight">
                                    Fittings & Regulator</h3>
                            </div>
                            <img src="{{ asset('assets/distributors/nai-lok.webp') }}"
                                class="h-6 w-auto object-contain mix-blend-multiply opacity-40 group-hover:opacity-100 transition-opacity"
                                alt="NAI LOK">
                        </div>
                    </div>
                </a>

                <!-- 7. Saxon Probe -->
                <a href="{{ route('product', 'saxon-probe') }}" class="group block" data-aos="fade-up" data-aos-delay="600">
                    <div class="space-y-6">
                        <div class="aspect-video rounded-[32px] overflow-hidden bg-slate-50">
                            <img src="{{ asset('assets/products/saxon/1.webp') }}"
                                class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700"
                                alt="Saxon Probe">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <span
                                    class="text-[10px] font-black text-sky-600 uppercase tracking-widest block">Saxon</span>
                                <h3
                                    class="text-xl font-black text-slate-900 group-hover:text-sky-600 transition-colors uppercase tracking-tight">
                                    In-Situ Oxygen Probe</h3>
                            </div>
                            <img src="{{ asset('assets/distributors/saxon.webp') }}"
                                class="h-6 w-auto object-contain mix-blend-multiply opacity-40 group-hover:opacity-100 transition-opacity"
                                alt="Saxon">
                        </div>
                    </div>
                </a>

                <!-- 8. Control Valve -->
                <a href="{{ route('product', 'control-valve') }}" class="group block" data-aos="fade-up"
                    data-aos-delay="700">
                    <div class="space-y-6">
                        <div class="aspect-video rounded-[32px] overflow-hidden bg-slate-50">
                            <img src="{{ asset('assets/products/rtk/1.webp') }}"
                                class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700"
                                alt="Control Valve">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <span class="text-[10px] font-black text-yellow-500 uppercase tracking-widest block">RTK -
                                    Regeltechnik</span>
                                <h3
                                    class="text-xl font-black text-slate-900 group-hover:text-yellow-500 transition-colors uppercase tracking-tight">
                                    Control Valve</h3>
                            </div>
                            <img src="{{ asset('assets/distributors/rtk.webp') }}"
                                class="h-6 w-auto object-contain mix-blend-multiply opacity-40 group-hover:opacity-100 transition-opacity"
                                alt="RTK">
                        </div>
                    </div>
                </a>

                <!-- 9. Industrial Valve -->
                <a href="{{ route('product', 'industrial-valve') }}" class="group block" data-aos="fade-up"
                    data-aos-delay="800">
                    <div class="space-y-6">
                        <div class="aspect-video rounded-[32px] overflow-hidden bg-slate-50">
                            <img src="{{ asset('assets/products/red/1.webp') }}"
                                class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700"
                                alt="Industrial Valve">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <span class="text-[10px] font-black text-yellow-500 uppercase tracking-widest block">Red
                                    Valve</span>
                                <h3
                                    class="text-xl font-black text-slate-900 group-hover:text-yellow-500 transition-colors uppercase tracking-tight">
                                    Industrial Valve</h3>
                            </div>
                            <img src="{{ asset('assets/distributors/redvalve.webp') }}"
                                class="h-6 w-auto object-contain mix-blend-multiply opacity-40 group-hover:opacity-100 transition-opacity"
                                alt="Red Valve">
                        </div>
                    </div>
                </a>
            </div>

            <div class="mt-20 text-center lg:hidden">
                <a href="{{ route('product') }}"
                    class="inline-flex bg-slate-900 text-white px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-transform hover:scale-105 active:scale-95 shadow-xl shadow-slate-900/20">
                    {{ __('Explore All Products') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Our Services Section (Updated with Glassmorphism) -->
    <section class="py-24 background-service relative overflow-hidden">
        <!-- Background Blobs for Glass Effect -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-sky-100 rounded-full blur-[100px] opacity-50 -z-10"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-yellow-50 rounded-full blur-[100px] opacity-30 -z-10"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                <!-- Services Title -->
                <div class="lg:col-span-4 space-y-6" data-aos="fade-right">
                    <div class="space-y-3">
                        <span class="text-yellow-500 font-black tracking-[0.3em] text-[11px] uppercase block">{{ __('OUR SERVICES') }}</span>
                        <h2 class="text-2xl lg:text-4xl font-black text-slate-900 leading-tight uppercase tracking-tight">
                            {!! __('Technical <span class="text-sky-500">Solutions</span> Beyond Supply') !!}
                        </h2>
                    </div>
                    <p class="text-slate-500 font-medium leading-relaxed">
                        {{ __('Our expertise goes beyond distribution. We provide comprehensive technical services to ensure your industrial systems operate at peak performance.') }}
                    </p>
                </div>

                <!-- Services Grid -->
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- 1. Transformator Services -->
                    <a href="{{ route('service', 'transformator') }}"
                        class="group bg-white/40 backdrop-blur-xl p-8 rounded-[32px] border border-white/60 shadow-sm hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500"
                        data-aos="fade-up" data-aos-delay="0">
                        <div
                            class="w-14 h-14 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 mb-6 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                            <iconify-icon icon="solar:bolt-circle-linear" class="text-3xl"></iconify-icon>
                        </div>
                        <h3
                            class="text-lg font-black text-slate-900 mb-3 uppercase tracking-tight group-hover:text-sky-600 transition-colors">
                            {{ __('Transformator Services') }}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">{{ __('Comprehensive maintenance, testing, and oil purification for power transformers.') }}</p>
                    </a>



                    <!-- 3. Pump Services -->
                    <a href="{{ route('service', 'pump') }}"
                        class="group bg-white/40 backdrop-blur-xl p-8 rounded-[32px] border border-white/60 shadow-sm hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500"
                        data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="w-14 h-14 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 mb-6 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                            <iconify-icon icon="solar:refresh-linear" class="text-3xl"></iconify-icon>
                        </div>
                        <h3
                            class="text-lg font-black text-slate-900 mb-3 uppercase tracking-tight group-hover:text-sky-600 transition-colors">
                            {{ __('Pump Services') }}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">{{ __('Precision alignment, repair, and performance optimization for industrial pumps.') }}</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-28 bg-white overflow-hidden relative">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-linear-to-r from-transparent via-slate-100 to-transparent">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center text-center mb-20 space-y-4">
                <span class="text-yellow-500 font-bold tracking-[0.3em] text-[10px] uppercase block" data-aos="fade-up">{{ __('Our Customers') }}</span>
                <h2 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight" data-aos="fade-up"
                    data-aos-delay="100">
                    {{ __('Trusted by ') }}<span class="text-sky-500">{{ __('Industry Leaders') }}</span>
                </h2>
                <p class="text-slate-500 font-medium max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    {{ __('Partnering with Indonesia\'s largest enterprises to power sustainable industrial growth.') }}
                </p>
            </div>

            <div class="marquee-container overflow-hidden">
                <div class="animate-marquee flex items-center gap-16 lg:gap-24 w-max py-4">
                    @php
                        $clients = [
                            ['file' => 'Bakrie.webp', 'name' => 'Bakrie'],
                            ['file' => 'app-sinarmas.webp', 'name' => 'APP Sinar Mas'],
                            ['file' => 'april.webp', 'name' => 'APRIL'],
                            ['file' => 'indopalm.webp', 'name' => 'Indopalm'],
                            ['file' => 'pjb.webp', 'name' => 'PJB'],
                            ['file' => 'pusri.webp', 'name' => 'Pusri'],
                            ['file' => 'star-enery.webp', 'name' => 'Star Energy'],
                            ['file' => 'tel.webp', 'name' => 'TEL']
                        ];
                    @endphp
                    {{-- First Loop --}}
                    @foreach($clients as $client)
                        <div class="flex items-center justify-center group shrink-0">
                            <img src="{{ asset('assets/customers/' . $client['file']) }}"
                                class="max-h-12 lg:max-h-14 w-auto object-contain scale-100 group-hover:scale-110 transition-all duration-500 opacity-80 group-hover:opacity-100"
                                alt="{{ $client['name'] }} Logo">
                        </div>
                    @endforeach
                    {{-- Duplicate Loop for seamless scrolling --}}
                    @foreach($clients as $client)
                        <div class="flex items-center justify-center group shrink-0">
                            <img src="{{ asset('assets/customers/' . $client['file']) }}"
                                class="max-h-12 lg:max-h-14 w-auto object-contain scale-100 group-hover:scale-110 transition-all duration-500 opacity-80 group-hover:opacity-100"
                                alt="{{ $client['name'] }} Logo">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="py-28 bg-white relative overflow-hidden group/partners">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-linear-to-r from-transparent via-slate-200 to-transparent">
        </div>
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-sky-50 rounded-full blur-[100px] opacity-50 -z-10"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-slate-50 rounded-full blur-[100px] opacity-50 -z-10"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center text-center mb-20 space-y-6">
                <h2 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight leading-tight" data-aos="fade-up"
                    data-aos-delay="100">
                    {{ __('Our ') }}<span class="text-sky-500">{{ __('Distributors') }}</span>
                </h2>
                <p class="text-slate-500 font-medium max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    {{ __('Collaborating with industry leaders to deliver world-class technical equipment and engineering solutions across Indonesia.') }}
                </p>
            </div>

            <div class="marquee-container overflow-hidden">
                <div class="animate-marquee-reverse flex items-center gap-16 lg:gap-24 w-max py-4">
                    @php
                        $partners = [
                            ['file' => 'sick.webp', 'name' => 'SICK'],
                            ['file' => 'rbt.webp', 'name' => 'RBT'],
                            ['file' => 'piezus.webp', 'name' => 'Piezus'],
                            ['file' => 'rtk.webp', 'name' => 'RTK'],
                            ['file' => 'redvalve.webp', 'name' => 'Red Valve'],
                            ['file' => 'nai-lok.webp', 'name' => 'Nai-Lok'],
                            ['file' => 'ecd.webp', 'name' => 'ECD'],
                            ['file' => 'pi.webp', 'name' => 'PI'],
                            ['file' => 'saxon.webp', 'name' => 'Saxon'],
                        ];
                    @endphp
                    {{-- First Loop --}}
                    @foreach($partners as $partner)
                        <div class="flex items-center justify-center group shrink-0">
                            <img src="{{ asset('assets/distributors/' . $partner['file']) }}"
                                class="max-h-12 lg:max-h-14 w-auto object-contain scale-100 group-hover:scale-110 transition-all duration-500 opacity-80 group-hover:opacity-100"
                                alt="{{ $partner['name'] }} Logo">
                        </div>
                    @endforeach
                    {{-- Duplicate Loop --}}
                    @foreach($partners as $partner)
                        <div class="flex items-center justify-center group shrink-0">
                            <img src="{{ asset('assets/distributors/' . $partner['file']) }}"
                                class="max-h-12 lg:max-h-14 w-auto object-contain scale-100 group-hover:scale-110 transition-all duration-500 opacity-80 group-hover:opacity-100"
                                alt="{{ $partner['name'] }} Logo">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="py-28 bg-slate-50 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end gap-8 mb-16" data-aos="fade-up">
                <div class="space-y-4">
                    <span class="text-sky-500 font-black tracking-[0.3em] text-[10px] uppercase block">{{ __('LATEST UPDATES') }}</span>
                    <h2 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight">{{ __('News & ') }}<span
                            class="text-sky-500">{{ __('Insights') }}</span></h2>
                </div>
                <a href="{{ route('news') }}"
                    class="group flex items-center gap-3 text-slate-900 font-black text-xs uppercase tracking-widest hover:text-sky-600 transition-colors">
                    {{ __('View All News') }}
                    <iconify-icon icon="solar:alt-arrow-right-linear"
                        class="text-xl transition-transform group-hover:translate-x-2"></iconify-icon>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- News 1 -->
                <article
                    class="group bg-white rounded-[32px] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="0">
                    <a href="{{ route('news', 'meet-prinsipal-rusia') }}" class="block">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset('assets/news/meet-prinsipal-rusia/meet-prinsipal-rusia.webp') }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="News 1">
                        </div>
                        <div class="p-8 space-y-4">
                            <h3
                                class="text-lg font-bold text-slate-900 leading-tight group-hover:text-sky-600 transition-colors uppercase line-clamp-2">
                                {{ __('Meeting with Russian Principal') }}</h3>
                            <p class="text-slate-500 text-xs leading-relaxed line-clamp-2 font-medium">{{ __('Strategic collaboration discussion for advanced industrial automation in Indonesia.') }}</p>
                        </div>
                    </a>
                </article>

                <!-- News 2 -->
                <article
                    class="group bg-white rounded-[32px] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('news', 'prima-jaya-berbagi') }}" class="block">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset('assets/news/prima-jaya-berbagi/1.webp') }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="News 2">
                        </div>
                        <div class="p-8 space-y-4">
                            <h3
                                class="text-lg font-bold text-slate-900 leading-tight group-hover:text-sky-600 transition-colors uppercase line-clamp-2">
                                {{ __('Indotek Prima Jaya Berbagi') }}</h3>
                            <p class="text-slate-500 text-xs leading-relaxed line-clamp-2 font-medium">{{ __('Annual charity event supporting local communities and social welfare.') }}</p>
                        </div>
                    </a>
                </article>

                <!-- News 3 -->
                <article
                    class="group bg-white rounded-[32px] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('news', 'sponsor-sekolah-bola-RSS') }}" class="block">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset('assets/news/sponsor-sekolah-bola-RSS/1.webp') }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="News 3">
                        </div>
                        <div class="p-8 space-y-4">
                            <h3
                                class="text-lg font-bold text-slate-900 leading-tight group-hover:text-sky-600 transition-colors uppercase line-clamp-2">
                                {{ __('Sponsoring RSS Soccer School') }}</h3>
                            <p class="text-slate-500 text-xs leading-relaxed line-clamp-2 font-medium">{{ __('Empowering local youth talent through sports sponsorship and development.') }}</p>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class="py-28 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-[600px] h-[600px] bg-sky-50/50 rounded-full blur-[120px] -z-10 translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-slate-50 rounded-full blur-[100px] -z-10 -translate-x-1/2 translate-y-1/2">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex flex-col lg:flex-row justify-between items-end gap-8 mb-16" data-aos="fade-up">
                <div class="space-y-4 max-w-2xl">
                    <span class="text-yellow-500 font-bold tracking-[0.3em] text-[10px] uppercase block">{{ __('Our Capabilities') }}</span>
                    <h2 class="text-3xl lg:text-4xl font-black text-slate-900 leading-tight">{{ __('Industries We ') }}<span
                            class="text-sky-500">{{ __('Serve') }}</span></h2>
                    <p class="text-slate-500 font-medium leading-relaxed">{{ __('Providing world-class technical solutions and high-precision equipment to support the backbone of Indonesia\'s industrial landscape.') }}</p>
                </div>

                <div class="flex items-center gap-3 lg:hidden">
                    <button aria-label="Scroll left through industries"
                        onclick="document.getElementById('industry-container').scrollBy({left: -320, behavior: 'smooth'})"
                        class="w-12 h-12 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 active:bg-sky-600 active:text-white transition-all shadow-sm">
                        <iconify-icon icon="solar:alt-arrow-left-linear" class="text-xl"></iconify-icon>
                    </button>
                    <button aria-label="Scroll right through industries"
                        onclick="document.getElementById('industry-container').scrollBy({left: 320, behavior: 'smooth'})"
                        class="w-12 h-12 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 active:bg-sky-600 active:text-white transition-all shadow-sm">
                        <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl"></iconify-icon>
                    </button>
                </div>

                <div class="hidden lg:block pb-2">
                    <div class="flex gap-2">
                        <div class="w-12 h-1 bg-sky-600 rounded-full"></div>
                        <div class="w-4 h-1 bg-slate-200 rounded-full"></div>
                        <div class="w-4 h-1 bg-slate-200 rounded-full"></div>
                    </div>
                </div>
            </div>

            <div id="industry-container"
                class="flex lg:grid overflow-x-auto lg:overflow-visible gap-6 lg:gap-x-8 lg:gap-y-12 pb-8 lg:pb-0 no-scrollbar snap-x snap-mandatory lg:grid-cols-4 lg:grid-rows-2">

                <div class="flex-none w-[300px] sm:w-[350px] lg:w-auto snap-center group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50"
                    data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/industries/pulp-paper.webp') }}" alt="Pulp & Paper"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div
                                class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:reorder-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-sky-500 rounded-full"></span>
                                    <span
                                        class="text-sky-400 font-bold text-[10px] tracking-widest uppercase">{{ __('Manufacturing') }}</span>
                                </div>
                                <h3 class="text-2xl font-black text-white tracking-tight">{{ __('Pulp & Paper') }}</h3>
                                <p
                                    class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    {{ __('Supporting sustainable production with advanced monitoring and engineering tools.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Refinery -->
                <div class="flex-none w-[300px] sm:w-[350px] lg:w-auto snap-center group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50 mt-0 lg:mt-12"
                    data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/industries/refinery.webp') }}" alt="Refinery"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div
                                class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:fire-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-yellow-500 rounded-full"></span>
                                    <span
                                        class="text-yellow-400 font-bold text-[10px] tracking-widest uppercase">{{ __('Processing') }}</span>
                                </div>
                                <h3 class="text-2xl font-black text-white tracking-tight">{{ __('Refinery') }}</h3>
                                <p
                                    class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    {{ __('Delivering high-performance components for complex refining processes.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Power Plant -->
                <div class="flex-none w-[300px] sm:w-[350px] lg:w-auto snap-center group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50"
                    data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/industries/power-plan.webp') }}" alt="Power Plant"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div
                                class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:bolt-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-sky-500 rounded-full"></span>
                                    <span class="text-sky-400 font-bold text-[10px] tracking-widest uppercase">{{ __('Energy') }}</span>
                                </div>
                                <h3 class="text-2xl font-black text-white tracking-tight">{{ __('Power Plant') }}</h3>
                                <p
                                    class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    {{ __('Ensuring stability and efficiency for power generation systems nationwide.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Palm Oil -->
                <div class="flex-none w-[300px] sm:w-[350px] lg:w-auto snap-center group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50 mt-0 lg:mt-12"
                    data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('assets/industries/palm_oil.webp') }}" alt="Palm Oil"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div
                                class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:leaf-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-yellow-500 rounded-full"></span>
                                    <span
                                        class="text-yellow-400 font-bold text-[10px] tracking-widest uppercase">{{ __('Agri-Industry') }}</span>
                                </div>
                                <h3 class="text-2xl font-black text-white tracking-tight">{{ __('Palm Oil') }}</h3>
                                <p
                                    class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    {{ __('Optimizing extraction and processing with precision industrial solutions.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Fertilizer -->
                <div class="flex-none w-[300px] sm:w-[350px] lg:w-auto snap-center group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50"
                    data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('assets/industries/fertilizer.webp') }}" alt="Fertilizer"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div
                                class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:box-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-sky-500 rounded-full"></span>
                                    <span
                                        class="text-sky-400 font-bold text-[10px] tracking-widest uppercase">{{ __('Agriculture') }}</span>
                                </div>
                                <h3 class="text-2xl font-black text-white tracking-tight">{{ __('Fertilizer') }}</h3>
                                <p
                                    class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    {{ __('Enhancing production efficiency for agricultural supply chains.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. Oil & Gas Upstream -->
                <div class="flex-none w-[300px] sm:w-[350px] lg:w-auto snap-center group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50 mt-0 lg:mt-12"
                    data-aos="fade-up" data-aos-delay="600">
                    <img src="{{ asset('assets/industries/oil_gas_upstream.webp') }}" alt="Oil & Gas Upstream"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div
                                class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:settings-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-yellow-500 rounded-full"></span>
                                    <span
                                        class="text-yellow-400 font-bold text-[10px] tracking-widest uppercase">{{ __('Resources') }}</span>
                                </div>
                                <h3 class="text-2xl font-black text-white tracking-tight">{{ __('Oil & Gas Upstream') }}</h3>
                                <p
                                    class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    {{ __('Supporting exploration and production with robust technical equipment.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 7. General Industry -->
                <div class="flex-none w-[300px] sm:w-[350px] lg:w-auto snap-center group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50"
                    data-aos="fade-up" data-aos-delay="700">
                    <img src="{{ asset('assets/industries/general_industry.webp') }}" alt="General Industry"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div
                                class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:buildings-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-sky-500 rounded-full"></span>
                                    <span
                                        class="text-sky-400 font-bold text-[10px] tracking-widest uppercase">{{ __('General') }}</span>
                                </div>
                                <h3 class="text-2xl font-black text-white tracking-tight">{{ __('General Industry') }}</h3>
                                <p
                                    class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    {{ __('Providing versatile solutions for diverse manufacturing and specialized trading needs.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 8. Chemical -->
                <div class="flex-none w-[300px] sm:w-[350px] lg:w-auto snap-center group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50 mt-0 lg:mt-12"
                    data-aos="fade-up" data-aos-delay="800">
                    <img src="{{ asset('assets/industries/chemical.webp') }}" alt="Chemical"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500">
                    </div>

                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div
                                class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:test-tube-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-yellow-500 rounded-full"></span>
                                    <span
                                        class="text-yellow-400 font-bold text-[10px] tracking-widest uppercase">Processing</span>
                                </div>
                                <h3 class="text-2xl font-black text-white tracking-tight">Chemical</h3>
                                <p
                                    class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    Ensuring safety and high precision in specialized chemical processing and handling.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <style>
                .no-scrollbar::-webkit-scrollbar {
                    display: none;
                }

                .no-scrollbar {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }
            </style>
        </div>
    </section>
@endsection