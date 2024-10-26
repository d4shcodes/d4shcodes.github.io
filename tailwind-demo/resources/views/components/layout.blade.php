<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth focus:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MobaLite - App</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <nav class="block" id="hero">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Moba<span
                        class="text-primary_color">Lite</span></span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#hero"
                            class="block py-2 px-3 text-white bg-primary_color rounded md:bg-transparent md:text-primary_color md:p-0 md:dark:text-primary_color dark:bg-primary_color md:dark:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#insights" class="link-style">Insights</a>
                    </li>
                    <li>
                        <a href="#pricing" class="link-style">Pricing</a>
                    </li>
                    <li>
                        <a href="#contact_us" class="link-style">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @include('blog.hero')

    @include('blog.insights')

    @include('blog.pricing')

    @include('blog.contact-us')

    <footer class="block bg-primary_color">
        <div class="py-12 md:py-8 mx-auto w-full max-w-7xl px-5 md:px-10">
            <div class="flex-col flex items-center">

                <div class="text-center font-semibold">
                    <a href="#hero" class="footer-link"> Home</a>
                    <a href="#insights" class="footer-link"> Insights </a>
                    <a href="#pricing" class="footer-link"> Pricing</a>
                    <a href="#contact_us" class="footer-link"> Contact </a>
                </div>
                <div class="mb-8 mt-8 border-b border-gray-300 w-48"></div>

                <p class="text-sm sm:text-base text-white"> © Copyright 2021. All rights reserved. </p>
            </div>
        </div>
    </footer>

</body>

</html>
