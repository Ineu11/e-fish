@extends('layouts.app')

@section('title', 'Form Pemesanan')

@section('content')
    @if (session('error'))
        <div id="notif"
            class="fixed top-2 right-5 bg-red-600 text-white px-8 py-3 rounded-lg shadow-lg opacity-0 transition duration-700"
            style="margin-top: 5%" style="padding-bottom: 10%">
            {{ session('error') }}
        </div>

        <script>
            const notif = document.getElementById("notif");
            setTimeout(() => notif.classList.remove("opacity-0"), 50);
            setTimeout(() => notif.classList.add("opacity-0"), 2500);
        </script>
    @endif

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-6 border border-gray-200" style="padding-top: 3%">
        <h1 class="text-3xl font-bold text-blue-900 mb-6 text-center">Form Pemesanan Produk</h1>

        <a href="{{ route('welcome') }}" class="inline-block mb-4 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow-md">
           <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
        </a>

        <div class="mb-6 flex gap-6">
            <img src="{{ asset('storage/' . $product->gambar) }}" class="w-40 h-40 object-cover rounded-lg shadow-md">

            <div>
                <p class="text-xl font-bold text-gray-800">{{ $product->nama }}</p>
                <p class="text-blue-700 font-semibold mt-1">
                    Rp {{ number_format($product->harga, 0, ',', '.') }}
                </p>
                <p class="text-sm text-gray-600 mt-2">Stok tersedia. {{ $product->stok }}</p>
            </div>
        </div>

        <form action="{{ route('order.store') }}" method="POST" class="space-y-4">
            @csrf

            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" id="price" value="{{ $product->harga }}">

            <div>
                <label class="block text-sm font-medium mb-1">Nama Pembeli</label>
                <input value="{{ $user->name }}" disabled class="w-full border rounded p-2 bg-gray-100">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Nomor WhatsApp</label>
                <input type="number" name="no_wa" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Jumlah Pesanan / Kg</label>
                <input type="number" id="qty" name="qty" min="1" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Alamat Lengkap</label>
                <textarea name="alamat" class="w-full border rounded p-2" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label class="block text-sm font-medium mb-1">Total Bayar</label>
                <input type="text" id="total" readonly class="border rounded w-full p-2 bg-gray-100">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold">
                Pesan Sekarang
            </button>
        </form>
    </div>

    <script>
        function updateTotal() {
            let price = document.getElementById('price').value;
            let qty = document.getElementById('qty').value;
            let total = price * qty;

            if (qty) {
                document.getElementById('total').value = "Rp " + total.toLocaleString('id-ID');
            } else {
                document.getElementById('total').value = "";
            }
        }
        document.getElementById('qty').addEventListener('input', updateTotal);
    </script>
@endsection
