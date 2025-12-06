@extends('layouts.admin')

@section('title', 'Kelola Produk')

@section('content')
@if (session('success'))
<div id="notif"
  class="fixed top-5 right-5 bg-green-600 text-white px-4 py-2 rounded-lg shadow-lg opacity-0 transition duration-700">
  {{ session('success') }}
</div>

<script>
  const notif = document.getElementById("notif");
  setTimeout(() => notif.classList.remove("opacity-0"), 50);
  setTimeout(() => notif.classList.add("opacity-0"), 2500);
</script>
@endif
<header class="flex items-center justify-between mb-6">
  <h1 class="text-3xl font-bold text-gray-800">Kelola Produk</h1>

  <div class="flex items-center gap-3">
    <a href="{{ route('admin.produk.create') }}"
      class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg shadow-md">
      Tambah Produk
    </a>

    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit"
        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow-md">
        Keluar
      </button>
    </form>
  </div>
</header>

<div class="bg-white rounded-xl shadow-lg p-4 border border-gray-200">

  <div class="flex items-center justify-between mb-4">
    <h2 class="text-xl font-semibold text-gray-700">Daftar Produk</h2>
    <span class="text-sm text-gray-500">{{ $products->count() }} Produk</span>
  </div>

  <table class="w-full text-left">
    <thead class="bg-blue-600 text-white">
      <tr>
        <th class="p-3">Gambar</th>
        <th class="p-3">Nama</th>
        <th class="p-3">Stok</th>
        <th class="p-3">Harga</th>
        <th class="p-3">Aksi</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($products as $product)
      <tr class="border-b border-gray-200 hover:bg-gray-50">
        <td class="p-3">
          <img src="{{ asset('storage/' . $product->gambar) }}" class="w-16 h-16 object-cover rounded">
        </td>

        <td class="p-3 font-medium">{{ $product->nama }}</td>
        <td class="p-3">{{ $product->stok }}</td>
        <td class="p-3 text-blue-600 font-semibold">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>

        <td class="p-3 flex gap-2">
          <a href="{{ route('admin.produk.edit', $product->id) }}"
            class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
            Edit
          </a>

          <form action="{{ route('admin.produk.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
              onclick="return confirm('Hapus produk ini?')"
              class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
              Hapus
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
