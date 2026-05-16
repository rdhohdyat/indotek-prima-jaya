@extends('layouts.app')

@section('title', __('Privacy Policy') . ' - PT. Indotek Prima Jaya')

@section('content')
    <section class="relative pt-20 pb-28 lg:pt-32 lg:pb-40 overflow-hidden bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="space-y-8" data-aos="fade-up">
                <div class="space-y-3 text-center">
                    <span class="text-sky-600 font-bold tracking-[0.2em] text-[12px] uppercase block">
                        {{ __('LEGAL') }}
                    </span>
                    <h1 class="text-[36px] lg:text-[56px] font-extrabold text-slate-900 leading-[1.05] tracking-tight uppercase">
                        {{ __('Privacy Policy') }}
                    </h1>
                </div>

                <div class="bg-white p-8 lg:p-12 rounded-3xl shadow-xl shadow-slate-200/50 space-y-8 text-slate-600 leading-relaxed font-medium">
                    <p>{{ __('At PT. Indotek Prima Jaya, accessible from our website, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by PT. Indotek Prima Jaya and how we use it.') }}</p>

                    <h2 class="text-2xl font-black text-slate-900">{{ __('Information We Collect') }}</h2>
                    <p>{{ __('We collect information to provide better services to our users. The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.') }}</p>
                    <p>{{ __('If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.') }}</p>

                    <h2 class="text-2xl font-black text-slate-900">{{ __('How We Use Your Information') }}</h2>
                    <p>{{ __('We use the information we collect in various ways, including to:') }}</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>{{ __('Provide, operate, and maintain our website') }}</li>
                        <li>{{ __('Improve, personalize, and expand our website') }}</li>
                        <li>{{ __('Understand and analyze how you use our website') }}</li>
                        <li>{{ __('Develop new products, services, features, and functionality') }}</li>
                        <li>{{ __('Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes') }}</li>
                        <li>{{ __('Send you emails') }}</li>
                        <li>{{ __('Find and prevent fraud') }}</li>
                    </ul>

                    <h2 class="text-2xl font-black text-slate-900">{{ __('Log Files') }}</h2>
                    <p>{{ __('PT. Indotek Prima Jaya follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks.') }}</p>

                    <h2 class="text-2xl font-black text-slate-900">{{ __('Cookies and Web Beacons') }}</h2>
                    <p>{{ __('Like any other website, PT. Indotek Prima Jaya uses "cookies". These cookies are used to store information including visitors\' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users\' experience by customizing our web page content based on visitors\' browser type and/or other information.') }}</p>

                    <h2 class="text-2xl font-black text-slate-900">{{ __('Contact Us') }}</h2>
                    <p>{{ __('If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
