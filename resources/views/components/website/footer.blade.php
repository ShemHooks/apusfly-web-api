<footer class="bg-charcoal px-6 py-12 text-white">
    <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-3">
        <div>

            <a href="{{ route('home') }}" class="inline-flex items-center gap-3">
                <img src="{{ asset('photos/logo.png') }}" alt="ApusFly Logo" class="h-14 w-14 object-contain" />

                <span class="text-2xl font-bold">
                    Apus<span class="text-primary">Fly</span>
                </span>
            </a>

            <p class="mt-4 max-w-sm text-sm leading-7 text-gray-400">
                Connecting people and businesses with professional
                drone services through one accessible platform.
            </p>
        </div>

        <div>
            <h3 class="font-semibold">Explore</h3>
            <div class="mt-4 flex flex-col gap-3 text-sm text-gray-400">
                <a href="{{ route('home') }}">Home</a>
                <a href="#services">Our Services</a>
                <a href="#about">About Us</a>
                <a href="#how-it-works">How It Works</a>
            </div>
        </div>

        <div>
            <h3 class="font-semibold">Connect</h3>
            <p class="mt-4 text-sm text-gray-400">
                Contact information coming soon.
            </p>
        </div>
    </div>

    <div class="mx-auto mt-12 max-w-7xl border-t border-white/10 pt-6 text-center text-xs text-gray-500">
        © {{ date('Y') }} ApusFly. All rights reserved.
    </div>
</footer>