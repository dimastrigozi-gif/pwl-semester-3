@extends('layouts.app')

@section('title', 'Dashboard Organizer - ArenaHub')

@section('content')
    <div class="mx-auto max-w-6xl px-4 py-10">
        <div class="flex flex-col gap-4 mb-6 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold">Dashboard Organizer</h1>
                <p class="text-gray-400 text-sm">Total turnamen yang sudah dibuat: {{ $total }}</p>
            </div>
            <a href="{{ route('organizer.buat-turnamen') }}" class="bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700 text-center">
                Buat Turnamen
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                <p class="text-2xl font-bold">{{ $total }}</p>
                <p class="text-sm text-gray-400">Total Turnamen</p>
            </div>
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                <p class="text-2xl font-bold">0</p>
                <p class="text-sm text-gray-400">Total Peserta</p>
            </div>
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                <p class="text-2xl font-bold">0</p>
                <p class="text-sm text-gray-400">Pendaftaran Masuk</p>
            </div>
        </div>

        <div class="mt-8 mb-4 flex items-center justify-between">
            <h2 class="text-2xl font-bold">Turnamen Terbaru</h2>
            <a href="{{ route('organizer.turnamen-saya') }}" class="text-sm font-semibold text-cyan-400 hover:underline">Lihat Semua -></a>
        </div>

        @if($turnamen->count() === 0)
            <div class="border border-dashed border-gray-700 rounded-lg p-8 text-center text-gray-500">
                [ Belum ada turnamen ]
            </div>
        @else
            <div class="space-y-3">
                @foreach($turnamen as $t)
                    <div class="bg-gray-800 border border-gray-700 rounded-lg p-4 flex items-center justify-between">
                        <span class="text-sm">{{ $t->title }}</span>
                        <span class="bg-gray-700 text-gray-200 border border-gray-600 px-3 py-1 text-sm rounded">{{ $t->status }}</span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
