<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="David Mario">
    <meta name="description" content="Admin Statistik">
    <meta name="keywords" content="admin, statistik, david mario">

    <title>STATISTIK | ILKOM 055</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
        integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

    <!-- Shortcut Web Icon -->
    <link rel="shortcut icon" href="/img/logo.png">

    {{-- google icon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body class="mt-12 font-sans leading-normal tracking-normal bg-gray-800">

    <header>
        <!--Nav-->
        <nav aria-label="menu nav" class="fixed top-0 z-20 w-full h-auto px-1 pt-2 pb-1 mt-0 bg-gray-800 md:pt-1">

            <div class="flex flex-wrap items-center">
                <div class="flex justify-center flex-shrink text-white md:w-1/3 md:justify-start">
                    <a href="#" aria-label="Home">
                        <span class="pl-2 text-xl">STATISTIKA-055</span>
                    </a>
                </div>

                <div class="flex justify-center flex-1 px-2 text-white md:w-1/3 md:justify-start">
                    <span class="relative w-full">
                        <input aria-label="search" type="text" type="text" id="search" name="search" placeholder="Search"
                            class="w-full px-2 py-3 pl-10 leading-normal text-white transition bg-gray-900 border border-transparent rounded appearance-none focus:outline-none focus:border-gray-400">
                        <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                            <svg class="w-4 h-4 text-white pointer-events-none fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </div>
                    </span>
                </div>

                <div class="flex content-center justify-between w-full pt-2 md:w-1/3 md:justify-end">
                    <ul class="flex items-center justify-between flex-1 list-reset md:flex-none">
                        <li class="flex-1 md:flex-none md:mr-3">
                            <a class="inline-block px-4 py-2 text-white no-underline hidden" href="#">Active</a>
                        </li>
                        <li class="flex-1 md:flex-none md:mr-3">
                            <a class="inline-block px-4 py-2 text-gray-400 no-underline hover:text-gray-200 hover:text-underline hidden"
                                href="#">link</a>
                        </li>
                        <li class="flex-1 md:flex-none md:mr-3">

                            @if (Route::has('login'))
                                @auth
                                    <div class="relative inline-block">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button
                                                class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                                <img class="object-cover w-8 h-8 rounded-full"
                                                    src="{{ Auth::user()->profile_photo_url }}"
                                                    alt="{{ Auth::user()->name }}" />
                                            </button>
                                        @else
                                        <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2 font-bold ">
                                            <svg class="h-5 mb-1 fill-current inline"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
                                            </svg>
                                            <span class="pr-2"></span>
                                            {{ Auth::user()->name }}
                                            <svg
                                            class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                        </button>
                                        @endif
                                        <div id="myDropdown"
                                            class="absolute right-0 z-30 invisible p-3 mt-3 overflow-auto text-white bg-gray-800 dropdownlist">
                                            <input type="text" class="p-2 text-gray-600 drop-search"
                                                placeholder="Search.." id="myInput"
                                                onkeyup="filterDD('myDropdown','myInput')">
                                            <a href="{{ route('profile.show') }}"
                                                class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i
                                                    class="fa fa-user fa-fw"></i> Profile</a>
                                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                                    {{ __('API Tokens') }}
                                                </x-jet-dropdown-link>
                                            @endif

                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf
                                                <div class="border border-gray-800"></div>
                                                <a href="route('logout')"
                                                    onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                                    class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i
                                                        class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="p-2 text-sm text-white underline rounded-lg dark:text-black hover:bg-white hover:text-black">LOGIN</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="p-2 ml-4 text-sm text-white underline rounded-lg dark:text-black hover:bg-white hover:text-black">REGISTER</a>
                                    @endif
                                @endauth
                            @endif
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>


    <main>

        <div class="flex flex-col md:flex-row">
            <nav aria-label="alternative nav">
                <div class="fixed bottom-0 z-10 content-center w-full h-full mt-12 bg-gray-800 shadow-xl md:relative md:h-screen md:w-48">

                    <div class="space-y-6 md:space-y-10 mt-10">
                        <div id="profile" class="space-y-10">
                            <img
                              src="img/logo2.png"
                              alt="Avatar user"
                              class="w-10 md:w-28 rounded-full mx-auto"/>
                            <div>
                              @if (Route::has('login'))
                              @auth
                              <h2 class="font-medium text-lg md:text-sm text-center text-white font-semibold">
                                {{ Auth::user()->name }}
                              </h2>
                              @else
                              <h2 class="font-medium text-lg md:text-sm text-center text-white font-semibold hidden">
                              </h2>
                              @endauth
                              @endif
                            </div>
                          </div>
                          <div class="flex border-2 border-gray-200 rounded-md focus-within:ring-2 ring-teal-500"></div>
                        <div class="text-center justify-center font-bold text-2xl text-white"> MENU </div>
                    <div class="content-center justify-between text-left md:mt-2 md:w-48  md:content-start">
                        <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                            <li class="mr-3 flex-1">
                                <a href="/" class="block py-1 md:py-3 pl-1 align-middle  text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                    <i class="fa-solid fa-house pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Home</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="/data" class="block py-1 md:py-3 pl-1 align-middle font-extrabold text-lg text-white no-underline hover:text-white border-b-2 border-blue-800 hover:border-blue-500">
                                    <i class="fa-solid fa-database pr-0 md:pr-3  text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data</span>
                                </a>
                            </li>
                            <li class="flex-1 mr-3">
                                <a href="{{ route('frequency') }}"
                                    class="block py-1 pl-1 text-white no-underline align-middle border-b-2 border-gray-800 md:py-3 hover:text-white hover:border-yellow-500">
                                    <i class="pr-0 fa-solid fa-calendar-days md:pr-3"></i><span
                                        class="block pb-1 text-xs text-white md:pb-0 md:text-base md:text-white md:inline-block">Frekuensi Data</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </nav>
            <section class="w-full rounded-xl">
                <div id="main" class="flex-1 w-full h-full pb-24 mt-12 bg-gray-100 main-content md:mt-2 md:pb-5">

                    <div class="pt-3 bg-gray-800">
                        <div
                            class="p-4 text-2xl text-white shadow rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800">
                            <h1 class="pl-2 font-bold">Data</h1>
                        </div>
                    </div>
                    <div
                        class="w-full h-full p-4 text-xl text-justify text-black bg-transparent shadow rounded-tl-3xl">
                        <div class="relative w-full overflow-x-auto">
                            <button
                                class="focus:outline-none text-white bg-blue-700 hover:bg-gray-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800"><a
                                    href="/create">Add Data</a></button>
                            <button
                                class="focus:outline-none text-white bg-yellow-700 hover:bg-gray-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><a
                                    href="{{ route('printdatapdf') }}">Export PDF</a></button>
                            <button
                                class="focus:outline-none text-white bg-green-700 hover:bg-gray-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><a
                                    href="{{ route('printdataexcel') }}">Export XLSX</a></button>
                            <button
                                class="focus:outline-none text-white bg-gradient-to-tl from-yellow-400 to-green-700 hover:bg-gray-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800"
                                id="import-btn">Import XLSX</button>
                                <form class="form" method="get" action="{{ route('admin_search') }}">
                                    <div class="flex flex-col lg:flex-row mt-4 lg:mt-0 justify-end items-center">
                                        <div class="relative">
                                            <label for="search" class="sr-only" id="search">Search</label>
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input type="text" id="search" name="search"
                                                class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Search">
                                        </div>
                                        <div class="px-4 py-1 my-2 text-right sm:px-6">
                                            <button type="submit"
                                                class="inline-flex justify-end rounded-md border border-transparent bg-indigo-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Search</button>
                                        </div>
                                    </div>
                                </form>

                            <table class="w-full text-sm text-left text-gray-500 shadow-lg rounded-lg">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Number
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            @sortablelink('NIM','NIM')
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            @sortablelink('Name','Nama')
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            @sortablelink('Score','Nilai')
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            @sortablelink('Kelas','Kelas')
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Created At
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Updated At
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php
                                        $i = 0;
                                    @endphp --}}
                                    @foreach ($data as $s)
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4">
                                                 {{ $loop->iteration }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $s->NIM }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $s->Name }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $s->Score }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $s->Kelas }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $s->created_at }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $s->updated_at }}
                                            </td>
                                            <td class="px-3 py-4">
                                                <div class="flex">
                                                    <div><button class="w-12 h-8 text-white bg-yellow-500 rounded">
                                                            <a href="admin/{{ $s->id }}/edit">
                                                                <span class="material-symbols-outlined">
                                                                    edit_document
                                                                    </span></a>
                                                        </button>
                                                    </div>
                                                    <div><form action="admin/{{ $s->id }}/delete" method="POST">
                                                        @csrf
                                                        {{-- @method ('delete') --}}
                                                        <button class="w-auto ml-4 px-3 h-8 text-white bg-red-500 rounded"
                                                            type="submit" value="Delete" onclick="return confirm('Are you sure want to delete this ({{ $s->NIM }}) data?')">
                                                            <span class="material-symbols-outlined">
                                                                delete_forever
                                                                </span></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="px-4 mt-6 mb-6">
                                {{-- {{ $data->links() }} --}}

                                {!! $data->appends(Request::except('page'))->render() !!}
                            </div>
                        </div>

                        {{-- Start Modal Import --}}
                        <div class="absolute inset-0 items-center justify-center hidden bg-black bg-opacity-50"
                            id="overlay">
                            <div class="max-w-sm px-3 py-2 text-gray-800 bg-gray-200 rounded shadow-xl">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-lg font-bold">Import File</h4>
                                    <svg class="w-6 h-6 p-1 rounded-full cursor-pointer hover:bg-gray-300"
                                        id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <form action="{{ route('importdataexcel') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-2 text-sm">
                                        <div class="flex justify-center">
                                            <div class="mb-3 w-96">
                                                <label for="formFile"
                                                    class="inline-block mb-2 text-gray-700 form-label">Format file
                                                    .xlsx</label>
                                                <input
                                                    class="form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    type="file" id="formFile" name="file"required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end mt-3 space-x-3">
                                        <button
                                            class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900"
                                            id="cancel-btn">Cancel</button>
                                        <button type="submit"
                                            class="px-3 py-1 text-gray-200 bg-red-800 rounded btn btn-success hover:bg-red-600">Import</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                        {{-- End Modal Import --}}

                    </div>



                </div>
            </section>
        </div>

        <footer class="block bottom-0 main-footer px-48 text-white bg-gradient-to-bl from-blue-800 to-transparent w-auto h-auto mt-2 mb-2">
            <strong>Copyright &copy; 2022 <a
                href="https://elearning.undiksha.ac.id/course/view.php?id=8137" terget="blank">STATISTIK</a>.</strong>
            All rights reserved.
            <div>by <a href="https://github.com/055DavidMario" terget="blank"> 2115101055_DavidMarioYohanesSamosir</a>
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
            </div></div>
        </footer>
    </main>



    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>

    {{-- Start Script Modal Import --}}
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const overlay = document.querySelector('#overlay')
            const impBtn = document.querySelector('#import-btn')
            const cncBtn = document.querySelector('#cancel-btn')
            const closeBtn = document.querySelector('#close-modal')

            const toggleModal = () => {
                overlay.classList.toggle('hidden')
                overlay.classList.toggle('flex')
            }

            impBtn.addEventListener('click', toggleModal)
            cncBtn.addEventListener('click', toggleModal)
            closeBtn.addEventListener('click', toggleModal)
        })
    </script>
    {{-- End Script Modal Import --}}

</body>

</html>
