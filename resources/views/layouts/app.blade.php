<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'PT. INDOTEK PRIMA JAYA - Reliable Industrial Partner')</title>
    <meta name="description"
        content="@yield('meta_description', 'PT. Indotek Prima Jaya is a premium industrial supplier and business solutions provider in Indonesia. We specialize in high-precision measuring instruments, mechanical engineering, and electrical solutions.')">
    <meta name="keywords"
        content="Indotek Prima Jaya, industrial supplier Indonesia, measuring instruments, mechanical engineering, electrical solutions, business solutions">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="PT. Indotek Prima Jaya">
    <meta property="og:title" content="@yield('og_title', 'PT. INDOTEK PRIMA JAYA - Reliable Industrial Partner')">
    <meta property="og:description"
        content="@yield('meta_description', 'PT. Indotek Prima Jaya is a premium industrial supplier and business solutions provider in Indonesia.')">
    <meta property="og:image" content="@yield('og_image', asset('assets/og-image.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="PT. Indotek Prima Jaya Logo">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('og_title', 'PT. INDOTEK PRIMA JAYA - Reliable Industrial Partner')">
    <meta name="twitter:description"
        content="@yield('meta_description', 'PT. Indotek Prima Jaya is a premium industrial supplier and business solutions provider in Indonesia.')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/og-image.png'))">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "PT. Indotek Prima Jaya",
        "url": "{{ config('app.url') }}",
        "logo": "{{ asset('assets/og-image.png') }}",
        "description": "PT. Indotek Prima Jaya is a premium industrial supplier and business solutions provider in Indonesia. We specialize in high-precision measuring instruments, mechanical engineering, and electrical solutions.",
        "address": {
            "@@type": "PostalAddress",
            "addressCountry": "ID"
        },
        "contactPoint": {
            "@@type": "ContactPoint",
            "contactType": "customer service"
        },
        "sameAs": []
    }
    </script>

    {{-- Structured data tambahan per halaman --}}
    @stack('structured_data')

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <link rel="icon" href="{{ asset('assets/favicon/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800;900&family=Fira+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen overflow-x-hidden">

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100/50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ url('/') }}" class="flex items-center group"
                        aria-label="PT. Indotek Prima Jaya Homepage">
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
                        class="font-bold text-[11px] tracking-widest uppercase relative transition-colors group {{ Request::is('/') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}"
                        {!! Request::is('/') ? 'aria-current="page"' : '' !!}>
                        {{ __('Home') }}
                        <span
                            class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                    <a href="{{ route('about') }}"
                        class="font-bold text-[11px] tracking-widest uppercase relative transition-colors group {{ Request::is('about') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}"
                        aria-label="About PT. Indotek Prima Jaya" {!! Request::is('about') ? 'aria-current="page"' : '' !!}>
                        {{ __('About') }}
                        <span
                            class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('about') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>

                    <!-- Products Dropdown -->
                    <div class="relative group">
                        <button aria-label="Toggle Products Menu"
                            class="flex items-center gap-1 font-bold text-[11px] tracking-widest uppercase transition-colors relative group/btn {{ Request::is('product*') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}">
                            {{ __('Products') }}
                            <iconify-icon icon="solar:alt-arrow-down-linear"
                                class="text-xs {{ Request::is('product*') ? 'text-sky-600' : 'text-slate-500' }} group-hover:rotate-180 transition-transform duration-300"></iconify-icon>
                            <span
                                class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('product*') ? 'w-full' : 'w-0 group-hover/btn:w-full' }}"></span>
                        </button>
                        <!-- Dropdown Menu (Classic Nested Style) -->
                        <div
                            class="absolute -left-4 mt-0 pt-8 w-80 opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 delay-75 group-hover:delay-0 z-50">
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
                                            <span
                                                class="text-[13px] font-bold text-slate-700">{{ __('Analyzer & Engineering') }}</span>
                                        </div>
                                        <iconify-icon icon="solar:alt-arrow-right-linear"
                                            class="text-xs text-slate-400"></iconify-icon>
                                    </div>

                                    <!-- Sub-menu for Category 1 -->
                                    <div
                                        class="absolute left-full top-0 pl-4 w-80 opacity-0 scale-95 origin-left pointer-events-none group-hover/sub1:opacity-100 group-hover/sub1:scale-100 group-hover/sub1:pointer-events-auto transition-all duration-300 delay-75 group-hover/sub1:delay-0">
                                        <div
                                            class="bg-white shadow-2xl rounded-xl overflow-hidden border border-slate-100 p-2 shadow-sky-900/10">
                                            <a href="{{ route('product', 'zirconia-analyzer') }}"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Zirconia
                                                    Analyzer</span>
                                                <span class="block text-[11px] text-slate-400">Principal: RB
                                                    Technologies</span>
                                            </a>
                                            <a href="{{ route('product', 'emissions-monitoring') }}"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all border-t border-slate-50">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Emissions
                                                    Monitoring</span>
                                                <span class="block text-[11px] text-slate-400">Principal: Sick</span>
                                            </a>
                                            <a href="{{ route('product', 'water-analyzer') }}"
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
                                        class="flex items-center justify-between p-3 rounded-lg hover:bg-yellow-50 cursor-pointer transition-all">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-yellow-50 flex items-center justify-center text-yellow-600">
                                                <iconify-icon icon="solar:settings-minimalistic-linear"
                                                    class="text-lg"></iconify-icon>
                                            </div>
                                            <span
                                                class="text-[13px] font-bold text-slate-700">{{ __('Automation & Instrumentation') }}</span>
                                        </div>
                                        <iconify-icon icon="solar:alt-arrow-right-linear"
                                            class="text-xs text-slate-500"></iconify-icon>
                                    </div>

                                    <!-- Sub-menu for Category 2 -->
                                    <div
                                        class="absolute left-full top-0 pl-4 w-80 opacity-0 scale-95 origin-left pointer-events-none group-hover/sub2:opacity-100 group-hover/sub2:scale-100 group-hover/sub2:pointer-events-auto transition-all duration-300 delay-75 group-hover/sub2:delay-0">
                                        <div
                                            class="bg-white shadow-2xl rounded-xl overflow-hidden border border-slate-100 p-2 shadow-sky-900/10">
                                            <a href="{{ route('product', 'transmitter') }}"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Transmitter</span>
                                                <span class="block text-[11px] text-slate-400">Principal: PIEZUS</span>
                                            </a>

                                            <a href="{{ route('product', 'fittings-regulator') }}"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all border-t border-slate-50">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Fittings
                                                    & Regulator</span>
                                                <span class="block text-[11px] text-slate-400">Principal: NAI LOK</span>
                                            </a>
                                            <a href="{{ route('product', 'saxon-probe') }}"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all border-t border-slate-50">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">In-Situ
                                                    Oxygen Probe</span>
                                                <span class="block text-[11px] text-slate-400">Principal: Saxon</span>
                                            </a>
                                            <a href="{{ route('product', 'control-valve') }}"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all border-t border-slate-50">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Control
                                                    Valve</span>
                                                <span class="block text-[11px] text-slate-400">Principal: RTK</span>
                                            </a>
                                            <a href="{{ route('product', 'industrial-valve') }}"
                                                class="block p-3 rounded-lg hover:bg-slate-50 transition-all border-t border-slate-50">
                                                <span
                                                    class="block text-[13px] font-bold text-slate-700 hover:text-sky-600 transition-colors">Industrial
                                                    Valve</span>
                                                <span class="block text-[11px] text-slate-400">Principal: Red
                                                    Valve</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <button aria-label="Toggle Services Menu"
                            class="flex items-center gap-1 font-bold text-[11px] tracking-widest uppercase transition-colors relative group/btn {{ Request::is('service*') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}">
                            {{ __('Services') }}
                            <iconify-icon icon="solar:alt-arrow-down-linear"
                                class="text-xs {{ Request::is('service*') ? 'text-sky-600' : 'text-slate-500' }} group-hover:rotate-180 transition-transform duration-300"></iconify-icon>
                            <span
                                class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('service*') ? 'w-full' : 'w-0 group-hover/btn:w-full' }}"></span>
                        </button>
                        <!-- Dropdown Menu -->
                        <div
                            class="absolute -left-4 mt-0 pt-8 w-72 opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 delay-75 group-hover:delay-0 z-50">
                            <div
                                class="bg-white shadow-2xl rounded-xl overflow-hidden border border-slate-100 p-2 shadow-sky-900/10">

                                <a href="{{ route('service', 'transformator') }}"
                                    class="flex items-center gap-4 p-3 rounded-lg hover:bg-sky-50 transition-all group/item">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-sky-50 flex items-center justify-center text-sky-600 group-hover/item:bg-sky-600 group-hover/item:text-white transition-colors">
                                        <iconify-icon icon="solar:bolt-linear" class="text-xl"></iconify-icon>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[13px] font-bold text-slate-700">Transformator Services</span>
                                        <span class="text-[10px] text-slate-400">Installation & Maintenance</span>
                                    </div>
                                </a>



                                <a href="{{ route('service', 'pump') }}"
                                    class="flex items-center gap-4 p-3 rounded-lg hover:bg-yellow-50 transition-all group/item border-t border-slate-50">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-yellow-50 flex items-center justify-center text-yellow-600 group-hover/item:bg-yellow-600 group-hover/item:text-white transition-colors">
                                        <iconify-icon icon="solar:refresh-linear" class="text-xl"></iconify-icon>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[13px] font-bold text-slate-700">Pump Services</span>
                                        <span class="text-[10px] text-slate-400">Overhaul & Alignment</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/news') }}"
                        class="font-bold text-[11px] tracking-widest uppercase relative transition-colors group {{ Request::is('news*') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}"
                        {!! Request::is('news*') ? 'aria-current="page"' : '' !!}>
                        {{ __('News') }}
                        <span
                            class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('news*') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>

                    <a href="{{ url('/contact') }}"
                        class="font-bold text-[11px] tracking-widest uppercase relative transition-colors group {{ Request::is('contact') ? 'text-sky-600' : 'text-slate-800 hover:text-sky-600' }}"
                        {!! Request::is('contact') ? 'aria-current="page"' : '' !!}>
                        {{ __('Contact') }}
                        <span
                            class="absolute -bottom-2 left-0 h-[2px] bg-sky-600 transition-all duration-300 {{ Request::is('contact') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                </nav>

                <div class="hidden md:flex items-center gap-6">
                    <!-- Language Switcher Pill (Flags) -->
                    <div
                        class="flex items-center bg-slate-100/80 p-0.5 rounded-full border border-slate-200/50 backdrop-blur-sm">
                        <a href="{{ route('lang.switch', 'id') }}" aria-label="Switch to Indonesian"
                            class="flex items-center justify-center w-9 h-9 rounded-full {{ app()->getLocale() == 'id' ? 'bg-white shadow-sm shadow-sky-900/5 opacity-100' : 'opacity-40 hover:opacity-100' }} transition-all">
                            <iconify-icon icon="circle-flags:id" class="text-lg"></iconify-icon>
                        </a>
                        <a href="{{ route('lang.switch', 'en') }}" aria-label="Switch to English"
                            class="flex items-center justify-center w-9 h-9 rounded-full {{ app()->getLocale() == 'en' ? 'bg-white shadow-sm shadow-sky-900/5 opacity-100' : 'opacity-40 hover:opacity-100' }} transition-all">
                            <iconify-icon icon="circle-flags:uk" class="text-lg"></iconify-icon>
                        </a>
                    </div>

                    <a href="{{ url('/contact') }}"
                        class="group/cta bg-yellow-500 hover:bg-yellow-600 text-slate-900 px-7 py-2.5 rounded-lg font-bold text-[12px] tracking-widest uppercase transition-all shadow-sm flex items-center">
                        {{ __('Get a Quote') }}
                        <iconify-icon icon="solar:alt-arrow-right-linear"
                            class="text-lg transition-transform group-hover:translate-x-1"></iconify-icon>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden items-center">
                    <button type="button" id="mobile-menu-btn" aria-label="Open Navigation Menu"
                        class="text-slate-900 bg-slate-100 w-9 h-9 flex items-center justify-center rounded-lg hover:bg-slate-200 transition-colors">
                        <iconify-icon id="mobile-menu-icon" icon="solar:hamburger-menu-linear"
                            class="text-xl flex items-center justify-center"></iconify-icon>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-white/95 backdrop-blur-2xl z-40 translate-x-full transition-transform duration-500 ease-in-out lg:hidden flex flex-col pt-24 pb-8">
        <nav class="flex flex-col items-start space-y-2 px-6 text-left overflow-y-auto w-full grow pb-10">
            <a href="{{ route('home') }}"
                class="text-lg font-black text-slate-900 uppercase tracking-widest hover:text-sky-600 transition-colors py-3 w-full border-b border-slate-100 px-2">{{ __('Home') }}</a>
            <a href="{{ route('about') }}" aria-label="About PT. Indotek Prima Jaya"
                class="text-lg font-black text-slate-900 uppercase tracking-widest hover:text-sky-600 transition-colors py-3 w-full border-b border-slate-100 px-2">{{ __('About') }}</a>

            <!-- Mobile Products (3-Level) -->
            <div class="flex flex-col w-full px-2">
                <button type="button"
                    class="mobile-dropdown-btn flex items-center justify-between text-lg font-black uppercase tracking-widest py-3 w-full border-b border-slate-100"
                    data-target="mobile-products">
                    <span class="flex items-center gap-3">
                        {{ __('Products') }}
                    </span>
                    <iconify-icon icon="solar:alt-arrow-down-linear"
                        class="text-lg transition-transform duration-300 dropdown-icon"></iconify-icon>
                </button>
                <div id="mobile-products"
                    class="hidden flex-col bg-slate-50/50 w-full mt-2 rounded-2xl border border-slate-100">

                    <!-- Level 2: Category 1 -->
                    <div class="flex flex-col w-full">
                        <button type="button"
                            class="mobile-dropdown-btn flex items-center justify-between text-[11px] font-black uppercase tracking-widest py-3.5 px-6 w-full border-b border-slate-100/50 text-sky-600"
                            data-target="mobile-cat-analyzer">
                            <span class="flex items-center gap-3">
                                <iconify-icon icon="solar:chart-2-linear" class="text-base"></iconify-icon>
                                {{ __('Analyzer & Engineering') }}
                            </span>
                            <iconify-icon icon="solar:alt-arrow-down-linear"
                                class="text-xs transition-transform duration-300 dropdown-icon"></iconify-icon>
                        </button>
                        <div id="mobile-cat-analyzer" class="hidden flex-col bg-white w-full py-1.5 px-8 space-y-0.5">
                            <a href="{{ route('product', 'zirconia-analyzer') }}"
                                class="py-2.5 text-[10px] font-bold text-slate-600 uppercase tracking-widest border-b border-slate-50 last:border-0">Zirconia
                                Analyzer</a>
                            <a href="{{ route('product', 'emissions-monitoring') }}"
                                class="py-2.5 text-[10px] font-bold text-slate-600 uppercase tracking-widest border-b border-slate-50 last:border-0">Emissions
                                Monitoring</a>
                            <a href="{{ route('product', 'water-analyzer') }}"
                                class="py-2.5 text-[10px] font-bold text-slate-600 uppercase tracking-widest border-b border-slate-50 last:border-0">Water
                                Analyzer</a>
                            <a href="{{ route('product', 'saxon-probe') }}"
                                class="py-2.5 text-[10px] font-bold text-slate-600 uppercase tracking-widest last:border-0">In-Situ
                                Oxygen Probe</a>
                        </div>
                    </div>

                    <!-- Level 2: Category 2 -->
                    <div class="flex flex-col w-full">
                        <button type="button"
                            class="mobile-dropdown-btn flex items-center justify-between text-[11px] font-black uppercase tracking-widest py-3.5 px-6 w-full border-b border-slate-100/50 text-yellow-600"
                            data-target="mobile-cat-automation">
                            <span class="flex items-center gap-3">
                                <iconify-icon icon="solar:settings-linear" class="text-base"></iconify-icon>
                                {{ __('Automation & Instrumentation') }}
                            </span>
                            <iconify-icon icon="solar:alt-arrow-down-linear"
                                class="text-xs transition-transform duration-300 dropdown-icon"></iconify-icon>
                        </button>
                        <div id="mobile-cat-automation" class="hidden flex-col bg-white w-full py-1.5 px-8 space-y-0.5">
                            <a href="{{ route('product', 'transmitter') }}"
                                class="py-2.5 text-[10px] font-bold text-slate-600 uppercase tracking-widest border-b border-slate-50 last:border-0">Transmitter</a>
                            <a href="{{ route('product', 'fittings-regulator') }}"
                                class="py-2.5 text-[10px] font-bold text-slate-600 uppercase tracking-widest border-b border-slate-50 last:border-0">Fittings
                                & Regulator</a>
                            <a href="{{ route('product', 'control-valve') }}"
                                class="py-2.5 text-[10px] font-bold text-slate-600 uppercase tracking-widest border-b border-slate-50 last:border-0">Control
                                Valve</a>
                            <a href="{{ route('product', 'industrial-valve') }}"
                                class="py-2.5 text-[10px] font-bold text-slate-600 uppercase tracking-widest last:border-0">Industrial
                                Valve</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mobile Services -->
            <div class="flex flex-col w-full px-2">
                <button type="button"
                    class="mobile-dropdown-btn flex items-center justify-between text-lg font-black uppercase tracking-widest py-3 w-full border-b border-slate-100"
                    data-target="mobile-services">
                    <span class="flex items-center gap-3">
                        {{ __('Services') }}
                    </span>
                    <iconify-icon icon="solar:alt-arrow-down-linear"
                        class="text-lg transition-transform duration-300 dropdown-icon"></iconify-icon>
                </button>
                <div id="mobile-services"
                    class="hidden flex-col space-y-1 bg-slate-50/50 w-full py-3 mt-2 rounded-2xl border border-slate-100 px-4">
                    <a href="{{ route('service', 'transformator') }}"
                        class="flex items-center gap-3 py-2 text-[10px] font-bold text-slate-700 uppercase tracking-widest hover:text-sky-600 transition-colors">
                        <iconify-icon icon="solar:bolt-linear" class="text-base text-sky-600"></iconify-icon>
                        Transformator Services
                    </a>
                    <a href="{{ route('service', 'pump') }}"
                        class="flex items-center gap-3 py-2 text-[10px] font-bold text-slate-700 uppercase tracking-widest hover:text-sky-600 transition-colors">
                        <iconify-icon icon="solar:refresh-linear" class="text-base text-sky-600"></iconify-icon>
                        Pump Services
                    </a>
                </div>
            </div>

            <a href="{{ route('news') }}" aria-label="News PT. Indotek Prima Jaya"
                class="text-lg font-black text-slate-900 uppercase tracking-widest hover:text-sky-600 transition-colors py-3 w-full border-b border-slate-100 px-2">{{ __('News') }}</a>
            <a href="{{ route('contact') }}" aria-label="Contact PT. Indotek Prima Jaya"
                class="text-lg font-black text-slate-900 uppercase tracking-widest hover:text-sky-600 transition-colors py-3 w-full border-b border-slate-100 px-2">{{ __('Contact') }}</a>

            <div class="pt-6 w-full">
                <a href="{{ route('contact') }}" aria-label="Get a Quote PT. Indotek Prima Jaya"
                    class="block bg-yellow-500 text-slate-900 px-8 py-4 rounded-xl font-bold uppercase tracking-widest w-full text-sm shadow-lg shadow-yellow-500/30 text-center">{{ __('Get a Quote') }}</a>
            </div>
        </nav>
    </div>

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
                            {{ __('Premium industrial supplier specializing in high-precision measuring instruments, mechanical engineering, and electrical solutions for Indonesia\'s growing industries.') }}
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <a href="https://id.linkedin.com/in/indotek-prima-jaya-15042a1b2"
                            aria-label="Follow us on Linkedin"
                            class="w-11 h-11 rounded-lg bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#0A66C2] hover:text-white hover:border-[#0A66C2] hover:shadow-lg hover:shadow-[#0A66C2]/20 transition-all duration-300">
                            <iconify-icon icon="solar:link-bold" class="text-xl"></iconify-icon>
                        </a>
                        <a href="mailto:sales@indotek-pj.com" aria-label="Send us an Email"
                            class="w-11 h-11 rounded-lg bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-500 hover:bg-sky-600 hover:text-white hover:border-sky-700 hover:shadow-lg hover:shadow-sky-700/20 transition-all duration-300">
                            <iconify-icon icon="solar:letter-linear" class="text-xl"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="lg:col-span-4 grid grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <h2 class="text-[11px] font-black text-sky-600 tracking-[0.2em] uppercase">Navigation</h2>
                        <ul class="space-y-4">
                            <li><a href="{{ route('home') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    {{ __('Home') }}
                                </a></li>
                            <li><a href="{{ route('about') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group"
                                    aria-label="Read more about PT. Indotek Prima Jaya's profile">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    {{ __('About') }}
                                </a></li>
                            <li><a href="{{ route('service') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    {{ __('Services') }}
                                </a></li>
                            <li><a href="{{ route('news') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    {{ __('News') }}
                                </a></li>
                        </ul>
                    </div>
                    <div class="space-y-6">
                        <h2 class="text-[11px] font-black text-sky-600 tracking-[0.2em] uppercase">Support</h2>
                        <ul class="space-y-4">
                            <li><a href="{{ route('contact') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    {{ __('Contact') }}
                                </a></li>
                            <li><a href="{{ route('contact') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    {{ __('Get a Quote') }}
                                </a></li>
                            <li><a href="{{ route('privacy-policy') }}"
                                    class="text-[13px] font-bold text-slate-600 hover:text-sky-600 transition-colors flex items-center gap-2 group">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-sky-600 transition-colors"></span>
                                    {{ __('Privacy Policy') }}
                                </a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3: Contact Summary -->
                <div class="lg:col-span-4 space-y-8">
                    <div
                        class="bg-white/40 backdrop-blur-xl p-6 rounded-2xl border border-white/40 space-y-5 shadow-xl shadow-slate-900/5">
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
                            <a href="{{ route('contact') }}"
                                class="block text-center bg-slate-900 text-white py-3 rounded-lg font-bold text-[11px] uppercase tracking-widest hover:bg-slate-800 transition-all shadow-lg shadow-slate-900/10">
                                {{ __('Contact Our Team') }}
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
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-out-quad',
        });

        // Mobile Menu Logic
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('mobile-menu-icon');

            if (btn && menu && icon) {
                btn.addEventListener('click', () => {
                    const isOpen = !menu.classList.contains('translate-x-full');
                    if (isOpen) {
                        menu.classList.add('translate-x-full');
                        document.body.classList.remove('overflow-hidden');
                        icon.setAttribute('icon', 'solar:hamburger-menu-linear');

                        // Reset dropdowns when closing
                        document.querySelectorAll('.mobile-dropdown-btn').forEach(dBtn => {
                            const targetId = dBtn.getAttribute('data-target');
                            const targetMenu = document.getElementById(targetId);
                            const icon = dBtn.querySelector('.dropdown-icon');
                            if (targetMenu) {
                                targetMenu.classList.add('hidden');
                                targetMenu.classList.remove('flex');
                                if (icon) icon.classList.remove('rotate-180');
                            }
                        });
                    } else {
                        menu.classList.remove('translate-x-full');
                        document.body.classList.add('overflow-hidden');
                        icon.setAttribute('icon', 'solar:close-circle-linear');
                    }
                });
            }

            // Mobile Dropdown Accordion Logic
            const dropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
            dropdownBtns.forEach(dBtn => {
                dBtn.addEventListener('click', (e) => {
                    const targetId = dBtn.getAttribute('data-target');
                    const targetMenu = document.getElementById(targetId);
                    const icon = dBtn.querySelector('.dropdown-icon');

                    if (targetMenu) {
                        const isHidden = targetMenu.classList.contains('hidden');

                        // Close other open dropdowns (optional, uncomment if you want exclusive accordions)
                        // dropdownBtns.forEach(otherBtn => {
                        //     if(otherBtn !== dBtn) {
                        //         const otherTarget = document.getElementById(otherBtn.getAttribute('data-target'));
                        //         const otherIcon = otherBtn.querySelector('.dropdown-icon');
                        //         if(otherTarget) {
                        //             otherTarget.classList.add('hidden');
                        //             otherTarget.classList.remove('flex');
                        //             if(otherIcon) otherIcon.classList.remove('rotate-180');
                        //         }
                        //     }
                        // });

                        if (isHidden) {
                            targetMenu.classList.remove('hidden');
                            targetMenu.classList.add('flex');
                            if (icon) icon.classList.add('rotate-180');
                        } else {
                            targetMenu.classList.add('hidden');
                            targetMenu.classList.remove('flex');
                            if (icon) icon.classList.remove('rotate-180');
                        }
                    }
                });
            });
        });
    </script>
    @stack('scripts')
</body>

</html>