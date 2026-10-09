@extends('layouts.portal-auth')

@section('title', 'Sign In | ApusFly Web Portal')

@section('content')
    <div class="flex min-h-screen">

        {{-- LEFT BRAND PANEL --}}
        <section
            class="relative hidden w-1/2 flex-col justify-between overflow-hidden bg-charcoal p-12 text-white lg:flex xl:p-16">

            <div class="pointer-events-none absolute -left-24 bottom-0 h-96 w-96 rounded-full bg-primary/10 blur-3xl"></div>
            <div class="pointer-events-none absolute -right-20 top-0 h-96 w-96 rounded-full bg-primary/15 blur-3xl"></div>

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="relative z-10 flex items-center gap-3">
                <img src="{{ asset('photos/logo.png') }}" alt="ApusFly Logo" class="h-14 w-14 object-contain">

                <span class="text-3xl font-extrabold tracking-tight">
                    Apus<span class="text-primary">Fly</span>
                </span>
            </a>

            {{-- Branding --}}
            <div class="relative z-10 max-w-lg">

                <div
                    class="mb-8 inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
                    <i data-lucide="shield-check" class="h-4 w-4"></i>
                    ApusFly Web Portal
                </div>

                <h1 class="text-4xl font-extrabold leading-tight tracking-tight xl:text-5xl">
                    Manage the skies.
                    <span class="text-primary">
                        Power the platform.
                    </span>
                </h1>

                <p class="mt-6 max-w-md text-lg leading-8 text-gray-400">
                    Your centralized workspace for managing drone
                    services, bookings, pilots, and platform operations.
                </p>

                <div class="mt-10 flex items-center gap-4 border-t border-white/10 pt-8">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10">
                        <i data-lucide="lock-keyhole" class="h-6 w-6 text-primary"></i>
                    </div>

                    <div>
                        <p class="font-semibold text-white">
                            Authorized Access
                        </p>

                        <p class="mt-1 text-sm text-gray-400">
                            For ApusFly administrators and registered service providers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative z-10 flex items-center justify-between border-t border-white/10 pt-6">
                <span class="text-sm text-gray-500">
                    © {{ date('Y') }} ApusFly
                </span>

                <span class="text-sm font-medium text-primary">
                    Your Vision. Our Wings.
                </span>
            </div>
        </section>

        {{-- RIGHT LOGIN PANEL --}}
        <main class="flex w-full items-center justify-center bg-white px-6 py-12 sm:px-10 lg:w-1/2 lg:px-16">

            <div class="w-full max-w-md">

                {{-- Mobile branding --}}
                <a href="{{ route('home') }}" class="mb-12 flex items-center gap-3 lg:hidden">
                    <img src="{{ asset('photos/logo.png') }}" alt="ApusFly Logo" class="h-12 w-12 object-contain">

                    <span class="text-2xl font-extrabold text-charcoal">
                        Apus<span class="text-primary-dark">Fly</span>
                    </span>
                </a>

                {{-- Heading --}}
                <div class="mb-10">

                    <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10">
                        <i data-lucide="shield-check" class="h-7 w-7 text-primary-dark"></i>
                    </div>

                    <h2 class="text-3xl font-extrabold tracking-tight text-charcoal sm:text-4xl">
                        Welcome back
                    </h2>

                    <p class="mt-3 leading-7 text-gray-500">
                        Sign in to access your ApusFly Web Portal.
                    </p>
                </div>

                {{-- LOGIN FORM --}}
                <form x-data="{ showPassword: false }" @submit.prevent class="space-y-6">

                    {{-- Email --}}
                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-charcoal">
                            Email Address
                        </label>

                        <div class="relative">
                            <i data-lucide="mail"
                                class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-gray-400"></i>

                            <input id="email" name="email" type="email" autocomplete="username"
                                placeholder="Enter your email address" maxlength="254" required
                                class="w-full rounded-xl border border-gray-300 bg-white py-3.5 pl-12 pr-4 text-sm text-charcoal outline-none transition focus:border-primary-dark focus:ring-2 focus:ring-primary/20">
                        </div>
                    </div>

                    {{-- Password --}}
                    <div>
                        <label for="password" class="mb-2 block text-sm font-semibold text-charcoal">
                            Password
                        </label>

                        <div class="relative">
                            <i data-lucide="lock-keyhole"
                                class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-gray-400"></i>

                            <input id="password" name="password" :type="showPassword ? 'text' : 'password'"
                                autocomplete="current-password" placeholder="Enter your password" required
                                class="w-full rounded-xl border border-gray-300 bg-white py-3.5 pl-12 pr-12 text-sm text-charcoal outline-none transition focus:border-primary-dark focus:ring-2 focus:ring-primary/20">

                            <button type="button" @click="showPassword = !showPassword"
                                :aria-label="showPassword ? 'Hide password' : 'Show password'"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 transition hover:text-primary-dark">
                                <i data-lucide="eye" x-show="!showPassword" class="h-5 w-5"></i>
                                <i data-lucide="eye-off" x-show="showPassword" x-cloak class="h-5 w-5"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Remember me --}}
                    <div class="flex items-center justify-between">
                        <label class="flex items-center gap-2 text-sm text-gray-600">
                            <input type="checkbox" name="remember" class="h-4 w-4 rounded border-gray-300 accent-[#75C928]">
                            Remember me
                        </label>
                    </div>

                    {{-- Development notice --}}
                    <div class="rounded-xl border border-primary/20 bg-primary/5 p-4">
                        <div class="flex items-start gap-3">
                            <i data-lucide="info" class="mt-0.5 h-5 w-5 shrink-0 text-primary-dark"></i>

                            <p class="text-sm leading-6 text-gray-600">
                                Authentication integration is currently in development.
                                Sign-in will be available once the backend service is connected.
                            </p>
                        </div>
                    </div>

                    {{-- Sign In --}}
                    <button type="submit" disabled
                        class="flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-xl bg-primary px-6 py-4 text-sm font-bold text-charcoal opacity-60">
                        <i data-lucide="log-in" class="h-5 w-5"></i>
                        Sign In — Coming Soon
                    </button>

                </form>

                {{-- Back to website --}}
                <div class="mt-10 border-t border-gray-100 pt-8 text-center">
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-gray-500 transition hover:text-primary-dark">
                        <i data-lucide="arrow-left" class="h-4 w-4"></i>
                        Back to ApusFly Website
                    </a>
                </div>

            </div>
        </main>
    </div>
@endsection