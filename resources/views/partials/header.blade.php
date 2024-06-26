<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laraville</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <nav x-data="{ isOpen: false }" class="bg-grey-100 px-5 py-5 sticky top-0 z-50 ">
        <div class="px-10 border mx-auto rounded-full bg-white">
            <div class="flex justify-between">
                <!-- logo -->
                <div>
                    <a href="#" class="flex items-center py-5 px-2 text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                        </svg>
                        <span class="font-semibold">Laraville</span>
                    </a>
                </div>
                <!-- Primary Navigation -->
                <div class="hidden md:flex items-center space-x-1 uppercase">
                    <a class="py-5 px-2 text-inherit hover:text-gray-900 " href="#">Services</a>
                    <a class="py-5 px-2 text-inherit hover:text-gray-900" href="#">Projects</a>
                    <a class="py-5 px-2 text-inherit hover:text-gray-900" href="#">About</a>
                    <a class="py-5 px-2 text-inherit hover:text-gray-900" href="#">Insights</a>
                </div>
                <!-- Secondary Navigation -->
                <div class="hidden md:flex items-center space-x-1 uppercase">
                    <a class="py-2 px-3 bg-blue-700 hover:text-blue-100 text-blue-200 transition duration-300 rounded-full shadow"
                        href="#">get in touch</a>
                </div>
                <!-- Mobile Menu -->
                <div class="md:hidden flex items-center ">
                    <button @click="isOpen = !isOpen" class="mobile-menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div x-show="isOpen" class="mobile-menu md:hidden uppercase bg-white gap-2 rounded-2xl border my-3 py-2 text-center">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Services</a>
            <hr class="h-px my-2 bg-black">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Projects</a>
            <hr class="h-px my-2 bg-black">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">About</a>
            <hr class="h-px my-2 bg-black">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Insights</a>
            <hr class="h-px my-2 bg-black">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">GEt in touCh</a>
        </div>
    </nav>
</head>

<body>
    