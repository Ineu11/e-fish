@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')

<header class="flex items-center justify-between mb-6">
  <h1 class="text-3xl font-bold text-gray-800">Tambah Produk</h1>

  <a href="{{ route('admin.produk.index') }}"
    class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow-md">
    Kembali
  </a>
</header>

<div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200 max-w-xl">

  @if ($errors->any())
  <div class="mb-4 bg-red-100 border border-red-300 text-red-700 p-3 rounded">
    <ul class="text-sm">
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>
      <label class="block text-sm font-medium mb-1">Nama Produk</label>
      <input type="text" name="nama" value="{{ old('nama') }}"
        class="w-full border rounded p-2 focus:ring focus:ring-blue-200" required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">Stok</label>
      <input type="number" name="stok" value="{{ old('stok') }}"
        class="w-full border rounded p-2 focus:ring focus:ring-blue-200" required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">Harga</label>
      <input type="number" name="harga" value="{{ old('harga') }}"
        class="w-full border rounded p-2 focus:ring focus:ring-blue-200" required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-1">Gambar Produk</label>
      <input type="file" name="gambar"
        class="w-full border rounded p-2 bg-white">
    </div>

    <button type="submit"
      class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded shadow-md">
      Simpan Produk
    </button>
  </form>

</div>

@endsection
