<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Mediconnect') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <style>
        .mt-250 {
            margin-top: 250px;
        }
        .mt-50 {
            margin-top: 50px;
        }
    </style>



    <body class="font-sans text-gray-900 antialiased">
    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


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
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white   ">Dashboard</a>
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

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div class="mt-16 w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg" id="formDiv">
                {{ $slot }}
            </div>
        </div>
    <script>
        function toggleSpecialties() {
            var role = document.querySelector('input[name="role"]:checked').value;
            var specialties = document.getElementById('specialties');

            if (role === 'doctor') {
                specialties.classList.remove('hidden');
            } else {
                specialties.classList.add('hidden');
            }
            var formDiv = document.getElementById('formDiv');
            formDiv.classList.toggle('mt-50');

        }
        function toggleBirthday() {
            var role = document.querySelector('input[name="role"]:checked').value;
            var birthday = document.getElementById('birthday');

            if (role === 'patient') {
                birthday.classList.remove('hidden');
            } else {
                birthday.classList.add('hidden');
            }
            var formDiv = document.getElementById('formDiv');
            formDiv.style.marginTop = '100px';
            formDiv.style.marginBottom = '100px';
        }
        // Call toggleBirthday function when role selection changes
        document.querySelectorAll('input[name="role"]').forEach(function (radio) {
            radio.addEventListener('change', toggleBirthday);
        });
        document.querySelectorAll('input[name="role"]').forEach(function (radio) {
            radio.addEventListener('change', toggleSpecialties);
        });
        document.querySelectorAll('input[name="role"]').forEach(function (radio) {
            radio.addEventListener('change', function() {
                toggleBirthday();
                toggleSpecialties();
            });
        });
    </script>
    </body>

</html>
