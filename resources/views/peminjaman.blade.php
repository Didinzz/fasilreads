@section('title', 'Peminjaman')
@section('loan', ' bg-blue-700 md:dark:text-blue-500')

@extends('layouts.mainlayoutUser')


@section('content')
    <main class="w-full my-10 z-10">
        <header class="mt-10">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Peminjaman</span>
                Buku.
            </h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 text-center mb-4">
                Yuk segera isi form dan pinjam buku dengan mudah!.
            </p>
        </header>
        <article class="flex items-center justify-center">

            <div
                class="w-full max-w-2xl h-[550px] p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

                <form class="space-y-6" action="{{ route('pengajuanPeminjaman') }}" method="POST">
                    @csrf
                    <h5 class="text-xl font-medium text-gray-900 dark:text-white">Isi ini yuk!</h5>

                    <div>
                        <input type="hidden" name="id" value="{{ $buku->id }}">
                        <input type="hidden" value="{{ $buku->sampul }} " name="gambar">
                        <label for="namabuku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Buku</label>
                        <input type="namabuku" name="namaBuku" id="namabuku" required value="{{ $buku->judul }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Nama Buku" />
                    </div>
                    <div>
                        <label for="namaPeminjam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Peminjam</label>
                        <input type="namapeminjam" name="namaPeminjam" id="namapeminjam" required value="{{ auth()->user()->username }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Nama Kamu" />
                    </div>
                    <div>
                        <label for="nim"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                        <input type="nim" name="nim" id="nim" required value="{{ auth()->user()->nimNip }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="090xxxxxxxxxxx" />
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="relative flex-1">
                            <label for="start"
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </label>
                            <input name="tanggalMulai" type="date" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date start" />
                        </div>
                        <span class="text-gray-500">to</span>
                        <div class="relative flex-1">
                            <label for="end"
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </label>
                            <input name="tanggalSelesai" type="date" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date end" />
                        </div>
                    </div>

                   <button type="submit"
                            class="cursor-pointer transition-all bg-blue-500 text-white px-6 py-2 border-blue-600 border-b-[4px] hover:brightness-110 active:border-b-[2px] active:brightness-90 active:translate-y-[2px] w-full rounded-lg">
                            Ajukan Peminjaman
                        </button>
                </form>
            </div>

        </article>
    @endsection
