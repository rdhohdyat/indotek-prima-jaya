@extends('layouts.app')

@section('title', 'Contact Us - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 pb-28 lg:pt-32 lg:pb-40 overflow-hidden" 
             style="background: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2000'); background-size: cover; background-position: center;">
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-8 relative z-10" data-aos="fade-right">
                    <!-- Awan putih / gradient kabut -->
                    <div class="absolute -inset-x-12 -inset-y-10 -z-10 pointer-events-none">
                        <div class="w-full h-full 
                                        bg-[radial-gradient(ellipse_at_center,rgba(255,255,255,1)_0%,rgba(255,255,255,0.95)_38%,rgba(255,255,255,0.7)_58%,rgba(255,255,255,0)_78%)]
                                        blur-2xl">
                        </div>
                    </div>

                    <div class="space-y-3">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">CONTACT US</span>
                        <h1 class="text-[54px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                            Let's Build Something<br>
                            Great <span class="text-sky-600">Together</span>
                        </h1>
                    </div>

                    <p class="text-[16px] text-slate-600 leading-relaxed max-w-lg font-medium">
                        We are ready to support your business with the best products and services. Get in touch with us today.
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

    <!-- Contact Info & Form Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                
                <!-- Left: Contact Info -->
                <div class="lg:col-span-5 space-y-12" data-aos="fade-right">
                    <div class="space-y-4">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">GET IN TOUCH</span>
                        <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">
                            We Are Here to Help
                        </h2>
                    </div>

                    <div class="space-y-8">
                        <!-- Email -->
                        <div class="flex gap-6 group">
                            <div class="shrink-0 w-14 h-14 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                <iconify-icon icon="solar:letter-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-lg font-bold text-slate-900">Email</h4>
                                <p class="text-slate-600 font-bold">sales@indotek-pj.com</p>
                                <p class="text-slate-400 text-sm">We will respond to your email as soon as possible.</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex gap-6 group">
                            <div class="shrink-0 w-14 h-14 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                <iconify-icon icon="solar:phone-calling-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-lg font-bold text-slate-900">Phone</h4>
                                <p class="text-slate-600 font-bold">0761 8046829</p>
                                <p class="text-slate-400 text-sm">Monday – Friday (08.00 – 17.00 WIB)</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex gap-6 group">
                            <div class="shrink-0 w-14 h-14 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                <iconify-icon icon="solar:map-point-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-lg font-bold text-slate-900">Address</h4>
                                <p class="text-slate-600 font-bold leading-relaxed">
                                    Jl. Arifin Ahmad No.70 C, Sidomulyo Timur, Marpoyan Damai, Pekanbaru, Riau 28289
                                </p>
                                <p class="text-slate-400 text-sm">Indonesia</p>
                            </div>
                        </div>

                        <!-- Website -->
                        <div class="flex gap-6 group">
                            <div class="shrink-0 w-14 h-14 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                <iconify-icon icon="solar:global-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-lg font-bold text-slate-900">Website</h4>
                                <p class="text-slate-600 font-bold">www.indotek-pj.com</p>
                                <p class="text-slate-400 text-sm">Visit our website for more information.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="lg:col-span-7" data-aos="fade-left">
                    <div class="bg-white rounded-[40px] border border-slate-100 shadow-2xl p-10 lg:p-14 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-40 h-40 bg-sky-50 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>
                        
                        <h3 class="text-2xl font-bold text-slate-900 mb-10">Send Us a Message</h3>

                        <form action="#" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider">Your Name <span class="text-red-500">*</span></label>
                                    <input type="text" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-5 py-4 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 placeholder:text-slate-300" placeholder="Enter your name">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider">Company Name <span class="text-red-500">*</span></label>
                                    <input type="text" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-5 py-4 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 placeholder:text-slate-300" placeholder="Enter company name">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider">Email Address <span class="text-red-500">*</span></label>
                                    <input type="email" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-5 py-4 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 placeholder:text-slate-300" placeholder="Enter your email">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider">Phone Number</label>
                                    <input type="tel" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-5 py-4 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 placeholder:text-slate-300" placeholder="Enter phone number">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider">Subject <span class="text-red-500">*</span></label>
                                <input type="text" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-5 py-4 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 placeholder:text-slate-300" placeholder="Enter subject">
                            </div>

                            <div class="space-y-2">
                                <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider">Message <span class="text-red-500">*</span></label>
                                <textarea rows="4" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-5 py-4 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 placeholder:text-slate-300 resize-none" placeholder="Type your message here..."></textarea>
                            </div>

                            <button type="submit" class="w-full lg:w-auto bg-sky-600 hover:bg-sky-700 text-white px-10 py-4 rounded-xl font-bold text-[14px] transition flex items-center justify-center gap-3 shadow-xl shadow-sky-600/20 group">
                                Send Message
                                <iconify-icon icon="solar:plain-linear" class="text-xl transition-transform group-hover:translate-x-1 group-hover:-translate-y-1"></iconify-icon>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="relative h-[600px] w-full bg-slate-100 overflow-hidden">
        <!-- Google Map Placeholder -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6976648750877!2d101.42416957588102!3d0.4637770995316335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a94042867c0b%3A0xe6796c469b828289!2sJl.%20Arifin%20Ahmad%20No.70%2C%20Sidomulyo%20Tim.%2C%20Kec.%20Marpoyan%20Damai%2C%20Kota%20Pekanbaru%2C%20Riau%2028289!5e0!3m2!1sid!2sid!4v1715777777777" 
                class="absolute inset-0 w-full h-full grayscale hover:grayscale-0 transition-all duration-1000 border-0" allowfullscreen="" loading="lazy"></iframe>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative h-full pointer-events-none">
            <div class="absolute top-1/2 left-8 lg:left-0 -translate-y-1/2 w-full max-w-sm pointer-events-auto">
                <div class="bg-white p-8 lg:p-10 rounded-[32px] shadow-2xl border border-slate-100 space-y-6" data-aos="fade-up">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600">
                            <iconify-icon icon="solar:map-point-bold" class="text-2xl"></iconify-icon>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 uppercase tracking-tight leading-none">PT. Indotek<br>Prima Jaya</h4>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Jl. Arifin Ahmad No.70 C, Sidomulyo Timur, Marpoyan Damai, Pekanbaru, Riau 28289
                    </p>
                    <a href="https://maps.app.goo.gl/..." target="_blank" class="inline-flex items-center gap-3 text-sky-600 font-bold text-xs uppercase tracking-widest hover:gap-5 transition-all">
                        View on Google Maps
                        <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Contact Us Section -->
    <section class="relative py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-10" data-aos="fade-right">
                    <div class="space-y-4">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">WHY CONTACT US?</span>
                        <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">
                            We're Ready to Support<br>Your Business
                        </h2>
                        <p class="text-slate-500 text-[15px] leading-relaxed max-w-md font-medium pt-2">
                            Our team is ready to provide the right solutions for your needs.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:chat-round-dots-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-bold text-slate-900 uppercase">Fast Response</h4>
                            <p class="text-xs text-slate-400 leading-relaxed">We respond quickly to every inquiry you send.</p>
                        </div>
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:users-group-rounded-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-bold text-slate-900 uppercase">Expert Consultation</h4>
                            <p class="text-xs text-slate-400 leading-relaxed">Get professional advice from our experienced team.</p>
                        </div>
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:checklist-minimalistic-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-bold text-slate-900 uppercase">Competitive Solutions</h4>
                            <p class="text-xs text-slate-400 leading-relaxed">We provide the best solutions with competitive pricing.</p>
                        </div>
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:handshake-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-bold text-slate-900 uppercase">Long-Term Partnership</h4>
                            <p class="text-xs text-slate-400 leading-relaxed">We build lasting relationships with our business partners.</p>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1549923746-c502d488b3ea?auto=format&fit=crop&q=80&w=1200" 
                         class="rounded-[40px] shadow-2xl w-full h-[600px] object-cover" alt="Customer Support">
                    <div class="absolute -bottom-8 -left-8 w-48 h-48 bg-sky-600 rounded-[40px] -z-10 blur-3xl opacity-20"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
