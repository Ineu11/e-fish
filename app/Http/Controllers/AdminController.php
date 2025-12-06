<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $orders = Order::with('product', 'user')->latest()->get();
        return view('admin.dashboard', compact('orders'));
    }

    public function updateStatus(Request $request, $id)
    {
        Order::find($id)->update(['status' => $request->status]);
        return back();
    }

    public function pembeli()
    {
        $users = User::where('role', 'pembeli')->get();
        return view('admin.pembeli.index', compact('users'));
    }

    public function activatePembeli($id)
    {
        $user = User::findOrFail($id);
        $user->active = 1;
        $user->save();

        return redirect()->route('admin.pembeli.index');
    }

    public function deletePembeli($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.pembeli.index');
    }
}
