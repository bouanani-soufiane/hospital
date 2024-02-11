<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body>
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-blueGray-800">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start ">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="/">Mediconnect</a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden bg-blueGray-800" id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/profile') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white   ">profile</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white   ">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white   ">Register</a>
                                @endif
                            @endauth
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!-- component -->
            <main >
                <section class="bg-white dark:bg-gray-900 p-6">

                    <div class="container mx-auto px-6 py-16 text-center">
                        <div class="mx-auto sm:max-w-xl">
                            <h1 class="text-3xl font-bold text-gray-800 dark:text-white lg:text-4xl">Discover excellence in healthcare with Mediconnect </h1>
                            <p class="mt-6 mb-6 text-gray-500 dark:text-gray-300">connecting you to the finest doctors and providing swift and convenient appointment scheduling</p>
                            <a href="{{ route('register') }}" class="mt-6 rounded-lg bg-blue-600 px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 text-white hover:bg-blue-500 focus:outline-none lg:mx-0 lg:w-auto">Start By Creating Accout</a>
                        </div>

                        <div class="mt-10 flex justify-center">
                            <img class="h-96 w-full rounded-xl object-cover lg:w-4/5" src="https://img.freepik.com/free-psd/interior-modern-emergency-room-with-empty-nurses-station-generative-ai_587448-2137.jpg?w=996&t=st=1707503082~exp=1707503682~hmac=e1ce1374cfa7c56ed4bd98d6738115e7780566c33a059ee35bcd726c68a9a671" />
                        </div>
                    </div>
                </section>


                <footer class="bg-white dark:bg-gray-900">
                    <div class="container mx-auto px-6 py-12">


                        <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />

                        <div class="flex flex-col items-center justify-between sm:flex-row">
                            <a href="#" class="text-2xl font-bold text-gray-800 transition-colors duration-300 hover:text-gray-700 dark:text-white dark:hover:text-gray-300">Mediconnect</a>

                            <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">© CodeX.</p>
                        </div>
                    </div>
                </footer>
            </main>
    </body>
</html>
