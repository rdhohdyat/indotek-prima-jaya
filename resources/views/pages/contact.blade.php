@extends('layouts.app')

@section('title', 'Contact Us - PT. Indotek Prima Jaya')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 pb-28 lg:pt-32 lg:pb-40 overflow-hidden"
        style="background: url('{{ asset('assets/hero/contact.webp') }}'); background-size: cover; background-position: left;">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-8 relative z-10" data-aos="fade-right">
                    <div class="space-y-3">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">{{ __('CONTACT US') }}</span>
                        <h1
                            class="text-[36px] lg:text-[72px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                            {!! __('Let\'s Build Something<br>Great <span class="text-sky-600">Together</span>') !!}
                        </h1>
                    </div>

                    <p class="text-[16px] text-slate-600 leading-relaxed max-w-lg font-medium">
                        {{ __('We are ready to support your business with the best products and services. Get in touch with us today.') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Awan putih bagian bawah (Smooth Mist Effect) -->
        <div class="absolute -bottom-28 left-0 w-full h-64 pointer-events-none z-5">
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

    <!-- Contact Info & Form Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

                <!-- Left: Contact Info -->
                <div class="lg:col-span-6 space-y-10" data-aos="fade-right">
                    <div class="space-y-4">
                        <span class="text-sky-600 font-bold tracking-[0.2em] text-[11px] uppercase block">{{ __('GET IN TOUCH') }}</span>
                        <h2 class="text-2xl lg:text-4xl font-extrabold text-slate-900 leading-tight">
                            {{ __('We Are Here to Help') }}
                        </h2>
                    </div>

                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="flex gap-5 group">
                            <div
                                class="shrink-0 w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                <iconify-icon icon="solar:letter-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-0.5">
                                <h3 class="text-base font-bold text-slate-900">{{ __('Email') }}</h3>
                                <p class="text-slate-600 font-bold text-sm">sales@indotek-pj.com</p>
                                <p class="text-slate-500 text-xs">{{ __('We will respond as soon as possible.') }}</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex gap-5 group">
                            <div
                                class="shrink-0 w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                <iconify-icon icon="solar:phone-calling-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-0.5">
                                <h3 class="text-base font-bold text-slate-900">{{ __('Phone') }}</h3>
                                <p class="text-slate-600 font-bold text-sm">0761 8046829</p>
                                <p class="text-slate-500 text-xs">{{ __('Mon – Fri (08.00 – 17.00 WIB)') }}</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex gap-5 group">
                            <div
                                class="shrink-0 w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                <iconify-icon icon="solar:map-point-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-0.5">
                                <h3 class="text-base font-bold text-slate-900">{{ __('Address') }}</h3>
                                <p class="text-slate-600 font-bold text-sm leading-relaxed max-w-xs">
                                    Jl. Arifin Ahmad No.70 C, Sidomulyo Timur, Marpoyan Damai, Pekanbaru, Riau 28289
                                </p>
                                <p class="text-slate-500 text-xs">{{ __('Indonesia') }}</p>
                            </div>
                        </div>

                        <!-- Website -->
                        <div class="flex gap-5 group">
                            <div
                                class="shrink-0 w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-300">
                                <iconify-icon icon="solar:global-linear" class="text-xl"></iconify-icon>
                            </div>
                            <div class="space-y-0.5">
                                <h3 class="text-base font-bold text-slate-900">{{ __('Website') }}</h3>
                                <p class="text-slate-600 font-bold text-sm">www.indotek-pj.com</p>
                                <p class="text-slate-500 text-xs">{{ __('Visit for more information.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="lg:col-span-6" data-aos="fade-left">
                    <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-12 relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-40 h-40 bg-sky-50 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2">
                        </div>

                        <h3 class="text-2xl font-bold text-slate-900 mb-8">{{ __('Send Us a Message') }}</h3>

                        <form id="contactFormEmail" class="space-y-4">
                            <div class="space-y-1.5">
                                <label for="contactName" class="text-[11px] font-bold text-slate-700 uppercase tracking-wider">{!! __('Your Name <span class="text-red-500">*</span>') !!}</label>
                                <input type="text" id="contactName"
                                    class="w-full bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 text-sm placeholder:text-slate-300"
                                    placeholder="{{ __('Enter your name') }}" required>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label for="contactEmail"
                                        class="text-[11px] font-bold text-slate-700 uppercase tracking-wider">{!! __('Email Address <span class="text-red-500">*</span>') !!}</label>
                                    <input type="email" id="contactEmail"
                                        class="w-full bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 text-sm placeholder:text-slate-300"
                                        placeholder="{{ __('Enter your email') }}" required>
                                </div>
                                <div class="space-y-1.5">
                                    <label for="phone"
                                        class="text-[11px] font-bold text-slate-700 uppercase tracking-wider">{{ __('Phone Number') }}</label>
                                    <input type="tel" id="phone"
                                        class="w-full bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 text-sm placeholder:text-slate-300"
                                        placeholder="{{ __('Enter phone number') }}">
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <label for="contactSubject"
                                    class="text-[11px] font-bold text-slate-700 uppercase tracking-wider">{!! __('Subject <span class="text-red-500">*</span>') !!}</label>
                                <input type="text" id="contactSubject"
                                    class="w-full bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 text-sm placeholder:text-slate-300"
                                    placeholder="{{ __('Enter subject') }}" required>
                            </div>

                            <div class="space-y-1.5">
                                <label for="contactMessage"
                                    class="text-[11px] font-bold text-slate-700 uppercase tracking-wider">{!! __('Message <span class="text-red-500">*</span>') !!}</label>
                                <textarea id="contactMessage" rows="3"
                                    class="w-full bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-600 focus:bg-white outline-none transition-all font-medium text-slate-900 text-sm placeholder:text-slate-300 resize-none"
                                    placeholder="{{ __('Type your message here...') }}" required></textarea>
                            </div>

                            <button type="submit"
                                class="w-full lg:w-auto bg-sky-600 hover:bg-sky-700 text-white px-8 py-3 rounded-lg font-bold text-[12px] transition flex items-center justify-center gap-3 group">
                                {{ __('Send Message') }}
                                <iconify-icon icon="solar:plain-linear"
                                    class="text-base transition-transform group-hover:translate-x-1 group-hover:-translate-y-1"></iconify-icon>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="relative h-[600px] w-full bg-slate-100 overflow-hidden">
        <!-- Google Map -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6784935976075!2d101.44254017424073!3d0.4796864637562851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ad6ac4b7e229%3A0xb7dfb360fd33fb7c!2sPT%20Indotek%20Prima%20Jaya!5e0!3m2!1sen!2sid!4v1778934758475!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="Google Maps Location of PT. Indotek Prima Jaya"
            class="absolute inset-0 w-full h-full grayscale hover:grayscale-0 transition-all duration-1000 border-0"
            allowfullscreen="" loading="lazy"></iframe>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative h-full pointer-events-none">
            <div class="absolute top-1/2 left-8 lg:left-0 -translate-y-1/2 w-full max-w-sm pointer-events-auto">
                <div class="bg-white p-8 lg:p-10 rounded-xl shadow-2xl border border-slate-100 space-y-6"
                    data-aos="fade-up">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600">
                            <iconify-icon icon="solar:map-point-bold" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 uppercase tracking-tight leading-none">PT.
                            Indotek<br>Prima Jaya</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Jl. Arifin Ahmad No.70 C, Sidomulyo Timur, Marpoyan Damai, Pekanbaru, Riau 28289
                    </p>
                    <a href="https://maps.app.goo.gl/b5mPiyC7mvuvcH9x9" target="_blank"
                        class="inline-flex items-center gap-3 text-sky-600 font-bold text-xs uppercase tracking-widest hover:gap-5 transition-all">
                        {{ __('View on Google Maps') }}
                        <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Contact Us Section -->
    <section@endsection class="relative py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-10" data-aos="fade-right">
                    <div class="space-y-4">
                        <span class="text-yellow-600 font-bold tracking-[0.2em] text-[12px] uppercase block">{{ __('WHY CONTACT US?') }}</span>
                        <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight">
                            {!! __('We\'re Ready to Support<br>Your Business') !!}
                        </h2>
                        <p class="text-slate-500 text-[15px] leading-relaxed max-w-md font-medium pt-2">
                            {{ __('Our team is ready to provide the right solutions for your needs.') }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:chat-round-dots-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <h3 class="text-sm font-bold text-slate-900 uppercase">{{ __('Fast Response') }}</h3>
                            <p class="text-xs text-slate-500 leading-relaxed">{{ __('We respond quickly to every inquiry you send.') }}</p>
                        </div>
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:users-group-rounded-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <h3 class="text-sm font-bold text-slate-900 uppercase">{{ __('Expert Consultation') }}</h3>
                            <p class="text-xs text-slate-500 leading-relaxed">{{ __('Get professional advice from our experienced team.') }}</p>
                        </div>
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:checklist-minimalistic-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <h3 class="text-sm font-bold text-slate-900 uppercase">{{ __('Competitive Solutions') }}</h3>
                            <p class="text-xs text-slate-500 leading-relaxed">{{ __('We provide the best solutions with competitive pricing.') }}</p>
                        </div>
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600">
                                <iconify-icon icon="solar:hand-shake-linear" class="text-2xl"></iconify-icon>
                            </div>
                            <h3 class="text-sm font-bold text-slate-900 uppercase">{{ __('Long-Term Partnership') }}</h3>
                            <p class="text-xs text-slate-500 leading-relaxed">{{ __('We build lasting relationships with our business partners.') }}</p>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <img src="{{ asset('assets/customer-support.webp') }}"
                        class="w-full h-[600px] object-contain" alt="Customer Support">
                    <div class="absolute -bottom-8 -left-8 w-48 h-48 rounded-lg -z-10 blur-3xl opacity-20"></div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactFormEmail');
            if(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const name = document.getElementById('contactName').value;
                    const email = document.getElementById('contactEmail').value;
                    const subject = document.getElementById('contactSubject').value;
                    const message = document.getElementById('contactMessage').value;
                    
                    const emailTo = "sales@indotek-pj.com";
                    
                    // Format isi body email
                    const emailBody = `Nama: ${name}\nEmail: ${email}\n\nPesan:\n${message}`;
                    
                    // Buat link dan buka Web Gmail di tab baru
                    const gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=${emailTo}&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(emailBody)}`;
                    window.open(gmailUrl, '_blank');
                });
            }
        });
    </script>
    @endpush
@endsection