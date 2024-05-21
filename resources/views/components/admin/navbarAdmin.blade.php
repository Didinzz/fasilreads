<nav class="fixed top-0 z-50 w-full bg-gradient-to-r to-emerald-600 from-sky-400 border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="{{ route('dashboardAdmin') }}" class="flex ms-2 md:me-24">
                    <img src="{{ asset('image/Group 10.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">FasilReads</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            @if (!auth()->user()->profile)
                                <img class="w-8 h-8 rounded-full"
                                    src="{{ asset('image/profile.png') }}" alt="user photo" />
                            @else
                                <img class="w-8 h-8 rounded-full"
                                    src="{{ asset('storage/' . auth()->user()->profile) }}" alt="user photo" />
                            @endif
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                {{ auth()->user()->username }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                {{ auth()->user()->nimNip }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('profileAdmin') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Profile Diri</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Sign out</a>
                            </li>
                        </ul>

                    </div>
                    <button id="toggleDarkMode" type="button"
                        class="  text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-500 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-500 rounded-lg text-sm p-2.5 mr-3">
                        <i class="fa-solid fa-moon" id="theme-icon"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const isDarkMode = localStorage.getItem('darkMode') === 'enabled';
        if (isDarkMode) {
            document.documentElement.classList.add('dark');
        }
    });

    document.getElementById('toggleDarkMode').addEventListener('click', function() {
        const isDarkMode = document.documentElement.classList.contains('dark');
        if (isDarkMode) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('darkMode', 'disabled');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('darkMode', 'enabled');
        }
    });


    document.addEventListener("DOMContentLoaded", function() {
        const themeToggle = document.getElementById("toggleDarkMode");
        const themeIcon = document.getElementById("theme-icon");

        themeToggle.addEventListener("click", function() {
            if (themeIcon.classList.contains("fa-moon")) {
                themeIcon.classList.remove("fa-moon");
                themeIcon.classList.add("fa-sun");
                // Tambahkan logika untuk mengubah tema ke mode gelap di sini
            } else {
                themeIcon.classList.remove("fa-sun");
                themeIcon.classList.add("fa-moon");
                // Tambahkan logika untuk mengubah tema ke mode terang di sini
            }
        });
    });
</script>
