<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Fish Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans text-gray-800">
    <!-- NAVBAR -->
    <nav class="fixed w-full bg-blue-900 bg-opacity-80 text-white z-50 shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="font-bold text-xl">E-FISH</div>
            <ul class="flex space-x-6 text-sm font-semibold">
                <li><a href="#home" class="hover:text-blue-300">Home</a></li>
                <li><a href="#tentang" class="hover:text-blue-300">Tentang</a></li>
                <li><a href="#layanan" class="hover:text-blue-300">Layanan</a></li>
                <li><a href="#galeri" class="hover:text-blue-300">Galeri</a></li>
                <li><a href="#kontak" class="hover:text-blue-300">Kontak</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer id="kontak" class="bg-blue-900 text-white py-10 mt-10">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 px-4">

            <div>
                <h3 class="font-bold mb-2">E-FISH</h3>
                <p>Platform jual beli ikan segar dari petani lokal.</p>
            </div>

            <div>
                <h3 class="font-bold mb-2">Contact Us</h3>
                <ul class="space-y-1 text-sm">
                    <li>Whatsapp</li>
                    <li>Telephone</li>
                    <li>Admin</li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold mb-2">Address</h3>
                <p class="text-sm">Indonesia</p>
            </div>

            <div>
                <h3 class="font-bold mb-2">Social Media</h3>
                <ul class="space-y-1 text-sm">
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Tiktok</li>
                    <li>Youtube</li>
                </ul>
            </div>

        </div>
        <p class="text-center text-xs text-blue-200 mt-6">© 2025 E-FISH. All rights reserved.</p>
    </footer>
</body>

</html>
