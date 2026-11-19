@extends('layouts.app')

@section('title', 'Profil - ArenaHub')

@section('content')
    <div class="mx-auto max-w-3xl px-4 py-10">
        <h1 class="text-2xl font-bold mb-6">Profil</h1>

        @if($user)
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                <p class="text-sm text-gray-400">Nama: <span class="text-white">{{ $user['name'] }}</span></p>
                <p class="mt-1 text-sm text-gray-400">Email: <span class="text-white">{{ $user['email'] }}</span></p>
                <p class="mt-1 text-sm text-gray-400">Role: <span class="text-white">{{ $user['role'] }}</span></p>
            </div>

            <p class="mt-4 text-sm text-gray-500">Halaman edit profil belum dibuat.</p>
        @else
            <div class="border border-dashed border-gray-700 rounded-lg p-8 text-center text-gray-500">
                Kamu belum login. <a href="{{ route('signin') }}" class="text-cyan-400 hover:underline">Sign In</a>
            </div>
        @endif
    </div>
@endsection
