@extends('layouts.app')

@section('title', 'Tentang - ArenaHub')

@section('content')
    <div class="mx-auto max-w-4xl px-4 py-10">
        <h1 class="text-2xl font-bold mb-2">Tentang ArenaHub</h1>
        <p class="text-gray-400 mb-6">
            ArenaHub adalah platform untuk mencari, mendaftar, dan memantau turnamen esport.
        </p>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                <h2 class="font-semibold mb-2">Tujuan</h2>
                <p class="text-sm text-gray-400">
                    Mempermudah peserta dan organizer turnamen esport dalam satu tempat.
                </p>
            </div>

            <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                <h2 class="font-semibold mb-2">Game yang Didukung</h2>
                <p class="text-sm text-gray-400">
                    eFootball, Mobile Legends, Free Fire, dan Point Blank.
                </p>
            </div>
        </div>

        <div class="mt-6 bg-gray-800 border border-gray-700 rounded-lg p-4">
            <h2 class="font-semibold mb-2">Tentang Project</h2>
            <p class="text-sm text-gray-400">
                Website ini dibuat untuk tugas mata kuliah Pemrograman Web Lanjut menggunakan Laravel dan Blade.
            </p>
        </div>
    </div>
@endsection
