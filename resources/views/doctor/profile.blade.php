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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
<body>

<!-- component -->
<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>



<div class="bg-gray-100">
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
    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-40 w-40 rounded-full mx-auto"
                             src="{{ asset('storage/1707771921.png')}}"
                             alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $doctor->user->name}}</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">Owner at Her Company Inc.</h3>

                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    @if(count($available_work_shift->toArray())<4)
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">
                                        Available work
                                    @else
                                    class="bg-gray-500 py-1 px-2 rounded text-white text-sm">
                                        Not Available
                                    @endif

                                    </span>
                            </span>
                        </li>

                        <li class="flex items-center py-3">
                            <span>Add To Favorit</span>
                            <span class="ml-auto">
                                <form method="post" action="{{route('favorit.store')}}">
                                    @csrf
                                    <input type="hidden" name="doctor_id" value="{{ $doctor->id}}">
                                    <input type="hidden" name="patient_id" value="{{ $doctor->id}}">
                                    <button type="submit" class="bg-white py-1 px-2 rounded text-white text-sm hover:bg-red-500 hover:text-white transition">
                                           <ion-icon class="my-auto px-3 text-red-600 text-xl hover:text-white" name="heart"></ion-icon>
                                    </button>
                                     <x-input-error :messages="$errors->all()" class="mt-2" />
                                </form>

                            </span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>leave a rate</span>
                            <span class="ml-auto">
                                <form method="post" action="{{route('rate.store')}}">
                                    @csrf
                                    <input type="hidden" name="doctor_id" value="{{ $doctor->id}}">
                                    <input type="hidden" name="patient_id" value="{{ $doctor->id}}">
                                    <input type="number" value="5" max="5" min="1" name="nbr_stars" class="w-[50px]">
                                    <button type="submit" class="bg-white py-1 px-2 rounded text-sm hover:bg-red-500 hover:text-white transition">
                                        add
                                    </button>
                                     <x-input-error :messages="$errors->all()" class="mt-2" />
                                </form>

                            </span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>average rate</span>
                            <span class="ml-auto">
                                <div class="flex p-1 gap-1 text-orange-300">
                                    @for($i = 0; $i <intval($avg_rate) ; $i++)
                                        <ion-icon name="star"></ion-icon>
                                    @endfor
                                </div>



                            </span>
                        </li>
                    </ul>

                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
{{--                 <div class="bg-white p-3 hover:shadow"> --}}
{{--                     <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8"> --}}
{{--                         <span class="text-green-500"> --}}
{{--                             <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" --}}
{{--                                  viewBox="0 0 24 24" stroke="currentColor"> --}}
{{--                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" --}}
{{--                                       d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /> --}}
{{--                             </svg> --}}
{{--                         </span> --}}
{{--                         <span>Similar Profiles</span> --}}
{{--                     </div> --}}
{{--                     <div class="grid grid-cols-3"> --}}
{{--                         <div class="text-center my-2"> --}}
{{--                             <img class="h-16 w-16 rounded-full mx-auto" --}}
{{--                                  src="{{ asset('storage/1707771921.png')}}"                                 alt=""> --}}
{{--                             <a href="#" class="text-main-color">Kojstantin</a> --}}
{{--                         </div> --}}
{{--                         <div class="text-center my-2"> --}}
{{--                             <img class="h-16 w-16 rounded-full mx-auto" --}}
{{--                                  src="{{ asset('storage/1707771921.png')}}"                                 alt=""> --}}
{{--                             <a href="#" class="text-main-color">James</a> --}}
{{--                         </div> --}}
{{--                         <div class="text-center my-2"> --}}
{{--                             <img class="h-16 w-16 rounded-full mx-auto" --}}
{{--                                  src="{{ asset('storage/1707771921.png')}}"                                 alt=""> --}}
{{--                             <a href="#" class="text-main-color">Natie</a> --}}
{{--                         </div> --}}
{{--                         <div class="text-center my-2"> --}}
{{--                             <img class="h-16 w-16 rounded-full mx-auto" --}}
{{--                                  src="{{ asset('storage/1707771921.png')}}"                                 alt=""> --}}
{{--                             <a href="#" class="text-main-color">Casey</a> --}}
{{--                         </div> --}}
{{--                     </div> --}}
{{--                 </div> --}}
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">First Name</div>
                                <div class="px-4 py-2">{{ $doctor->user->name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <div class="px-4 py-2">{{ $doctor->user->name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Gender</div>
                                <div class="px-4 py-2">Female</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">+11 998001001</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Address</div>
                                <div class="px-4 py-2">Beech Creek, PA, Pennsylvania</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:jane@example.com">jane@example.com</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-sm rounded-sm">

                    <!-- component -->
                    <section class="antialiased bg-gray-100 text-gray-600  px-4">
                        <header class="px-5 py-4 border-b border-gray-100">
                            <h2 class="font-semibold text-gray-800">Work Shift</h2>
                        </header>
                        <div class="p-3">
                            <div class="overflow-x-auto">
                                <table class="table-auto w-full">
                                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Day</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">work shift</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">get appointement</div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-sm divide-y divide-gray-100">
                                    <tr>
                                         <form method="post" action="{{route('appointment.store')}}">
                                             @csrf
                                             <td class="p-2 whitespace-nowrap">
                                                 <input type="date" name="date" value="2024-02-14"  class="block mt-1 w-full font-semibold  p-2 bg-green-800 text-white" >
                                                 <input type="hidden" name="doctor_id" value="{{ $doctor->id}}">
                                                 <input type="hidden" name="patient_id"  value="{{ Auth::user()->patient->id}}" >
                                             </td>
                                             <td class="p-2 whitespace-nowrap">
                                                 <select name="shift_work" class="block mt-1 w-full p-2 bg-green-800 font-semibold text-white">
                                                     <option selected disabled>Choose a shift</option>
                                                     @foreach($enumValues as $shiftOption)
                                                         @if(in_array($shiftOption, $available_work_shift->toArray()))
                                                             <option value="{{ $shiftOption }}" disabled>{{ $shiftOption }}</option>
                                                         @else
                                                             <option value="{{ $shiftOption }}">{{ $shiftOption }}</option>
                                                         @endif

                                                     @endforeach
                                                 </select>
                                                 <x-input-error :messages="$errors->all()" class="mt-2" />

                                             </td>
                                             <td class="p-2 whitespace-nowrap">
                                                 <div class="text-lg text-center">
                                                     <button class="btn bg-blue-500 text-white px-4 py-2 rounded-md">Take Appointment</button>
                                                 </div>
                                             </td>
                                         </form>
                                    </tr>

                                    </tbody>
                                </table>
                                <!-- component -->
                            </div>
                        </div>

                    </section>                    <!-- End of Experience and education grid -->
                </div>

                <!-- End of profile tab -->
            </div>
            <div class="bg-white p-3 shadow-sm rounded-sm">
                <div class="  p-2 ">
                    <h1 class="text-lg mb-3 font-bold">Comments</h1>
                    <div class="flex justify-between border flex bg-gray-600 bg-opacity-20 border-gray-800 rounded-md">
                          <ion-icon class="my-auto px-3 " name="chatbubble-outline"></ion-icon>
                        <form method="post" action="{{route('comment.store')}}" class="flex justify-between w-full p-3" >
                            @csrf
                            <div class="">
                                <input type="hidden" name="doctor_id" value="{{ $doctor->id}}">
                                <input type="hidden" name="patient_id"  value="{{ Auth::user()->patient->id}}" >

                                <input type="text" name="body" id="body" placeholder="add comment" class="bg-transparent focus:outline-none flex-grow w-full p-3 h-fit">
                            </div>
                            <div class="bg-gray-800 flex justify-end text-white hover:bg-gray-800 text-gray-800 font-semibold hover:text-white py-2 px-4 border border-gray-800 hover:border-transparent rounded">
                                  <button type="submit" >Submit</button>
                            </div>

                            <x-input-error :messages="$errors->all()" class="mt-2" />
                        </form>
                    </div>


                    <!-- Item Container -->
                    <div class="flex flex-col gap-3 mt-4 text-white">
                        @foreach($comments as $comment)
                        <div class="flex flex-col gap-4 bg-gray-700 p-4">
                            <!-- Profile and Rating -->
                            <div class="flex justify justify-between">
                                <div class="flex gap-2">
                                    <div class="w-7 h-7 text-center rounded-full bg-yellow-500">A</div>
                                     <span>{{$comment->patient->user->name}} </span>
                                </div>

                            </div>

                            <div>
                                {{$comment->body}}
                            </div>

                            <div class="flex justify-between">
                                <span>{{$comment->created_at->DiffForHumans()}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<footer class="bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6 py-12">


        <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />

        <div class="flex flex-col items-center justify-between sm:flex-row">
            <a href="#" class="text-2xl font-bold text-gray-800 transition-colors duration-300 hover:text-gray-700 dark:text-white dark:hover:text-gray-300">Mediconnect</a>

            <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">© CodeX.</p>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
