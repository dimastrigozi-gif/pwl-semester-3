<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // data dummy buat testing tampilan
    public function run(): void
    {
        Tournament::create([
            'title' => 'Turnamen Dummy ML',
            'game' => 'mlbb',
            'quota' => 32,
            'price' => 50000,
            'start_date' => '2026-09-18',
            'status' => 'upcoming',
        ]);

        Tournament::create([
            'title' => 'Turnamen Dummy FF',
            'game' => 'freefire',
            'quota' => 16,
            'price' => 0,
            'start_date' => '2026-09-20',
            'status' => 'upcoming',
        ]);

        Tournament::create([
            'title' => 'Turnamen Dummy eFootball',
            'game' => 'efootball',
            'quota' => 32,
            'price' => 0,
            'start_date' => '2026-09-25',
            'status' => 'upcoming',
        ]);

        Tournament::create([
            'title' => 'Turnamen Dummy PB',
            'game' => 'pointblank',
            'quota' => 16,
            'price' => 50000,
            'start_date' => '2026-10-05',
            'status' => 'upcoming',
        ]);
    }
}
