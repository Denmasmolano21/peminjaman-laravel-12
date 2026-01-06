<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>

    <main>
        @yield('content')
    </main>

    @stack('scripts')
</body>

</html>