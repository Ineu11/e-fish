@extends('layouts.admin')
@section('title', 'Dashboard Admin')
@section('content')
    <header class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow-md">
               <i class="fas fa-sign-out" aria-hidden="true"></i> Keluar
            </button>
        </form>
    </header>
    <div class="grid grid-cols-2 gap-8 mt-6">

        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="font-bold mb-3">Grafik Penjualan Per Minggu</h3>
            <canvas id="weeklySalesChart"></canvas>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="font-bold mb-3">Grafik Penjualan Per Bulan</h3>
            <canvas id="monthlySalesChart"></canvas>
        </div>

        <div class="bg-white p-4 rounded-lg shadow col-span-2">
            <h3 class="font-bold mb-3">Grafik Jumlah Akun Pembeli Per Hari</h3>
            <canvas id="userChart"></canvas>
        </div>

    </div>
   <script>
const colorSet = [
  'rgba(255,99,132,0.8)',
  'rgba(54,162,235,0.8)',
  'rgba(255,206,86,0.8)',
  'rgba(75,192,192,0.8)',
  'rgba(153,102,255,0.8)',
  'rgba(255,159,64,0.8)'
];

const weeklySales = @json($weeklySales);
const weeklyLabels = @json($weeklyLabels);

const monthlySales = @json($monthlySales);
const monthlyLabels = @json($monthlyLabels);

const dailyUsers = @json($dailyUsers);
const dailyUserLabels = @json($dailyUserLabels);

const baseOptions = {
  responsive: true,
  animation: {
    duration: 1200,
    easing: 'easeOutBounce'
  },
  plugins: {
    legend: { display: true },
    tooltip: {
      backgroundColor: 'rgba(0,0,0,0.8)',
      padding: 12
    }
  }
};

new Chart(document.getElementById('weeklySalesChart'), {
  type: 'bar',
  data: {
    labels: weeklyLabels,
    datasets: [{
      label: 'Penjualan Mingguan',
      data: weeklySales,
      backgroundColor: weeklySales.map((_, i) => colorSet[i % colorSet.length])
    }]
  },
  options: baseOptions
});

new Chart(document.getElementById('monthlySalesChart'), {
  type: 'bar',
  data: {
    labels: monthlyLabels,
    datasets: [{
      label: 'Penjualan Bulanan',
      data: monthlySales,
      backgroundColor: monthlySales.map((_, i) => colorSet[i % colorSet.length])
    }]
  },
  options: baseOptions
});

new Chart(document.getElementById('userChart'), {
  type: 'line',
  data: {
    labels: dailyUserLabels,
    datasets: [{
      label: 'Akun Pembeli Baru per Hari',
      data: dailyUsers,
      borderColor: 'rgba(54,162,235,0.9)',
      backgroundColor: 'rgba(54,162,235,0.3)',
      borderWidth: 3,
      tension: 0.4,
      fill: true
    }]
  },
  options: baseOptions
});
</script>


@endsection
