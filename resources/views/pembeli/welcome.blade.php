<!-- content.blade.php -->
@extends('layouts.app')
@section('content')

    <!-- HERO SECTION -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">

        <!-- Background Slides -->
        <div id="sliderBg" class="absolute inset-0 bg-cover bg-center transition-all duration-[1500ms]">
        </div>

        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Konten Hero -->
        <div class="relative text-center text-white max-w-2xl px-4">
            <h1 class="text-4xl md:text-5xl font-bold">SELAMAT DATANG DI WEBSITE KAMI</h1>
            <p class="mt-4 text-sm md:text-base">Kami menghadirkan ikan segar berkualitas langsung dari petani ikan lokal.
                Tanpa perantara, tanpa stok lama.</p>
            <a href="#produk" class="inline-block mt-6 bg-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">
                Lihat Produk
            </a>
        </div>
    </section>

    <!-- SCRIPT SLIDER -->
    <script>
        const images = [
            "{{ asset('/asset-img/bg-ikan1.jpeg') }}",
            "{{ asset('/asset-img/bg-ikan2.jpeg') }}",
            "{{ asset('/asset-img/bg-ikan3.jpeg') }}"
        ];

        let index = 0;
        const slider = document.getElementById("sliderBg");

        function changeBg() {
            slider.style.backgroundImage = `url('${images[index]}')`;
            slider.style.opacity = 0;

            setTimeout(() => {
                slider.style.opacity = 1;
            }, 100);

            index = (index + 1) % images.length;
        }

        changeBg();
        // Ganti gambar setiap 4 detik
        setInterval(changeBg, 4000);
    </script>

    <!-- TENTANG KAMI -->
    <section id="tentang" class="min-h-screen py-20 bg-gray-100">
        <div class="max-w-5xl mx-auto px-4 text-center">

            <div class="flex justify-center items-center mb-4">
                <span class="tracking-[0.4em] uppercase text-blue-400 font-semibold text-sm">
                    E - F I S H
                </span>
            </div>

            <div class="flex justify-center items-center mb-10">
                <div class="w-24 h-px bg-blue-300"></div>
                <img src="icon-fish.png" class="mx-3 w-8 opacity-80">
                <div class="w-24 h-px bg-blue-300"></div>
            </div>

            <h2 class="text-2xl md:text-3xl font-extrabold mb-10 text-gray-800">
                TENTANG KAMI
            </h2>

            <div class="flex flex-col md:flex-row justify-center items-center gap-8 mb-10">
                <img src="{{ asset('asset-img/bg-ikan1.jpeg') }}" class="w-40 h-40 object-cover rounded-full shadow-md">
                <img src="{{ asset('asset-img/bg-ikan2.jpeg') }}" class="w-40 h-40 object-cover rounded-full shadow-md">
                <img src="{{ asset('asset-img/bg-ikan3.jpeg') }}" class="w-40 h-40 object-cover rounded-full shadow-md">
            </div>

            <p class="text-gray-700 leading-relaxed max-w-3xl mx-auto text-sm md:text-base">
                Kami adalah platform yang menghubungkan petani ikan lokal dengan pelanggan yang mencari ikan segar dan
                berkualitas.
                Setiap ikan yang kami kirim berasal langsung dari kolam budidaya, bukan stok lama di gudang.
                Kami percaya bahwa ikan segar tidak harus mahal. Dengan membeli langsung dari petani, Anda membantu menjaga
                rantai pasok tetap pendek dan harga tetap adil.
                Kami bekerja sama dengan petani yang menerapkan sistem budidaya bersih dan berkelanjutan.
                Tujuannya sederhana: menghadirkan kesegaran alami dari kolam ke meja makan Anda, dengan rasa yang tetap
                terjaga.
            </p>

        </div>
    </section>


    <!-- VISI MISI -->
    <section class="min-h-screen py-20 bg-blue-100">
        <div class="max-w-6xl mx-auto px-4">

            <!-- VISI -->
            <div class="grid md:grid-cols-2 gap-10 items-center mb-20">

                <!-- Text -->
                <div class="text-left">
                    <h3 class="text-2xl font-bold mb-4">VISI</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Menjadi platform terpercaya yang menghadirkan ikan segar berkualitas langsung dari petani lokal ke
                        konsumen
                        di seluruh Indonesia, dengan sistem yang adil, cepat, dan berkelanjutan.
                    </p>
                </div>

                <!-- Images -->
                <div class="flex gap-6 justify-center md:justify-end">
                    <div class="w-44 h-44 bg-gray-300 rounded-lg shadow">
                        <img class="w-44 h-44 rounded-lg shadow" src="{{ asset('asset-img/bg-ikan1.jpeg') }}" alt="">
                    </div>
                    <div class="w-44 h-44 bg-gray-300 rounded-lg shadow">
                        <img class="w-44 h-44 rounded-lg shadow" src="{{ asset('asset-img/bg-ikan2.jpeg') }}" alt="">
                    </div>
                </div>

            </div>


            <!-- MISI -->
            <div class="grid md:grid-cols-2 gap-10 items-center">

                <!-- Images -->
                <div class="flex gap-6 justify-center md:justify-start">
                    <div class="w-44 h-44 bg-gray-300 rounded-lg shadow">
                        <img class="w-44 h-44 rounded-lg shadow" src="{{ asset('asset-img/bg-ikan3.jpeg') }}" alt="">
                    </div>
                    <div class="w-44 h-44 bg-gray-300 rounded-lg shadow">
                        <img class="w-44 h-44 rounded-lg shadow" src="{{ asset('asset-img/bg-ikan1.jpeg') }}" alt="">
                    </div>
                </div>

                <!-- Text -->
                <div class="text-left md:text-right">
                    <h3 class="text-2xl font-bold mb-4">MISI</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Kami berkomitmen untuk memperkuat kesejahteraan petani ikan lokal melalui pemasaran digital yang
                        transparan.
                        Kami menjaga kualitas setiap produk dengan memastikan ikan dipanen sesuai pesanan.
                        Kami menyediakan layanan pengiriman cepat agar kesegaran tetap terjaga.
                        Kami membangun kesadaran konsumen tentang pentingnya mendukung hasil budidaya lokal yang
                        berkelanjutan.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- LAYANAN KAMI -->
    <section id="layanan" class="min-h-screen py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-extrabold mb-14 tracking-wide">LAYANAN KAMI</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

                <!-- CARD 1 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v12m6-6H6m15 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="font-bold text-lg">Harga Murah</p>
                    <p class="text-sm text-gray-600">Produk bagus dengan harga terjangkau</p>
                </div>

                <!-- CARD 2 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="font-bold text-lg">Berkualitas</p>
                    <p class="text-sm text-gray-600">Produk terbaik langsung dari petani</p>
                </div>

                <!-- CARD 3 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-purple-500" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 10h11m-6-6h10a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2 0 012-2z" />
                        </svg>
                    </div>
                    <p class="font-bold text-lg">Praktis</p>
                    <p class="text-sm text-gray-600">Pembelian mudah dan cepat</p>
                </div>

                <!-- CARD 4 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0zm6 8a9 9 0 10-18 0h18z" />
                        </svg>
                    </div>
                    <p class="font-bold text-lg">Pelayanan</p>
                    <p class="text-sm text-gray-600">Respon cepat & ramah</p>
                </div>

            </div>
        </div>
    </section>


    <!-- GALERI -->
    <section id="galeri" class="py-20 min-h-screen bg-blue-100">
        <div class="max-w-6xl mx-auto px-4 text-center">

            <!-- TITLE -->
            <h2 class="text-3xl font-extrabold mb-12 tracking-wide text-blue-900">
                GALERI PRODUK
            </h2>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">

                <!-- CARD 1 -->
                @foreach ($products as $product)
                    <div
                        class="bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl
            transform hover:-translate-y-2 transition-all duration-300">

                        <div class="overflow-hidden rounded-lg">
                            <img src="{{ asset('storage/' . $product->gambar) }}"
                                class="w-full h-48 object-cover rounded-lg
                   transform hover:scale-110 transition duration-500">
                        </div>

                        <div class="mt-4 text-left">
                            <div class="flex items-center gap-2 mb-1">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>
                                <p class="font-bold text-lg">{{ $product->nama }}</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-3">Stok : {{ $product->stok }} Kg</p>
                            <p class="text-sm text-gray-600 mb-3">Rp {{ number_format($product->harga, 0, ',', '.') }} /Kg</p>
                        </div>

                        <a href="/order/{{ $product->id }}"
                            class="w-full mt-2 bg-blue-600 text-white px-2 py-2 rounded-lg
             hover:bg-blue-700 hover:-translate-y-1 transition-all duration-300">
                            <i class="fa fa-shopping-cart"></i> Order Now
                        </a>
                    </div>
                @endforeach




            </div>
        </div>
    </section>
@endsection
