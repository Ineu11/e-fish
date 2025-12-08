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
        // Penjualan per minggu
        $weeklySales = \App\Models\Order::selectRaw('YEARWEEK(created_at) as minggu, SUM(total_harga) as total')
            ->groupBy('minggu')
            ->orderBy('minggu')
            ->pluck('total');

        $weeklyLabels = \App\Models\Order::selectRaw('YEARWEEK(created_at) as minggu')
            ->groupBy('minggu')
            ->orderBy('minggu')
            ->pluck('minggu');

        // Penjualan per bulan
        $monthlySales = \App\Models\Order::selectRaw('MONTH(created_at) as bulan, SUM(total_harga) as total')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total');

        $monthlyLabels = \App\Models\Order::selectRaw('MONTH(created_at) as bulan')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('bulan');

        $dailyUsers = \App\Models\User::selectRaw('DATE(created_at) as tanggal, COUNT(*) as total')
            ->groupBy('tanggal')
            ->orderBy('tanggal')
            ->pluck('total');

        $dailyUserLabels = \App\Models\User::selectRaw('DATE(created_at) as tanggal')
            ->groupBy('tanggal')
            ->orderBy('tanggal')
            ->pluck('tanggal');

        return view('admin.dashboard', compact(
            'weeklySales',
            'weeklyLabels',
            'monthlySales',
            'monthlyLabels',
            'dailyUsers',
            'dailyUserLabels'
        ));
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
