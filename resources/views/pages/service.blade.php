@extends('layouts.app')

@section('title', 'Our Services - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 pb-28 lg:pt-32 lg:pb-40 overflow-hidden" 
             style="background: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000'); background-size: cover; background-position: center;">
        
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
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">OUR SERVICES</span>
                        <h1 class="text-[54px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                            Professional Industrial<br>
                            Supply & Business <span class="text-sky-600">Solutions</span>
                        </h1>
                    </div>

                    <p class="text-[16px] text-slate-600 leading-relaxed max-w-2xl font-medium">
                        PT. INDOTEK PRIMA JAYA is a trusted general supplier providing procurement, engineering tools, measuring instruments, mechanical, electrical, computer devices, and related industrial solutions to support your business operations with quality and reliability.
                    </p>
                </div>
            </div>
        </div>

        <!-- Awan putih bagian bawah (Smooth Mist Effect) -->
        <div class="absolute -bottom-24 left-0 w-full h-64 pointer-events-none z-[5]">
            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
            <div class="absolute inset-x-0 bottom-0 h-full bg-[radial-gradient(50%_100%_at_50%_100%,rgba(255,255,255,1)_0%,rgba(255,255,255,0.8)_40%,rgba(255,255,255,0)_100%)] blur-2xl opacity-90"></div>
            <div class="absolute -bottom-10 left-0 w-full h-40 bg-white blur-[100px] opacity-60"></div>
            <div class="absolute bottom-0 right-0 w-2/3 h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(255,255,255,1)_0%,rgba(255,255,255,0.9)_30%,rgba(255,255,255,0)_75%)] blur-3xl opacity-100"></div>
            <div class="absolute -bottom-10 right-0 w-96 h-96 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9)_0%,rgba(255,255,255,0)_70%)] blur-3xl opacity-70"></div>
        </div>
    </section>

    <!-- Core Services Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block mb-3">OUR CORE SERVICES</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">Comprehensive Business Solutions</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Procurement Solutions -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:box-minimalistic-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Procurement Solutions</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        Efficient and reliable procurement tailored to your industry needs with competitive pricing and quality assurance.
                    </p>
                </div>

                <!-- General Supply -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:cart-large-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">General Supply</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        Comprehensive supply of industrial products including tools, instruments, equipment, and consumables.
                    </p>
                </div>

                <!-- Industrial Support -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:settings-bold-duotone" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Industrial Support</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        Technical and operational support to ensure smooth operations and maximize equipment performance.
                    </p>
                </div>

                <!-- Business Solutions -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:case-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Business Solutions</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        Innovative business solutions designed to improve efficiency, productivity, and long-term growth for your organization.
                    </p>
                </div>

                <!-- Technical Consultation -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:user-speak-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">Technical Consultation</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        Expert consultation to help you select the right products and solutions for your industrial applications.
                    </p>
                </div>

                <!-- After-Sales Service -->
                <div class="bg-slate-50 p-10 rounded-[32px] border border-slate-100 hover:bg-white hover:shadow-2xl hover:shadow-sky-600/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-sky-600 mb-8 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300 shadow-sm">
                        <iconify-icon icon="solar:settings-minimalistic-linear" class="text-3xl"></iconify-icon>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 uppercase">After-Sales Service</h3>
                    <p class="text-slate-500 text-[14px] leading-relaxed">
                        Reliable after-sales support including maintenance guidance, troubleshooting, and spare part availability.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Service Process Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block mb-3">HOW WE WORK</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">Our Service Process</h2>
            </div>

            <div class="relative">
                <!-- Dotted Line Connector -->
                <div class="hidden lg:block absolute top-[60px] left-[10%] right-[10%] h-[2px] border-t-2 border-dashed border-slate-200 -z-10"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <!-- Step 1 -->
                    <div class="text-center space-y-6 group" data-aos="fade-up" data-aos-delay="0">
                        <div class="relative inline-block">
                            <div class="w-32 h-32 rounded-full bg-white border border-slate-100 flex items-center justify-center text-sky-600 shadow-xl group-hover:scale-110 transition-transform duration-500">
                                <iconify-icon icon="solar:chat-round-dots-linear" class="text-4xl"></iconify-icon>
                            </div>
                            <div class="absolute -top-2 -right-2 w-10 h-10 rounded-full bg-sky-600 text-white font-black flex items-center justify-center border-4 border-slate-50">1</div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-bold text-slate-900 uppercase">Consultation</h4>
                            <p class="text-sm text-slate-400 leading-relaxed">We listen to your needs and understand your business requirements.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="text-center space-y-6 group" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative inline-block">
                            <div class="w-32 h-32 rounded-full bg-white border border-slate-100 flex items-center justify-center text-sky-600 shadow-xl group-hover:scale-110 transition-transform duration-500">
                                <iconify-icon icon="solar:box-linear" class="text-4xl"></iconify-icon>
                            </div>
                            <div class="absolute -top-2 -right-2 w-10 h-10 rounded-full bg-sky-600 text-white font-black flex items-center justify-center border-4 border-slate-50">2</div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-bold text-slate-900 uppercase">Product Sourcing</h4>
                            <p class="text-sm text-slate-400 leading-relaxed">We source the best products from trusted brands that meet your specifications.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="text-center space-y-6 group" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative inline-block">
                            <div class="w-32 h-32 rounded-full bg-white border border-slate-100 flex items-center justify-center text-sky-600 shadow-xl group-hover:scale-110 transition-transform duration-500">
                                <iconify-icon icon="solar:delivery-linear" class="text-4xl"></iconify-icon>
                            </div>
                            <div class="absolute -top-2 -right-2 w-10 h-10 rounded-full bg-sky-600 text-white font-black flex items-center justify-center border-4 border-slate-50">3</div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-bold text-slate-900 uppercase">Delivery & Support</h4>
                            <p class="text-sm text-slate-400 leading-relaxed">We ensure timely delivery and provide full technical support for your operations.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="text-center space-y-6 group" data-aos="fade-up" data-aos-delay="300">
                        <div class="relative inline-block">
                            <div class="w-32 h-32 rounded-full bg-white border border-slate-100 flex items-center justify-center text-sky-600 shadow-xl group-hover:scale-110 transition-transform duration-500">
                                <iconify-icon icon="solar:handshake-linear" class="text-4xl"></iconify-icon>
                            </div>
                            <div class="absolute -top-2 -right-2 w-10 h-10 rounded-full bg-sky-600 text-white font-black flex items-center justify-center border-4 border-slate-50">4</div>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-bold text-slate-900 uppercase">Long-Term Partnership</h4>
                            <p class="text-sm text-slate-400 leading-relaxed">We build lasting relationships and grow together with your business success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Professional Team -->
                <div class="flex flex-col items-center text-center space-y-4 p-8 rounded-3xl border border-slate-100 hover:border-sky-600 transition-colors group" data-aos="fade-up" data-aos-delay="0">
                    <iconify-icon icon="solar:users-group-rounded-linear" class="text-4xl text-sky-600 group-hover:scale-110 transition-transform"></iconify-icon>
                    <h4 class="text-lg font-bold text-slate-900 uppercase">Professional Team</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">Experienced and dedicated team ready to deliver the best solutions for your business.</p>
                </div>

                <!-- Trusted Quality -->
                <div class="flex flex-col items-center text-center space-y-4 p-8 rounded-3xl border border-slate-100 hover:border-sky-600 transition-colors group" data-aos="fade-up" data-aos-delay="100">
                    <iconify-icon icon="solar:shield-check-linear" class="text-4xl text-sky-600 group-hover:scale-110 transition-transform"></iconify-icon>
                    <h4 class="text-lg font-bold text-slate-900 uppercase">Trusted Quality</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">We provide high-quality products from trusted brands that you can rely on.</p>
                </div>

                <!-- Fast Response -->
                <div class="flex flex-col items-center text-center space-y-4 p-8 rounded-3xl border border-slate-100 hover:border-sky-600 transition-colors group" data-aos="fade-up" data-aos-delay="200">
                    <iconify-icon icon="solar:history-linear" class="text-4xl text-sky-600 group-hover:scale-110 transition-transform"></iconify-icon>
                    <h4 class="text-lg font-bold text-slate-900 uppercase">Fast Response</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">Quick response and reliable service to keep your operations running smoothly.</p>
                </div>

                <!-- Reliable Partnership -->
                <div class="flex flex-col items-center text-center space-y-4 p-8 rounded-3xl border border-slate-100 hover:border-sky-600 transition-colors group" data-aos="fade-up" data-aos-delay="300">
                    <iconify-icon icon="solar:hand-shake-linear" class="text-4xl text-sky-600 group-hover:scale-110 transition-transform"></iconify-icon>
                    <h4 class="text-lg font-bold text-slate-900 uppercase">Reliable Partnership</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">Committed to building long-term partnerships based on trust and integrity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Supporting Your Success Section -->
    <section class="py-12 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block mb-3">SUPPORTING YOUR SUCCESS</span>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <img src="https://images.unsplash.com/photo-1521791136366-3e206e00072b?auto=format&fit=crop&q=80&w=800" class="rounded-2xl h-48 w-full object-cover shadow-lg" data-aos="zoom-in" data-aos-delay="0">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=800" class="rounded-2xl h-48 w-full object-cover shadow-lg" data-aos="zoom-in" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?auto=format&fit=crop&q=80&w=800" class="rounded-2xl h-48 w-full object-cover shadow-lg" data-aos="zoom-in" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1549923746-c502d488b3ea?auto=format&fit=crop&q=80&w=800" class="rounded-2xl h-48 w-full object-cover shadow-lg" data-aos="zoom-in" data-aos-delay="300">
            </div>
        </div>
    </section>

    <!-- Industries We Support Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="text-center space-y-4 mb-16" data-aos="fade-up">
                <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">INDUSTRIES WE SUPPORT</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">Supporting Essential Industries</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Pulp & Paper -->
                <div class="group relative overflow-hidden rounded-3xl h-[300px]" data-aos="zoom-in" data-aos-delay="0">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Pulp & Paper">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg shrink-0">
                            <iconify-icon icon="solar:reorder-linear" class="text-xl"></iconify-icon>
                        </div>
                        <h4 class="text-lg font-bold text-white uppercase tracking-wide">Pulp & Paper</h4>
                    </div>
                </div>

                <!-- Power Plant -->
                <div class="group relative overflow-hidden rounded-3xl h-[300px]" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1473081556163-2a17de81fc97?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Power Plant">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg shrink-0">
                            <iconify-icon icon="solar:bolt-linear" class="text-xl"></iconify-icon>
                        </div>
                        <h4 class="text-lg font-bold text-white uppercase tracking-wide">Power Plant</h4>
                    </div>
                </div>

                <!-- Food & Beverage -->
                <div class="group relative overflow-hidden rounded-3xl h-[300px]" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Food & Beverage">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg shrink-0">
                            <iconify-icon icon="solar:cup-hot-linear" class="text-xl"></iconify-icon>
                        </div>
                        <h4 class="text-lg font-bold text-white uppercase tracking-wide">Food & Beverage</h4>
                    </div>
                </div>

                <!-- Refinery -->
                <div class="group relative overflow-hidden rounded-3xl h-[300px]" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1542337311-64d17ec23f14?auto=format&fit=crop&q=80&w=800" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Refinery">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg shrink-0">
                            <iconify-icon icon="solar:fire-linear" class="text-xl"></iconify-icon>
                        </div>
                        <h4 class="text-lg font-bold text-white uppercase tracking-wide">Refinery</h4>
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
                        <a href="{{ url('/contact') }}" class="group bg-white hover:bg-sky-500 text-[#0f172a] hover:text-white px-10 py-5 rounded-2xl font-black text-sm uppercase tracking-widest transition-all duration-300 shadow-xl shadow-black/20 flex items-center gap-4">
                            Contact Our Team
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-2xl transition-transform group-hover:translate-x-2"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
