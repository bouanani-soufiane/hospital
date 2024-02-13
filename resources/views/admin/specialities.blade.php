<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

</head>

<body>
<x-dashboard-aside></x-dashboard-aside>
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <x-dashboard-top></x-dashboard-top>
    <div class="px-6 pt-6 2xl:container">

            <div class="md:col-span-2 lg:col-span-1" >
                    <div>
                        <div class="flex flex-wrap -mx-3 mb-5">
                            <div class="w-full max-w-full px-3 mb-6  mx-auto">
                                <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                                    <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                                        <!-- card header -->
                                        <div class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                                            <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                                                <span class="mt-1 font-medium text-secondary-dark text-lg/normal">See All Specialities</span>
                                            </h3>
                                            <div class="relative flex flex-wrap items-center my-2">

                                                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                    Add
                                                </button>
                                                {{-- start modal ajouter --}}

                                                <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                    Add Speciality
                                                                </h3>
                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-4 md:p-5 space-y-4">
                                                                <x-form action="{{ route('specialities.store') }}" has-files>
                                                                    @csrf
                                                                    <div>
                                                                        <x-input-label for="name" :value="__('Name Speciality')" />
                                                                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                                    </div>
                                                                    <div>
                                                                        <x-input-label for="image" :value="__('Image Speciality')" />
                                                                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus autocomplete="image" />
                                                                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                                                    </div>
                                                                    <div class=" pt-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                        <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                                                                    </div>

                                                                </x-form>

                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div class="flex items-center p-2  border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- end card header -->
                                        <!-- card body  -->
                                        <div class="flex-auto block py-8 pt-6 px-9">
                                            <div class="overflow-x-auto">
                                                <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                                    <thead class="align-bottom">
                                                    <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                                        <th class="pb-3 text-start min-w-[175px]">#</th>
                                                        <th class="pb-3 text-start min-w-[175px]">Speciality</th>
                                                        <th class="pb-3 text-end min-w-[100px]">Name</th>
                                                        <th class="pb-3 text-end min-w-[100px]">Count</th>
                                                        <th class="pb-3 text-end min-w-[50px] pr-3">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($specialities as $speciality)
                                                    <tr class="border-b border-dashed last:border-b-0">
                                                        <td class="p-3 pl-0">
                                                            <div class="flex items-center">
                                                                <span>{{ $speciality->id }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="p-3 pl-0">
                                                            <div class="flex items-center">
                                                                <div class="relative inline-block shrink-0 rounded-2xl me-3">

                                                                    <img src="{{ asset('storage/'.$speciality->image->path)}}" class="w-[60px] h-[60px] inline-block shrink-0 rounded-2xl" alt="">
                                                                </div>

                                                            </div>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span class="font-semibold text-light-inverse text-md/normal">{{$speciality->name}}</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold  text-success bg-success-light rounded-lg">6.5% </span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end flex justify-end space-x-2">

                                                            <div class="">
                                                                <button  data-tag-name="{{$speciality->name}}"  data-speciality-id="{{$speciality->id}}"  data-modal-target="edit-modal-speciality" data-modal-toggle="edit-modal-speciality" class=" bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="button">
                                                                    edit
                                                                </button>

                                                                <div id="edit-modal-speciality" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                                        <!-- Modal content -->
                                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                            <!-- Modal header -->
                                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                                    edit Speciality
                                                                                </h3>
                                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal-speciality">
                                                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                                    </svg>
                                                                                    <span class="sr-only">Close modal</span>
                                                                                </button>
                                                                            </div>
                                                                            <!-- Modal body -->
                                                                            <div class="p-4 md:p-5 space-y-4">
                                                                                <x-form  action="{{ route('specialities.update', $speciality) }}" has-files>

                                                                                    @csrf
                                                                                    @method('PATCH')
                                                                                    <div>
                                                                                        <input type="hidden" id="specialityId" value="{{ $speciality->id }}" name="id">
                                                                                        <x-input-label for="name" :value="__('Name Speciality')" />
                                                                                        <x-text-input id="namespeciality" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                                                    </div>
                                                                                    <div>
                                                                                        <x-input-label for="image" :value="__('Image Speciality')" />
                                                                                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus autocomplete="image" />
                                                                                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                                                                    </div>
                                                                                    <div class=" pt-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                                        <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                                                                                    </div>

                                                                                </x-form>

                                                                            </div>
                                                                            <!-- Modal footer -->
                                                                            <div class="flex items-center p-2  border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                                <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <x-form-button
                                                                :action="route('specialities.destroy', $speciality)"
                                                                method="DELETE"
                                                                class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                                            >
                                                                Delete
                                                            </x-form-button>
                                                        </td>

                                                    </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

    </div>
</div>











<script>
    document.addEventListener("DOMContentLoaded", function () {
        const specialityButtons = document.querySelectorAll('[data-modal-target="edit-modal-speciality"]');
        const modalspeciality = document.getElementById("edit-modal-speciality");
        const specialityId = modalspeciality.querySelector('#specialityId');
        const namespeciality = modalspeciality.querySelector('#namespeciality');


        specialityButtons.forEach((button) => {
            button.addEventListener("click", function () {
                const specialityIdvalue = this.getAttribute("data-speciality-id");
                console.log("Button clicked, specialityIdvalue:", specialityIdvalue);
                const specialityName = this.getAttribute("data-tag-name");


                specialityId.value = specialityIdvalue;
                namespeciality.value = specialityName

            });
        });
    });
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>
