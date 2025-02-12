<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        .bg-noise {
            background: url("{{ asset('noise.png') }}") 500px repeat;

        }
    </style>
    @yield('css')
    @routes
</head>

<body class="bg-noise">
@include('layouts.partials.navbar')
@yield('content')

@include('layouts.partials.footer')
@yield('js')
</body>
</html>
