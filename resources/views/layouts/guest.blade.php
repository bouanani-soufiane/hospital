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
        <script src="https://cdn.tailwindcss.com"></script>

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


{{--     <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-blueGray-800"> --}}
        <!-- component -->
         <nav class=" p-8 bg-white w-full flex relative justify-between items-center mx-auto px-8 h-20">
            <!-- logo -->
            <div class="inline-flex">
                <a class="_o6689fn font-bold" href="/">
                    mediconnection
                </a>
            </div>

            <!-- end logo -->

            <!-- search bar -->
            @if( auth()->check())
                 <div class="hidden sm:block flex-shrink flex-grow-0 justify-start px-2">
                     <div class="inline-block">
                         <div class="inline-flex items-center max-w-full">
                             <button class="flex items-center flex-grow-0 flex-shrink pl-2 relative w-60 border rounded-full px-1  py-1" type="button">
                                 <div class="block flex-grow flex-shrink overflow-hidden">Start your search</div>
                                 <div class="flex items-center justify-center relative  h-8 w-8 rounded-full">
                                     <svg
                                         viewBox="0 0 32 32"
                                         xmlns="http://www.w3.org/2000/svg"
                                         aria-hidden="true"
                                         role="presentation"
                                         focusable="false"
                                         style="
                            display: block;
                            fill: none;
                            height: 12px;
                            width: 12px;
                            stroke: currentcolor;
                            stroke-width: 5.33333;
                            overflow: visible;
                        "
                                     >
                                         <g fill="none">
                                             <path
                                                 d="m13 24c6.0751322 0 11-4.9248678 11-11 0-6.07513225-4.9248678-11-11-11-6.07513225 0-11 4.92486775-11 11 0 6.0751322 4.92486775 11 11 11zm8-3 9 9"
                                             ></path>
                                         </g>
                                     </svg>
                                 </div>
                             </button>
                         </div>
                     </div>
                 </div>
            @endif
            <!-- end search bar -->

            <!-- login -->
            <div class="flex-initial">
                <div class="flex justify-end items-center relative">



                    <div class="block">
                        <div class="inline relative">
                            @auth
                                <a href="{{ url('/profile') }}">
                                    <button type="button" class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg">

                                        <div class="block flex-grow-0 flex-shrink-0 h-10 w-12 pl-5">
                                            <svg
                                                viewBox="0 0 32 32"
                                                xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true"
                                                role="presentation"
                                                focusable="false"
                                                style="display: block; height: 100%; width: 100%; fill: currentcolor;"
                                            >
                                                <path d="m16 .7c-8.437 0-15.3 6.863-15.3 15.3s6.863 15.3 15.3 15.3 15.3-6.863 15.3-15.3-6.863-15.3-15.3-15.3zm0 28c-4.021 0-7.605-1.884-9.933-4.81a12.425 12.425 0 0 1 6.451-4.4 6.507 6.507 0 0 1 -3.018-5.49c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5a6.513 6.513 0 0 1 -3.019 5.491 12.42 12.42 0 0 1 6.452 4.4c-2.328 2.925-5.912 4.809-9.933 4.809z"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="font-bold dark:text-black dark:hover:text-gray-500 ">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-bold  dark:text-black dark:hover:text-gray-500 ">Register</a>
                                @endif
                            @endauth

                        </div>
                    </div>
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
