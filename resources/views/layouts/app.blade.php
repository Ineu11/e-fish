<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Fish Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .logout-btn {
            position: fixed;
            right: 20px;
            bottom: 20px;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            border: none;
            background: #ff4d4d;
            color: white;
            font-size: 22px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logout-btn:hover {
            background: #e04343;
        }
    </style>
</head>

<body class="font-sans text-gray-800">
    <!--Navbar-->
    <nav class="fixed w-full bg-blue-900 bg-opacity-80 text-white z-50 shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="font-bold text-xl">E-FISH</div>
            <ul class="flex space-x-6 text-sm font-semibold">
                <li><a href="#home" class="hover:text-blue-300">Home</a></li>
                <li><a href="#tentang" class="hover:text-blue-300">Tentang</a></li>
                <li><a href="#layanan" class="hover:text-blue-300">Layanan</a></li>
                <li><a href="#galeri" class="hover:text-blue-300">Galeri</a></li>
                 <li><a href="{{ route('order.my') }}" class="hover:text-blue-300">Pesanan <i class="fa fa-shopping-cart mr-1"></i></a></li>
                <li><a href="#kontak" class="hover:text-blue-300">Kontak</a> </li>
            </ul>
        </div>
    </nav>
    
    <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i>
        </button>
    </form>

    <!-- Ieu Mah Manggil Content inti ti welcome.blade.php -->
    <main class="py-20 min-h-screen">
        @yield('content')
    </main>
     
   <!-- Bisi Bade Ngubah Alamat Nu di Kontak Handap Didieu -->
    <section id="kontak" class=" bg-blue-900 text-white py-10 mt-10">
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
    </section>



</body>

</html>
