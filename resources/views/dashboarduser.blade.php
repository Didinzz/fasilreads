@section('home', ' bg-blue-700 md:dark:text-blue-500 ')
@section('title', 'Home')
@extends('layouts.mainlayoutUser')
@section('content')
    {{-- alert --}}
    {{-- @if (session()->has('berhasil'))
        </div>
        <div id="alert-3"
            class="flex items-center p-4 mb-2 mt-1 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('berhasil') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif --}}
    {{-- end allert --}}

    @include('components.user.carouselUser')

    <div class="relative z-0 w-full h-full overflow-hidden">
        <div class="overflow-hidden absolute -z-10 mx-auto right-0 opacity-50">
            <img src="{{ url('/image/background.png') }}" class="" />
        </div>

        <button id="toggleDarkMode" type="button"
            class="px-5  text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <i class="fas fa-circle-half"></i>
        </button>

        <main class="w-full my-10 z-10">
            <header class="mt-10">
                <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Kategori
                        Buku</span>
                    Kami.
                </h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 text-center">
                    Jelajahi dan Cari Banyak Buku yang Telah Kami Sediakan.
                </p </header>
                <article class="">
                    <div class="container mx-auto mt-4 max-w-screen-lg grid gap-10 grid-cols-1 md:grid-cols-3">
                        @foreach ($categori as $c)
                            <div
                                class="max-w-sm mx-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg" src="{{ asset('storage/' . $c->gambar) }}" alt="tes">

                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $c->kategori }}</h5>
                                    </a>
                                    <p class="mb-3 text-gray-700 dark:text-gray-400">Buku pemrograman Java adalah sumber
                                        {{ $c->Deskripsi }}</p>

                                    <a href="{{ route('katalogBuku', $c->kategori) }}"
                                        class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lihat
                                        Kategori<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </article>



        </main>
    </div>

    @include('components.user.feedbackUser')
@endsection
