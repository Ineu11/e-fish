@extends('layouts.admin')

@section('title', 'Kelola Akun Pembeli')

@section('content')

<header class="flex items-center justify-between mb-6">
  <h1 class="text-3xl font-bold text-gray-800">Kelola Akun Pembeli</h1>

  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit"
      class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow-md">
      Keluar
    </button>
  </form>
</header>

<div class="bg-white rounded-xl shadow-lg p-4 border border-gray-200">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-xl font-semibold text-gray-700">Daftar Pembeli</h2>
    <span class="text-sm text-gray-500">{{ $users->count() }} Akun</span>
  </div>

  <table class="w-full text-left">
    <thead class="bg-blue-600 text-white">
      <tr>
        <th class="p-3">Nama</th>
        <th class="p-3">Email</th>
        <th class="p-3">Status</th>
        <th class="p-3">Aksi</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($users as $user)
      <tr class="border-b border-gray-200 hover:bg-gray-50">
        <td class="p-3 font-medium">{{ $user->name }}</td>
        <td class="p-3">{{ $user->email }}</td>
        <td class="p-3">
          @if($user->active)
            <span class="text-green-600 font-semibold">Aktif</span>
          @else
            <span class="text-red-600 font-semibold">Tidak Aktif</span>
          @endif
        </td>
        <td class="p-3 flex gap-2">
          <form method="POST" action="{{ route('admin.pembeli.activate', $user->id) }}">
            @csrf
            <button type="submit"
              class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">
              Aktifkan
            </button>
          </form>

          <form method="POST" action="{{ route('admin.pembeli.delete', $user->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit"
              onclick="return confirm('Hapus akun pembeli ini?')"
              class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
              Hapus
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
