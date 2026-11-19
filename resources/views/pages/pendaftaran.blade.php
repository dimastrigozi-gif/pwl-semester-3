@extends('layouts.app')

@section('title', 'Pendaftaran - ArenaHub')

@section('content')
    <div class="mx-auto max-w-md px-4 py-10">
        <h1 class="text-2xl font-bold mb-1">Pendaftaran Turnamen</h1>
        <p class="text-gray-400 mb-6">{{ $t['title'] }}</p>

        <form class="bg-gray-800 border border-gray-700 rounded-lg p-4 space-y-4">
            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Nama Tim</label>
                <input type="text" placeholder="Isi nama tim..."
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Nama Captain</label>
                <input type="text" placeholder="Isi nama captain..."
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Game ID</label>
                <input type="text" placeholder="Isi game id..."
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <button type="button" onclick="window.location.reload()"
                class="w-full bg-gray-700 text-gray-200 border border-gray-600 px-3 py-2 rounded text-sm">
                Kirim
            </button>

            <p class="text-center text-sm text-gray-500">Form ini masih tampilan, belum tersimpan ke database.</p>
        </form>
    </div>
@endsection
