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
            <div class="absolute inset-x-0 bottom-0 h-full bg-[radial-gradient(50%_100%_at_50%_100%,rgba(255,255,255,1)_0%,rgba(255,255,255,0.8)_40%,rgba(255,255,255,0)_100%)] blur-2xl opacity-90"></div>
            
            <!-- Layer 3: Extra blur for softness -->
            <div class="absolute -bottom-10 left-0 w-full h-40 bg-white blur-[100px] opacity-60"></div>

            <!-- Layer 4: Extra Dense Right Corner Cloud -->
            <div class="absolute bottom-0 right-0 w-2/3 h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(255,255,255,1)_0%,rgba(255,255,255,0.9)_30%,rgba(255,255,255,0)_75%)] blur-3xl opacity-100"></div>
            
            <!-- Layer 5: High-position Right Puff -->
            <div class="absolute -bottom-10 right-0 w-96 h-96 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9)_0%,rgba(255,255,255,0)_70%)] blur-3xl opacity-70"></div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-16 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- About Image -->
                <div class="lg:col-span-4" data-aos="fade-right">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop"
                            alt="Indotek Building" class="w-full h-[450px] rounded-2xl shadow-2xl object-cover">
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-slate-900/10"></div>
                    </div>
                </div>

                <!-- About Content -->
                <div class="lg:col-span-4 space-y-6" data-aos="fade-left">
                    <h3 class="text-sky-600 font-bold tracking-widest text-xs uppercase">ABOUT US</h3>
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
                        class="inline-flex bg-white hover:bg-slate-50 text-sky-600 border border-sky-200 px-6 py-2.5 rounded-md font-bold text-sm transition items-center gap-2 mt-4 shadow-sm">
                        Read More About Us
                        <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg"></iconify-icon>
                    </a>
                </div>

                <!-- Core Values -->
                <div class="lg:col-span-4">
                    <div class="space-y-8">
                        <div class="grid grid-cols-1 gap-8">
                            <!-- Professionalism -->
                            <div class="flex gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shrink-0 shadow-sm border border-blue-100">
                                    <iconify-icon icon="solar:shield-check-linear" class="text-2xl"></iconify-icon>
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
                                    class="w-12 h-12 bg-sky-50 text-sky-600 rounded-xl flex items-center justify-center shrink-0 shadow-sm border border-sky-100">
                                    <iconify-icon icon="solar:medal-star-linear" class="text-2xl"></iconify-icon>
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
                                    class="w-12 h-12 bg-sky-50 text-sky-600 rounded-xl flex items-center justify-center shrink-0 shadow-sm border border-sky-100">
                                    <iconify-icon icon="solar:bolt-linear" class="text-2xl"></iconify-icon>
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
                                    class="w-12 h-12 bg-sky-50 text-sky-600 rounded-xl flex items-center justify-center shrink-0 shadow-sm border border-sky-100">
                                    <iconify-icon icon="solar:hand-shake-linear" class="text-2xl"></iconify-icon>
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
                                    class="w-12 h-12 bg-sky-50 text-sky-600 rounded-xl flex items-center justify-center shrink-0 shadow-sm border border-sky-100">
                                    <iconify-icon icon="solar:users-group-two-rounded-linear"
                                        class="text-2xl"></iconify-icon>
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
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-4xl p-8 lg:p-12 shadow-sm border border-slate-100">
                <div class="flex flex-col lg:flex-row gap-12">

                    <!-- Title -->
                    <div class="lg:w-1/4 space-y-4">
                        <h3 class="text-sky-600 font-bold tracking-widest text-xs uppercase">OUR PRODUCTS</h3>
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
                                class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
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
                                class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
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
                                class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
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
                                class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
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
                                class="group relative bg-white border border-slate-100 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-600/5 transition-all duration-500 rounded-2xl p-5 flex flex-col items-center text-center cursor-pointer overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-linear-to-b from-blue-50/0 to-blue-50/50 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
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

                        <div class="mt-10 flex justify-center lg:justify-start">
                            <a href="#"
                                class="group/btn inline-flex items-center gap-3 bg-slate-900 text-white px-7 py-3 rounded-xl font-bold text-sm hover:bg-sky-600 transition-all shadow-lg shadow-slate-900/10">
                                View All Products
                                <iconify-icon icon="solar:alt-arrow-right-linear"
                                    class="text-xl transition-transform group-hover/btn:translate-x-1"></iconify-icon>
                            </a>
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
                    <h3 class="text-sky-600 font-bold tracking-widest text-xs uppercase">OUR SERVICES</h3>
                    <h2 class="text-3xl font-extrabold text-slate-900 leading-tight">Solutions Beyond Supply</h2>
                </div>

                <!-- Services Grid -->
                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
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
                            <h4 class="font-bold text-slate-900 mb-1">Procurement Solutions</h4>
                            <p class="text-[13px] text-slate-400 leading-relaxed">Efficient and reliable procurement
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
                            <h4 class="font-bold text-slate-900 mb-1">General Supply</h4>
                            <p class="text-[13px] text-slate-400 leading-relaxed">Comprehensive supply of industrial
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
                            <h4 class="font-bold text-slate-900 mb-1">Industrial Support</h4>
                            <p class="text-[13px] text-slate-400 leading-relaxed">Technical support and after-sales service
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
                            <h4 class="font-bold text-slate-900 mb-1">Business Solutions</h4>
                            <p class="text-[13px] text-slate-400 leading-relaxed">Innovative solutions to improve efficiency
                                and productivity.</p>
                        </div>
                    </div>
                </div>

                <!-- Trusted Partners -->
                <div class="lg:col-span-4 bg-[#f8fafc] rounded-2xl p-6 border border-slate-100 flex flex-col h-full">
                    <h4 class="text-sky-600 font-bold tracking-widest text-[10px] uppercase mb-6">OUR TRUSTED PARTNERS</h4>
                    <div class="grid grid-cols-3 gap-3 grow">
                        <!-- Partners Logos -->
                        <div data-aos="zoom-in" data-aos-delay="100"
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-slate-800 text-[10px]">PIEZUS</span>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="200"
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-sky-700 text-[10px]">FineTek</span>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="300"
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <div class="flex flex-col items-center leading-none">
                                <span class="text-[8px] text-sky-800 font-bold">FUJI</span>
                                <span class="text-[7px] text-slate-500">ELECTRIC</span>
                            </div>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="400"
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-emerald-600 text-[10px]">KEMTRAK</span>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="500"
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-sky-900 text-[10px]">ENOTEC</span>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="600"
                            class="bg-white p-3 rounded-xl border border-slate-100 flex items-center justify-center hover:shadow-md transition">
                            <span class="font-extrabold text-red-600 text-[10px]">ABB</span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center lg:justify-start">
                        <a href="#"
                            class="inline-flex items-center gap-2 text-slate-500 text-[11px] font-bold hover:text-sky-600 transition bg-white px-4 py-2 rounded-lg border border-slate-200">
                            More Partners
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-sm"></iconify-icon>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="py-16 bg-[#f8fafc] relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <h3 class="text-sky-600 font-bold tracking-widest text-xs uppercase mb-2">INDUSTRIES WE SERVE</h3>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Industry 1 -->
                <div data-aos="fade-up" data-aos-delay="100"
                    class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl transition duration-500 h-56">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=600&fit=crop"
                        alt="Pulp & Paper"
                        class="w-full h-full object-cover group-hover:scale-110 transition transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex flex-col gap-2 w-full">
                        <div
                            class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20 text-white">
                            <iconify-icon icon="solar:buildings-linear" class="text-xl"></iconify-icon>
                        </div>
                        <h4 class="text-white font-bold text-sm tracking-wide">Pulp & Paper</h4>
                    </div>
                </div>

                <!-- Industry 2 -->
                <div data-aos="fade-up" data-aos-delay="200"
                    class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl transition duration-500 h-56">
                    <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=600&fit=crop"
                        alt="Power Plant"
                        class="w-full h-full object-cover group-hover:scale-110 transition transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex flex-col gap-2 w-full">
                        <div
                            class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20 text-white">
                            <iconify-icon icon="solar:bolt-linear" class="text-xl"></iconify-icon>
                        </div>
                        <h4 class="text-white font-bold text-sm tracking-wide">Power Plant</h4>
                    </div>
                </div>

                <!-- Industry 3 -->
                <div data-aos="fade-up" data-aos-delay="300"
                    class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl transition duration-500 h-56">
                    <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=600&fit=crop"
                        alt="Food & Beverage"
                        class="w-full h-full object-cover group-hover:scale-110 transition transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex flex-col gap-2 w-full">
                        <div
                            class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20 text-white">
                            <iconify-icon icon="solar:cup-linear" class="text-xl"></iconify-icon>
                        </div>
                        <h4 class="text-white font-bold text-sm tracking-wide">Food & Beverage</h4>
                    </div>
                </div>

                <!-- Industry 4 -->
                <div data-aos="fade-up" data-aos-delay="400"
                    class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl transition duration-500 h-56">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=600&fit=crop"
                        alt="Refinery"
                        class="w-full h-full object-cover group-hover:scale-110 transition transform duration-700">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex flex-col gap-2 w-full">
                        <div
                            class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-lg flex items-center justify-center border border-white/20 text-white">
                            <iconify-icon icon="solar:test-tube-linear" class="text-xl"></iconify-icon>
                        </div>
                        <h4 class="text-white font-bold text-sm tracking-wide">Refinery</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection