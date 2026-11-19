@extends('layouts.app')

@section('title', 'Buat Turnamen - ArenaHub')

@section('content')
    <div class="mx-auto max-w-md px-4 py-10">
        <h1 class="text-2xl font-bold mb-6">Buat Turnamen</h1>

        <form method="POST" action="{{ route('organizer.simpan-turnamen') }}" class="bg-gray-800 border border-gray-700 rounded-lg p-4 space-y-4">
            @csrf

            @if($errors->any())
                <div class="text-sm text-red-400">{{ $errors->first() }}</div>
            @endif

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Judul Turnamen</label>
                <input type="text" name="title" value="{{ old('title') }}" required placeholder="Contoh: MLBB Campus Cup"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Game</label>
                <select name="game" required class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
                    @foreach($games as $g)
                        <option value="{{ $g['id'] }}">{{ $g['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-1">Kuota</label>
                    <input type="number" name="quota" value="{{ old('quota', 32) }}" min="1" required
                        class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-1">Harga</label>
                    <input type="number" name="price" value="{{ old('price', 0) }}" min="0" required
                        class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Tanggal Mulai</label>
                <input type="date" name="start_date" value="{{ old('start_date') }}" required
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <button type="submit" class="w-full bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700">
                Simpan Turnamen
            </button>

            <p class="text-center text-sm text-gray-500">Validasi masih sederhana, nanti diperbaiki.</p>
        </form>
    </div>
@endsection
