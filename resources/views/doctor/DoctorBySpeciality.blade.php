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

<!-- component -->
<nav class=" bg-white w-full flex relative justify-between items-center mx-auto px-8 h-20">
    <!-- logo -->
    <div class="inline-flex">
        <a class="_o6689fn font-bold" href="/">
            mediconnection
        </a>
    </div>

    <!-- end logo -->

    <!-- search bar -->
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

<!-- component -->
<main class="bg-white dark:bg-gray-900">
    <section class="bg-white dark:bg-gray-900 p-6 ">

        <div class="container mx-auto px-6 py-16 text-center">
            <div class="mx-auto sm:max-w-xl">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white lg:text-4xl">Discover excellence doctors in '{{ $speciality->name}}' Speciality </h1>
            </div>

        </div>
    </section>
    <div class="container mx-auto mb-10 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach($doctors as $doctor)
            <div class="bg-white  relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md  hover:smooth-hover">
                <img class="w-20 h-20 object-cover object-center rounded-full" src="{{ asset('storage/1707771921.png')}}" alt="cuisine" />
                <h4 class="text-black  hover:text-gray-400 text-2xl font-bold capitalize text-center">{{ $doctor->user->name}}</h4>
                <p class="text-black">Speciality :  {{ $speciality->name}}</p>
                <div class="px-1 py-2">
                    <a href="{{route('doctor.show',$doctor)}}" class="text-blue-500 font-bold  hover:underline">visite doctor page</a>
                </div>
            </div>
        @endforeach
    </div>


</main>
<footer class="bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6 py-12">


        <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />

        <div class="flex flex-col items-center justify-between sm:flex-row">
            <a href="#" class="text-2xl font-bold text-gray-800 transition-colors duration-300 hover:text-gray-700 dark:text-white dark:hover:text-gray-300">Mediconnect</a>

            <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">© CodeX.</p>
        </div>
    </div>
</footer>

</body>
</html>
