<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        .bg-noise {
                background: url("{{ asset('noise.png') }}") 323px repeat;

        }
    </style>
</head>

<body class="bg-noise">
{{-- <div class="relative h-dvh overflow- ">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-center p-6">
            <a href="#" class="block">
                <span class="sr-only">Your Company</span>
                <img class="h-22 w-auto mx-auto" src="{{ asset('laravel_chennai_logo.png') }}" alt="Laravel Chennai Logo">
            </a>
        </nav>
    </header>
    <div class="absolute inset-x-0 bottom-0 opacity-50">
        <img src="{{ asset('Group.svg') }}" alt="Background Image" class="w-full">
    </div>
   

    <div class="relative isolate px-6 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#FBD72B] to-[#F9484A] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="flex justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-semibold text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    வணக்கம்! 👋
                </div>
            </div>
            <p class="mt-8 text-lg text-center font-medium text-pretty text-gray-500 sm:text-xl/8">
                காதில் விழுந்ததும்... கண்ணில் தெரிந்ததும்...
            </p>
            <div class="text-center">
                {{-- <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Data to enrich
                    your online business</h1> 
                    <a href="#" class="block">
                        <span class="sr-only">Your Company</span>
                        <img class="h-48 w-auto mx-auto" src="{{ asset('LCC_logo_black.png') }}" alt="Laravel Chennai Logo">
                    </a>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">விரைவில் வருதுங்க! 🎉
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                        started</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#FE5858] to-[#EE9617] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
</div>

</body> --}}

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
                <!-- Welcome Text -->
                <div
                    class="relative inline-block rounded-full px-4 py-2 text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-semibold text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    வணக்கம்! 👋
                </div>
                <!-- Subtitle -->
                <p class="mt-8 text-lg sm:text-xl lg:text-2xl  font-medium text-gray-500">
                 காதில் விழுந்ததும்... கண்ணில் தெரிந்ததும்... அது மாறும் கதையாக! 🔥
                </p>
                <!-- Logo -->
                <div class="mt-8">
                    <a href="#" class="block">
                        <span class="sr-only">Your Company</span>
                        <img class="h-40 sm:h-48 w-auto mx-auto" src="{{ asset('LCC_logo_black.png') }}"
                            alt="Laravel Chennai Logo">
                    </a>
                </div>
                <!-- Coming Soon Text -->
                <p class="mt-8 text-lg sm:text-xl lg:text-2xl font-medium text-gray-500">
                    விரைவில் முழு புதிய முறையில் வருதுங்க! 🎉
                    <br>
                     ரெடியா இருங்க மக்களே!! 😎
                </p>
            </div>
        </div>
    
        <!-- Decorative Blur Effect at Bottom -->
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#FE5858] to-[#EE9617] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>


</body>
</html>