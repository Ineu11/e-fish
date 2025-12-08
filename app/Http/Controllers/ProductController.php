<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.produk.index', compact('products'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar' => 'image|max:2048'
        ]);

        $product = Product::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'stok' => $request->stok,
            'harga' => $request->harga,
        ];

        if ($request->hasFile('gambar')) {
            $gambarBaru = $request->file('gambar')->store('produk', 'public');
            $data['gambar'] = $gambarBaru;
        }

        $product->update($data);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'gambar' => 'image'
        ]);

        $gambar = $request->file('gambar')->store('produk', 'public');

        Product::create([
            'nama' => $request->nama,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $gambar
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return back()->with('success', 'Produk berhasil Dihapus');
    }
}
