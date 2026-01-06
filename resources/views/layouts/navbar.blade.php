<nav class="border-b bg-white/80 backdrop-blur-md sticky top-0 z-50">
    <div class="container mx-auto px-4 h-16 flex items-center justify-between">
        <!-- Logo -->
        <a href="#"
            class="flex items-center gap-2 font-serif text-xl font-bold text-primary hover:opacity-90 transition-opacity">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20" />
            </svg>
            <span>Peminjaman Laravel 12</span>
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center gap-6">
            <a href="#"
                class="text-sm font-medium transition-colors hover:text-primary {{ request()->routeIs('items') ? 'text-primary' : 'text-muted-foreground' }}">
                Daftar Items
            </a>

            <!-- User Dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center rounded-full h-10 w-10 hover:bg-gray-100 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-muted-foreground">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                </button>

                <div x-show="open" @click.away="open = false" x-transition
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg border border-gray-200">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        My Dashboard
                    </a>
                    <form method="POST" action="#>
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                <polyline points="16 17 21 12 16 7" />
                                <line x1="21" x2="9" y1="12" y2="12" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Toggle -->
        <button @click="mobileOpen = !mobileOpen" class="md:hidden p-2 text-muted-foreground">
            <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="4" x2="20" y1="12" y2="12" />
                <line x1="4" x2="20" y1="6" y2="6" />
                <line x1="4" x2="20" y1="18" y2="18" />
            </svg>
            <svg x-show="mobileOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="mobileOpen" x-transition class="md:hidden border-t bg-white p-4 space-y-4">
        <a href="#" class="block text-sm font-medium text-foreground py-2">
            List Barang
        </a>
        <a href="#" class="block text-sm font-medium text-foreground py-2">
            Dashboard
        </a>
        <div class="pt-2 border-t">
            <form method="POST" action="#">
                @csrf
                <button type="submit" class="flex items-center gap-2 text-sm font-medium text-red-600 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" x2="9" y1="12" y2="12" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navbar', () => ({
            mobileOpen: false
        }))
    })
</script>
@endpush