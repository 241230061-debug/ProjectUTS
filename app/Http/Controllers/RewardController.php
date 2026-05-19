<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reward;
use Illuminate\Support\Facades\Auth;

class RewardController extends Controller
{
    public function index()
    {
        // Untuk UTS, kita buat data dummy jika tabel kosong
        if(Reward::count() == 0) {
            Reward::insert([
                ['name' => 'Voucher Pulsa 10k', 'points_required' => 500],
                ['name' => 'Sembako Paket A', 'points_required' => 2000],
            ]);
        }
        
        $rewards = Reward::all();
        return view('rewards.index', compact('rewards'));
    }

    public function redeem(Request $request, $id)
    {
        $reward = Reward::findOrFail($id);
        $user = Auth::user();

        if ($user->points >= $reward->points_required) {
            $user->decrement('points', $reward->points_required);
            return redirect()->route('rewards.index')->with('success', "Berhasil menukar poin dengan $reward->name!");
        }

        return redirect()->route('rewards.index')->with('error', "Poin kamu tidak cukup!");
    }
}