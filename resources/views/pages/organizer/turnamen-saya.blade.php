@extends('layouts.app')

@section('title', 'Turnamen Saya - ArenaHub')

@section('content')
    <div class="mx-auto max-w-6xl px-4 py-10">
        <div class="flex flex-col gap-4 mb-6 sm:flex-row sm:items-center sm:justify-between">
            <h1 class="text-2xl font-bold">Turnamen Saya</h1>
            <a href="{{ route('organizer.buat-turnamen') }}" class="bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700 text-center">
                Buat Turnamen
            </a>
        </div>

        @if($turnamen->count() === 0)
            <div class="border border-dashed border-gray-700 rounded-lg p-8 text-center text-gray-500">
                [ Belum ada turnamen ]
            </div>
        @else
            <div class="space-y-3">
                @foreach($turnamen as $t)
                    <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                        <div class="flex items-center justify-between gap-3">
                            <span class="font-semibold">{{ $t->title }}</span>
                            <span class="bg-gray-700 text-gray-200 border border-gray-600 px-3 py-1 text-sm rounded">{{ $t->status }}</span>
                        </div>
                        <p class="mt-1 text-sm text-gray-400">{{ $t->game }} | Kuota {{ $t->quota }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
