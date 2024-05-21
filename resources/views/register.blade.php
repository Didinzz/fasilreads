<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FasilReads | @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/app.js') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('faviconnsss.ico') }}">


    {{-- font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e9T9hXmJ58bldgTk+" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    @vite('resources/css/app.css')

    <style>
        .error-message {
            display: block;
            margin-top: 0.25rem;
            font-size: 0.875rem;
            /* Tailwind's text-sm size */
            color: #ef4444;
            /* Tailwind's red-500 color */
            max-width: 300px;
            /* Batasi lebar pesan kesalahan */
        }

        /* Kontrol tata letak input dengan border merah */
        input.border-red-500 {
            border-width: 2px;
            /* Tambahkan lebar border agar lebih jelas */
        }
    </style>


</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-[#a5f5e6]">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14 md:flex-1">
                <!-- Added md:flex-1 here -->
                <span class="mb-3 text-4xl font-bold">Register Here</span>
                <span class="font-light text-gray-400 mb-8">
                    Daftarkan dirimu segera!
                </span>
                <form action="{{ route('regisData') }}" method="POST">
                    @csrf

                    <div class="py-4">
                        <span class="mb-2 text-md">NIM/NIP</span>
                        <input type="text"
                            class="w-full p-2 border {{ $errors->has('nim') ? 'border-red-500' : 'border-gray-300' }} rounded-md placeholder:font-light placeholder:text-gray-500"
                            name="nim" required id="nim" />
                        @if ($errors->has('nim'))
                            <span class="text-red-500 text-sm error-message">{{ $errors->first('nim') }}</span>
                        @endif
                    </div>
                    <div class="py-4">
                        <span class="mb-2 text-md">Nama</span>
                        <input type="text"
                            class="w-full p-2 border {{ $errors->has('username') ? 'border-red-500' : 'border-gray-300' }} rounded-md placeholder:font-light placeholder:text-gray-500"
                            name="username" required id="username" />
                        @if ($errors->has('username'))
                            <span class="text-red-500 text-sm error-message">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="py-4 relative">
                        <span class="mb-2 text-md">Password</span>
                        <div class="relative">
                            <input type="password" name="password" id="pass"
                                class="w-full p-2 pr-10 border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} rounded-md placeholder:font-light placeholder:text-gray-500" />
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3"
                                style="top: 50%; transform: translateY(-50%);">
                                <i class="fas fa-eye-slash text-gray-400 cursor-pointer toggle-password"></i>
                            </span>
                        </div>
                        @if ($errors->has('password'))
                            <span
                                class="text-red-500 text-sm error-message bg-red-100 p-1 rounded-md">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="py-4">
                        <span class="mb-2 text-md">No WhatsApp</span>
                        <input type="text"
                            class="w-full p-2 border {{ $errors->has('nomor') ? 'border-red-500' : 'border-gray-300' }} rounded-md placeholder:font-light placeholder:text-gray-500"
                            name="nomor" required id="no_whatsapp" />
                        @if ($errors->has('nomor'))
                            <span class="text-red-500 text-sm error-message">{{ $errors->first('nomor') }}</span>
                        @endif
                    </div>

                    <button type="submit"
                        class="cursor-pointer transition-all bg-black text-white px-6 py-2 border-gray-600 border-b-[3px] hover:brightness-110 active:border-b-[2px] active:brightness-90 active:translate-y-[2px] w-full rounded-lg h-10">
                        Register
                    </button>
                </form>


            </div>
            <!-- right side -->
            <div class="relative md:w-[500px]">
                <!-- Added width setting for the image container -->
                <img src="{{ url('/image/Welcome! (1).png') }}" alt="img"
                    class="w-full h-full rounded-r-2xl md:block object-fill" />
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const togglePassword = document.querySelector('.toggle-password');
            const passwordInput = document.getElementById('pass');

            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
                this.classList.toggle('fa-eye');
            });
        });
    </script>

</body>

</html>
