@extends('layouts.app')

@section('title', 'Cari Turnamen - ArenaHub')

@section('content')
    <div class="mx-auto max-w-6xl px-4 py-10">
        <h1 class="text-2xl font-bold mb-1">Cari Turnamen</h1>
        <p class="text-gray-400 mb-6">Cari turnamen berdasarkan nama atau pilih game yang mau dimainkan.</p>

        <form method="GET" action="{{ route('cari-turnamen') }}" class="bg-gray-800 border border-gray-700 rounded-lg p-4 mb-6">
            <div class="flex flex-col gap-3 md:flex-row">
                <input type="text" name="q" value="{{ $q }}" placeholder="Ketik nama turnamen..."
                    class="flex-1 bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">

                @if($game)
                    <input type="hidden" name="game" value="{{ $game }}">
                @endif

                <button type="submit" class="bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700">
                    Cari
                </button>
            </div>
        </form>

        <div class="flex gap-3 overflow-x-auto pb-2 mb-6">
            <a href="{{ route('cari-turnamen', ['q' => $q]) }}"
                class="shrink-0 bg-gray-800 border border-gray-700 text-gray-200 px-4 py-2 rounded-lg text-sm">
                Semua
            </a>

            @foreach($games as $g)
                <a href="{{ route('cari-turnamen', ['q' => $q, 'game' => $g['id']]) }}"
                    class="shrink-0 bg-gray-800 border {{ $game === $g['id'] ? 'border-cyan-500 text-cyan-400' : 'border-gray-700 text-gray-200' }} px-4 py-2 rounded-lg text-sm">
                    {{ $g['name'] }}
                </a>
            @endforeach
        </div>

        @if($q)
            <p class="text-sm text-gray-400 mb-4">Hasil pencarian untuk: <span class="text-white">{{ $q }}</span></p>
        @endif

        @if(count($turnamen) === 0)
            <div class="border border-dashed border-gray-700 rounded-lg p-8 text-center text-gray-500">
                [ Turnamen tidak ditemukan ]
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($turnamen as $t)
                    <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                        <h2 class="text-lg font-bold">{{ $t->title }}</h2>
                        <p class="mt-2 text-sm text-gray-400">{{ $t->game }}</p>
                        <p class="text-sm text-gray-400">Kuota: {{ $t->quota }}</p>
                        <a href="{{ route('detail-turnamen', $t->id) }}" class="mt-3 inline-block text-sm font-semibold text-cyan-400 hover:underline">
                            Lihat Detail
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
