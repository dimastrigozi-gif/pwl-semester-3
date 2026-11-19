@extends('layouts.app')

@section('title', 'Pembayaran - ArenaHub')

@section('content')
    <div class="mx-auto max-w-md px-4 py-10">
        <h1 class="text-2xl font-bold mb-4">Pembayaran</h1>

        <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
            <p class="text-sm text-gray-400">Turnamen: <span class="text-white">{{ $t['title'] }}</span></p>
            <p class="text-sm text-gray-400 mt-1">Biaya: <span class="text-white">Rp {{ number_format($t['price'], 0, ',', '.') }}</span></p>

            <div class="mt-4 border-t border-gray-700 pt-4">
                <p class="text-sm text-gray-400">Metode pembayaran belum dibuat. Bagian ini masih mockup.</p>
            </div>

            <button type="button" onclick="alert('Fitur pembayaran masih dalam pengembangan')"
                class="mt-6 w-full bg-gray-700 text-gray-200 border border-gray-600 px-3 py-2 rounded text-sm">
                Bayar
            </button>
        </div>
    </div>
@endsection
