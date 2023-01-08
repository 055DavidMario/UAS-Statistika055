<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <h1>{{$title}}</h1>
                <h2>NIM : {{$data['mahasiswa']['nim']}}</h2>
                <h2>NAMA : {{$data['mahasiswa']['nama']}}</h2>
            </div>
        </div>
    </div>
</x-app-layout>
