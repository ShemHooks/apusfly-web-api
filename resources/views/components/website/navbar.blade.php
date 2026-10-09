<header class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">


        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('photos/logo.png') }}" alt="ApusFly Logo" class="h-12 w-12 object-contain" />

            <span class="text-2xl font-extrabold tracking-tight">
                Apus<span class="text-primary-dark">Fly</span>
            </span>
        </a>


        <div class="hidden items-center gap-8 md:flex">
            <a href="{{ route('home') }}" class="text-sm font-medium hover:text-primary-dark">
                Home
            </a>
            <a href="{{ route('home') }}#services" class="text-sm font-medium hover:text-primary-dark">
                Services
            </a>
            <a href="{{ route('about') }}" class="text-sm font-medium hover:text-primary-dark">
                About Us
            </a>
            <a href="{{ route('home') }}#how-it-works" class="text-sm font-medium hover:text-primary-dark">
                How It Works
            </a>
            <a href="{{ route('contact') }}" class="transition hover:text-primary-dark">
                Contact Us
            </a>
        </div>

        <a href="#download"
            class="hidden rounded-xl bg-primary px-5 py-3 text-sm font-bold text-charcoal transition hover:bg-primary-dark md:inline-flex">
            Get the App
        </a>

        <button type="button" class="rounded-lg p-2 md:hidden" aria-label="Open navigation menu" aria-expanded="false"
            aria-controls="mobile-navigation" onclick="
                const menu = document.getElementById('mobile-navigation');
                const isOpen = !menu.classList.contains('hidden');
                menu.classList.toggle('hidden');
                this.setAttribute('aria-expanded', String(!isOpen));
            ">
            ☰
        </button>
    </nav>

    <div id="mobile-navigation" class="hidden border-t border-gray-100 px-6 py-4 md:hidden">
        <div class="flex flex-col gap-4">
            <a href="{{ route('home') }}">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About Us</a>
            <a href="#how-it-works">How It Works</a>
            <a href="#download">Get the App</a>
        </div>
    </div>
</header>