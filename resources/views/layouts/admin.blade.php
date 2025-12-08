<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="bg-gray-100 flex">

  <aside class="w-64 bg-white shadow-lg min-h-screen p-6">
  <h2 class="text-2xl font-bold mb-6 text-gray-800">Menu Admin</h2>

  <nav class="flex flex-col gap-3">

    <a href="{{ route('admin.dashboard') }}"
       class="px-4 py-2 rounded 
       {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}">
      <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
    </a>

    <a href="{{ route('admin.pembeli.index') }}"
       class="px-4 py-2 rounded 
       {{ request()->routeIs('admin.pembeli.index') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}">
      <i class="fa fa-user" aria-hidden="true"></i> Kelola Akun Pembeli
    </a>

    <a href="{{ route('admin.produk.index') }}"
       class="px-4 py-2 rounded 
       {{ request()->routeIs('admin.produk.index') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}">
     <i class="fa fa-fish"></i>  Kelola Produk
    </a>

    <a href="{{ route('admin.order.index') }}"
       class="px-4 py-2 rounded 
       {{ request()->routeIs('admin.order.index') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}">
      <i class="fa fa-book" aria-hidden="true"></i> Kelola Pesanan
    </a>

  </nav>
</aside>


  <main class="flex-1 p-6">
    @yield('content')
  </main>

</body>
</html>
