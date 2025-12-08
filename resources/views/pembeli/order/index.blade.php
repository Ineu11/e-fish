@extends('layouts.app')
@section('title', 'Pesanan Saya')
@section('content')

    <div class="max-w-7xl mx-auto" style="padding: 8%">
      <a href="{{ route('welcome') }}"
          class="inline-block mb-4 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow-md">
         <i class="fa fa-arrow-left"></i> Kembali
      </a>
        <h2 class="text-2xl font-bold mb-4">Pesanan Saya</h2>

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="w-full text-sm text-left">
                <thead class="bg-blue-700 text-white">
                    <tr>
                        <th class="px-4 py-3">ID Pesanan</th>
                        <th class="px-4 py-3">Produk</th>
                        <th class="px-4 py-3">Jumlah</th>
                        <th class="px-4 py-3">Total Harga</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($orders as $order)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-3 font-semibold">{{ $order->id }}</td>
                            <td class="px-4 py-3">{{ $order->product->nama }}</td>
                            <td class="px-4 py-3">{{ $order->qty }}</td>
                            <td class="px-4 py-3 text-blue-700 font-medium">Rp {{ number_format($order->total_harga) }}</td>
                            <td class="px-4 py-3">
                                <span
                                    class="px-3 py-1 rounded-lg 
                            @if ($order->status == 'menunggu') bg-yellow-400 text-black
                            @elseif($order->status == 'diproses') bg-blue-500 text-white
                            @elseif($order->status == 'selesai') bg-green-500 text-white
                            @elseif($order->status == 'dibatalkan') bg-red-500 text-white @endif">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
