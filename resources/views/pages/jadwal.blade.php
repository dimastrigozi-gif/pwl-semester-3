@extends('layouts.app')

@section('title', 'Jadwal - ArenaHub')

@section('content')
    <div class="mx-auto max-w-4xl px-4 py-10">
        <h1 class="text-2xl font-bold mb-1">Jadwal Pertandingan</h1>
        <p class="text-gray-400 mb-6">Jadwal turnamen yang sudah kamu ikuti akan muncul di sini.</p>

        @if(count($jadwal) === 0)
            <div class="border border-dashed border-gray-700 rounded-lg p-8 text-center text-gray-500">
                [ Jadwal belum tersedia ]
            </div>
        @else
            <div class="space-y-3">
                @foreach($jadwal as $j)
                    <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                        <p class="font-semibold">{{ $j['title'] }}</p>
                        <p class="mt-1 text-sm text-gray-400">{{ $j['date'] }} - {{ $j['time'] }}</p>
                    </div>
                @endforeach
            </div>
        @endif

        <p class="mt-4 text-sm text-gray-500">Catatan: halaman ini masih dalam pengembangan.</p>
    </div>
@endsection
