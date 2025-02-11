<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.1.2/dist/typography.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        .bg-noise {
            background: url("{{ asset('noise.png') }}") 323px repeat;

        }
    </style>
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    @yield('css')
    @routes
</head>

<body class="bg-noise">
<div class="prose">
    {!!  Str::markdown($markdown) !!}
</div>

</body>
</html>
