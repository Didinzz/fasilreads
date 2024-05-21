@section('title', 'Reminder')
@section('reminder', ' bg-blue-700 md:dark:text-blue-500')

@extends('layouts.mainlayoutUser')


@section('content')
    {{-- {{ $peminjaman->nama_buku }} --}}
    <div class="relative z-0 w-full h-full overflow-hidden">
        <div class="overflow-hidden absolute -z-10 mx-auto right-0 opacity-50">
            <img src="{{ url('/image/background.png') }}" class="" />
        </div>

        <main class="w-full my-10 z-10">
            <header class="mt-10">
                <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Pengingat
                        Pengembalian </span>
                    Buku.
                </h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 text-center">
                    Yuk jangan lupa untuk kembalikan buku yang telah dipinjam.
                </p>
            </header>
            <article>
                <div class="container mx-5 px-5 my-8 grid gap-6 md:grid-cols-2 ">
                    @foreach ($peminjaman as $p)
                        @if ($p->nim == auth()->user()->nimNip && $p->status_buku == 'dipinjam')
                            <a href="#"
                                class="flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 md:p-0 md:m-0">
                                <img class="object-cover w-24 h-24 md:w-64 md:h-auto md:max-h-[200px] md:rounded-none md:rounded-l-lg"
                                    src="{{ asset('storage/' . $p->gambar) }}" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $p->nama_buku }}
                                    </h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Batas pengembalian buku
                                        pada:</p>
                                    <div id="countdown{{ $p->id }}" class="text-center text-2xl bg-green-300 font-bold px-3 rounded "></div>
                                </div>
                            </a>
                        @endif
                    @endforeach




                </div>


            </article>
            {{-- </main> --}}
        @endsection

        <script>
            @foreach ($peminjaman as $p)

                var tanggalMulai{{ $p->id }} = new Date("{{ $p->tanggal_mulai }}");
                var tanggalSelesai{{ $p->id }} = new Date("{{ $p->tanggal_selesai }}");
                var selisih{{ $p->id }} = tanggalSelesai{{ $p->id }} - tanggalMulai{{ $p->id }};

                // Hitung countdown
                var countdown{{ $p->id }} = setInterval(function() {
                    var now = new Date().getTime();
                    var selisihWaktu = selisih{{ $p->id }} - (now - tanggalMulai{{ $p->id }});
                    var hari = Math.floor(selisihWaktu / (1000 * 60 * 60 * 24));
                    var jam = Math.floor((selisihWaktu % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var menit = Math.floor((selisihWaktu % (1000 * 60 * 60)) / (1000 * 60));
                    var detik = Math.floor((selisihWaktu % (1000 * 60)) / 1000);
                    document.getElementById("countdown{{ $p->id }}").innerHTML =  hari +
                        " hari " + jam + " jam " + menit + " menit ";
                    if (selisihWaktu < 0) {
                        clearInterval(countdown{{ $p->id }});
                        document.getElementById("countdown{{ $p->id }}").innerHTML = "Waktu telah habis";
                    }
                }, 1000);
            @endforeach
        </script>



        {{-- <script>
            // Fungsi untuk menghitung dan memperbarui countdown
            function updateCountdown(endDate, elementId) {
                const countdown = setInterval(function() {
                    const now = new Date().getTime();
                    const distance = endDate - now;
                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor(
                        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                    );
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    const countdownElement = document.getElementById(elementId);
                    if (countdownElement) {
                        countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
                        if (distance < 0) {
                            clearInterval(countdown);
                            countdownElement.innerHTML = "Countdown Selesai";
                        }
                    }
                }, 1000);
            }

            // Tanggal akhir untuk masing-masing countdown
            const endDate1 = new Date("2025-01-01").getTime();
            const endDate2 = new Date("2025-02-01").getTime();
            const endDate3 = new Date("2025-03-01").getTime();
            const endDate4 = new Date("2025-04-01").getTime();

            // Memperbarui countdown untuk masing-masing tanggal akhir
            updateCountdown(endDate1, "countdown1");
            updateCountdown(endDate2, "countdown2");
            updateCountdown(endDate3, "countdown3");
            updateCountdown(endDate4, "countdown4");
        </script> --}}
