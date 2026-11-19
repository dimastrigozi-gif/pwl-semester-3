<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // bikin tabel user buat login sederhana
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('peserta');
            $table->timestamps();
        });
    }

    // kalau rollback ya hapus tabelnya
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
