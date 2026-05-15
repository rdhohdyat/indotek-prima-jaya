<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT. Indotek Prima Jaya')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800;900&family=Fira+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ url('/') }}" class="flex items-center gap-4 group">
                        <div class="bg-slate-50 rounded-xl group-hover:bg-blue-50 transition-colors">
                            <img class="h-10 w-auto object-contain" src="{{ asset('assets/logo-indotek.png') }}"
                                alt="PT. Indotek Prima Jaya Logo"
                                onerror="this.src='https://placehold.co/150x40?text=Logo'">
                        </div>
                        <div class="flex flex-col">
                            <span class="font-black text-xl text-slate-900 tracking-tighter leading-none">PT INDOTEK PRIMA JAYA</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex space-x-10 items-center">
                    <a href="{{ url('/') }}"
                        class="text-blue-600 font-bold text-[14px] tracking-wide relative after:absolute after:bottom-[-4px] after:left-0 after:w-full after:h-0.5 after:bg-blue-600">Home</a>
                    <a href="#"
                        class="text-slate-600 hover:text-blue-600 font-bold text-[14px] tracking-wide transition-colors">About
                        Us</a>

                    <!-- Products Mega Menu -->
                    <div class="relative group">
                        <button
                            class="flex items-center text-slate-600 hover:text-blue-600 font-bold text-[14px] tracking-wide transition-colors">
                            Products
                            <iconify-icon icon="solar:alt-arrow-down-linear" class="w-4 h-4 ml-1.5 text-slate-400 group-hover:rotate-180 transition-transform duration-300"></iconify-icon>
                        </button>
                        <!-- Dropdown Menu -->
                        <div
                            class="absolute -left-32 mt-0 pt-6 w-[700px] opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 z-50">
                            <div
                                class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-slate-100 grid grid-cols-12 shadow-blue-900/10">
                                <!-- Left: Categories -->
                                <div class="col-span-7 p-8 border-r border-slate-100">
                                    <h4 class="text-[11px] font-black text-slate-400 tracking-widest uppercase mb-6">
                                        Product Categories</h4>
                                    <div class="grid grid-cols-1 gap-1">
                                        <a href="#"
                                            class="flex items-center gap-4 p-3 rounded-xl hover:bg-blue-50/50 group/item transition-all">
                                            <div
                                                class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 border border-blue-100 group-hover/item:bg-blue-600 group-hover/item:text-white transition-colors shadow-sm">
                                                <iconify-icon icon="solar:ruler-linear" class="text-xl"></iconify-icon>
                                            </div>
                                            <div>
                                                <span class="block font-bold text-[14px] text-slate-800">Measuring
                                                    Instruments</span>
                                                <span class="block text-[11px] text-slate-500 font-medium">Precision
                                                    tools for analysis</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="flex items-center gap-4 p-3 rounded-xl hover:bg-blue-50/50 group/item transition-all">
                                            <div
                                                class="w-11 h-11 rounded-xl bg-orange-50 flex items-center justify-center text-orange-600 border border-orange-100 group-hover/item:bg-orange-600 group-hover/item:text-white transition-colors shadow-sm">
                                                <iconify-icon icon="solar:bolt-linear" class="text-xl"></iconify-icon>
                                            </div>
                                            <div>
                                                <span class="block font-bold text-[14px] text-slate-800">Electrical
                                                    Solutions</span>
                                                <span class="block text-[11px] text-slate-500 font-medium">Power &
                                                    control systems</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="flex items-center gap-4 p-3 rounded-xl hover:bg-blue-50/50 group/item transition-all">
                                            <div
                                                class="w-11 h-11 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-600 border border-emerald-100 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-colors shadow-sm">
                                                <iconify-icon icon="solar:settings-linear" class="text-xl"></iconify-icon>
                                            </div>
                                            <div>
                                                <span class="block font-bold text-[14px] text-slate-800">Mechanical
                                                    Parts</span>
                                                <span class="block text-[11px] text-slate-500 font-medium">Durable
                                                    industrial components</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Right: Featured Brands -->
                                <div class="col-span-5 bg-slate-50/50 p-8">
                                    <h4 class="text-[11px] font-black text-slate-400 tracking-widest uppercase mb-6">
                                        Principal Brands</h4>
                                    <div class="grid grid-cols-1 gap-4">
                                        <div class="grid grid-cols-2 gap-3">
                                            <div
                                                class="bg-white p-3 rounded-lg border border-slate-200 flex items-center justify-center shadow-sm">
                                                <span class="text-[10px] font-black text-slate-800">PIEZUS</span>
                                            </div>
                                            <div
                                                class="bg-white p-3 rounded-lg border border-slate-200 flex items-center justify-center shadow-sm">
                                                <span class="text-[10px] font-black text-blue-700">FineTek</span>
                                            </div>
                                            <div
                                                class="bg-white p-3 rounded-lg border border-slate-200 flex items-center justify-center shadow-sm text-center">
                                                <span
                                                    class="text-[8px] font-black text-slate-700 uppercase leading-tight">Fuji
                                                    Electric</span>
                                            </div>
                                            <div
                                                class="bg-white p-3 rounded-lg border border-slate-200 flex items-center justify-center shadow-sm">
                                                <span class="text-[10px] font-black text-emerald-600">KEMTRAK</span>
                                            </div>
                                        </div>

                                        <div class="pt-6 mt-6 border-t border-slate-200">
                                            <a href="#"
                                                class="group/btn inline-flex items-center gap-3 bg-blue-600 text-white px-6 py-2.5 rounded-xl font-bold text-[12px] hover:bg-blue-700 transition-all shadow-lg shadow-blue-600/20 w-full justify-center">
                                                Explorer Full Catalog
                                                <iconify-icon icon="solar:alt-arrow-right-linear" class="text-lg transition-transform group-hover/btn:translate-x-1"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="text-slate-600 hover:text-blue-600 font-bold text-[14px] tracking-wide transition-colors">Services</a>
                    <a href="#"
                        class="text-slate-600 hover:text-blue-600 font-bold text-[14px] tracking-wide transition-colors">Contact</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="#"
                        class="group/cta bg-slate-900 text-white px-8 py-4 rounded-2xl font-bold text-[14px] transition-all hover:bg-blue-600 hover:shadow-2xl hover:shadow-blue-600/30 flex items-center gap-3">
                        Get a Quote
                        <div
                            class="w-6 h-6 bg-white/10 rounded-lg flex items-center justify-center group-hover/cta:bg-white/20 transition-colors">
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl"></iconify-icon>
                        </div>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden items-center">
                    <button type="button"
                        class="text-slate-900 bg-slate-100 p-3 rounded-xl hover:bg-slate-200 transition-colors">
                        <iconify-icon icon="solar:hamburger-menu-linear" class="text-2xl"></iconify-icon>
                    </button>
                </div>
            </div>
        </div>
    </header>


    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-slate-950 text-white mt-16 overflow-hidden relative">
        <!-- Abstract background decoration -->
        <div
            class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-blue-600/5 rounded-full blur-3xl">
        </div>

        <!-- Top Footer -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
                <!-- Get in touch section -->
                <div class="lg:col-span-4 space-y-6">
                    <div class="space-y-3">
                        <h3 class="text-blue-500 font-bold tracking-widest text-xs uppercase">GET IN TOUCH</h3>
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-white leading-tight">Let's Build Something
                            Great Together</h2>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-sm">
                        We are ready to support your business with the best products and services. Contact our team for
                        consultations and inquiries.
                    </p>
                    <div class="flex gap-4 pt-4">
                        <a href="#"
                            class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors border border-slate-800">
                            <iconify-icon icon="solar:facebook-linear" class="text-2xl"></iconify-icon>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors border border-slate-800">
                            <iconify-icon icon="solar:twitter-linear" class="text-2xl"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- Contact Info Grid -->
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-12">
                    <!-- Email -->
                    <div class="flex items-start gap-5 group">
                        <div
                            class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-800 text-blue-500 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <iconify-icon icon="solar:letter-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1 tracking-wide">Email Us</h4>
                            <a href="mailto:sales@indotek-pj.com"
                                class="text-slate-400 hover:text-blue-500 transition text-[13px]">sales@indotek-pj.com</a>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start gap-5 group">
                        <div
                            class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-800 text-blue-500 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <iconify-icon icon="solar:phone-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1 tracking-wide">Call Support</h4>
                            <a href="tel:07618046829"
                                class="text-slate-400 hover:text-blue-500 transition text-[13px]">0761 8046829</a>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start gap-5 group">
                        <div
                            class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-800 text-blue-500 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <iconify-icon icon="solar:map-point-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1 tracking-wide">Headquarters</h4>
                            <p class="text-slate-400 text-[13px] leading-relaxed max-w-xs">Jl. Arifin Ahmad No. 70 C,
                                Sidomulyo Timur, Marpoyan Damai, Pekanbaru, Riau 28289</p>
                        </div>
                    </div>

                    <!-- Website -->
                    <div class="flex items-start gap-5 group">
                        <div
                            class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-800 text-blue-500 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <iconify-icon icon="solar:globus-linear" class="text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1 tracking-wide">Official Website</h4>
                            <a href="https://www.indotek-pj.com" target="_blank"
                                class="text-slate-400 hover:text-blue-500 transition text-[13px]">www.indotek-pj.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-slate-900 bg-black/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 relative z-10">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <!-- Logo Bottom -->
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/logo-indotek.png') }}" class="h-9 w-auto brightness-0 invert"
                            alt="Logo">
                        <div class="flex flex-col">
                            <span class="font-black text-white text-base tracking-tighter leading-none">PT. INDOTEK
                                PRIMA JAYA</span>
                            <span class="text-[10px] text-slate-500 font-bold tracking-widest uppercase">General
                                Supplier Company</span>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="text-slate-500 text-xs font-medium">
                        &copy; {{ date('Y') }} PT. INDOTEK PRIMA JAYA. All Rights Reserved.
                    </div>

                    <!-- Links -->
                    <div class="flex gap-6 text-[11px] font-bold text-slate-400 uppercase tracking-widest">
                        <a href="#" class="hover:text-blue-500 transition">Privacy</a>
                        <a href="#" class="hover:text-blue-500 transition">Terms</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
</body>

</html>