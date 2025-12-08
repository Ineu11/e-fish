@extends('layouts.admin')

@section('title', 'Kelola Pesanan')

@section('content')
@if (session('success'))
<div id="alert"
  class="mb-4 bg-green-600 text-white px-4 py-2 rounded-lg shadow">
  {{ session('success') }}
</div>

<script>
  setTimeout(() => {
    const alert = document.getElementById('alert');
    if(alert) alert.style.display = 'none';
  }, 2000);
</script>
@endif
<header class="flex items-center justify-between mb-6">
  <h1 class="text-3xl font-bold text-gray-800">Kelola Pesanan</h1>
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit"
      class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow-md">
     <i class="fa fa-sign-out" aria-hidden="true"></i> Keluar
    </button>
  </form>
</header>

<div class="bg-white rounded-xl shadow-lg p-4 border border-gray-200">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-xl font-semibold text-gray-700">Daftar Pesanan</h2>
    <span class="text-sm text-gray-500">{{ $orders->count() }} Pesanan Belum Selesai</span>
  </div>

  <table class="w-full text-left">
    <thead class="bg-blue-600 text-white">
      <tr>
        <th class="p-3">Pembeli</th>
        <th class="p-3">Produk</th>
        <th class="p-3">Qty</th>
        <th class="p-3">Total</th>
        <th class="p-3">WA</th>
        <th class="p-3">Alamat</th>
        <th class="p-3">Status</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($orders as $order)
      <tr class="border-b border-gray-200 hover:bg-gray-50">
        <td class="p-3 font-medium">{{ $order->user->name }}</td>
        <td class="p-3">{{ $order->product->nama }}</td>
        <td class="p-3">{{ $order->qty }} Kg</td>
        <td class="p-3 text-blue-600 font-semibold">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</td>
        <td class="p-3">{{ $order->no_wa }}</td>
        <td class="p-3">{{ $order->alamat }}</td>
        <td class="p-3">
          <form method="POST" action="{{ route('admin.order.status', $order->id) }}">
            @csrf
            <select name="status" onchange="this.form.submit()" class="border rounded-lg px-3 py-1 shadow-sm text-sm">
              <option {{ $order->status === 'diproses' ? 'selected' : '' }}>diproses</option>
              <option {{ $order->status === 'dikirim' ? 'selected' : '' }}>dikirim</option>
              <option {{ $order->status === 'selesai' ? 'selected' : '' }}>selesai</option>
              <option {{ $order->status === 'dibatalkan' ? 'selected' : '' }}>dibatalkan</option>
            </select>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
