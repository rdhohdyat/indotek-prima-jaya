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
                            SUPPLYING SOLUTIONS. DELIVERING TRUST.
                        </span>

                        <h1 class="text-[54px] lg:text-[72px] font-extrabold text-[#1a202c] leading-[1.05] tracking-tight">
                            Trusted General<br>
                            Supplier for<br>
                            Industry & Trade
                        </h1>
                    </div>

                    <p class="text-[15px] text-slate-500 leading-relaxed max-w-md font-medium">
                        PT. INDOTEK PRIMA JAYA is a general supplier company providing Engineering Tools, Measuring
                        Instruments, Mechanical, Electrical, Computer Devices, and other industrial needs for private and
                        government sectors.
                    </p>

                    <div class="flex flex-wrap gap-5 pt-2">
                        <a href="#"
                            class="bg-sky-500 hover:bg-sky-700 text-white px-9 py-4 rounded-md font-bold text-[14px] transition flex items-center gap-4 shadow-xl shadow-sky-600/10 group">
                            Learn More
                            <iconify-icon icon="solar:alt-arrow-right-linear"
                                class="text-xl transition-transform group-hover:translate-x-1"></iconify-icon>
                        </a>

                        <a href="{{ route('contact') }}"
                            class="bg-white hover:bg-slate-50 text-sky-500 border-2 border-sky-500 px-9 py-4 rounded-md font-bold text-[14px] transition flex items-center gap-4 shadow-sm group">
                            Contact Us
                            <iconify-icon icon="solar:alt-arrow-right-linear"
                                class="text-xl transition-transform group-hover:translate-x-1"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Awan putih bagian bawah (Smooth Mist Effect) -->
        <div class="absolute -bottom-24 left-0 w-full h-64 pointer-events-none z-[5]">
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
                        <img src="{{ asset('assets/office.webp') }}"
                            alt="Indotek Building" class="w-full h-[450px] rounded-2xl shadow-2xl object-cover object-left transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-slate-900/10 shadow-inner"></div>
                    </div>
                </div>

                <!-- About Content -->
                <div class="lg:col-span-4 space-y-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="space-y-4">
                        <span class="text-sky-600 font-black tracking-[0.2em] text-[11px] uppercase block" data-aos="fade-up" data-aos-delay="300">ABOUT US</span>
                        <h2 class="text-4xl lg:text-5xl font-black text-slate-900 leading-[1.1] tracking-tight" data-aos="fade-up" data-aos-delay="400">
                            Your Reliable Partner for Sustainable Growth
                        </h2>
                    </div>

                    <div class="space-y-4 text-slate-500 text-sm leading-relaxed font-medium" data-aos="fade-up" data-aos-delay="500">
                        <p>Founded in 2020, PT. INDOTEK PRIMA JAYA has grown to become a trusted general supplier for
                            various industries in Indonesia.</p>
                        <p>We provide innovative business solutions and high-quality products that meet industry standards.
                            Our commitment is to prioritize quality and trust to ensure harmonious and sustainable business
                            continuity.</p>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="600">
                        <a href="{{ route('about') }}"
                            class="inline-flex bg-slate-900 hover:bg-sky-600 text-white px-8 py-4 rounded-xl font-black text-[11px] uppercase tracking-widest transition-all items-center gap-3 shadow-xl shadow-slate-900/10 hover:shadow-sky-600/20">
                            Explore Our Story
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="lg:col-span-4">
                    <div class="space-y-8">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Integrity -->
                            <div class="flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-colors group" data-aos="fade-left" data-aos-delay="400">
                                <div
                                    class="w-14 h-14 bg-white text-sky-600 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-slate-100 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                    <iconify-icon icon="solar:shield-check-linear" class="text-3xl"></iconify-icon>
                                </div>
                                <div class="space-y-1">
                                    <h3 class="font-black text-slate-900 text-lg uppercase tracking-tight">Integrity</h3>
                                    <p class="text-xs text-slate-500 leading-relaxed font-medium">Upholding the highest ethical standards in every business interaction.</p>
                                </div>
                            </div>

                            <!-- Dedication -->
                            <div class="flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-colors group" data-aos="fade-left" data-aos-delay="500">
                                <div
                                    class="w-14 h-14 bg-white text-sky-600 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-slate-100 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                    <iconify-icon icon="solar:bolt-linear" class="text-3xl"></iconify-icon>
                                </div>
                                <div class="space-y-1">
                                    <h3 class="font-black text-slate-900 text-lg uppercase tracking-tight">Dedication</h3>
                                    <p class="text-xs text-slate-500 leading-relaxed font-medium">Fully committed to providing innovative and effective solutions.</p>
                                </div>
                            </div>

                            <!-- Loyalty -->
                            <div class="flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-colors group" data-aos="fade-left" data-aos-delay="600">
                                <div
                                    class="w-14 h-14 bg-white text-sky-600 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-slate-100 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                    <iconify-icon icon="solar:users-group-rounded-linear" class="text-3xl"></iconify-icon>
                                </div>
                                <div class="space-y-1">
                                    <h3 class="font-black text-slate-900 text-lg uppercase tracking-tight">Loyalty</h3>
                                    <p class="text-xs text-slate-500 leading-relaxed font-medium">Building long-term, trustworthy partnerships with our clients.</p>
                                </div>
                            </div>

                            <!-- Excellence -->
                            <div class="flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-colors group" data-aos="fade-left" data-aos-delay="700">
                                <div
                                    class="w-14 h-14 bg-white text-sky-600 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-slate-100 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                    <iconify-icon icon="solar:medal-star-linear" class="text-3xl"></iconify-icon>
                                </div>
                                <div class="space-y-1">
                                    <h3 class="font-black text-slate-900 text-lg uppercase tracking-tight">Excellence</h3>
                                    <p class="text-xs text-slate-500 leading-relaxed font-medium">Striving for perfection in every product and service we deliver.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Products Section -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-4xl p-8 lg:p-12 shadow-sm border border-slate-100">
                <div class="flex flex-col lg:flex-row gap-12">

                    <!-- Title -->
                    <div class="lg:w-1/4 space-y-4">
                        <span class="text-sky-600 font-bold tracking-widest text-xs uppercase block">OUR PRODUCTS</span>
                        <h2 class="text-3xl font-extrabold text-slate-900 leading-tight">Comprehensive Range for Every Need
                        </h2>
                    </div>

                    <!-- Products Grid -->
                    <div class="lg:w-3/4">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-5">

                            <!-- Product 1 -->
                            <div data-aos="fade-up" data-aos-delay="100"
                                class="group relative bg-white border border-slate-100 hover:border-sky-200 hover:shadow-2xl hover:shadow-sky-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-sky-50/0 to-sky-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                </div>
                                <div
                                    class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=200&h=200&fit=crop"
                                        alt="Measuring"
                                        class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4
                                    class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-sky-600 transition-colors">
                                    Measuring<br>Instruments</h4>
                            </div>

                            <!-- Product 2 -->
                            <div data-aos="fade-up" data-aos-delay="200"
                                class="group relative bg-white border border-slate-100 hover:border-sky-200 hover:shadow-2xl hover:shadow-sky-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-sky-50/0 to-sky-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                </div>
                                <div
                                    class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1544724569-5f546fa602b5?q=80&w=200&h=200&fit=crop"
                                        alt="Electrical"
                                        class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4
                                    class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-sky-600 transition-colors">
                                    Electrical</h4>
                            </div>

                            <!-- Product 3 -->
                            <div data-aos="fade-up" data-aos-delay="300"
                                class="group relative bg-white border border-slate-100 hover:border-sky-200 hover:shadow-2xl hover:shadow-sky-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-sky-50/0 to-sky-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                </div>
                                <div
                                    class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=200&h=200&fit=crop"
                                        alt="Valve"
                                        class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4
                                    class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-sky-600 transition-colors">
                                    Valve Control<br>& Manual</h4>
                            </div>

                            <!-- Product 4 -->
                            <div data-aos="fade-up" data-aos-delay="400"
                                class="group relative bg-white border border-slate-100 hover:border-sky-200 hover:shadow-2xl hover:shadow-sky-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-sky-50/0 to-sky-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                </div>
                                <div
                                    class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1516937941344-00b4e0337589?q=80&w=200&h=200&fit=crop"
                                        alt="Mechanical"
                                        class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4
                                    class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-sky-600 transition-colors">
                                    Mechanical</h4>
                            </div>

                            <!-- Product 5 -->
                            <div data-aos="fade-up" data-aos-delay="500"
                                class="group relative bg-white border border-slate-100 hover:border-sky-200 hover:shadow-2xl hover:shadow-sky-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-sky-50/0 to-sky-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                </div>
                                <div
                                    class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?q=80&w=200&h=200&fit=crop"
                                        alt="Computer"
                                        class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4
                                    class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-sky-600 transition-colors">
                                    Computer<br>Devices</h4>
                            </div>

                            <!-- Product 6 -->
                            <div data-aos="fade-up" data-aos-delay="600"
                                class="group relative bg-white border border-slate-100 hover:border-sky-200 hover:shadow-2xl hover:shadow-sky-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-sky-50/0 to-sky-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                </div>
                                <div
                                    class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?q=80&w=200&h=200&fit=crop"
                                        alt="Supplies"
                                        class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4
                                    class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-sky-600 transition-colors">
                                    Other Industrial<br>Supplies</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services and Partners Section -->
    <section class="py-12 bg-white border-b border-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- Services Title -->
                <div class="lg:col-span-2 space-y-3 pt-4">
                    <span class="text-sky-600 font-bold tracking-widest text-xs uppercase block">OUR SERVICES</span>
                    <h2 class="text-3xl font-extrabold text-slate-900 leading-tight">Solutions Beyond Supply</h2>
                </div>

                <!-- Services Grid -->
                <div class="lg:col-span-10 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Service 1 -->
                    <div data-aos="fade-up" data-aos-delay="100"
                        class="flex gap-4 p-4 border border-transparent hover:border-sky-50 hover:bg-slate-50/50 rounded-2xl transition group">
                        <div class="shrink-0">
                            <div
                                class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 border border-sky-100 shadow-sm group-hover:bg-sky-600 group-hover:text-white transition duration-300">
                                <iconify-icon icon="solar:verified-check-linear" class="text-2xl"></iconify-icon>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 mb-1">Procurement Solutions</h3>
                            <p class="text-[13px] text-slate-500 leading-relaxed">Efficient and reliable procurement
                                tailored to your needs.</p>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="flex gap-4 p-4 border border-transparent hover:border-sky-50 hover:bg-slate-50/50 rounded-2xl transition group">
                        <div class="shrink-0">
                            <div
                                class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 border border-sky-100 shadow-sm group-hover:bg-sky-600 group-hover:text-white transition duration-300">
                                <iconify-icon icon="solar:bolt-linear" class="text-2xl"></iconify-icon>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 mb-1">General Supply</h3>
                            <p class="text-[13px] text-slate-500 leading-relaxed">Comprehensive supply of industrial
                                products and equipment.</p>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div data-aos="fade-up" data-aos-delay="300"
                        class="flex gap-4 p-4 border border-transparent hover:border-sky-50 hover:bg-slate-50/50 rounded-2xl transition group">
                        <div class="shrink-0">
                            <div
                                class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 border border-sky-100 shadow-sm group-hover:bg-sky-600 group-hover:text-white transition duration-300">
                                <iconify-icon icon="solar:settings-linear" class="text-2xl"></iconify-icon>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 mb-1">Industrial Support</h3>
                            <p class="text-[13px] text-slate-500 leading-relaxed">Technical support and after-sales service
                                you can rely on.</p>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div data-aos="fade-up" data-aos-delay="400"
                        class="flex gap-4 p-4 border border-transparent hover:border-sky-50 hover:bg-slate-50/50 rounded-2xl transition group">
                        <div class="shrink-0">
                            <div
                                class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 border border-sky-100 shadow-sm group-hover:bg-sky-600 group-hover:text-white transition duration-300">
                                <iconify-icon icon="solar:dollar-minimalistic-linear" class="text-2xl"></iconify-icon>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 mb-1">Business Solutions</h3>
                            <p class="text-[13px] text-slate-500 leading-relaxed">Innovative solutions to improve efficiency
                                and productivity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients Section (Logo Cloud) -->
    <section class="py-24 bg-white overflow-hidden border-b border-slate-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 space-y-4">
                <span class="text-sky-600 font-black tracking-[0.2em] text-[11px] uppercase block" data-aos="fade-up">VALUED CLIENTS
                </span>
                <h2 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight" data-aos="fade-up"
                    data-aos-delay="100">Trusted by Industry Leaders</h2>
                <div class="w-12 h-1 bg-sky-600 mx-auto rounded-full" data-aos="zoom-in" data-aos-delay="200"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12 items-center">
                @php
                    $clients = [
                        'Bakrie.webp',
                        'app-sinarmas.webp',
                        'april.webp',
                        'indopalm.webp',
                        'pjb.webp',
                        'pusri.webp',
                        'star-enery.webp',
                        'tel.webp'
                    ];
                @endphp
                @foreach($clients as $index => $client)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                        class="flex items-center justify-center p-8 rounded-3xl bg-slate-50/50 border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-900/5 hover:-translate-y-2 transition-all duration-500 group">
                        <img src="{{ asset('assets/customers/' . $client) }}"
                            class="max-h-12 w-auto object-contain filter grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition-all duration-700"
                            alt="Client Logo">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Partners Section (Logo Cloud) -->
    <section class="py-24 bg-slate-50 overflow-hidden border-b border-slate-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 space-y-4">
                <span class="text-sky-600 font-black tracking-[0.2em] text-[11px] uppercase block" data-aos="fade-up">GLOBAL
                    PARTNERSHIPS</span>
                <h2 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight" data-aos="fade-up"
                    data-aos-delay="100">Our Strategic Partners</h2>
                <div class="w-12 h-1 bg-sky-600 mx-auto rounded-full" data-aos="zoom-in" data-aos-delay="200"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 items-center">
                @php
                    $partners = [
                        'sick.webp',
                        'rbt.webp',
                        'piezus.webp',
                        'rtk.webp',
                        'redvalve.webp',
                        'nai-lok.webp',
                        'ecd.webp',
                        'pi.webp',
                        'saxon.webp'
                    ];
                @endphp
                @foreach($partners as $index => $partner)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                        class="flex items-center justify-center p-8 rounded-3xl bg-white border border-slate-100 hover:shadow-2xl hover:shadow-sky-900/5 hover:-translate-y-2 transition-all duration-500 group">
                        <img src="{{ asset('assets/distributors/' . $partner) }}"
                            class="max-h-12 w-auto object-contain filter grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition-all duration-700"
                            alt="Partner Logo">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Industries We Serve Section (Cinematic Redesign) -->
    <section class="py-28 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-sky-50/50 rounded-full blur-[120px] -z-10 translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-slate-50 rounded-full blur-[100px] -z-10 -translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex flex-col lg:flex-row justify-between items-end gap-8 mb-16" data-aos="fade-up">
                <div class="space-y-4 max-w-2xl">
                    <span class="text-yellow-600 font-bold tracking-[0.3em] text-[10px] uppercase block">Market Sectors</span>
                    <h2 class="text-4xl lg:text-5xl font-black text-slate-900 leading-tight">Industries We <span class="text-sky-500">Serve</span></h2>
                    <p class="text-slate-500 font-medium leading-relaxed">Providing world-class technical solutions and high-precision equipment to support the backbone of Indonesia's industrial landscape.</p>
                </div>
                <div class="hidden lg:block pb-2">
                    <div class="flex gap-2">
                        <div class="w-12 h-1 bg-sky-600 rounded-full"></div>
                        <div class="w-4 h-1 bg-slate-200 rounded-full"></div>
                        <div class="w-4 h-1 bg-slate-200 rounded-full"></div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Pulp & Paper -->
                <div class="group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/industries/pulp-paper.webp') }}" alt="Pulp & Paper" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                    
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <!-- Icon Badge -->
                            <div class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:buildings-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-sky-500 rounded-full"></span>
                                    <span class="text-sky-400 font-bold text-[10px] tracking-widest uppercase">Manufacturing</span>
                                </div>
                                <h4 class="text-2xl font-black text-white tracking-tight">Pulp & Paper</h4>
                                <p class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    Supporting sustainable production with advanced monitoring and engineering tools.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Power Plant -->
                <div class="group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50 mt-0 lg:mt-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/industries/power-plan.webp') }}" alt="Power Plant" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                    
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:bolt-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-yellow-500 rounded-full"></span>
                                    <span class="text-yellow-400 font-bold text-[10px] tracking-widest uppercase">Energy</span>
                                </div>
                                <h4 class="text-2xl font-black text-white tracking-tight">Power Plant</h4>
                                <p class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    Ensuring stability and efficiency for power generation systems nationwide.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Food & Beverage -->
                <div class="group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/industries/food-beverage.webp') }}" alt="Food & Beverage" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                    
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:cup-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-sky-500 rounded-full"></span>
                                    <span class="text-sky-400 font-bold text-[10px] tracking-widest uppercase">Processing</span>
                                </div>
                                <h4 class="text-2xl font-black text-white tracking-tight">Food & Beverage</h4>
                                <p class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    Providing sanitary and precise measurement solutions for food safety.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Refinery -->
                <div class="group relative h-[450px] rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50 mt-0 lg:mt-8" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('assets/industries/refinery.webp') }}" alt="Refinery" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/95 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                    
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="space-y-6">
                            <div class="w-14 h-14 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl flex items-center justify-center text-white transform group-hover:-translate-y-2 transition-all duration-500">
                                <iconify-icon icon="solar:test-tube-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-6 h-[2px] bg-yellow-500 rounded-full"></span>
                                    <span class="text-yellow-400 font-bold text-[10px] tracking-widest uppercase">Oil & Gas</span>
                                </div>
                                <h4 class="text-2xl font-black text-white tracking-tight">Refinery</h4>
                                <p class="text-white/60 text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    Delivering high-performance components for complex refining processes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection