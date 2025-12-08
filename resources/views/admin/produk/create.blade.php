@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')

<header class="flex items-center justify-between mb-6">
  <h1 class="text-3xl font-bold text-gray-800">Tambah Produk</h1>

  <a href="{{ route('admin.produk.index') }}"
    class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow-md">
   <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
  </a>
</header>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br p-6">

  <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-200 w-full max-w-xl transform transition hover:shadow-2xl">

    @if ($errors->any())
    <div class="mb-4 bg-red-100 border border-red-300 text-red-700 p-3 rounded-lg">
      <ul class="text-sm">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Produk Baru</h2>

    <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
      @csrf

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700">Nama Produk</label>
        <input type="text" name="nama" value="{{ old('nama') }}"
          class="w-full border-2 border-gray-300 rounded-xl p-3 focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none" required>
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1 text-gray-700">Stok / Kg</label>
          <input type="number" name="stok" value="{{ old('stok') }}"
            class="w-full border-2 border-gray-300 rounded-xl p-3 focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none" required>
        </div>

        <div>
          <label class="block text-sm font-medium mb-1 text-gray-700">Harga / Kg</label>
          <input type="number" name="harga" value="{{ old('harga') }}"
            class="w-full border-2 border-gray-300 rounded-xl p-3 focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none" required>
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700">Gambar Produk</label>
        <input type="file" name="gambar"
          class="w-full border-2 border-gray-300 rounded-xl p-3 bg-white">
      </div>

      <button type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold tracking-wide px-4 py-3 rounded-xl shadow-md transition">
       <i class="fa fa-save" aria-hidden="true"></i> Simpan Produk
      </button>
    </form>
  </div>
</div>


@endsection
