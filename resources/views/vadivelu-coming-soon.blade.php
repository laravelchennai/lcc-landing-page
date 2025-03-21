<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        .bg-noise {
            background: url("{{ asset('noise.png') }}") 323px repeat;

        }
    </style>
</head>

<body class="bg-noise">
<div class="relative h-screen overflow-hidden bg-gradient-to-b from-gray-100 via-white to-white">
    <!-- Header -->
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-center p-8">
            <a href="#" class="block">
                <img class="h-16 w-auto mx-auto" src="{{ asset('laravel_chennai_logo.png') }}"
                     alt="Laravel Chennai Logo">
            </a>
        </nav>
    </header>

    <!-- Background Image -->
    <div class="absolute inset-x-0 bottom-0 opacity-[0.3] pointer-events-none fixed">
        <img src="{{ asset('Group.svg') }}" alt="Background Image" class="w-full object-bottom object-cover">
    </div>

    <!-- Main Content -->
    <div class="relative isolate px-6 lg:px-8">
        <!-- Decorative Blur Effect -->
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
             aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#FBD72B] to-[#F9484A] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        <div class="mx-auto max-w-2xl py-56 sm:py-48 lg:py-52 text-center">
            <!-- Logo -->
            <div class="mt-8">
                <a href="#" class="block">
                    <img class="h-40 sm:h-48 lg:h-64     w-auto mx-auto rounded-xl" src="{{ asset('assets/coming-soon-cover.jpeg') }}"
                         alt="Laravel Chennai Logo">
                </a>
            </div>
            <!-- Coming Soon Text -->
            <p class="mt-8 text-lg sm:text-xl lg:text-2xl font-medium text-gray-500">
                Thambi, page innum ready aagala! Konjam wait pannunga... poitu apram vaanga!!!
            </p>

            <!-- GitHub Community Link -->
            <div class="mt-8 mx-auto text-center">
                <a href="/">
                    <div class="border border-1 border-gray-300 p-3 rounded-full w-28 mx-auto text-gray-500 text-sm">
                        <div class="flex items-center align-middle justify-center">
                            <div>
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                            </div>
                            <div>
                                <span class="ml-2">Home</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Decorative Blur Effect at Bottom -->
{{--     <div class="absolute inset-x-0 top-[calc(100%-13rem)] transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"--}}
{{--        aria-hidden="true">--}}
{{--        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#FE5858] to-[#EE9617] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"--}}
{{--            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">--}}
{{--        </div>--}}
{{--    </div>--}}
</div>


</body>
</html>
