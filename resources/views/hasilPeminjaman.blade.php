@section('title', 'peminjaman')
@extends('layouts.mainlayoutUser')


@section('content')
    <main class="w-full my-10 z-10">
        <header class="mt-10">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Terima Kasih</span>
                Telah Meminjam Buku.
            </h1>
        </header>

        <article class="flex items-center justify-center">

            <a href="#"
                class="block max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-3 text-3xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Kode Peminjaman
                    Anda</h5>
                    @if (session('kodePeminjaman'))

                    <h5 class="mb-3 text-3xl font-bold tracking-tight text-gray-900 dark:text-white text-center"><mark
                            class="px-2 text white bg-emerald-400">
                            {{ session('kodePeminjaman') }}</mark></h5>
                    @else
                        
                    <h5 class="mb-3 text-3xl font-bold tracking-tight text-gray-900 dark:text-white text-center"><mark
                            class="px-2 text white bg-emerald-400">
                            kode Peminjaman tidak ditemukan</mark></h5>
                    @endif
                <p class="font-normal text-gray-700 dark:text-gray-400 text-center">Tunjukkan Ke Admin dan Dapatkan Buku
                    Secara Offline.</p>
                <img src="{{ url('/image/ok.png') }}">
            </a>

        </article>
    @endsection
