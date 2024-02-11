
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
<!-- component -->
<script src="//unpkg.com/alpinejs" defer></script>

<main>
    <section class="bg-white dark:bg-gray-900">
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
                                    <a href="{{ url('/profile') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">profile <i class="text-white fas fa-bars"> </i>
                                    </a>
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


        <div class="container mx-auto px-6 py-16 text-center">
            <div class="mx-auto max-w-lg">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white lg:text-4xl">Welcom back dear Sick person :/</h1>
                <div class="mx-auto mt-6 flex justify-center">
                    <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>
                </div>

                <p class="mt-6 text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero similique obcaecati illum mollitia.</p>

            </div>


        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-1">

            <div class="mt-2 grid grid-cols-1 gap-8 md:grid-cols-2 xl:mt-12 xl:grid-cols-3 xl:gap-12">
                <div>
                    <img class="h-36 w-full rounded-lg object-cover" src="https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80" alt="" />
                    <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">Best website collections</h2>
                </div>

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
        </div>
    </footer>
</main>

</body>
</html>
