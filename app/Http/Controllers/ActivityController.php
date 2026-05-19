<?php

namespace App\Http\Controllers;

// PASTIKAN BARIS INI SUDAH ADA
use App\Models\Activity; 
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function edit($id)
    {
    // Mengambil data dari database berdasarkan ID
    $activity = Activity::findOrFail($id);
    
    // Pastikan ada , compact('activity') agar datanya terkirim ke file Blade
    return view('admin.activities.edit', compact('activity'));
    }
// 2. TAMBAHKAN METHOD INDEX INI
    public function index() 
{
    // Pastikan memakai paginate() agar fungsi navigasi halaman di bawah tabel aktif kembali
    $activities = Activity::latest()->paginate(10); 
    
    return view('admin.activities.index', compact('activities'));
}
    public function update(Request $request, $id)
    {
    // Validasi data inputan
    $request->validate([
        'title' => 'required|string|max:255',
        'activity_date' => 'required|date',
        'location' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    $activity = Activity::findOrFail($id);
    
    // Update data ke database
    $activity->update([
        'title' => $request->title,
        'activity_date' => $request->activity_date,
        'location' => $request->location,
        'description' => $request->description,
    ]);

    return redirect('/admin/activities')->with('success', 'Kegiatan berhasil diperbarui!');
}

    public function destroy($id)
    {
    $activity = Activity::findOrFail($id);
    
    // Hapus dari database
    $activity->delete();

    return redirect('/admin/activities')->with('success', 'Kegiatan berhasil dihapus!');
    }
}