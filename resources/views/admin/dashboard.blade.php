@extends('layouts.admin')
@section('title', 'Dashboard Admin')
@section('content')
<header class="flex items-center justify-between mb-6">
  <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit"
      class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow-md">
      Keluar
    </button>
  </form>
</header>
@endsection