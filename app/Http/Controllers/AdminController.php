<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrashTransaction; // Sesuaikan dengan nama modelmu
use App\Models\User;

class AdminController extends Controller
{
    public function approveTransaction($id)
    {
        // Cari data transaksi berdasarkan ID
        $transaction = TrashTransaction::findOrFail($id);

        // Pastikan statusnya masih pending agar tidak ditambahkan poin berkali-kali
        if ($transaction->status === 'pending') {
            
            // 1. Ubah status transaksi menjadi approved
            $transaction->update(['status' => 'approved']);

            // 2. Tambahkan poin ke user yang bersangkutan
            $user = User::find($transaction->user_id);
            $user->points += $transaction->points_earned;
            $user->save();

            return back()->with('success', 'Setoran berhasil dikonfirmasi! Poin telah ditambahkan ke User.');
        }
    
        return back()->with('error', 'Setoran ini sudah diproses sebelumnya.');
    }
    
}