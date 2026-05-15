<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <img class="h-10 w-auto object-contain" src="{{ asset('assets/logo.webp') }}" alt="PT. Indotek Prima Jaya Logo" onerror="this.src='https://placehold.co/150x40?text=Logo'">
                    <span class="font-bold text-xl text-slate-800 tracking-tight">PT. INDOTEK PRIMA JAYA</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="{{ url('/') }}" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">Home</a>
                <a href="#" class="text-slate-600 hover:text-blue-600 font-medium transition">About</a>
                
                <!-- Products Dropdown -->
                <div class="relative group">
                    <button class="flex items-center text-slate-600 hover:text-blue-600 font-medium transition">
                        Products
                        <svg class="w-4 h-4 ml-1 text-slate-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <!-- Dropdown Menu placeholder -->
                    <div class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md overflow-hidden hidden group-hover:block border border-slate-100">
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-blue-600">Measuring Instruments</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-blue-600">Electrical</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-blue-600">Valve Control & Manual</a>
                    </div>
                </div>

                <!-- Service Dropdown -->
                <div class="relative group">
                    <button class="flex items-center text-slate-600 hover:text-blue-600 font-medium transition">
                        Service
                        <svg class="w-4 h-4 ml-1 text-slate-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                </div>

                <a href="#" class="text-slate-600 hover:text-blue-600 font-medium transition">Contact Us</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2.5 rounded-md font-medium transition flex items-center gap-2 shadow-sm">
                    Get a Quote
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden items-center">
                <button type="button" class="text-slate-500 hover:text-slate-600 p-2">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
