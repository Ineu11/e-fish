<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::where('status', '!=', 'selesai')
            ->where('status', '!=', 'dibatalkan')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.order.index', compact('orders'));
    }
    public function myOrders()
    {
        $orders = Order::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pembeli.order.index', compact('orders'));
    }
    public function create($id)
    {
        $product = Product::findOrFail($id);
        $user = auth()->user();
        $orders = Order::with('product')
            ->where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pembeli.order', compact('product', 'user', 'orders'));
    }
    
    public function store(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'qty' => 'required|numeric|min:1',
            'product_id' => 'required|exists:products,id'
        ]);

        $product = Product::find($request->product_id);
        if ($request->qty > $product->stok) {
            return back()->with('error', 'Stok tidak mencukupi');
        }
        $totalHarga = $product->harga * $request->qty;
        $order = Order::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'qty' => $request->qty,
            'total_harga' => $totalHarga,
            'alamat' => $request->alamat,
            'no_wa' => $request->no_wa,
        ]);

        $product = Product::find($request->product_id);
        $product->stok = $product->stok - $request->qty;
        $product->save();
        
        return redirect('https://wa.me/+6285721762643?text=Saya%20'.$user->name. '%20ingin%20melakukan%20pembayaran%20pesanan%20ID:%20' . $order->id);
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->status = $request->status;
        $order->save();

        return back()->with('success', 'Status pesanan berhasil diubah menjadi ' . $request->status);
    }
}
