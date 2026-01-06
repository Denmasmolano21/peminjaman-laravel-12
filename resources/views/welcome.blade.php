@extends('layouts.app')

@section('title', 'Peminjaman Laravel 12')

@section('content')
<!-- Hero Section -->
<section class="flex-1 flex flex-col justify-center py-20 lg:py-32 container mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Left Content -->
        <div class="space-y-8 animate-in slide-in-from-left-5 duration-700 fade-in">
            <!-- Badge -->
            <diva
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Selamat datang
            </diva>

            <!-- Heading -->
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-foreground leading-tight">
                Website Peminjaman <br />
                <span class="text-primary">Laravel 12</span>
            </h1>

            <!-- Description -->
            <p class="text-lg text-muted-foreground max-w-xl leading-relaxed">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat esse nam ex quidem, aliquam rem quaerat
                maxime deserunt numquam laudantium omnis atque voluptates sapiente fugit expedita distinctio veniam enim
                reprehenderit!
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <a href="#"
                    class="inline-flex items-center justify-center h-12 px-8 text-base rounded-md bg-primary text-primary-foreground hover:bg-primary/90 transition-colors">
                    Mulai
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="ml-2">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Features -->
            <div class="pt-8 flex items-center gap-8 text-sm text-muted-foreground flex-wrap">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-primary">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                    <span>Instant Approval</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-primary">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                    <span>Real-time Tracking</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-primary">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                    <span>Secure System</span>
                </div>
            </div>
        </div>

        <!-- Right Image -->
        <div class="relative animate-in slide-in-from-right-5 duration-1000 fade-in">
            <div class="absolute inset-0 bg-linear-to-tr from-primary/20 to-transparent rounded-3xl blur-3xl -z-10">
            </div>
            <div class="border-0 overflow-hidden">
                <div class="p-0">
                    <img src="{{ asset('assets/images/library_illustration.png') }}" alt="University Library"
                        class="w-150 h-auto object-cover rounded-lg" />
                </div>
            </div>
        </div>
    </div>
</section>
@endsection