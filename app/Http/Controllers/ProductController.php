<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Ikan Tuna Segar', 'image' => 'https://via.placeholder.com/300x200?text=Tuna+Segar'],
            ['name' => 'Ikan Kakap Merah', 'image' => 'https://via.placeholder.com/300x200?text=Kakap+Merah'],
            ['name' => 'Udang Vaname', 'image' => 'https://via.placeholder.com/300x200?text=Udang+Vaname'],
            ['name' => 'Cumi-Cumi Segar', 'image' => 'https://via.placeholder.com/300x200?text=Cumi+Segar'],
        ];
        return view('products.index', compact('products'));
    }
}