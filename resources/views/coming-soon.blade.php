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
                   <img class="h-16 w-auto mx-auto" src="{{ asset('laravel_chennai_logo.png') }}" alt="Laravel Chennai Logo">
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
                    class="relative inline-block rounded-full p-6 text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-semibold text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    வணக்கம், உலகம்! 👋
                </div>
                <!-- Subtitle -->
                <p class="mt-8 text-lg sm:text-xl lg:text-2xl  font-medium text-gray-500">
                 காதில் விழுந்ததும்... கண்ணில் தெரிந்ததும்...
                 <br> அது மாறும் கதையாக! 🔥
                </p>
                <!-- Logo -->
                <div class="mt-8">
                    <a href="#" class="block">
                        <img class="h-40 sm:h-48 w-auto mx-auto" src="{{ asset('LCC_logo_black.png') }}"
                            alt="Laravel Chennai Logo">
                    </a>
                </div>
                <!-- Coming Soon Text -->
                <p class="mt-8 text-lg sm:text-xl lg:text-2xl font-medium text-gray-500">
                    We're coming back. திரும்ப வந்துட்டோம் னு சொல்லு 🔥
                </p>

            <!-- GitHub Community Link -->
                <div class="mt-8 mx-auto text-center">
                        <a href="https://github.com/laravelchennai">
                            <div class="border border-1 border-gray-300 p-3 rounded-full w-2/3 mx-auto text-gray-500 text-sm">
                                <div class="flex items-center align-middle justify-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 30 30" fill="currentColor">
                                            <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="ml-2">github.com/laravelchennai</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
            </div>
        </div>

        <!-- Decorative Blur Effect at Bottom -->
        {{-- <div class="absolute inset-x-0 top-[calc(100%-13rem)] transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#FE5858] to-[#EE9617] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div> --}}
    </div>


</body>
</html>

