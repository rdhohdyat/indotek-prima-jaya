@extends('layouts.app')

@section('title', 'About Us - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 pb-28 lg:pt-32 lg:pb-40 overflow-hidden"
        style="background: url('{{ asset('assets/hero/about.webp') }}'); background-size: cover; background-position: center;">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 space-y-8 relative z-10" data-aos="fade-right">
                    <div class="space-y-3">
                        <span class="text-yellow-600 font-bold tracking-[0.2em] text-[12px] uppercase block">ABOUT US</span>
                        <h1
                            class="text-[54px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                            About<br>
                            <span class="text-sky-600">PT. INDOTEK</span><br>
                            PRIMA JAYA
                        </h1>
                    </div>

                    <p class="text-[16px] text-slate-600 leading-relaxed max-w-lg font-medium">
                        We are a general supplier company that provides innovative solutions with a commitment to quality,
                        integrity, and trust for sustainable business growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- Awan putih bagian bawah (Smooth Mist Effect) -->
        <div class="absolute -bottom-24 left-0 w-full h-64 pointer-events-none z-[5]">
            <div class="absolute inset-0 bg-linear-to-t from-white via-white/80 to-transparent"></div>
            <div
                class="absolute inset-x-0 bottom-0 h-full bg-[radial-gradient(50%_100%_at_50%_100%,rgba(255,255,255,1)_0%,rgba(255,255,255,0.8)_40%,rgba(255,255,255,0)_100%)] blur-2xl opacity-90">
            </div>
            <div class="absolute -bottom-10 left-0 w-full h-40 bg-white blur-[100px] opacity-60"></div>
            <div
                class="absolute bottom-0 right-0 w-2/3 h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(255,255,255,1)_0%,rgba(255,255,255,0.9)_30%,rgba(255,255,255,0)_75%)] blur-3xl opacity-100">
            </div>
            <div
                class="absolute -bottom-10 right-0 w-96 h-96 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9)_0%,rgba(255,255,255,0)_70%)] blur-3xl opacity-70">
            </div>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-aos="fade-right">
                    <img src="{{ asset('assets/office.webp') }}"
                        class="rounded-3xl shadow-2xl relative z-10 w-full h-[500px] object-cover object-left" alt="Office Building">
                    <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-sky-50 rounded-full -z-10 blur-3xl"></div>
                </div>
                <div class="space-y-8" data-aos="fade-left">
                    <div class="space-y-3">
                        <span class="text-yellow-600 font-bold tracking-[0.2em] text-[12px] uppercase block">WHO WE
                            ARE</span>
                        <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">
                            Your Reliable Partner<br>for Sustainable Growth
                        </h2>
                    </div>
                    <div class="space-y-6 text-slate-600 text-[15px] leading-relaxed font-medium">
                        <p>
                            PT. INDOTEK PRIMA JAYA is a company engaged in the field of General Suppliers including
                            Engineering Tools, Measuring Instruments, Mechanical, Electrical, Computer Devices and others
                            serving medium and large companies for general industry and trade, both private and government.
                        </p>
                        <p>
                            Founded in 2020, we provide innovative business solutions to companies that are our partners,
                            where we always prioritize quality and trust for a harmonious and sustainable business
                            continuity.
                        </p>
                        <p>
                            Our goal is to be the first choice for our business partners by contributing to each of our
                            clients more than they expect, through our special services in a professional manner and full
                            integrity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vision & Mission Section -->
    <section class="py-24 background-vision-mission relative overflow-hidden">
        <!-- Decoration -->
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-sky-50/50 rounded-full blur-3xl -z-10">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">

                <!-- Vision -->
                <div class="relative group" data-aos="fade-right">
                    <div
                        class="absolute -inset-4 bg-linear-to-r from-sky-600 to-sky-700 rounded-[40px] opacity-0 group-hover:opacity-5 transition-opacity duration-500">
                    </div>
                    <div class="relative space-y-6">
                        <div
                            class="w-20 h-20 bg-sky-600 rounded-3xl flex items-center justify-center text-white shadow-2xl shadow-sky-600/30 transform group-hover:rotate-6 transition-transform duration-500">
                            <iconify-icon icon="solar:eye-linear" class="text-4xl"></iconify-icon>
                        </div>
                        <div class="space-y-4">
                            <h2 class="text-3xl font-black text-slate-900 tracking-tight uppercase">Our Vision</h2>
                            <p class="text-xl text-slate-500 leading-relaxed font-medium">
                                To become a leading and trusted partner in industrial supply and business solutions by
                                delivering high-quality products, professional services, and sustainable value for every
                                customer and industry we serve.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="relative group" data-aos="fade-left">
                    <div
                        class="absolute -inset-4 bg-linear-to-r from-sky-600 to-sky-700 rounded-[40px] opacity-0 group-hover:opacity-5 transition-opacity duration-500">
                    </div>
                    <div class="relative space-y-6">
                        <div
                            class="w-20 h-20 bg-yellow-500 rounded-3xl flex items-center justify-center text-white shadow-2xl shadow-slate-900/30 transform group-hover:-rotate-6 transition-transform duration-500">
                            <iconify-icon icon="solar:target-linear" class="text-4xl"></iconify-icon>
                        </div>
                        <div class="space-y-4">
                            <h2 class="text-3xl font-black text-slate-900 tracking-tight uppercase">Our Mission</h2>
                            <p class="text-lg text-slate-500 leading-relaxed font-medium">
                                To provide reliable and cost-effective industrial products and solutions with a strong
                                commitment to quality, innovation, and customer satisfaction. We continuously improve our
                                services and expertise to support the growth and sustainability of our business partners
                                across various industries.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Core Values Section (Image Style) -->
    <section class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-50/50 border border-slate-100 rounded-[32px] p-8 lg:p-12 shadow-sm" data-aos="fade-up">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 divide-y md:divide-y-0 lg:divide-x divide-slate-200">

                    <!-- Integrity -->
                    <div class="p-8 flex flex-col items-center text-center space-y-6 group">
                        <div
                            class="w-20 h-20 flex items-center justify-center text-sky-600 transition-transform duration-500 group-hover:scale-110">
                            <iconify-icon icon="solar:shield-check-linear" class="text-6xl"></iconify-icon>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-lg font-black text-slate-900 uppercase tracking-tight">Integrity</h3>
                            <p class="text-xs text-slate-500 leading-relaxed max-w-[200px] mx-auto">
                                Upholding the highest ethical standards in every business interaction and decision.
                            </p>
                        </div>
                    </div>

                    <!-- Dedication -->
                    <div class="p-8 flex flex-col items-center text-center space-y-6 group">
                        <div
                            class="w-20 h-20 flex items-center justify-center text-sky-600 transition-transform duration-500 group-hover:scale-110">
                            <iconify-icon icon="solar:bolt-linear" class="text-6xl"></iconify-icon>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-lg font-black text-slate-900 uppercase tracking-tight">Dedication</h3>
                            <p class="text-xs text-slate-500 leading-relaxed max-w-[200px] mx-auto">
                                Fully committed to providing innovative and effective solutions for our partners.
                            </p>
                        </div>
                    </div>

                    <!-- Loyalty -->
                    <div class="p-8 flex flex-col items-center text-center space-y-6 group">
                        <div
                            class="w-20 h-20 flex items-center justify-center text-sky-600 transition-transform duration-500 group-hover:scale-110">
                            <iconify-icon icon="solar:users-group-rounded-linear" class="text-6xl"></iconify-icon>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-lg font-black text-slate-900 uppercase tracking-tight">Loyalty</h3>
                            <p class="text-xs text-slate-500 leading-relaxed max-w-[200px] mx-auto">
                                Building long-term, trustworthy partnerships based on reliability and success.
                            </p>
                        </div>
                    </div>

                    <!-- Excellence -->
                    <div class="p-8 flex flex-col items-center text-center space-y-6 group">
                        <div
                            class="w-20 h-20 flex items-center justify-center text-sky-600 transition-transform duration-500 group-hover:scale-110">
                            <iconify-icon icon="solar:medal-star-linear" class="text-6xl"></iconify-icon>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-lg font-black text-slate-900 uppercase tracking-tight">Excellence</h3>
                            <p class="text-xs text-slate-500 leading-relaxed max-w-[200px] mx-auto">
                                Striving for perfection in every product and service we deliver to ensure satisfaction.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Our Journey Section -->
    <section class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <div class="space-y-12" data-aos="fade-right">
                    <div class="space-y-3">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">OUR JOURNEY</span>
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 leading-tight">
                            A Commitment to Excellence
                        </h2>
                    </div>

                    <div
                        class="space-y-10 relative before:absolute before:left-[19px] before:top-2 before:bottom-2 before:w-[2px] before:bg-slate-100">
                        <div class="relative pl-14 group">
                            <div
                                class="absolute left-0 top-0 w-10 h-10 rounded-full bg-white border-2 border-sky-600 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-colors z-10 shadow-sm">
                                <iconify-icon icon="solar:flag-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <h3 class="text-lg font-bold text-slate-900 uppercase">Company Established</h3>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    PT. INDOTEK PRIMA JAYA was founded with a vision to become a trusted general supplier in
                                    Indonesia.
                                </p>
                            </div>
                        </div>

                        <div class="relative pl-14 group">
                            <div
                                class="absolute left-0 top-0 w-10 h-10 rounded-full bg-white border-2 border-sky-600 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-colors z-10 shadow-sm">
                                <iconify-icon icon="solar:chart-2-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <h3 class="text-lg font-bold text-slate-900 uppercase">Expanding Solutions</h3>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    We expanded our product range and built strong partnerships with reputable brands and
                                    clients.
                                </p>
                            </div>
                        </div>

                        <div class="relative pl-14 group">
                            <div
                                class="absolute left-0 top-0 w-10 h-10 rounded-full bg-white border-2 border-sky-600 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-colors z-10 shadow-sm">
                                <iconify-icon icon="solar:users-group-rounded-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <h3 class="text-lg font-bold text-slate-900 uppercase">Growing Together</h3>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    We continue to improve our services and support various industries with reliable supply
                                    solutions.
                                </p>
                            </div>
                        </div>

                        <div class="relative pl-14 group">
                            <div
                                class="absolute left-0 top-0 w-10 h-10 rounded-full bg-white border-2 border-sky-600 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-colors z-10 shadow-sm">
                                <iconify-icon icon="solar:graph-up-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <h3 class="text-lg font-bold text-slate-900 uppercase">Building the Future</h3>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    We are committed to innovation, quality, and long-term partnerships for sustainable
                                    growth.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-10" data-aos="fade-left">
                    <div class="relative">
                        <img src="{{ asset('assets/our-journey.png') }}" class="rounded-3xl  w-full h-[450px] object-cover"
                            alt="Handshake">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <!-- Mist Effect Top -->
        <div class="absolute top-0 left-0 w-full h-32 bg-linear-to-b from-white to-transparent z-10 pointer-events-none">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="text-center space-y-4 mb-16" data-aos="fade-up">
                <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">INDUSTRIES WE SERVE</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">Supporting Essential Industries
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Pulp & Paper -->
                <div class="group relative overflow-hidden rounded-3xl h-[400px]" data-aos="zoom-in" data-aos-delay="0">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Pulp & Paper">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg">
                            <iconify-icon icon="solar:reorder-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-xl font-bold text-white uppercase tracking-wide">Pulp & Paper</h3>
                    </div>
                </div>

                <!-- Power Plant -->
                <div class="group relative overflow-hidden rounded-3xl h-[400px]" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1473081556163-2a17de81fc97?auto=format&fit=crop&q=80&w=800"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Power Plant">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg">
                            <iconify-icon icon="solar:bolt-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-xl font-bold text-white uppercase tracking-wide">Power Plant</h3>
                    </div>
                </div>

                <!-- Food & Beverage -->
                <div class="group relative overflow-hidden rounded-3xl h-[400px]" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?auto=format&fit=crop&q=80&w=800"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Food & Beverage">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg">
                            <iconify-icon icon="solar:cup-hot-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-xl font-bold text-white uppercase tracking-wide">Food & Beverage</h3>
                    </div>
                </div>

                <!-- Refinery -->
                <div class="group relative overflow-hidden rounded-3xl h-[400px]" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1542337311-64d17ec23f14?auto=format&fit=crop&q=80&w=800"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Refinery">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg">
                            <iconify-icon icon="solar:fire-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-xl font-bold text-white uppercase tracking-wide">Refinery</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mist Effect Bottom -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-linear-to-t from-white to-transparent z-10 pointer-events-none">
        </div>
    </section>
@endsection