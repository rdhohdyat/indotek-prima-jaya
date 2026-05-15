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
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                        <div class="flex items-center">
                            <img class="h-10 w-auto object-contain" src="{{ asset('assets/logo-indotek-prima.png') }}"
                                alt="PT. Indotek Prima Jaya Logo">
                        </div>
                        <div class="flex flex-col border-l-2 border-yellow-500 pl-3">
                            <span class="font-bold text-base text-slate-900 tracking-tight leading-none uppercase">PT.
                                INDOTEK PRIMA JAYA</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex space-x-7 items-center">
                    <a href="{{ url('/') }}"
                        class="text-sky-600 font-bold text-[11px] tracking-widest uppercase relative after:absolute after:bottom-[-8px] after:left-0 after:w-full after:h-[2px] after:bg-sky-600 transition-colors">Home</a>
                    <a href="#"
                        class="text-slate-800 hover:text-sky-600 font-bold text-[11px] tracking-widest uppercase transition-colors">About</a>

                    <!-- Products Dropdown -->
                    <div class="relative group">
                        <button
                            class="flex items-center gap-1 text-slate-800 hover:text-sky-600 font-bold text-[11px] tracking-widest uppercase transition-colors">
                            Products
                            <iconify-icon icon="solar:alt-arrow-down-linear"
                                class="text-xs text-slate-400 group-hover:rotate-180 transition-transform duration-300"></iconify-icon>
                        </button>
                        <!-- Dropdown Menu -->
                        <div
                            class="absolute -left-32 mt-0 pt-6 w-[700px] opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 z-50">
                            <div
                                class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-slate-100 grid grid-cols-12 shadow-sky-900/10">
                                <!-- Left: Categories -->
                                <div class="col-span-7 p-8 border-r border-slate-100">
                                    <h4 class="text-[11px] font-black text-slate-400 tracking-widest uppercase mb-6">
                                        Product Categories</h4>
                                    <div class="grid grid-cols-1 gap-1">
                                        <a href="#"
                                            class="flex items-center gap-4 p-3 rounded-lg hover:bg-sky-50/50 group/item transition-all">
                                            <div
                                                class="w-11 h-11 rounded-lg bg-sky-50 flex items-center justify-center text-sky-600 border border-sky-100 group-hover/item:bg-sky-600 group-hover/item:text-white transition-colors shadow-sm">
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
                                            class="flex items-center gap-4 p-3 rounded-lg hover:bg-sky-50/50 group/item transition-all">
                                            <div
                                                class="w-11 h-11 rounded-lg bg-yellow-50 flex items-center justify-center text-yellow-600 border border-yellow-100 group-hover/item:bg-yellow-600 group-hover/item:text-white transition-colors shadow-sm">
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
                                            class="flex items-center gap-4 p-3 rounded-lg hover:bg-sky-50/50 group/item transition-all">
                                            <div
                                                class="w-11 h-11 rounded-lg bg-emerald-50 flex items-center justify-center text-emerald-600 border border-emerald-100 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-colors shadow-sm">
                                                <iconify-icon icon="solar:settings-linear"
                                                    class="text-xl"></iconify-icon>
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
                                                <span class="text-[10px] font-black text-sky-700">FineTek</span>
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
                                                class="group/btn inline-flex items-center gap-3 bg-sky-600 text-white px-6 py-2.5 rounded-lg font-bold text-[12px] hover:bg-sky-700 transition-all shadow-lg shadow-sky-600/20 w-full justify-center">
                                                Explorer Full Catalog
                                                <iconify-icon icon="solar:alt-arrow-right-linear"
                                                    class="text-lg transition-transform group-hover/btn:translate-x-1"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Dropdown -->
                    <div class="relative group">
                        <button
                            class="flex items-center gap-1 text-slate-800 hover:text-sky-600 font-bold text-[11px] tracking-widest uppercase transition-colors">
                            Service
                            <iconify-icon icon="solar:alt-arrow-down-linear"
                                class="text-xs text-slate-400 group-hover:rotate-180 transition-transform duration-300"></iconify-icon>
                        </button>
                    </div>

                    <a href="#"
                        class="text-slate-800 hover:text-sky-600 font-bold text-[11px] tracking-widest uppercase transition-colors">Contact
                        Us</a>
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

                    <a href="#"
                        class="group/cta bg-yellow-500 hover:bg-yellow-600 text-white px-7 py-3 rounded-lg font-bold text-[12px] tracking-widest uppercase transition-all  shadow-yellow-500/20 flex items-center gap-3">
                        Get a Quote
                        <iconify-icon icon="solar:alt-arrow-right-linear"
                            class="text-xl transition-transform group-hover:translate-x-1"></iconify-icon>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden items-center">
                    <button type="button"
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

    <footer class="bg-white text-slate-900 relative overflow-hidden">
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
                            <img src="{{ asset('assets/logo-indotek-prima.png') }}" class="h-12 w-auto"
                                alt="Indotek Logo">
                            <div class="h-8 w-[2px] bg-amber-400 rounded-full"></div>
                            <span
                                class="font-black text-slate-900 text-lg tracking-tighter leading-none uppercase">Indotek<br>Prima
                                Jaya</span>
                        </div>
                        <p class="text-slate-500 text-[14px] leading-relaxed max-w-sm font-medium">
                            Premium industrial supplier specializing in high-precision measuring instruments, mechanical
                            engineering, and electrical solutions for Indonesia's growing industries.
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <a href="#"
                            class="w-11 h-11 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-[#1877F2] hover:text-white hover:border-[#1877F2] hover:shadow-lg hover:shadow-[#1877F2]/20 transition-all duration-300">
                            <iconify-icon icon="ri:facebook-fill" class="text-xl"></iconify-icon>
                        </a>
                        <a href="#"
                            class="w-11 h-11 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-[#E4405F] hover:text-white hover:border-[#E4405F] hover:shadow-lg hover:shadow-[#E4405F]/20 transition-all duration-300">
                            <iconify-icon icon="ri:instagram-line" class="text-xl"></iconify-icon>
                        </a>
                        <a href="#"
                            class="w-11 h-11 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-sky-600 hover:text-white hover:border-sky-600 hover:shadow-lg hover:shadow-sky-600/20 transition-all duration-300">
                            <iconify-icon icon="solar:letter-linear" class="text-xl"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="lg:col-span-5 grid grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <h4 class="text-[11px] font-black text-sky-600 tracking-[0.2em] uppercase">Navigation</h4>
                        <ul class="space-y-4">
                            <li><a href="#"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    Home
                                </a></li>
                            <li><a href="#"
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
                            <li><a href="#"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    Service
                                </a></li>
                        </ul>
                    </div>
                    <div class="space-y-6">
                        <h4 class="text-[11px] font-black text-sky-600 tracking-[0.2em] uppercase">Support</h4>
                        <ul class="space-y-4">
                            <li><a href="#"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    Contact
                                </a></li>
                            <li><a href="#"
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
                <div class="lg:col-span-3 space-y-8">
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 space-y-5">
                        <h4 class="text-[11px] font-black text-slate-400 tracking-[0.2em] uppercase">Quick Contact</h4>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 group cursor-pointer">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-sky-600 shadow-sm group-hover:bg-sky-600 group-hover:text-white transition-all">
                                    <iconify-icon icon="solar:phone-linear" class="text-xl"></iconify-icon>
                                </div>
                                <span class="text-[13px] font-bold text-slate-700">0761 8046829</span>
                            </div>
                            <div class="flex items-center gap-4 group cursor-pointer">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-sky-600 shadow-sm group-hover:bg-sky-600 group-hover:text-white transition-all">
                                    <iconify-icon icon="solar:letter-linear" class="text-xl"></iconify-icon>
                                </div>
                                <span class="text-[13px] font-bold text-slate-700">sales@indotek-pj.com</span>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#"
                                class="block text-center bg-sky-600 text-white py-3 rounded-xl font-bold text-[12px] uppercase tracking-widest hover:bg-sky-700 transition-all shadow-lg shadow-sky-600/20">
                                Contact Our Team
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="bg-slate-50 py-8 border-t border-slate-100">
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="text-slate-400 text-[11px] font-bold tracking-wider uppercase">
                    &copy; {{ date('Y') }} PT. Indotek Prima Jaya. All Rights Reserved.
                </div>
                <div class="flex items-center gap-6">
                    <img src="{{ asset('assets/logo-indotek-prima.png') }}" class="h-6 w-auto grayscale opacity-30"
                        alt="">
                    <div class="h-4 w-[1px] bg-slate-200"></div>
                    <span class="text-[10px] text-slate-400 font-black tracking-[0.3em] uppercase">Pekanbaru,
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