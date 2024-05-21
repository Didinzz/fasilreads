@extends('layouts.mainlayoutAdmin')
@section('title', 'Profile Admin')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="overflow-hidden shadow rounded-lg bor   der">
                    <div class="px-4 py-5 sm:px-6">
                        @if (!auth()->user()->profile)
                        <img src="{{ asset('image/profile.png') }}" alt="" @else <img
                                src="{{ asset('storage/' . auth()->user()->profile) }}" alt=""
                                class="rounded-md w-24 h-32">
                        @endif
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                            <b class="dark:text-white"> Hi, {{ auth()->user()->username }}! </b>
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-white">
                            This is some information about the Admin.
                        </p>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <div class="sm:divide-y sm:divide-gray-200">
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <div class="text-sm font-medium text-gray-500 dark:text-white">Nama</div>
                                <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 dark:text-white">
                                    {{ auth()->user()->username }}</div>
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
                                    <a href="{{ route('editProfileAdmin') }}"
                                        class=" ">
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
            @endsection
