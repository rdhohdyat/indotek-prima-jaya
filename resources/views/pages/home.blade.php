@extends('layouts.app')

@section('title', 'Home - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative hero-bg pt-12 pb-20 lg:pt-24 lg:pb-32 overflow-hidden">
        <!-- Optional: Add a subtle overlay to match the sky blend -->
        <div class="absolute inset-0 bg-linear-to-r from-white/90 to-transparent z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Hero Content -->
                <div class="lg:col-span-5 space-y-10 ">
                    <div class="space-y-4">
                        <span class="text-[#0061ff] font-bold tracking-widest text-[13px] uppercase block">SUPPLYING
                            SOLUTIONS. DELIVERING TRUST.</span>
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
                            class="bg-[#0061ff] hover:bg-blue-700 text-white px-9 py-4 rounded-md font-bold text-[14px] transition flex items-center gap-4 shadow-xl shadow-blue-600/10 group">
                            Learn More
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-white hover:bg-slate-50 text-[#0061ff] border-2 border-[#0061ff] px-9 py-4 rounded-md font-bold text-[14px] transition flex items-center gap-4 shadow-sm group">
                            Contact Us
                            <svg class="w-4 h-4 text-[#0061ff] transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-16 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- About Image -->
                <div class="lg:col-span-4">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop"
                            alt="Indotek Building" class="w-full h-[450px] rounded-2xl shadow-2xl object-cover">
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-slate-900/10"></div>
                    </div>
                </div>

                <!-- About Content -->
                <div class="lg:col-span-4 space-y-6">
                    <h3 class="text-blue-600 font-bold tracking-widest text-xs uppercase">ABOUT US</h3>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 leading-tight">Your Reliable Partner for
                        Sustainable Growth</h2>

                    <div class="space-y-4 text-slate-500 text-sm leading-relaxed">
                        <p>Founded in 2020, PT. INDOTEK PRIMA JAYA has grown to become a trusted general supplier for
                            various industries in Indonesia.</p>
                        <p>We provide innovative business solutions and high-quality products that meet industry standards.
                            Our commitment is to prioritize quality and trust to ensure harmonious and sustainable business
                            continuity.</p>
                    </div>

                    <a href="#"
                        class="inline-flex bg-white hover:bg-slate-50 text-blue-600 border border-blue-200 px-6 py-2.5 rounded-md font-bold text-sm transition items-center gap-2 mt-4 shadow-sm">
                        Read More About Us
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Core Values -->
                <div class="lg:col-span-4">
                    <div class="space-y-8">
                        <div class="grid grid-cols-1 gap-8">
                            <!-- Professionalism -->
                            <div class="flex gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-sm border border-blue-100">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Professionalism</h4>
                                    <p class="text-xs text-slate-400 leading-relaxed">We work with expertise and
                                        responsibility to deliver the best results.</p>
                                </div>
                            </div>

                            <!-- Quality -->
                            <div class="flex gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-sm border border-blue-100">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Quality</h4>
                                    <p class="text-xs text-slate-400 leading-relaxed">Committed to providing high-quality
                                        products and services.</p>
                                </div>
                            </div>

                            <!-- Innovative Solutions -->
                            <div class="flex gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-sm border border-blue-100">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Innovative Solutions</h4>
                                    <p class="text-xs text-slate-400 leading-relaxed">Delivering innovative solutions to
                                        meet the evolving needs of our customers and industries.</p>
                                </div>
                            </div>

                            <!-- Integrity -->
                            <div class="flex gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-sm border border-blue-100">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Integrity</h4>
                                    <p class="text-xs text-slate-400 leading-relaxed">Honest, transparent, and ethical in
                                        every business relationship.</p>
                                </div>
                            </div>

                            <!-- Trust -->
                            <div class="flex gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-sm border border-blue-100">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Trust</h4>
                                    <p class="text-xs text-slate-400 leading-relaxed">Building long-term relationships based
                                        on trust and reliability.</p>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-[2rem] p-8 lg:p-12 shadow-sm border border-slate-100">
                <div class="flex flex-col lg:flex-row gap-12">

                    <!-- Title -->
                    <div class="lg:w-1/4 space-y-4">
                        <h3 class="text-blue-600 font-bold tracking-widest text-xs uppercase">OUR PRODUCTS</h3>
                        <h2 class="text-3xl font-extrabold text-slate-900 leading-tight">Comprehensive Range for Every Need
                        </h2>
                    </div>

                    <!-- Products Grid -->
                    <div class="lg:w-3/4">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-5">

                            <!-- Product 1 -->
                            <div class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                                <div class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=200&h=200&fit=crop" alt="Measuring" class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4 class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-blue-600 transition-colors">Measuring<br>Instruments</h4>
                            </div>

                            <!-- Product 2 -->
                            <div class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                                <div class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1544724569-5f546fa602b5?q=80&w=200&h=200&fit=crop" alt="Electrical" class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4 class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-blue-600 transition-colors">Electrical</h4>
                            </div>

                            <!-- Product 3 -->
                            <div class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                                <div class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=200&h=200&fit=crop" alt="Valve" class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4 class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-blue-600 transition-colors">Valve Control<br>& Manual</h4>
                            </div>

                            <!-- Product 4 -->
                            <div class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                                <div class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1516937941344-00b4e0337589?q=80&w=200&h=200&fit=crop" alt="Mechanical" class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4 class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-blue-600 transition-colors">Mechanical</h4>
                            </div>

                            <!-- Product 5 -->
                            <div class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                                <div class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?q=80&w=200&h=200&fit=crop" alt="Computer" class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4 class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-blue-600 transition-colors">Computer<br>Devices</h4>
                            </div>

                            <!-- Product 6 -->
                            <div class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                                <div class="relative w-full aspect-square mb-4 flex items-center justify-center bg-slate-50 rounded-xl overflow-hidden group-hover:bg-white transition-colors">
                                    <img src="https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?q=80&w=200&h=200&fit=crop" alt="Supplies" class="w-16 h-16 object-contain group-hover:scale-110 transition transform duration-500">
                                </div>
                                <h4 class="relative text-[13px] font-bold text-slate-800 leading-tight group-hover:text-blue-600 transition-colors">Other Industrial<br>Supplies</h4>
                            </div>
                        </div>

                        <div class="mt-10 flex justify-center lg:justify-start">
                            <a href="#" class="group/btn inline-flex items-center gap-3 bg-slate-900 text-white px-7 py-3 rounded-xl font-bold text-sm hover:bg-blue-600 transition-all shadow-lg shadow-slate-900/10">
                                View All Products
                                <svg class="w-4 h-4 transition-transform group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services and Partners Section -->
    <section class="py-12 bg-white border-b border-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- Services Title -->
                <div class="lg:col-span-2 space-y-3 pt-4">
                    <h3 class="text-blue-600 font-bold tracking-widest text-xs uppercase">OUR SERVICES</h3>
                    <h2 class="text-3xl font-extrabold text-slate-900 leading-tight">Solutions Beyond Supply</h2>
                </div>

                <!-- Services Grid -->
                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Service 1 -->
                    <div
                        class="flex gap-4 p-4 border border-transparent hover:border-blue-50 hover:bg-slate-50/50 rounded-2xl transition group">
                        <div class="flex-shrink-0">
                            <div
                                class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 border border-blue-100 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Procurement Solutions</h4>
                            <p class="text-[13px] text-slate-400 leading-relaxed">Efficient and reliable procurement
                                tailored to your needs.</p>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div
                        class="flex gap-4 p-4 border border-transparent hover:border-blue-50 hover:bg-slate-50/50 rounded-2xl transition group">
                        <div class="flex-shrink-0">
                            <div
                                class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 border border-blue-100 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">General Supply</h4>
                            <p class="text-[13px] text-slate-400 leading-relaxed">Comprehensive supply of industrial
                                products and equipment.</p>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div
                        class="flex gap-4 p-4 border border-transparent hover:border-blue-50 hover:bg-slate-50/50 rounded-2xl transition group">
                        <div class="flex-shrink-0">
                            <div
                                class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 border border-blue-100 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Industrial Support</h4>
                            <p class="text-[13px] text-slate-400 leading-relaxed">Technical support and after-sales service
                                you can rely on.</p>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div
                        class="flex gap-4 p-4 border border-transparent hover:border-blue-50 hover:bg-slate-50/50 rounded-2xl transition group">
                        <div class="flex-shrink-0">
                            <div
                                class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 border border-blue-100 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.407 2.67 1M12 8V7m0 1v1m0 8v1m0-1c-1.11 0-2.08-.407-2.67-1M12 16v-1m0 1v-1m3.5-3h.5m-11 0h.5m10 5l1.5 1.5m-11.5-11.5l1.5 1.5m10 0l-1.5 1.5m-11.5 11.5l-1.5 1.5">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Business Solutions</h4>
                            <p class="text-[13px] text-slate-400 leading-relaxed">Innovative solutions to improve efficiency
                                and productivity.</p>
                        </div>
                    </div>
                </div>

                <!-- Trusted Partners -->
                <div class="lg:col-span-4 bg-[#f8fafc] rounded-2xl p-6 border border-slate-100 flex flex-col h-full">
                    <h4 class="text-blue-600 font-bold tracking-widest text-[10px] uppercase mb-6">OUR TRUSTED PARTNERS</h4>
                    <div class="grid grid-cols-3 gap-3 flex-grow">
                        <!-- Partners Logos -->
                        <div
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-slate-800 text-[10px]">PIEZUS</span>
                        </div>
                        <div
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-blue-700 text-[10px]">FineTek</span>
                        </div>
                        <div
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <div class="flex flex-col items-center leading-none">
                                <span class="text-[8px] text-blue-800 font-bold">FUJI</span>
                                <span class="text-[7px] text-slate-500">ELECTRIC</span>
                            </div>
                        </div>
                        <div
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-emerald-600 text-[10px]">KEMTRAK</span>
                        </div>
                        <div
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-blue-900 text-[10px]">ENOTEC</span>
                        </div>
                        <div
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-red-600 text-[10px]">ABB</span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center lg:justify-start">
                        <a href="#"
                            class="inline-flex items-center gap-2 text-slate-500 text-[11px] font-bold hover:text-blue-600 transition bg-white px-4 py-2 rounded-lg border border-slate-200">
                            More Partners
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="py-16 bg-[#f8fafc]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <h3 class="text-blue-600 font-bold tracking-widest text-xs uppercase mb-2">INDUSTRIES WE SERVE</h3>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Industry 1 -->
                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl transition duration-500 h-56">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=600&fit=crop" alt="Pulp & Paper" class="w-full h-full object-cover group-hover:scale-110 transition transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex flex-col gap-2 w-full">
                        <div class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h4 class="text-white font-bold text-sm tracking-wide">Pulp & Paper</h4>
                    </div>
                </div>

                <!-- Industry 2 -->
                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl transition duration-500 h-56">
                    <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=600&fit=crop" alt="Power Plant" class="w-full h-full object-cover group-hover:scale-110 transition transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex flex-col gap-2 w-full">
                        <div class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="text-white font-bold text-sm tracking-wide">Power Plant</h4>
                    </div>
                </div>

                <!-- Industry 3 -->
                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl transition duration-500 h-56">
                    <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=600&fit=crop" alt="Food & Beverage" class="w-full h-full object-cover group-hover:scale-110 transition transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex flex-col gap-2 w-full">
                        <div class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path></svg>
                        </div>
                        <h4 class="text-white font-bold text-sm tracking-wide">Food & Beverage</h4>
                    </div>
                </div>

                <!-- Industry 4 -->
                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl transition duration-500 h-56">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=600&fit=crop" alt="Refinery" class="w-full h-full object-cover group-hover:scale-110 transition transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex flex-col gap-2 w-full">
                        <div class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <h4 class="text-white font-bold text-sm tracking-wide">Refinery</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection