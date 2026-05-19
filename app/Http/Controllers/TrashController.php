<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrashTransaction;
use Illuminate\Support\Facades\Auth;

class TrashController extends Controller
{
    public function create()
    {
        return view('trash.create');
    }

   public function store(Request $request)
{
    // 1. Validasi input (opsional tapi sangat disarankan)
    $request->validate([
        'trash_type' => 'required|string',
        'weight_kg' => 'required|numeric|min:0.1',
    ]);

    // 2. Buat aturan perhitungan poin (Contoh: Plastik 100 poin/kg, Kertas 50 poin/kg)
    $jenisSampah = strtolower($request->trash_type);
    
    $poinPerKg = 0;
    
    // 2. Cek menggunakan huruf kecil semua
    if ($jenisSampah === 'plastik') {
        $poinPerKg = 100;
    } elseif ($jenisSampah === 'kertas') {
        $poinPerKg = 50;
    } elseif ($jenisSampah === 'besi' || $jenisSampah === 'logam') {
        $poinPerKg = 150; // Tadi 5kg dapat 750, berarti per kilonya 150
    }

    // 3. Hitung total poin
    $hitungPoin = $request->weight_kg * $poinPerKg;

    // 4. Simpan data transaksi (Otomatis statusnya 'pending')
    TrashTransaction::create([
        'user_id' => auth()->id(),
        'trash_type' => $request->trash_type, // Tetap simpan format aslinya ke database
        'weight_kg' => $request->weight_kg,
        'points_earned' => $hitungPoin, 
        'status' => 'pending'
    ]);
    // 5. Redirect kembali dengan pesan sukses
    return redirect()->route('dashboard')->with('success', 'Setoran berhasil dikirim dan menunggu konfirmasi Admin!');
}
}