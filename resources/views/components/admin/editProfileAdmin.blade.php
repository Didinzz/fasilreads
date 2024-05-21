@extends('layouts.mainlayoutAdmin')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2  border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative px-5 py-3 overflow-x-auto shadow-md sm:rounded-lg">
                <form class="space-y-6" action="{{ route('updateProfileAdmin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <input type="hidden" name="id" id="" value="{{ auth()->user()->id }}">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ auth()->user()->username }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Nama" />
                    </div>
                    <div>
                        <label for="nim/nip"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM/NIP</label>
                        <input type="text" name="nim" id="nim/nip" value="{{ auth()->user()->nimNip }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="NIM/NIP" />
                    </div>
                    <div>
                        <label for="no_whatsapp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                            WhatsApp</label>
                        <input type="text" name="nomor" id="no_whatsapp" value="{{ auth()->user()->No_WhatsApp }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="No WhatsApp" />
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                            foto </label>
                        <input name="gambar"
                            class="block w-full text-sm text-gray-900 border @error('gambar') border-red-500 dark:border-red-500 @else border-gray-300 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        @error('gambar')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="cursor-pointer transition-all bg-blue-500 text-white px-6 py-2 rounded-l border-blue-600 border-b-[4px] hover:brightness-110 active:border-b-[2px] active:brightness-90 active:translate-y-[2px] w-full rounded-md">
                        Ubah Profile
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Set nilai default untuk input file setelah halaman dimuat
        document.getElementById("gambar").value = "{{ asset('storage/' . auth()->user()->profile) }}";
    });
</script>
