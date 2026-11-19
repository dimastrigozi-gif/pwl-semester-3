@extends('layouts.app')

@section('title', 'Sign Up - ArenaHub')

@section('content')
    <div class="mx-auto max-w-md px-4 py-12">
        <div class="mb-6 text-center">
            <h1 class="text-2xl font-bold">Sign Up</h1>
            <p class="mt-1 text-sm text-gray-400">Buat akun biar bisa ikut atau bikin turnamen.</p>
        </div>

        <form method="POST" action="{{ route('signup') }}" class="bg-gray-800 border border-gray-700 rounded-lg p-4 space-y-4">
            @csrf

            @if($errors->any())
                <div class="text-sm text-red-400">{{ $errors->first() }}</div>
            @endif

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Nama</label>
                <input type="text" name="name" value="{{ old('name') }}" required placeholder="Nama lengkap"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Username</label>
                <input type="text" name="username" value="{{ old('username') }}" required placeholder="username"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="email@arenahub.id"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Password</label>
                <input type="password" name="password" required placeholder="password"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Role</label>
                <select name="role" class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
                    <option value="peserta">Peserta</option>
                    <option value="organizer">Organizer</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700">
                Sign Up
            </button>

            <p class="text-center text-sm text-gray-400">
                Sudah punya akun? <a href="{{ route('signin') }}" class="text-cyan-400 hover:underline">Sign In</a>
            </p>
        </form>
    </div>
@endsection
