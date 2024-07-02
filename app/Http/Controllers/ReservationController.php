<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'tanggal' => 'required|date',
            'bulan' => 'required|integer|min:1'
        ]);

        $harga_per_bulan = 700000;
        $harga_total = $request->bulan * $harga_per_bulan;

        Reservation::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'harga_total' => $harga_total,
        ]);

        return back()->with('success', 'Reservasi berhasil dibuat! Tunggu pemberitahuan Selanjutnya');
    }
}
