@extends('layouts.guest')

@section('title', 'Peminjaman Laravel 12')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-muted/30 p-4">
    <div class="w-full max-w-md border border-gray-200 rounded-lg shadow-xl bg-white border-t-4 border-t-primary">
        <!-- Card Header -->
        <div class="text-center space-y-4 pb-8 pt-6 px-6">
            <div class="mx-auto w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-primary">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                    <path d="M6 12v5c3 3 9 3 12 0v-5" />
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-serif font-semibold text-gray-900">Welcome Back</h2>
                <p class="text-sm text-gray-500 mt-1">Sign in to access the borrowing system</p>
            </div>
        </div>

        <!-- Card Content -->
        <div class="px-6 pb-6">
            <form method="POST" action="#" class="space-y-6">
                @csrf

                <!-- Email or NIM Field -->
                <div class="space-y-2">
                    <label for="identifier" class="text-sm font-medium text-gray-700 block">
                        Email or NIM
                    </label>
                    <input type="text" id="identifier" name="identifier" placeholder="12345678"
                        value="{{ old('identifier') }}" @class([ 'flex h-11 w-full rounded-md border bg-white px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent disabled:cursor-not-allowed disabled:opacity-50' , 'border-gray-300'=>
                    !$errors->has('identifier'),
                    'border-red-500' => $errors->has('identifier'),
                    ])
                    required
                    />
                    @error('identifier')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="space-y-2">
                    <label for="password" class="text-sm font-medium text-gray-700 block">
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="••••••••" @class([ 'flex h-11 w-full rounded-md border bg-white px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent disabled:cursor-not-allowed disabled:opacity-50' , 'border-gray-300'=> !$errors->has('password'),
                    'border-red-500' => $errors->has('password'),
                    ])
                    required
                    />

                    @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full h-11 text-base inline-flex items-center justify-center rounded-md bg-primary text-white font-medium hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed transition-colors">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</div>
@endsection