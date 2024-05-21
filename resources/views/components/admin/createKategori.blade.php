@extends('layouts.mainlayoutAdmin')
@section('title', 'Tambah Kategori')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-7">
                <form class="space-y-6 mb-4" action="{{ route('storeKategori') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="kategor"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <input type="text" name="kategori" id="kategor" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Kategori" />
                    </div>
                    <div>
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <input type="deskripsi" name="deskripsi" id="deskripsi" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Deskripsi" />
                    </div>
                    <div>
                        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                            Gambar</label>
                        <input name="gambar" id="gambar" type="file" required
                            class="block w-full text-sm text-gray-900 border rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:placeholder-gray-400
        @error('gambar') border-red-500 dark:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                            aria-describedby="user_avatar_help" />
                        @error('gambar')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="cursor-pointer transition-all bg-blue-500 text-white px-6 py-2 rounded-l border-blue-600 border-b-[4px] hover:brightness-110 active:border-b-[2px] active:brightness-90 active:translate-y-[2px] w-full">
                        create
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
