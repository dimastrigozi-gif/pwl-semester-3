<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    // daftar game, sama kayak di PageController
    private function daftarGame(): array
    {
        return [
            ['id' => 'efootball', 'name' => 'eFootball'],
            ['id' => 'mlbb', 'name' => 'Mobile Legends'],
            ['id' => 'freefire', 'name' => 'Free Fire'],
            ['id' => 'pointblank', 'name' => 'Point Blank'],
        ];
    }

    public function dashboard()
    {
        $turnamen = Tournament::orderBy('start_date', 'asc')->get();

        return view('pages.organizer.dashboard', [
            'turnamen' => $turnamen,
            'total' => $turnamen->count(),
        ]);
    }

    public function turnamenSaya()
    {
        $turnamen = Tournament::orderBy('start_date', 'asc')->get();

        return view('pages.organizer.turnamen-saya', [
            'turnamen' => $turnamen,
        ]);
    }

    public function buatTurnamenForm()
    {
        return view('pages.organizer.buat-turnamen', [
            'games' => $this->daftarGame(),
        ]);
    }

    // simpan turnamen baru, validasi masih basic
    public function simpanTurnamen(Request $request)
    {
        // TODO: benerin validasi besok
        $request->validate([
            'title' => 'required',
            'game' => 'required',
            'quota' => 'required|integer',
            'price' => 'required|integer',
            'start_date' => 'required|date',
        ]);

        Tournament::create([
            'title' => $request->title,
            'game' => $request->game,
            'quota' => $request->quota,
            'price' => $request->price,
            'start_date' => $request->start_date,
            'status' => 'upcoming',
        ]);

        return redirect()->route('organizer.turnamen-saya');
    }
}
