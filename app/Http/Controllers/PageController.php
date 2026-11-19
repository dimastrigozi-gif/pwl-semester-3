<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // daftar game buat filter, masih statis
    private function daftarGame(): array
    {
        return [
            ['id' => 'efootball', 'name' => 'eFootball'],
            ['id' => 'mlbb', 'name' => 'Mobile Legends'],
            ['id' => 'freefire', 'name' => 'Free Fire'],
            ['id' => 'pointblank', 'name' => 'Point Blank'],
        ];
    }

    // data contoh buat halaman detail, belum ambil dari tabel tournaments
    private function contohTurnamen($id = 1): array
    {
        return [
            'id' => $id,
            'title' => 'Poliwangi Mobile Legends Championship',
            'game' => 'Mobile Legends',
            'mode' => 'Offline',
            'date' => '18 September 2026',
            'time' => '19:00',
            'location' => 'Gedung Poliwangi, Banyuwangi',
            'participants' => 24,
            'quota' => 32,
            'price' => 50000,
            'status' => 'ongoing',
            'description' => 'Turnamen Mobile Legends tingkat kampus yang mempertemukan tim terbaik dari Banyuwangi. Sistem pertandingan memakai single elimination.',
            'rules' => [
                'Tim terdiri dari 5 pemain inti + 2 cadangan.',
                'Format single elimination, best of 1 sampai semi final.',
                'Final best of 3.',
                'Wajib hadir 30 menit sebelum jadwal pertandingan.',
            ],
        ];
    }

    public function home()
    {
        // SEMENTARA: data turnamen sengaja dikosongkan dulu sesuai request
        $turnamen = [];

        // card dummy buat section turnamen yang sedang berlangsung
        $turnamenBerlangsung = [$this->contohTurnamen(1)];

        return view('pages.home', [
            'games' => $this->daftarGame(),
            'turnamen' => $turnamen,
            'turnamenBerlangsung' => $turnamenBerlangsung,
        ]);
    }

    public function cariTurnamen(Request $request)
    {
        $q = $request->query('q', '');
        $game = $request->query('game', '');

        // nanti kalau udah jalan, query ke DB
        $turnamen = [];

        return view('pages.cari-turnamen', [
            'games' => $this->daftarGame(),
            'turnamen' => $turnamen,
            'q' => $q,
            'game' => $game,
        ]);
    }

    public function detailTurnamen($id)
    {
        // masih pakai data contoh, belum query ke database
        $t = $this->contohTurnamen($id);

        return view('pages.detail-turnamen', [
            't' => $t,
        ]);
    }

    // form pendaftaran masih tampilan doang
    public function pendaftaran($id)
    {
        $t = $this->contohTurnamen($id);

        return view('pages.pendaftaran', [
            't' => $t,
        ]);
    }

    // pembayaran juga belum nyambung ke database
    public function pembayaran($id)
    {
        $t = $this->contohTurnamen($id);

        return view('pages.pembayaran', [
            't' => $t,
        ]);
    }

    public function turnamenSaya()
    {
        // belum ada tabel pendaftaran, jadi masih kosong
        $turnamen = [];

        return view('pages.turnamen-saya', [
            'turnamen' => $turnamen,
        ]);
    }

    public function jadwal()
    {
        // jadwal belum diambil dari database
        $jadwal = [];

        return view('pages.jadwal', [
            'jadwal' => $jadwal,
        ]);
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function profil()
    {
        return view('pages.profil', [
            'user' => session('user'),
        ]);
    }

    public function signInForm()
    {
        return view('pages.signin');
    }

    // auth pakai session manual, ganti Auth Laravel kalau sempat
    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;

        // kalau email ada kata organizer, anggap organizer
        $role = stripos($email, 'organizer') !== false ? 'organizer' : 'peserta';

        $request->session()->put('user', [
            'name' => $role === 'organizer' ? 'Organizer Demo' : 'Peserta Demo',
            'email' => $email,
            'role' => $role,
        ]);

        if ($role === 'organizer') {
            return redirect()->route('organizer.dashboard');
        }

        return redirect()->route('home');
    }

    public function signUpForm()
    {
        return view('pages.signup');
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        // masih dummy, belum simpan ke tabel users
        $request->session()->put('user', [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        if ($request->role === 'organizer') {
            return redirect()->route('organizer.dashboard');
        }

        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');

        return redirect()->route('home');
    }

    // TODO: method pendaftaran & pembayaran belum nyambung ke database, masih tampilan doang
    // TODO: auth masih pakai session manual, belum pakai Auth Laravel
}
