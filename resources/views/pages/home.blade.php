@extends('layouts.app')

@section('title', 'Home - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-50 pt-16 pb-20 lg:pt-24 lg:pb-28 overflow-hidden">
        <!-- Abstract Background Decoration -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[40rem] h-[40rem] bg-blue-50 rounded-full opacity-50 blur-3xl z-0"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[30rem] h-[30rem] bg-orange-50 rounded-full opacity-50 blur-3xl z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Content -->
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2">
                        <span class="w-8 h-px bg-blue-600"></span>
                        <span class="text-blue-600 font-semibold tracking-wider text-sm uppercase">Supplying Solutions. Delivering Trust.</span>
                    </div>
                    
                    <h1 class="text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                        Trusted General Supplier for <span class="text-slate-700">Industry & Trade</span>
                    </h1>
                    
                    <p class="text-lg text-slate-600 leading-relaxed max-w-lg">
                        PT. INDOTEK PRIMA JAYA is a general supplier company providing Engineering Tools, Measuring Instruments, Mechanical, Electrical, Computer Devices, and other industrial needs for private and government sectors.
                    </p>
                    
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-md font-medium transition flex items-center gap-2 shadow-md shadow-blue-600/20">
                            Learn More
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="#" class="bg-white hover:bg-slate-50 text-blue-600 border border-blue-600 px-8 py-3.5 rounded-md font-medium transition flex items-center gap-2">
                            Contact Us
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="relative">
                    <img src="https://placehold.co/800x600/e2e8f0/475569?text=Industrial+Equipment" alt="Industrial Equipment" class="w-full h-auto drop-shadow-2xl rounded-2xl object-cover mix-blend-multiply">
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- About Image -->
                <div class="lg:col-span-4">
                    <img src="https://placehold.co/600x700/e2e8f0/475569?text=Office+Building" alt="Office Building" class="w-full h-auto rounded-2xl shadow-xl object-cover">
                </div>

                <!-- About Content -->
                <div class="lg:col-span-4 space-y-6">
                    <h3 class="text-blue-600 font-semibold tracking-wider text-sm uppercase">About Us</h3>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 leading-tight">Your Reliable Partner for Sustainable Growth</h2>
                    
                    <div class="space-y-4 text-slate-600 leading-relaxed">
                        <p>Founded in 2020, PT. INDOTEK PRIMA JAYA has grown to become a trusted general supplier for various industries in Indonesia.</p>
                        <p>We provide innovative business solutions and high-quality products that meet industry standards. Our commitment is to prioritize quality and trust to ensure harmonious and sustainable business continuity.</p>
                    </div>

                    <a href="#" class="inline-flex bg-white hover:bg-slate-50 text-blue-600 border border-blue-200 px-6 py-2.5 rounded-md font-medium transition items-center gap-2 mt-4 shadow-sm">
                        Read More About Us
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- Core Values -->
                <div class="lg:col-span-4 border border-slate-100 rounded-2xl p-6 sm:p-8 bg-slate-50/50">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <!-- Left Column Values -->
                        <div class="space-y-8">
                            <!-- Professionalism -->
                            <div class="flex flex-col gap-3">
                                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Professionalism</h4>
                                    <p class="text-sm text-slate-500">We work with expertise and responsibility to deliver the best results.</p>
                                </div>
                            </div>
                            
                            <!-- Quality -->
                            <div class="flex flex-col gap-3">
                                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Quality</h4>
                                    <p class="text-sm text-slate-500">Committed to providing high-quality products and services.</p>
                                </div>
                            </div>

                            <!-- Innovative Solutions -->
                            <div class="flex flex-col gap-3">
                                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Innovative Solutions</h4>
                                    <p class="text-sm text-slate-500">Delivering innovative solutions to meet the evolving needs of our customers and industries.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column Values -->
                        <div class="space-y-8 sm:mt-12">
                            <!-- Integrity -->
                            <div class="flex flex-col gap-3">
                                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Integrity</h4>
                                    <p class="text-sm text-slate-500">Honest, transparent, and ethical in every business relationship.</p>
                                </div>
                            </div>

                            <!-- Trust -->
                            <div class="flex flex-col gap-3">
                                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-1">Trust</h4>
                                    <p class="text-sm text-slate-500">Building long-term relationships based on trust and reliability.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Products Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-sm border border-slate-100">
                <div class="flex flex-col lg:flex-row gap-12 items-start">
                    
                    <!-- Title -->
                    <div class="lg:w-1/4 space-y-3">
                        <h3 class="text-blue-600 font-semibold tracking-wider text-sm uppercase">Our Products</h3>
                        <h2 class="text-3xl font-bold text-slate-900 leading-tight">Comprehensive Range for Every Need</h2>
                    </div>

                    <!-- Products Grid -->
                    <div class="lg:w-3/4">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 lg:gap-6">
                            
                            <!-- Product 1 -->
                            <div class="border border-slate-100 hover:border-blue-200 hover:shadow-md transition duration-300 rounded-2xl p-6 flex flex-col items-center text-center group cursor-pointer bg-slate-50/50 hover:bg-white">
                                <img src="https://placehold.co/200x200/transparent/475569?text=Instrument" alt="Measuring Instruments" class="w-32 h-32 object-contain mb-4 group-hover:scale-105 transition transform duration-300">
                                <h4 class="font-semibold text-slate-800">Measuring<br>Instruments</h4>
                            </div>

                            <!-- Product 2 -->
                            <div class="border border-slate-100 hover:border-blue-200 hover:shadow-md transition duration-300 rounded-2xl p-6 flex flex-col items-center text-center group cursor-pointer bg-slate-50/50 hover:bg-white">
                                <img src="https://placehold.co/200x200/transparent/475569?text=Electrical" alt="Electrical" class="w-32 h-32 object-contain mb-4 group-hover:scale-105 transition transform duration-300">
                                <h4 class="font-semibold text-slate-800">Electrical</h4>
                            </div>

                            <!-- Product 3 -->
                            <div class="border border-slate-100 hover:border-blue-200 hover:shadow-md transition duration-300 rounded-2xl p-6 flex flex-col items-center text-center group cursor-pointer bg-slate-50/50 hover:bg-white">
                                <img src="https://placehold.co/200x200/transparent/475569?text=Valve" alt="Valve Control & Manual" class="w-32 h-32 object-contain mb-4 group-hover:scale-105 transition transform duration-300">
                                <h4 class="font-semibold text-slate-800">Valve Control<br>& Manual</h4>
                            </div>

                            <!-- Product 4 -->
                            <div class="border border-slate-100 hover:border-blue-200 hover:shadow-md transition duration-300 rounded-2xl p-6 flex flex-col items-center text-center group cursor-pointer bg-slate-50/50 hover:bg-white">
                                <img src="https://placehold.co/200x200/transparent/475569?text=Mechanical" alt="Mechanical" class="w-32 h-32 object-contain mb-4 group-hover:scale-105 transition transform duration-300">
                                <h4 class="font-semibold text-slate-800">Mechanical</h4>
                            </div>

                            <!-- Product 5 -->
                            <div class="border border-slate-100 hover:border-blue-200 hover:shadow-md transition duration-300 rounded-2xl p-6 flex flex-col items-center text-center group cursor-pointer bg-slate-50/50 hover:bg-white">
                                <img src="https://placehold.co/200x200/transparent/475569?text=Computer" alt="Computer Devices" class="w-32 h-32 object-contain mb-4 group-hover:scale-105 transition transform duration-300">
                                <h4 class="font-semibold text-slate-800">Computer<br>Devices</h4>
                            </div>

                            <!-- Product 6 -->
                            <div class="border border-slate-100 hover:border-blue-200 hover:shadow-md transition duration-300 rounded-2xl p-6 flex flex-col items-center text-center group cursor-pointer bg-slate-50/50 hover:bg-white">
                                <img src="https://placehold.co/200x200/transparent/475569?text=Supplies" alt="Other Industrial Supplies" class="w-32 h-32 object-contain mb-4 group-hover:scale-105 transition transform duration-300">
                                <h4 class="font-semibold text-slate-800">Other Industrial<br>Supplies</h4>
                            </div>
                            
                        </div>
                        
                        <div class="mt-8 text-center">
                            <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition">
                                View All Products
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services and Partners Section -->
    <section class="py-12 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Services Title -->
                <div class="lg:col-span-2 space-y-3 pt-4">
                    <h3 class="text-blue-600 font-semibold tracking-wider text-sm uppercase">Our Services</h3>
                    <h2 class="text-3xl font-bold text-slate-900 leading-tight">Solutions Beyond Supply</h2>
                </div>

                <!-- Services Grid -->
                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Service 1 -->
                    <div class="flex gap-4 p-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Procurement Solutions</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Efficient and reliable procurement tailored to your needs.</p>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="flex gap-4 p-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">General Supply</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Comprehensive supply of industrial products and equipment.</p>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="flex gap-4 p-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Industrial Support</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Technical support and after-sales service you can rely on.</p>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="flex gap-4 p-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Business Solutions</h4>
                            <p class="text-sm text-slate-500 leading-relaxed">Innovative solutions to improve efficiency and productivity.</p>
                        </div>
                    </div>
                </div>

                <!-- Trusted Partners -->
                <div class="lg:col-span-4 bg-slate-50 rounded-2xl p-6 border border-slate-100 flex flex-col h-full justify-between">
                    <div>
                        <h4 class="text-blue-600 font-semibold tracking-wider text-xs uppercase mb-4">Our Trusted Partners</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Partners Logos -->
                            <div class="bg-white p-3 rounded-lg border border-slate-100 flex items-center justify-center">
                                <span class="font-bold text-slate-800 text-sm">PIEZUS</span>
                            </div>
                            <div class="bg-white p-3 rounded-lg border border-slate-100 flex items-center justify-center">
                                <span class="font-bold text-blue-600 text-sm">FineTek</span>
                            </div>
                            <div class="bg-white p-3 rounded-lg border border-slate-100 flex items-center justify-center">
                                <span class="font-bold text-red-600 text-sm">Fuji Electric</span>
                            </div>
                            <div class="bg-white p-3 rounded-lg border border-slate-100 flex items-center justify-center">
                                <span class="font-bold text-emerald-600 text-sm">KEMTRAK</span>
                            </div>
                            <div class="bg-white p-3 rounded-lg border border-slate-100 flex items-center justify-center">
                                <span class="font-bold text-blue-800 text-sm">ENOTEC</span>
                            </div>
                            <div class="bg-white p-3 rounded-lg border border-slate-100 flex items-center justify-center">
                                <span class="font-bold text-red-600 text-sm">ABB</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 text-center lg:text-left">
                        <a href="#" class="inline-flex items-center gap-2 text-slate-600 text-sm font-medium hover:text-blue-600 transition bg-white px-4 py-2 rounded-md border border-slate-200">
                            More Partners
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-blue-600 font-semibold tracking-wider text-sm uppercase mb-2">Industries We Serve</h3>
                <h2 class="text-3xl font-bold text-slate-900">Empowering Various Sectors</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Industry 1 -->
                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-xl transition duration-300">
                    <div class="aspect-[4/3]">
                        <img src="https://placehold.co/400x300/475569/ffffff?text=Pulp+Paper" alt="Pulp & Paper" class="w-full h-full object-cover group-hover:scale-110 transition transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex items-end gap-3 w-full">
                        <div class="bg-white/20 backdrop-blur-md p-2 rounded-lg text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h4 class="text-white font-bold text-lg translate-y-1 group-hover:-translate-y-0 transition duration-300">Pulp & Paper</h4>
                    </div>
                </div>

                <!-- Industry 2 -->
                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-xl transition duration-300">
                    <div class="aspect-[4/3]">
                        <img src="https://placehold.co/400x300/475569/ffffff?text=Power+Plant" alt="Power Plant" class="w-full h-full object-cover group-hover:scale-110 transition transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex items-end gap-3 w-full">
                        <div class="bg-white/20 backdrop-blur-md p-2 rounded-lg text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="text-white font-bold text-lg translate-y-1 group-hover:-translate-y-0 transition duration-300">Power Plant</h4>
                    </div>
                </div>

                <!-- Industry 3 -->
                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-xl transition duration-300">
                    <div class="aspect-[4/3]">
                        <img src="https://placehold.co/400x300/475569/ffffff?text=Food+Beverage" alt="Food & Beverage" class="w-full h-full object-cover group-hover:scale-110 transition transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex items-end gap-3 w-full">
                        <div class="bg-white/20 backdrop-blur-md p-2 rounded-lg text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path></svg>
                        </div>
                        <h4 class="text-white font-bold text-lg translate-y-1 group-hover:-translate-y-0 transition duration-300">Food & Beverage</h4>
                    </div>
                </div>

                <!-- Industry 4 -->
                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-sm hover:shadow-xl transition duration-300">
                    <div class="aspect-[4/3]">
                        <img src="https://placehold.co/400x300/475569/ffffff?text=Refinery" alt="Refinery" class="w-full h-full object-cover group-hover:scale-110 transition transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 flex items-end gap-3 w-full">
                        <div class="bg-white/20 backdrop-blur-md p-2 rounded-lg text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <h4 class="text-white font-bold text-lg translate-y-1 group-hover:-translate-y-0 transition duration-300">Refinery</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
