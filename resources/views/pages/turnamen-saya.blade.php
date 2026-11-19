@extends('layouts.app')

@section('title', 'Turnamen Saya - ArenaHub')

@section('content')
    <div class="mx-auto max-w-6xl px-4 py-10">
        <h1 class="text-2xl font-bold mb-1">Turnamen Saya</h1>
        <p class="text-gray-400 mb-6">Daftar turnamen yang sudah kamu ikuti.</p>

        @if(count($turnamen) === 0)
            <div class="border border-dashed border-gray-700 rounded-lg p-8 text-center text-gray-500">
                [ Belum ada turnamen yang diikuti ]
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($turnamen as $t)
                    <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                        <h2 class="font-semibold">{{ $t->title }}</h2>
                        <p class="mt-1 text-sm text-gray-400">{{ $t->game }}</p>
                        <p class="text-sm text-gray-400">Status: {{ $t->status }}</p>
                        <a href="{{ route('detail-turnamen', $t->id) }}" class="mt-3 inline-block text-sm font-semibold text-cyan-400 hover:underline">
                            Lihat Detail
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
