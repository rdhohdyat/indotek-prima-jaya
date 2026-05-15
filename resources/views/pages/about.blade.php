@extends('layouts.app')

@section('title', 'About Us - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 pb-28 lg:pt-32 lg:pb-40 overflow-hidden" 
             style="background: url('https://images.unsplash.com/photo-1513828583688-c52646db42da?auto=format&fit=crop&q=80&w=2000'); background-size: cover; background-position: center;">
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 space-y-8 relative z-10" data-aos="fade-right">
                    <!-- Awan putih / gradient kabut -->
                    <div class="absolute -inset-x-12 -inset-y-10 -z-10 pointer-events-none">
                        <div class="w-full h-full 
                                        bg-[radial-gradient(ellipse_at_center,rgba(255,255,255,1)_0%,rgba(255,255,255,0.95)_38%,rgba(255,255,255,0.7)_58%,rgba(255,255,255,0)_78%)]
                                        blur-2xl">
                        </div>
                    </div>

                    <div class="space-y-3">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">ABOUT US</span>
                        <h1 class="text-[54px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                            About<br>
                            <span class="text-sky-600">PT. INDOTEK</span><br>
                            PRIMA JAYA
                        </h1>
                    </div>

                    <p class="text-[16px] text-slate-600 leading-relaxed max-w-lg font-medium">
                        We are a general supplier company that provides innovative solutions with a commitment to quality, integrity, and trust for sustainable business growth.
                    </p>
                </div>
            </div>
        </div>

        <!-- Awan putih bagian bawah (Smooth Mist Effect) -->
        <div class="absolute -bottom-24 left-0 w-full h-64 pointer-events-none z-[5]">
            <div class="absolute inset-0 bg-linear-to-t from-white via-white/80 to-transparent"></div>
            <div class="absolute inset-x-0 bottom-0 h-full bg-[radial-gradient(50%_100%_at_50%_100%,rgba(255,255,255,1)_0%,rgba(255,255,255,0.8)_40%,rgba(255,255,255,0)_100%)] blur-2xl opacity-90"></div>
            <div class="absolute -bottom-10 left-0 w-full h-40 bg-white blur-[100px] opacity-60"></div>
            <div class="absolute bottom-0 right-0 w-2/3 h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(255,255,255,1)_0%,rgba(255,255,255,0.9)_30%,rgba(255,255,255,0)_75%)] blur-3xl opacity-100"></div>
            <div class="absolute -bottom-10 right-0 w-96 h-96 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9)_0%,rgba(255,255,255,0)_70%)] blur-3xl opacity-70"></div>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1200" 
                         class="rounded-3xl shadow-2xl relative z-10 w-full h-[500px] object-cover" alt="Office Building">
                    <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-sky-50 rounded-full -z-10 blur-3xl"></div>
                </div>
                <div class="space-y-8" data-aos="fade-left">
                    <div class="space-y-3">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">WHO WE ARE</span>
                        <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">
                            Your Reliable Partner<br>for Sustainable Growth
                        </h2>
                    </div>
                    <div class="space-y-6 text-slate-600 text-[15px] leading-relaxed font-medium">
                        <p>
                            PT. INDOTEK PRIMA JAYA is a company engaged in the field of General Suppliers including Engineering Tools, Measuring Instruments, Mechanical, Electrical, Computer Devices and others serving medium and large companies for general industry and trade, both private and government.
                        </p>
                        <p>
                            Founded in 2020, we provide innovative business solutions to companies that are our partners, where we always prioritize quality and trust for a harmonious and sustainable business continuity.
                        </p>
                        <p>
                            Our goal is to be the first choice for our business partners by contributing to each of our clients more than they expect, through our special services in a professional manner and full integrity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Professionalism -->
                <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 group" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-16 h-16 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        <iconify-icon icon="solar:shield-check-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Professionalism</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        We work with expertise and responsibility to deliver the best results.
                    </p>
                </div>

                <!-- Integrity -->
                <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        <iconify-icon icon="solar:hand-shake-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Integrity</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Honest, transparent, and ethical in every business relationship.
                    </p>
                </div>

                <!-- Quality -->
                <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        <iconify-icon icon="solar:settings-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Quality</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Committed to providing high-quality products and services.
                    </p>
                </div>

                <!-- Trust -->
                <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        <iconify-icon icon="solar:user-speak-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Trust</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Building long-term relationships based on trust and reliability.
                    </p>
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
                        <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">
                            A Commitment to Excellence
                        </h2>
                    </div>

                    <div class="space-y-10 relative before:absolute before:left-[19px] before:top-2 before:bottom-2 before:w-[2px] before:bg-slate-100">
                        <!-- 2020 -->
                        <div class="relative pl-14 group">
                            <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-white border-2 border-sky-600 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-colors z-10 shadow-sm">
                                <iconify-icon icon="solar:flag-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <span class="text-sky-600 font-black text-sm uppercase tracking-widest">2020</span>
                                <h4 class="text-lg font-bold text-slate-900 uppercase">Company Established</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    PT. INDOTEK PRIMA JAYA was founded with a vision to become a trusted general supplier in Indonesia.
                                </p>
                            </div>
                        </div>

                        <!-- 2021 -->
                        <div class="relative pl-14 group">
                            <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-white border-2 border-sky-600 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-colors z-10 shadow-sm">
                                <iconify-icon icon="solar:chart-2-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <span class="text-sky-600 font-black text-sm uppercase tracking-widest">2021</span>
                                <h4 class="text-lg font-bold text-slate-900 uppercase">Expanding Solutions</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    We expanded our product range and built strong partnerships with reputable brands and clients.
                                </p>
                            </div>
                        </div>

                        <!-- 2022-2023 -->
                        <div class="relative pl-14 group">
                            <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-white border-2 border-sky-600 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-colors z-10 shadow-sm">
                                <iconify-icon icon="solar:users-group-rounded-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <span class="text-sky-600 font-black text-sm uppercase tracking-widest">2022 – 2023</span>
                                <h4 class="text-lg font-bold text-slate-900 uppercase">Growing Together</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    We continue to improve our services and support various industries with reliable supply solutions.
                                </p>
                            </div>
                        </div>

                        <!-- 2024 & Beyond -->
                        <div class="relative pl-14 group">
                            <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-white border-2 border-sky-600 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-colors z-10 shadow-sm">
                                <iconify-icon icon="solar:graph-up-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <span class="text-sky-600 font-black text-sm uppercase tracking-widest">2024 & Beyond</span>
                                <h4 class="text-lg font-bold text-slate-900 uppercase">Building the Future</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    We are committed to innovation, quality, and long-term partnerships for sustainable growth.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-10" data-aos="fade-left">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1521791136366-3e206e00072b?auto=format&fit=crop&q=80&w=1200" 
                             class="rounded-3xl shadow-2xl w-full h-[450px] object-cover" alt="Handshake">
                        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-amber-400 rounded-3xl -z-10 rotate-12 opacity-20"></div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm text-center space-y-2">
                            <iconify-icon icon="solar:users-group-two-rounded-linear" class="text-3xl text-sky-600 mb-2"></iconify-icon>
                            <div class="text-3xl font-black text-slate-900 tracking-tighter">100+</div>
                            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Happy Clients</div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm text-center space-y-2">
                            <iconify-icon icon="solar:box-linear" class="text-3xl text-sky-600 mb-2"></iconify-icon>
                            <div class="text-3xl font-black text-slate-900 tracking-tighter">1000+</div>
                            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Products</div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm text-center space-y-2">
                            <iconify-icon icon="solar:buildings-linear" class="text-3xl text-sky-600 mb-2"></iconify-icon>
                            <div class="text-3xl font-black text-slate-900 tracking-tighter">Various</div>
                            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Industries</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <!-- Mist Effect Top -->
        <div class="absolute top-0 left-0 w-full h-32 bg-linear-to-b from-white to-transparent z-10 pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="text-center space-y-4 mb-16" data-aos="fade-up">
                <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">INDUSTRIES WE SERVE</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">Supporting Essential Industries</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Pulp & Paper -->
                <div class="group relative overflow-hidden rounded-3xl h-[400px]" data-aos="zoom-in" data-aos-delay="0">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Pulp & Paper">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg">
                            <iconify-icon icon="solar:reorder-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <h4 class="text-xl font-bold text-white uppercase tracking-wide">Pulp & Paper</h4>
                    </div>
                </div>

                <!-- Power Plant -->
                <div class="group relative overflow-hidden rounded-3xl h-[400px]" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1473081556163-2a17de81fc97?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Power Plant">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg">
                            <iconify-icon icon="solar:bolt-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <h4 class="text-xl font-bold text-white uppercase tracking-wide">Power Plant</h4>
                    </div>
                </div>

                <!-- Food & Beverage -->
                <div class="group relative overflow-hidden rounded-3xl h-[400px]" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Food & Beverage">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg">
                            <iconify-icon icon="solar:cup-hot-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <h4 class="text-xl font-bold text-white uppercase tracking-wide">Food & Beverage</h4>
                    </div>
                </div>

                <!-- Refinery -->
                <div class="group relative overflow-hidden rounded-3xl h-[400px]" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1542337311-64d17ec23f14?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Refinery">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg">
                            <iconify-icon icon="solar:fire-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <h4 class="text-xl font-bold text-white uppercase tracking-wide">Refinery</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mist Effect Bottom -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-linear-to-t from-white to-transparent z-10 pointer-events-none"></div>
    </section>
@endsection
