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

</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <header>
        <!--Nav-->
        <nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

            <div class="flex flex-wrap items-center">
                <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                    <a href="#" aria-label="Home">
                        <span class="text-xl pl-2">STATISTIKA-055</span>
                    </a>
                </div>

                <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2 hidden">
                    <span class="relative w-full">
                        <input aria-label="search" type="search" id="search" placeholder="Search"
                            class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                        <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                            <svg class="fill-current pointer-events-none text-white w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </div>
                    </span>
                </div>

                <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <li class="flex-1 md:flex-none md:mr-3">
                            <a class="inline-block py-2 px-4 text-white no-underline hidden" href="#">Active</a>
                        </li>
                        <li class="flex-1 md:flex-none md:mr-3">
                            <a class="inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4 hidden"
                                href="#">link</a>
                        </li>
                        <li class="flex-1 md:flex-none md:mr-3">

                            @if (Route::has('login'))
                                @auth
                                    <div class="relative inline-block">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover"
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
                                            class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                            <input type="text" class="drop-search p-2 text-gray-600"
                                                placeholder="Search.." id="myInput"
                                                onkeyup="filterDD('myDropdown','myInput')">
                                            <a href="{{ route('profile.show') }}"
                                                class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
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
                                                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
                                                        class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-white underline dark:text-black  hover:bg-white hover:text-black rounded-lg p-2">LOG
                                        IN</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-white underline dark:text-black hover:bg-white hover:text-black rounded-lg p-2">REGISTER</a>
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
                <div class="bg-gray-800 shadow-xl h-full fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">
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
                <div id="main" class="w-full h-full main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

                    <div class="bg-gray-800 pt-3">
                        <div
                            class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                            <h1 class="font-bold pl-2">Create Data</h1>
                        </div>
                    </div>
                    <div
                        class="w-full h-full rounded-tl-3xl p-4 shadow text-xl text-justify bg-transparent text-black">
                        <div class="container">
                            <div class="justify-center w-60">
                                <h1 class="my-10 text-2xl font-bold">Add Data</h1>
                                <form action="/dataupdate" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-6">
                                        <label for="nim"
                                            class="block mb-2 text-sm font-medium text-gray-900">NIM</label>
                                        <input type="text" name="NIM" id="NIM"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 block p-2.5" placeholder="NIM">
                                        @error('NIM')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <label for="Name"
                                            class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                        <input type="text" name="Name" id="desc"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5" placeholder="Nama">
                                        @error('Name')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <label for="score"
                                            class="block mb-2 text-sm font-medium text-gray-900">Nilai</label>
                                        <input type="float" name="Score" id="Score"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5" placeholder="Angka Desimal">
                                        @error('Score')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                                            <select class="p-2 px-2 py-1  rounded-lg" name="Kelas" id="kelas">
                                                <option name="Kelas" id="IKI" value="IKI" selected>IKI</option>
                                                <option name="Kelas" id="A" value="A">A</option>
                                                <option name="Kelas" id="B" value="B">B</option>
                                              </select>
                                        @error('Kelas')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit"
                                        class="text-black bg-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Add</button>
                                </form>
                            </div>
                        </div>
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


</body>

</html>
