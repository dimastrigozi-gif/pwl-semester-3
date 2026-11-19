@extends('layouts.app')

@section('title', '404 - ArenaHub')

@section('content')
    <div class="max-w-3xl mx-auto px-4 py-24 text-center">
        <p class="text-4xl font-bold">404</p>
        <p class="text-gray-400 mt-2">Halaman tidak ditemukan.</p>
        <a href="{{ route('home') }}" class="inline-block mt-6 bg-gray-700 text-white px-4 py-2 rounded-lg">
            Kembali ke Home
        </a>
    </div>
@endsection
