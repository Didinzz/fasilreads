@section('home', ' bg-blue-700 md:dark:text-blue-500 ')
@section('title', 'Home')
@extends('layouts.mainlayoutUser')
@section('content')
    {{-- @include('components.user.carouselUser') --}}
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
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Katalog
                        Buku</span>
                    {{ $kat->kategori }}
                </h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 text-center">
                    Jelajahi dan Cari Banyak Buku yang Telah Kami Sediakan.
                </p>
            </header>
            <article class="">
                <div class=" container mx-auto max-w-screen-lg grid gap-10 grid-cols-1 md:grid-cols-3">
                    @foreach ($buku as $buku)
                        <div
                            class="max-w-sm mx-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('storage/' . $buku->sampul) }}" alt="">

                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $buku->judul }}</h5>
                                </a>
                                <p class="mb-3 text-gray-700 dark:text-gray-400">Buku pemrograman Java adalah sumber
                                    {{ $buku->Deskripsi }}</p>

                                @if ($buku->stokBuku > 0)
                                    <a href="{{ route('peminjaman', $buku->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Ajukan Peminjaman
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                @else
                                    <span
                                        class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg">
                                        Maaf stok buku habis
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </article>



        </main>
    </div>

    {{-- @include('components.user.feedbackUser') --}}
@endsection
