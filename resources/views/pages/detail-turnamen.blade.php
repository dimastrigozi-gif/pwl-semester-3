@extends('layouts.app')

@section('title', $t['title'] . ' - ArenaHub')

@section('content')
    <div class="mx-auto max-w-4xl px-4 py-10">
        <a href="{{ route('cari-turnamen') }}" class="text-sm text-gray-400 hover:text-white">&lt;- Kembali ke Cari Turnamen</a>

        <div class="mt-4 bg-gray-800 border border-gray-700 rounded-lg p-4">
            <div class="flex items-center justify-between gap-3 border-b border-gray-700 pb-3">
                <span class="text-sm font-semibold text-cyan-400">{{ $t['game'] }}</span>
                <span class="bg-gray-700 text-gray-200 border border-gray-600 px-3 py-1 text-sm rounded">
                    {{ $t['mode'] }}
                </span>
            </div>

            <h1 class="mt-4 text-2xl font-bold">{{ $t['title'] }}</h1>

            <div class="mt-4 grid grid-cols-1 gap-2 text-sm text-gray-400 md:grid-cols-2">
                <p>[Tgl] {{ $t['date'] }} - {{ $t['time'] }}</p>
                <p>[Lokasi] {{ $t['location'] }}</p>
                <p>[Peserta] {{ $t['participants'] }}/{{ $t['quota'] }} peserta</p>
                <p>[Biaya] Rp {{ number_format($t['price'], 0, ',', '.') }}</p>
            </div>

            <div class="mt-6">
                <h2 class="font-semibold mb-2">Deskripsi</h2>
                <p class="text-sm text-gray-400">{{ $t['description'] }}</p>
            </div>

            <div class="mt-6">
                <h2 class="font-semibold mb-2">Peraturan</h2>
                <ul class="list-disc pl-5 space-y-1 text-sm text-gray-400">
                    @foreach($t['rules'] as $rule)
                        <li>{{ $rule }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('pendaftaran', $t['id']) }}" class="bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700 text-center">
                    Daftar Sekarang
                </a>
                <a href="{{ route('jadwal') }}" class="bg-gray-700 text-gray-200 border border-gray-600 px-3 py-1 text-sm rounded text-center">
                    Lihat Jadwal
                </a>
            </div>
        </div>
    </div>
@endsection
