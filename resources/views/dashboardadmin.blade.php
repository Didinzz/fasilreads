@extends('layouts.mainlayoutAdmin')
@section('title', 'Dashboard Admin')

@section('content')
    {{-- <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            @if (session()->has('berhasil'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-2  text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
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
            @endif
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Selamat
                    Datang</span>
                Admin.
            </h1>

            <div class="container mx-auto flex flex-col md:flex-row gap-6">
                <a href="{{ route('tabelPeminjaman') }}"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="p-4">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Data Peminjam
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Berikut admin bisa mengakses siapa saja yang meminjam buku-buku
                            pada website FasilReads:
                        </p>
                    </div>
                </a>

                <a href="{{ route('tabelBuku') }}"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="p-4">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Crud Buku
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Berikut admin bisa mengakses dan mengcrud buku-buku pada
                            website FasilReads:
                        </p>
                    </div>
                </a>
            </div>

            <div class="container mx-auto flex flex-col md:flex-row gap-6 mt-6">
                <a href="{{ route('tabelUser') }}"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="p-4">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Data User
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Berikut admin bisa mengakses siapa saja yang meregistrasian akun
                            pada website FasilReads:
                        </p>
                    </div>
                </a>

                <a href="{{ route('tampilKategori') }}"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="p-4">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Kategori Buku
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Berikut admin bisa mengakses dan menambahkan kategori buku pada
                            website FasilReads:
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div> --}}
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            @if (session()->has('berhasil'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-2 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
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
            @endif
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Selamat
                    Datang</span> Admin.
            </h1>

            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('tabelUser') }}">
                    <div
                        class="flex items-center bg-white dark:bg-gray-700 border rounded-sm overflow-hidden shadow hover:bg-gray-100 dark:hover:bg-gray-600">
                        <div class="p-4 bg-green-400"> <i class="fas fa-users text-white text-3xl"></i></div>
                        <div class="px-4 text-gray-700">
                            <h1 class="text-md dark:text-white tracking-wider ">Total Member</h1>
                            <p class="text-3xl dark:text-white">{{ $user }}</p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('tabelBuku') }}">
                    <div
                        class="flex items-center bg-white dark:bg-gray-700 border rounded-sm overflow-hidden shadow hover:bg-gray-100 dark:hover:bg-gray-600 ">
                        <div class="p-4 bg-blue-400">
                            <i class="fas fa-book text-white text-3xl"></i>
                        </div>
                        <div class="px-4 text-gray-700">
                            <h1 class="text-md dark:text-white tracking-wider ">Total Buku</h1>
                            <p class="text-3xl dark:text-white">{{ $buku }}</p>
                        </div>
                    </div>
                </a>

                <a href="{{ route('tampilKategori') }}">
                    <div
                        class="flex items-center bg-white dark:bg-gray-700 border rounded-sm overflow-hidden shadow hover:bg-gray-100 dark:hover:bg-gray-600 ">
                        <div class="p-4 bg-yellow-400">
                            <i class="fas fa-book-open text-white text-3xl"></i>
                        </div>
                        <div class="px-4 text-gray-700">
                            <h1 class="text-md dark:text-white tracking-wider ">Kategori Buku</h1>
                            <p class="text-3xl dark:text-white">{{ $kat }}</p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('tabelPeminjaman') }}">
                    <div
                        class="flex items-center bg-white dark:bg-gray-700 border rounded-sm overflow-hidden shadow hover:bg-gray-100 dark:hover:bg-gray-600 ">
                        <div class="p-4 bg-red-400">
                            <i class="fa-solid fa-book-bookmark text-white text-3xl"></i>
                        </div>
                        <div class="px-4 text-gray-700">
                            <h1 class="text-md dark:text-white tracking-wider ">Peminjaman</h1>
                            <p class="text-3xl dark:text-white">{{ $peminjam }}</p>
                        </div>
                    </div>
                </a>



                <!-- Repeat the above code for the remaining three items -->

            </div>
        </div>
    </div>

@endsection
