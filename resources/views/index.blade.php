<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Chennai Community</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'laravel-red': '#e63946',
                        'laravel-orange': '#ff6b35',
                        'laravel-dark': '#3d0a49',
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-white py-4 px-6 md:px-12 flex justify-between items-center shadow-sm">
        <div class="logo flex items-center">
            <div class="bg-amber-100 rounded-md px-2 py-1">
                <img src="{{ asset('laravel_chennai_logo.png') }}" class="w-22 h-10" alt="">
            </div>
        </div>
        <nav class="hidden md:flex items-center space-x-8">
            <a href="#" class="text-gray-800 hover:text-laravel-red">Home</a>
            <a href="#" class="text-gray-800 hover:text-laravel-red">About Us</a>
            <a href="#" class="text-gray-800 hover:text-laravel-red">Events</a>
            <button class="bg-laravel-red text-white px-4 py-2 rounded-full hover:bg-red-700 transition">Support Us</button>
        </nav>
        <button class="md:hidden text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </header>

    <!-- Hero Section -->
    <section class="bg-laravel-red text-white min-h-screen flex items-center px-4 sm:px-6 md:px-12 relative overflow-hidden">
        <!-- Gradient Dark Shade at Bottom -->
        <!-- <div class="absolute bottom-0 left-0 w-full h-36 sm:h-44 bg-gradient-to-t from-black/40 to-transparent"></div> -->
        <img src="{{ asset('assets/landing-page/bg.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-25" alt="">
        
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="z-10 mb-8 sm:mb-10 md:mb-0 p-4 sm:p-6 md:p-10 text-center md:text-left">
                <h2 class="text-lg sm:text-xl md:text-2xl mb-2 sm:mb-3 text-gray-100">
                    வணக்கம், உலகம்! 👋
                </h2>
                <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold mb-4 sm:mb-6 leading-tight text-white">
                    laravel<br />
                    <span class="block text-6xl sm:text-7xl md:text-8xl">சென்னை</span>
                    <span class="text-amber-300 block sm:inline sm:ml-6 md:ml-20">
                        community
                    </span>
                </h1>
                <button class="bg-white text-laravel-red px-4 sm:px-6 py-2 sm:py-3 rounded-full font-medium 
                            hover:bg-gray-100 hover:text-red-700 hover:shadow-lg 
                            transition transform hover:scale-105 hover:-rotate-1 shadow-md">
                    Join the community
                </button>
                <p class="mt-3 p-2 sm:mt-4 text-xs sm:text-sm text-gray-300">
                    Become a part of our community!
                </p>
            </div> 
            
            <div class="w-full md:w-1/2 flex justify-center relative">
                <img src="{{ asset('assets/landing-page/home-bg.png') }}" 
                     alt="Chennai Building Illustration" 
                     class="w-60 sm:w-72 md:w-96 h-auto object-contain z-10">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 px-6 md:px-12 pb-16">
        <div class="pb-4 container mx-auto text-center max-w-3xl bg-white">
            <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
            <p class="text-gray-700 mb-6">
                We strive to create an inclusive environment within our industry, empowering underrepresented individuals to thrive and connect.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-0 mb-8">
            <!-- Card 1 -->
            <div class="bg-orange-400 text-white p-6 rounded-md flex flex-col items-center text-center pb-4 mb-4 md:mb-0 lg:transform lg:scale-90 lg:relative lg:z-0 lg:-mr-6">
                <div class="mb-4">
                    <img src="{{ asset('assets/landing-page/features/icon-1.png') }}" alt="Connecting & Engaging" class="h-36 w-36" />
                </div>
                <h2 class="text-xl font-bold mb-2">Connecting & Engaging</h2>
                <p class="text-sm mb-6">
                    We help connect individuals with others in their local communities, establishing strong collaborative networks.
                </p>
                <div class="mt-auto">
                    <div class="h-8 w-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
    
            <!-- Card 2 -->
            <div class="bg-red-500 text-white shadow-lg p-6 rounded-md flex flex-col items-center text-center pb-4 mb-4 md:mb-0 lg:transform lg:scale-105 lg:relative lg:z-10 lg:shadow-mdxl">
                <div class="mb-4">
                    <img src="{{ asset('assets/landing-page/features/icon-2.png') }}" alt="Elevating Our Community" class="h-36 w-36" />
                </div>
                <h2 class="text-xl font-bold mb-2">Elevating Our Community</h2>
                <p class="text-sm mb-6">
                    We provide resources to help individuals and teams in their local communities, transforming visions into achievements.
                </p>
                <div class="mt-auto">
                    <div class="h-8 w-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-orange-400 text-white p-6 rounded-md flex flex-col items-center text-center mb-4 md:mb-0 lg:transform lg:scale-90 lg:relative lg:z-0 lg:-ml-6">
                <div class="mb-4">
                    <img src="{{ asset('assets/landing-page/features/icon-3.png') }}" alt="Resource Sharing" class="h-36 w-36" />
                </div>
                <h2 class="text-xl font-bold mb-2">Resource Sharing</h2>
                <p class="text-sm mb-6">
                    We provide access to valuable tools and resources, enabling our community to expand their knowledge and professional skills.
                </p>
                <div class="mt-auto">
                    <div class="h-8 w-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="pt-20 pb-12 lg:py-20 dark:bg-dark">
        <link rel="icon" href="/path/to/favicon.ico">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
                        <span class="text-red-500 mb-2 block text-lg font-semibold">
                            <i class="fas fa-cogs mr-2 text-4xl"></i>
                        </span>
                        <h2 class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                            Tech Empowerment
                        </h2>
                        <p class="text-body-color text-base dark:text-dark-6">
                            Empowering aspiring and seasoned tech professionals through leadership, innovation, mentorship, and growth opportunities—fueling the future of technology.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-md hover:shadow-lg text-center">
                        <div class="mb-4 text-red-500 text-6xl">
                            <i class="fas fa-bug"></i>
                        </div>
                        <h4 class="text-dark dark:text-white mb-4 text-2xl font-semibold">
                            Kapathunga Gurunatha
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Stuck on an unsolvable bug? Get guidance from seasoned Laravel experts to debug with confidence.
                        </p>
                    </div>
                </div>
    
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-md hover:shadow-lg text-center">
                        <div class="mb-4 text-red-500 text-6xl">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4 class="text-dark dark:text-white mb-4 text-2xl font-semibold">
                            Fractional CTO
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Access tech leadership without full-time commitment. Strategic guidance for startups.
                        </p>
                    </div>
                </div>
    
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-md hover:shadow-lg text-center">
                        <div class="mb-4 text-red-500 text-6xl">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <h4 class="text-dark dark:text-white mb-4 text-2xl font-semibold">
                            Konjam Coffee Neraya Laravel
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Casual coffee chats and deep Laravel discussions. Build connections over caffeine and code.
                        </p>
                    </div>
                </div>
    
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-md hover:shadow-lg text-center">
                        <div class="mb-4 text-red-500 text-6xl">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h4 class="text-dark dark:text-white mb-4 text-2xl font-semibold">
                            Hackathon
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Showcase your Laravel skills. Collaborate, build, and compete with the best minds.
                        </p>
                    </div>
                </div>
    
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-md hover:shadow-lg text-center">
                        <div class="mb-4 text-red-500 text-6xl">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h4 class="text-dark dark:text-white mb-4 text-2xl font-semibold">
                            Master Class
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Hands-on sessions by Laravel experts. Learn advanced concepts and real-world applications.
                        </p>
                    </div>
                </div>
    
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-9 rounded-[20px] bg-white dark:bg-dark-2 p-10 shadow-md hover:shadow-lg text-center">
                        <div class="mb-4 text-red-500 text-6xl">
                            <i class="fas fa-briefcase-medical"></i>
                        </div>
                        <h4 class="text-dark dark:text-white mb-4 text-2xl font-semibold">
                            Internship Opportunities
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Kickstart your Laravel career with real-world experience and exciting projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 sm:py-16 bg-gray-50 lg:py-20 dark:bg-gray-800 border-t border-b border-gray-100 dark:border-gray-700">
        <div class="px-4 mx-auto max-w-8xl">
            <h2 class="mb-4 text-2xl md:text-4xl font-bold tracking-tight text-red-600 md:font-extrabold lg:leading-none dark:text-red-500 md:text-center lg:mb-7">
                Sign up for our newsletter
            </h2>
            <p class="mb-4 text-base text-gray-500 md:mb-6 dark:text-gray-400 md:text-center md:text-xl lg:px-20 xl:px-56">
                Do you want to get notified when a new component is added to Flowbite? Sign up for our newsletter and you will be among the first to find out about new features, components, versions, and tools.
            </p>
            <div class="mb-4">
                <form action="https://app.convertkit.com/forms/4692392/subscriptions" class="seva-form formkit-form flex max-w-xl md:mx-auto" method="post">
                    <div class="w-full" data-style="clean">
                        <label for="member_email" class="hidden">Email address</label>
                        <div class="relative h-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"></path>
                                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"></path>
                                </svg>
                            </div>
                            <input type="email" id="member_email" name="email_address" class="block w-full px-3 py-4 pl-11 text-base text-gray-900 bg-white border border-gray-200 rounded-l-xl focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder:text-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div>
                        <input type="submit" id="member_submit" class="w-full px-4 py-4 text-base font-medium text-center text-gray-900 bg-amber-300 border border-amber-400 cursor-pointer rounded-r-xl hover:bg-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-amber-500 dark:bg-amber-400 dark:border-amber-500 dark:hover:bg-amber-500 dark:focus:ring-amber-600" value="Subscribe">
                    </div>
                </form>
            </div>
            <p class="text-sm text-gray-500 md:text-center dark:text-gray-400 font-normal">
                By subscribing, you agree with ConvertKit's 
                <a rel="nofollow noopener noreferrer" class="text-red-600 dark:text-red-400 hover:underline" href="https://convertkit.com/terms">Terms of Service</a> 
                and 
                <a class="text-red-600 dark:text-red-400 hover:underline" rel="nofollow noopener noreferrer" href="https://convertkit.com/privacy">Privacy Policy</a>.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-12 pb-6">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <!-- Logo -->
                <div>
                    <div class="bg-amber-100 rounded-md px-2 py-1">
                        <img src="{{ asset('laravel_chennai_logo.png') }}" class="w-22 h-10" alt="">
                    </div>
                </div>

                <!-- Essentials -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Essentials</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-laravel-orange transition">Home</a></li>
                        <li><a href="#" class="hover:text-laravel-orange transition">About Us</a></li>
                        <li><a href="#" class="hover:text-laravel-orange transition">Events</a></li>
                        <li><a href="#" class="hover:text-laravel-orange transition">Community</a></li>
                    </ul>
                </div>

                <!-- Support Us -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Support Us</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-laravel-orange transition">Donate Now</a></li>
                        <li><a href="#" class="hover:text-laravel-orange transition">Become a Sponsor</a></li>
                        <li><a href="#" class="hover:text-laravel-orange transition">Volunteer Opportunities</a></li>
                        <li><a href="#" class="hover:text-laravel-orange transition">Community Events</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-laravel-orange transition">Join Our Discord</a></li>
                        <li><a href="#" class="hover:text-laravel-orange transition">Blog</a></li>
                        <li><a href="#" class="hover:text-laravel-orange transition">Tutorials</a></li>
                        <li><a href="#" class="hover:text-laravel-orange transition">Videos</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="border-t border-gray-700 pt-8 pb-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-6 md:mb-0">
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+91 98 765 43210</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>info@laravelchennai.com</span>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-laravel-orange transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-laravel-orange transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.054 10.054 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-laravel-orange transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-laravel-orange transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 pt-6 text-sm text-center text-gray-400 flex flex-col md:flex-row justify-center items-center space-y-2 md:space-y-0 md:space-x-4">
                <p>© 2023 Laravel Chennai. All rights reserved.</p>
                <a href="#" class="hover:text-white">Privacy Policy</a>
                <span>|</span>
                <a href="#" class="hover:text-white">Terms of Service</a>
                <span>|</span>
                <a href="#" class="hover:text-white">Cookie Settings</a>
            </div>
        </div>
    </footer>
</body>
</html>