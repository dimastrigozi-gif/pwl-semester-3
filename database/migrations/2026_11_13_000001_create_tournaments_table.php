<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // tabel turnamen, field nya masih basic
    public function up(): void
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('game');
            $table->integer('quota');
            $table->integer('price');
            $table->date('start_date');
            $table->string('status')->default('upcoming');
            $table->timestamps();
        });
    }

    // hapus tabel kalau migrate rollback
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
