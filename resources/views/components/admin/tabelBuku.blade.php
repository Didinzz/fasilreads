 @extends('layouts.mainlayoutAdmin')
 @section('title', 'Tabel Buku')
 @section('content')
     <div class="p-4 sm:ml-64">

         <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
             @if (session()->has('tambah'))
                 <div id="alert-3"
                     class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                     role="alert">
                     <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 20 20">
                         <path
                             d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                     </svg>
                     <span class="sr-only">Info</span>
                     <div class="ms-3 text-sm font-medium">
                         {{ session('tambah') }}
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
             @if (session()->has('update'))
                 <div id="alert-5" class="flex items-center p-4 rounded-lg bg-yellow-100 dark:bg-gray-800" role="alert">
                     <svg class="flex-shrink-0 w-4 h-4 dark:text-yellow-300" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                         <path
                             d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                     </svg>
                     <span class="sr-only">Info</span>
                     <div class="ms-3 text-sm font-medium text-yellow-800 dark:text-yellow-300">
                         {{ session('update') }}
                     </div>
                     <button type="button"
                         class="ms-auto -mx-1.5 -my-1.5 bg-gray-50 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                         data-dismiss-target="#alert-5" aria-label="Close">
                         <span class="sr-only">Dismiss</span>
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                         </svg>
                     </button>
                 </div>
             @endif
             @if (session()->has('delete'))
                 <div id="alert-2"
                     class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                     role="alert">
                     <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 20 20">
                         <path
                             d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                     </svg>
                     <span class="sr-only">Info</span>
                     <div class="ms-3 text-sm font-medium">
                         {{ session('delete') }}
                     </div>
                     <button type="button"
                         class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                         data-dismiss-target="#alert-2" aria-label="Close">
                         <span class="sr-only">Close</span>
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                         </svg>
                     </button>
                 </div>
             @endif

             <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                 <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                     <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                         <div class="px-6 py-4 bg-white dark:bg-gray-900 shadow">
                             <a href="{{ route('createBuku') }}" class=""><button
                                     class="cursor-pointer transition-all bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 text-white px-6 py-2 rounded-l border-cyan-600 border-b-[4px] hover:brightness-110  active:border-b-[2px] active:brightness-90 active:translate-y-[2px]">
                                     Create
                                 </button></a>
                         </div>
                         <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                             <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                 <tr>

                                     <th scope="col" class="px-6 py-3 text-center">Nomor</th>
                                     <th scope="col" class="px-6 py-3 text-center">gambar</th>
                                     <th scope="col" class="px-6 py-3 text-center">Nama Buku</th>
                                     <th scope="col" class="px-6 py-3 text-center">Stok</th>
                                     <th scope="col" class="px-6 py-3 text-center">Penerbit</th>
                                     <th scope="col" class="px-6 py-3 text-center">Penulis</th>
                                     <th scope="col" class="px-6 py-3 text-center">Kategori</th>
                                     <th scope="col" class="px-6 py-3 text-center">Deskripsi</th>
                                     <th scope="col" class="px-6 py-3 text-center">Action</th>
                                 </tr>
                             </thead>
                             @foreach ($buku as $b)
                                 <tbody>

                                     <tr
                                         class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                         <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white text-center">
                                             {{ $loop->iteration }}
                                         </td>
                                         <td class="p-4">
                                             <img src="{{ asset('storage/' . $b->sampul) }}"
                                                 class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch" />
                                         </td>
                                         <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white text-center">
                                             {{ $b->judul }}
                                         </td>
                                         <td class="px-6 py-4">
                                             <div class="flex items-center">
                                                 <input type="text" id="first_product" value="{{ $b->stokBuku }}"
                                                     disabled
                                                     class="text-center bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                     placeholder="" required />
                                             </div>
                     </div>
                     </td>

                     </td>
                     <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white text-center">
                         {{ $b->Penerbit }}
                     </td>
                     <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white text-center">
                         {{ $b->Penulis }}
                     </td>
                     <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white text-center">
                         {{ $b->kategori }}
                     </td>
                     <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white  text-center">
                         {{ $b->Deskripsi }}
                     </td>
                     <td class="px-6 py-4 flex justify-center space-x-4 items-center text-center">
                         <button data-modal-target="#popup-modal{{ $b->id }}"
                             data-modal-toggle="popup-modal{{ $b->id }}"
                             class="bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 text-white font-bold py-2 px-4 rounded-full"><i
                                 class="fa-solid fa-trash"></i></button>
                         <a href="{{ route('updateBuku', $b->id) }}"
                             class="bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 text-white font-bold py-2 px-4 rounded-full"><i
                                 class="fa-solid fa-pen-to-square"></i></a>
                     </td>

                     </tr>

                     </tbody>

                     {{-- modal --}}

                     <div id="popup-modal{{ $b->id }}" tabindex="-1"
                         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                         <div class="relative p-4 w-full max-w-md max-h-full">
                             <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                 <button type="button"
                                     class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                     data-modal-hide="popup-modal{{ $b->id }}">
                                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 14 14">
                                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                             stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                     </svg>
                                     <span class="sr-only">Close modal</span>
                                 </button>
                                 <div class="p-4 md:p-5 text-center">
                                     <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                         aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 20 20">
                                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                             stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                     </svg>
                                     <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                         Apakah
                                         Anda yakin ingin menghapus buku?</h3>

                                     <a href="{{ route('deleteBuku', $b->id) }}"> <button data-modal-hide="popup-modal"
                                             type="button"
                                             class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">Ya
                                         </button></a>


                                     <button data-modal-hide="popup-modal" type="button"
                                         class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                         cancel</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     {{-- end modal --}}
                     @endforeach

                     </table>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 <script>
     Swal.fire({
         title: "Are you sure?",
         text: "You won't be able to revert this!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "Yes, delete it!"
     }).then((result) => {
         if (result.isConfirmed) {
             Swal.fire({
                 title: "Deleted!",
                 text: "Your file has been deleted.",
                 icon: "success"
             });
         }
     });
 </script>
