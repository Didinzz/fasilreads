@extends('layouts.mainlayoutUser')
@section('title', 'Profile')
@section('content')
    <div class="relative z-0 w-full h-full overflow-hidden">
        <div class="overflow-hidden absolute -z-10 mx-auto right-0 opacity-50">
            <img src="{{ asset('image/background.png') }}" class="" />
        </div>

        <main class="w-full my-10 z-10">
            <header class="mt-10">
                <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Profile</span>
                    Diri.
                </h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 text-center">
                    Yuk cek kembali data diri mu!.
                </p>
            </header>

            <article>

                <div class="p-4 left-5">
                    <div class="bg-blue-200 relative overflow-x-auto shadow-md sm:rounded-lg dark:bg-gray-700 outline-2">
                        <div class="overflow-hidden shadow rounded-lg border">
                            <div class="px-4 py-5 sm:px-6">
                                @if (!auth()->user()->profile)
                                    <img src="{{ asset('image/profile.png') }}" alt="" class="rounded-md w-36 h-44">
                                @else
                                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" alt=""
                                        class="rounded-md w-36 h-44">
                                @endif

                                <h3 class="mt-3 text-lg leading-6 font-medium text-gray-900 dark:text-white ">
                                    <b> Hi, User! </b>
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-white">
                                    This is some information about the User.
                                </p>
                            </div>
                            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                                <div class="sm:divide-y sm:divide-gray-200">
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <div class="text-sm font-medium text-gray-500 dark:text-white">Nama</div>
                                        <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">
                                            {{ auth()->user()->username }}
                                        </div>
                                    </div>
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <div class="text-sm font-medium text-gray-500 dark:text-white">NIM/NIP</div>
                                        <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">
                                            {{ auth()->user()->nimNip }}</div>
                                    </div>
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <div class="text-sm font-medium text-gray-500 dark:text-white">WhatsApp</div>
                                        <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">
                                            {{ auth()->user()->No_WhatsApp }}</div>
                                    </div>

                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <td class="px-6 py-4 bg-white dark:bg-black ">
                                            <a href="{{ route('editProfileUser') }}" class=" ">
                                                <button type="submit"
                                                    class="cursor-pointer transition-all bg-green-400 text-white px-6 py-2 rounded-l border-green-500 border-b-[4px] hover:brightness-110 active:border-b-[2px] active:brightness-90 active:translate-y-[2px] w-full rounded-lg">
                                                    Ubah Profile
                                                </button></a>
                                        </td>
                                        <tr>
                                    </div>
                                    </dl>
                                </div>
                            </div>
                        </div>

            </article>
        @endsection
