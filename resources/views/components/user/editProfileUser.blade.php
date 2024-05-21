@extends('layouts.mainlayoutUser')
@section('content')
    <div class="relative z-0 w-full h-full overflow-hidden">
        <div class="overflow-hidden absolute -z-10 mx-auto right-0 opacity-50">
            <img src="{{ asset('image/background.png') }}" class="" />
        </div>

        <main class="w-full my-10 z-10">
            <header class="mt-10">
                <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                        Ubah Profile</span>
                    Diri.
                </h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 text-center">
                    Yuk perbaiki data diri mu!.
                </p>
            </header>

            <article class="flex items-center justify-center">
                <div
                    class="w-full max-w-sm p-4 bg-white border border-gray-200
          rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800
          dark:border-gray-700">
                    <form class="space-y-6" action="{{ route('updateProfileUser') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="nama" name="nama" id="nama" value="{{ auth()->user()->username }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Nama" />
                        </div>
                        <div>
                            <label for="nim/nip"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM/NIP</label>
                            <input type="nim/nip" name="nim" id="nim/nip" value="{{ auth()->user()->nimNip }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="NIM/NIP" />
                        </div>
                        <div>
                            <label for="no_whatsapp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                WhatsApp</label>
                            <input type="no_whatsapp" name="nomor" id="no_whatsapp"
                                value="{{ auth()->user()->No_WhatsApp }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="No WhatsApp" />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="user_avatar">Upload
                                foto </label>
                            <input name="gambar"
                                class="block w-full text-sm text-gray-900 border @error('gambar') border-red-500 dark:border-red-500 @else border-gray-300 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            @error('gambar')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <input type="hidden" name="id" id="" value="{{ auth()->user()->id }}">
                        <button type="submit"
                            class="cursor-pointer transition-all bg-blue-500 text-white px-6 py-2 rounded-l border-blue-600 border-b-[4px] hover:brightness-110 active:border-b-[2px] active:brightness-90 active:translate-y-[2px] w-full rounded-md">
                            Ubah Profile
                        </button>
                    </form>
            </article>
        </main>
    </div>
@endsection
