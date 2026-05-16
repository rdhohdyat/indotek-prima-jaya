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
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ url('/') }}" class="flex items-center group">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/logo-indotek-prima.webp') }}" class="h-10 w-auto"
                                alt="Indotek Logo">
                            <div class="h-8 w-[2px] bg-yellow-500 rounded-full"></div>
                            <span class="font-black text-slate-900 text-sm tracking-tighter leading-none uppercase">PT.
                                Indotek<br>Prima
                                Jaya</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex space-x-7 items-center">
                    <a href="{{ url('/') }}"
                        class="font-bold text-[11px] tracking-widest uppercase relative transition-colors group {{ Request::is('/') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}">
                        Home
                        <span
                            class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                    <a href="{{ url('/about') }}"
                        class="font-bold text-[11px] tracking-widest uppercase relative transition-colors group {{ Request::is('about') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}">
                        About
                        <span
                            class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('about') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>

                    <!-- Products Dropdown -->
                    <div class="relative group">
                        <button
                            aria-label="Toggle Products Menu"
                            class="flex items-center gap-1 text-slate-800 hover:text-sky-600 font-bold text-[11px] tracking-widest uppercase transition-colors relative group/btn">
                            Products
                            <iconify-icon icon="solar:alt-arrow-down-linear"
                                class="text-xs text-slate-500 group-hover:rotate-180 transition-transform duration-300"></iconify-icon>
                            <span
                                class="absolute -bottom-2 left-0 w-0 h-[2px] bg-sky-600 transition-all duration-300 group-hover/btn:w-full"></span>
                        </button>
                        <!-- Dropdown Menu (Classic Nested Style) -->
                        <div
                            class="absolute -left-4 mt-0 pt-6 w-72 opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 z-50">
                            <div
                                class="bg-white shadow-2xl rounded-xl overflow-visible border border-slate-100 p-2 shadow-sky-900/10">

                                <!-- Category 1 -->
                                <div class="relative group/sub1">
                                    <div
                                        class="flex items-center justify-between p-3 rounded-lg hover:bg-sky-50 cursor-pointer transition-all">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-sky-50 flex items-center justify-center text-sky-600">
                                                <iconify-icon icon="solar:chart-2-linear"
                                                    class="text-lg"></iconify-icon>
                                            </div>
                                            <span class="text-[13px] font-bold text-slate-700">Analyzer &
                                                Engineering</span>
                                        </div>
                                        <iconify-icon icon="solar:alt-arrow-right-linear"
                                            class="text-xs text-slate-400"></iconify-icon>
                                    </div>

                                    <!-- Sub-menu for Category 1 -->
                                    <div
                                        class="absolute left-full top-0 ml-2 w-72 opacity-0 scale-95 origin-left pointer-events-none group-hover/sub1:opacity-100 group-hover/sub1:scale-100 group-hover/sub1:pointer-events-auto transition-all duration-300">
                                        <div
                                            class="bg-white shadow-2xl rounded-xl overflow-hidden border border-slate-100 p-2 shadow-sky-900/10">
                                            <a href="#" class="block p-3 rounded-lg hover:bg-slate-50 transition-all">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Zirconia
                                                    Analyzer</span>
                                                <span class="block text-[11px] text-slate-400">Principal: RB
                                                    Technologies</span>
                                            </a>
                                            <a href="#"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all border-t border-slate-50">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Emissions
                                                    Monitoring</span>
                                                <span class="block text-[11px] text-slate-400">Principal: Sick</span>
                                            </a>
                                            <a href="#"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all border-t border-slate-50">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Water
                                                    Analyzer</span>
                                                <span class="block text-[11px] text-slate-400">ECD, Process
                                                    Instruments</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Category 2 -->
                                <div class="relative group/sub2 mt-1">
                                    <div
                                        class="flex items-center justify-between p-3 rounded-lg hover:bg-amber-50 cursor-pointer transition-all">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center text-amber-600">
                                                <iconify-icon icon="solar:settings-minimalistic-linear"
                                                    class="text-lg"></iconify-icon>
                                            </div>
                                            <span class="text-[13px] font-bold text-slate-700">Automation &
                                                Instrumentation</span>
                                        </div>
                                        <iconify-icon icon="solar:alt-arrow-right-linear"
                                            class="text-xs text-slate-500"></iconify-icon>
                                    </div>

                                    <!-- Sub-menu for Category 2 -->
                                    <div
                                        class="absolute left-full top-0 ml-2 w-72 opacity-0 scale-95 origin-left pointer-events-none group-hover/sub2:opacity-100 group-hover/sub2:scale-100 group-hover/sub2:pointer-events-auto transition-all duration-300">
                                        <div
                                            class="bg-white shadow-2xl rounded-xl overflow-hidden border border-slate-100 p-2 shadow-sky-900/10">
                                            <a href="#" class="block p-3 rounded-lg hover:bg-slate-50 transition-all">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Transmitter</span>
                                                <span class="block text-[11px] text-slate-400">Principal: PIEZUS</span>
                                            </a>
                                            <a href="#"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all border-t border-slate-50">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Control
                                                    Valve</span>
                                                <span class="block text-[11px] text-slate-400">RTK - Regeltechnik</span>
                                            </a>
                                            <a href="#"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all border-t border-slate-50">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Fittings
                                                    & Regulator</span>
                                                <span class="block text-[11px] text-slate-400">Principal: NAI LOK</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/service') }}"
                        class="font-bold text-[11px] tracking-widest uppercase relative transition-colors group {{ Request::is('service') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}">
                        Service
                        <span
                            class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('service') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>

                    <a href="{{ url('/news') }}"
                        class="font-bold text-[11px] tracking-widest uppercase relative transition-colors group {{ Request::is('news*') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}">
                        News
                        <span
                            class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('news*') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>

                    <a href="{{ url('/contact') }}"
                        class="font-bold text-[11px] tracking-widest uppercase relative transition-colors group {{ Request::is('contact') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}">
                        Contact
                        <span
                            class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('contact') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                </nav>

                <div class="hidden md:flex items-center gap-6">
                    <!-- Language Switcher Pill (Flags) -->
                    <div
                        class="flex items-center bg-slate-100/80 p-0.5 rounded-full border border-slate-200/50 backdrop-blur-sm">
                        <button
                            class="flex items-center justify-center p-1 rounded-full bg-white shadow-sm shadow-sky-900/5 transition-all">
                            <iconify-icon icon="circle-flags:id" class="text-[14px]"></iconify-icon>
                        </button>
                        <button
                            class="flex items-center justify-center p-1 rounded-full opacity-40 hover:opacity-100 transition-all">
                            <iconify-icon icon="circle-flags:uk" class="text-[14px]"></iconify-icon>
                        </button>
                    </div>

                    <a href="{{ url('/contact') }}"
                        class="group/cta bg-yellow-500 hover:bg-yellow-600 text-white px-7 py-2.5 rounded-lg font-bold text-[12px] tracking-widest uppercase transition-all  shadow-yellow-500/20 flex items-center">
                        Get a Quote
                        <iconify-icon icon="solar:alt-arrow-right-linear"
                            class="text-lg transition-transform group-hover:translate-x-1"></iconify-icon>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden items-center">
                    <button type="button"
                        aria-label="Open Navigation Menu"
                        class="text-slate-900 bg-slate-100 p-3 rounded-lg hover:bg-slate-200 transition-colors">
                        <iconify-icon icon="solar:hamburger-menu-linear" class="text-2xl"></iconify-icon>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="grow">
        @yield('content')
    </main>

    <footer class="background-footer text-slate-900 relative overflow-hidden">
        <!-- Decoration: Soft Blob -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1000px] h-[400px] bg-sky-50/50 rounded-[100%] blur-[120px] -z-10">
        </div>

        <!-- Top Footer: CTA & Brand -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:items-start">

                <!-- Column 1: Brand Identity -->
                <div class="lg:col-span-4 space-y-8">
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/logo-indotek-prima.webp') }}" class="h-12 w-auto"
                                alt="Indotek Logo">
                            <div class="h-8 w-[2px] bg-yellow-500 rounded-full"></div>
                            <span class="font-black text-slate-900 text-lg tracking-tighter leading-none uppercase">PT.
                                Indotek<br>Prima
                                Jaya</span>
                        </div>
                        <p class="text-slate-500 text-[14px] leading-relaxed max-w-sm font-medium">
                            Premium industrial supplier specializing in high-precision measuring instruments, mechanical
                            engineering, and electrical solutions for Indonesia's growing industries.
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <a href="#"
                            aria-label="Follow us on Facebook"
                            class="w-11 h-11 rounded-lg bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#1877F2] hover:text-white hover:border-[#1877F2] hover:shadow-lg hover:shadow-[#1877F2]/20 transition-all duration-300">
                            <iconify-icon icon="ri:facebook-fill" class="text-xl"></iconify-icon>
                        </a>
                        <a href="#"
                            aria-label="Follow us on Instagram"
                            class="w-11 h-11 rounded-lg bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#E4405F] hover:text-white hover:border-[#E4405F] hover:shadow-lg hover:shadow-[#E4405F]/20 transition-all duration-300">
                            <iconify-icon icon="ri:instagram-line" class="text-xl"></iconify-icon>
                        </a>
                        <a href="#"
                            aria-label="Send us an Email"
                            class="w-11 h-11 rounded-lg bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-500 hover:bg-sky-600 hover:text-white hover:border-sky-600 hover:shadow-lg hover:shadow-sky-600/20 transition-all duration-300">
                            <iconify-icon icon="solar:letter-linear" class="text-xl"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="lg:col-span-4 grid grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <h2 class="text-[11px] font-black text-sky-600 tracking-[0.2em] uppercase">Navigation</h2>
                        <ul class="space-y-4">
                            <li><a href="{{ url('/') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    Home
                                </a></li>
                            <li><a href="{{ url('/about') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    About Us
                                </a></li>
                            <li><a href="#"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    Products
                                </a></li>
                            <li><a href="{{ url('/service') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    Service
                                </a></li>
                            <li><a href="{{ url('/news') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    News
                                </a></li>
                        </ul>
                    </div>
                    <div class="space-y-6">
                        <h2 class="text-[11px] font-black text-sky-600 tracking-[0.2em] uppercase">Support</h2>
                        <ul class="space-y-4">
                            <li><a href="{{ url('/contact') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    Contact
                                </a></li>
                            <li><a href="{{ url('/contact') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    Get a Quote
                                </a></li>
                            <li><a href="#"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    Privacy Policy
                                </a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3: Contact Summary -->
                <div class="lg:col-span-4 space-y-8">
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 space-y-5">
                        <h2 class="text-[11px] font-black text-slate-500 tracking-[0.2em] uppercase">Quick Contact</h2>
                        <div class="space-y-4">
                            <div class="flex items-center gap-2 group cursor-pointer">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-sky-600 shadow-sm group-hover:bg-sky-600 group-hover:text-white transition-all">
                                    <iconify-icon icon="solar:phone-linear" class="text-xl"></iconify-icon>
                                </div>
                                <span class="text-[13px] font-bold text-slate-700">0761 8046829</span>
                            </div>
                            <div class="flex items-center gap-2 group cursor-pointer">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-sky-600 shadow-sm group-hover:bg-sky-600 group-hover:text-white transition-all">
                                    <iconify-icon icon="solar:letter-linear" class="text-xl"></iconify-icon>
                                </div>
                                <span class="text-[13px] font-bold text-slate-700">sales@indotek-pj.com</span>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#"
                                class="block text-center bg-sky-600 text-white py-3 rounded-lg font-bold text-[12px] uppercase tracking-widest hover:bg-sky-700 transition-all">
                                Contact Our Team
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="bg-white/20 py-8">
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="text-slate-500 text-[11px] font-bold tracking-wider uppercase">
                    &copy; {{ date('Y') }} PT. Indotek Prima Jaya. All Rights Reserved.
                </div>
                <div class="flex items-center gap-4">
                    <img src="{{ asset('assets/logo-indotek-prima.webp') }}" class="h-6 w-auto" alt="">
                    <span class="text-[10px] text-slate-500 font-black tracking-[0.3em] uppercase">Pekanbaru,
                        Riau</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-out-quad',
        });
    </script>
</body>

</html>