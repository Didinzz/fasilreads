<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FasilReads | Tambah Buku </title>


    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/app.js') }}">


    {{-- font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e9T9hXmJ58bldgTk+" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    @vite('resources/css/app.css')


</head>

<body class="bg-white dark:bg-gray-900">
    @include('components.admin.navbarAdmin')



    <div class="relative z-0 w-full overflow-hidden pt-10">
        <div class="overflow-hidden absolute -z-10 mx-auto right-0 opacity-50">
            <img src="{{ asset('image/background.png') }}" class="" />
        </div>

        <main class="w-full my-10 z-10">
            <header class="mt-10">
                <h1
                    class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Create</span>
                    Buku.
                </h1>
            </header>
            <article class="flex items-center justify-center">


                <div
                    class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <form class="space-y-6" action="{{ route('store_buku') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="namabuku"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Buku</label>
                            <input type="text" name="namaBuku" id="namabuku" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Nama Buku" />
                        </div>
                        <div>
                            <label for="stok"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok
                                Buku</label>
                            <input type="number" name="stok" id="stok" required
                                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white
        @error('stok') border-red-500 dark:border-red-500 @else border-gray-300 dark:border-gray-500 @enderror"
                                placeholder="Stok Buku" value="{{ old('stok') }}" />
                            @error('stok')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <label for="penerbit"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penerbit</label>
                            <input type="text" name="penerbit" id="penerbit" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Penerbit" />
                        </div>
                        <div>
                            <label for="pengarang"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengarang</label>
                            <input type="text" name="penulis" id="pengarang" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Pengarang" />
                        </div>
                        <div>
                            <label for="kategori"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                            <select id="kategori" name="kategori"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($kategori as $k)
                                    <option value="{{ $k->kategori }}">{{ $k->kategori }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            <label for="deskripsi"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <textarea type="deskripsi" name="deskripsi" id="deskripsi" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 h-40 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Deskripsi"></textarea>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="user_avatar">Upload foto buku</label>
                            <input name="sampul" required
                                class="block w-full text-sm text-gray-900 border @error('sampul') border-red-500 dark:border-red-500 @else border-gray-300 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            @error('sampul')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit"
                            class="cursor-pointer transition-all bg-blue-500 text-white px-6 py-2 border-blue-600 border-b-[4px] hover:brightness-110 active:border-b-[2px] active:brightness-90 active:translate-y-[2px] w-full rounded-lg">
                            create
                        </button>
                    </form>
                </div>

            </article>


            <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
            <script src="{{ asset('assets/js/script.js') }}"></script>
            <script src="https://unpkg.com/@popperjs/core@2"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>





</body>

</html>
