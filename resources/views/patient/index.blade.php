
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
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
     <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

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

            </div>
        </nav>



    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-1">


        </div>
    </section>
    <main class="profile-page">
        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://img.freepik.com/free-photo/clean-empty-hospital-ward-ready-receive-patients-reflecting-modern-medical-care_91128-4608.jpg?w=1060&t=st=1707943808~exp=1707944408~hmac=6375859fe2b2558464f08fb0df998c613de35a69d1785a972cea48abadc6dd99');
          ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative py-16 bg-blueGray-200">
            <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div class="relative">
                                    <img alt="..." src="{{ asset('storage/1707775250.png')}}" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                <div class="py-6 px-3 mt-32 sm:mt-0">
                                    <button class="bg-blue-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                                       <a href="{{ url('/profile') }}">edit profile</a>
                                    </button>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">{{($favorites)}}</span><span class="text-sm text-blueGray-400">Favorits</span>
                                    </div>
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">{{$appointments->count()}}</span><span class="text-sm text-blueGray-400">Appointments</span>
                                    </div>
                                    <div class="lg:mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">89</span><span class="text-sm text-blueGray-400">Consultations</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-12">
                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                {{Auth::user()->name}}
                            </h3>


                        </div>
                        <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                            <div class="flex flex-wrap justify-center">

                                @foreach($consultations as $consultation)
                                <div class=" w-[700px] mb-12 flex items-center justify-center">
                                    <div class="px-10">
                                        <div class="bg-white max-w-xl rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                                            <div class="flex justify-between mb-12">
                                                <div class="w-14 h-14 bg-yellow-500 rounded-full flex items-center justify-center font-bold text-white">LOGO</div>
                                                 <div class="flex flex-col items-center space-x-2">
                                                     <div class="w-fit px-4 h-14  rounded flex items-center justify-center font-bold ">Ordonance</div>

                                                 </div>

                                            </div>
                                            <div class="flex  mb-12 justify-end">

                                                <div class="flex flex-col items-center space-x-2 justify-end">
                                                    <h1>le :{{$consultation->created_at->format('j-m-Y')}}</h1>
                                                    <h1 class="">
                                                        Dr. {{$consultation->appointment->doctor->user->name}}</h1>
                                                </div>
                                            </div>
                                            <div class="mt-4">

                                                <p class="mt-4 text-md text-gray-600"> <span class="font-bold underline">symptoms : </span> {{$consultation->description}}</p>
                                                <p class="text-start my-5 text-lg text-gray-600 font-bold underline">Repos prescrit : <span class="font-semibold">{{$consultation->days_of}}</span></p>
                                                <h1 class="text-start my-5 text-lg text-gray-600 font-bold underline">Médicaments : </h1>
                                                <div class="flex justify-between ">
                                                    <div class="flex">
                                                        <ul class="list-disc mx-3">
                                                            @foreach($consultation->medicine as $medicine)
                                                                <li class="flex items-center space-x-2">
                                                                    <i class="fas fa-capsules fa-2xl"></i>                                                                   <span>{{$medicine->name}}</span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <div class="mt-4 flex items-center space-x-4 py-6">

                                                    </div>
                                                    <div class="p-6 bg-yellow-400 rounded-full h-4 w-4 flex items-center justify-center text-2xl text-white mt-4 shadow-lg cursor-pointer">pdf</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

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
