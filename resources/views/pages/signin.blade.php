@extends('layouts.app')

@section('title', 'Sign In - ArenaHub')

@section('content')
    <div class="mx-auto max-w-md px-4 py-12">
        <div class="mb-6 text-center">
            <h1 class="text-2xl font-bold">Sign In</h1>
            <p class="mt-1 text-sm text-gray-400">Masuk untuk mengikuti dan mengelola turnamen.</p>
        </div>

        <form method="POST" action="{{ route('signin') }}" class="bg-gray-800 border border-gray-700 rounded-lg p-4 space-y-4">
            @csrf

            @if($errors->any())
                <div class="text-sm text-red-400">{{ $errors->first() }}</div>
            @endif

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Email / Username</label>
                <input type="text" name="email" value="{{ old('email') }}" required placeholder="email@arenahub.id"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Password</label>
                <input type="password" name="password" required placeholder="password"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <button type="submit" class="w-full bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700">
                Sign In
            </button>

            <p class="text-center text-sm text-gray-400">
                Belum punya akun? <a href="{{ route('signup') }}" class="text-cyan-400 hover:underline">Sign Up</a>
            </p>
        </form>

        <p class="mt-4 bg-gray-800 border border-gray-700 rounded-lg p-3 text-center text-sm text-gray-500">
            Prototype: gunakan email apa saja. Email yang mengandung kata "organizer" akan masuk sebagai organizer.
        </p>
    </div>
@endsection
