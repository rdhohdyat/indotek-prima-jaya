@extends('layouts.app')

@section('title', __('Page Not Found') . ' - PT. Indotek Prima Jaya')

@section('content')
    <section class="relative pt-32 pb-40 lg:pt-48 lg:pb-56 overflow-hidden bg-slate-50 min-h-[70vh] flex items-center justify-center">
        <!-- Background Ambient Glow -->
        <div class="absolute inset-0 pointer-events-none z-0">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-sky-100 rounded-full blur-[120px] opacity-60"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="space-y-8" data-aos="fade-up">
                
                <!-- 404 Number -->
                <h1 class="text-[120px] lg:text-[200px] font-black text-transparent bg-clip-text bg-linear-to-b from-slate-900 to-slate-400 leading-none tracking-tighter drop-shadow-sm">
                    404
                </h1>

                <!-- Error Message -->
                <div class="space-y-4">
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight uppercase">
                        {{ __('Page Not Found') }}
                    </h2>
                    <p class="text-slate-500 font-medium text-lg max-w-xl mx-auto">
                        {{ __('Oops! The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.') }}
                    </p>
                </div>

                <!-- Call to Action -->
                <div class="pt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('home') }}" class="group inline-flex items-center gap-3 bg-sky-600 hover:bg-sky-700 text-white px-8 py-4 rounded-xl font-bold text-[14px] transition-all shadow-xl shadow-sky-600/20">
                        <iconify-icon icon="solar:home-smile-bold-duotone" class="text-xl"></iconify-icon>
                        {{ __('Back to Homepage') }}
                    </a>
                    <a href="{{ route('contact') }}" class="group inline-flex items-center gap-3 bg-white hover:bg-slate-50 text-slate-600 border border-slate-200 px-8 py-4 rounded-xl font-bold text-[14px] transition-all shadow-sm">
                        <iconify-icon icon="solar:letter-linear" class="text-xl"></iconify-icon>
                        {{ __('Contact Support') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
