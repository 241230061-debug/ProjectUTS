<?php
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TrashTransaction;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\RewardController;
use Illuminate\Support\Facades\Route;
use App\Models\Activity;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\EnsureUserIsAdmin;
use App\Http\Controllers\ActivityController;


// Rute Halaman Utama (Welcome)
Route::get('/', function () {
    // Mengambil 4 kegiatan terbaru yang tanggalnya hari ini atau di masa depan
    $activities = Activity::where('activity_date', '>=', now()->toDateString())
                          ->orderBy('activity_date', 'asc')
                          ->take(4)
                          ->get();

    return view('welcome', compact('activities'));
});
// Halaman Edukasi Lingkungan (Public)
Route::get('/edukasi', function () {
    return view('edukasi');
});
// Rute Dashboard (Bawaan Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute Profil (Bawaan Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute Proyek UTS: Buang Sampah & Tukar Poin
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/buang-sampah', [TrashController::class, 'create'])->name('trash.create');
    Route::post('/buang-sampah', [TrashController::class, 'store'])->name('trash.store');
    
    Route::get('/tukar-poin', [RewardController::class, 'index'])->name('rewards.index');
    Route::post('/tukar-poin/{id}', [RewardController::class, 'redeem'])->name('rewards.redeem');
});
// Rute untuk Admin (Hanya bisa diakses jika role = 'admin')
Route::get('/admin/dashboard', function () {
    // Mengambil statistik dasar
    $totalUsers = User::count();
    $totalBeratSampah = TrashTransaction::sum('weight_kg');
    $totalTransaksi = TrashTransaction::count();

    // Mengambil 5 transaksi terakhir beserta nama usernya
    $recentTransactions = TrashTransaction::with('user')->latest()->take(5)->get();

    // Mengambil data untuk Grafik (Contoh: Total berat per jenis sampah)
    $sampahPlastik = TrashTransaction::where('trash_type', 'plastik')->sum('weight_kg');
    $sampahKertas = TrashTransaction::where('trash_type', 'kertas')->sum('weight_kg');
    $sampahBesi = TrashTransaction::where('trash_type', 'besi')->sum('weight_kg');
    $upcomingActivities = Activity::where('activity_date', '>=', now()->toDateString())
                                  ->orderBy('activity_date', 'asc')
                                  ->take(3)
                                  ->get();

    return view('admin.dashboard', compact(
        'totalUsers', 'totalBeratSampah', 'totalTransaksi', 
        'recentTransactions', 'sampahPlastik', 'sampahKertas', 'sampahBesi', 'upcomingActivities'
    ));
});
// Pastikan nama middleware di bawah ini sesuai dengan yang kamu daftarkan (misal: 'ensureuserisadmin')
Route::middleware(['auth', 'ensureuserisadmin'])->group(function () {
    
    // Route untuk tombol konfirmasi (Approve)
    Route::patch('/admin/transactions/{id}/approve', [AdminController::class, 'approveTransaction'])->name('admin.transactions.approve');
    
    // (Kamu juga bisa memasukkan route halaman dashboard adminmu di dalam grup ini)
    
});
// Route Manajemen User
Route::get('/admin/users', function () {
    // Mengambil data user diurutkan dari yang terbaru, 10 data per halaman
    $users = User::latest()->paginate(10);
    return view('admin.users.index', compact('users'));
})->middleware(['auth']); 

// Route Laporan Sampah
Route::get('/admin/laporan-sampah', function () {
    // Mengambil data transaksi beserta relasi usernya, 10 data per halaman
    $transactions = TrashTransaction::with('user')->latest()->paginate(10);
    return view('admin.trash.index', compact('transactions'));
})->middleware(['auth', EnsureUserIsAdmin::class]); // <-- PERBAIKAN DI SINI
// 1. Route untuk Tombol Konfirmasi (Mengubah status ke approved)
Route::patch('/admin/laporan-sampah/{id}/konfirmasi', function ($id) {
    $trx = TrashTransaction::findOrFail($id);
    $trx->update(['status' => 'approved']);

    // Opsional: Jika ingin menambahkan poin ke total poin user secara otomatis saat dikonfirmasi:
    // $trx->user->increment('points', $trx->points_earned); 

    return back()->with('success', 'Setoran sampah berhasil dikonfirmasi!');
})->middleware(['auth', EnsureUserIsAdmin::class]);

// 2. Route untuk Tombol Batal (Menghapus / Mendrop baris data dari tabel database)
Route::delete('/admin/laporan-sampah/{id}', function ($id) {
    $trx = TrashTransaction::findOrFail($id);
    $trx->delete(); // Menghapus data dari database

    return back()->with('success', 'Data transaksi berhasil dibatalkan dan dihapus!');
})->middleware(['auth', EnsureUserIsAdmin::class]);

// Route form Edit User
Route::get('/admin/users/{id}/edit', function ($id) {
    $user = User::findOrFail($id);
    return view('admin.users.edit', compact('user'));
})->middleware(['auth']);

Route::patch('/admin/transactions/{id}/approve', [AdminController::class, 'approveTransaction'])->name('admin.transactions.approve');
// Route proses Update User (Method PUT)
Route::put('/admin/users/{id}', function (Request $request, $id) {
    $user = User::findOrFail($id);
    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'role' => 'required|in:admin,user',
        'points' => 'required|numeric|min:0'
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
        'points' => $request->points
    ]);

    return redirect('/admin/users')->with('success', 'Data user berhasil diperbarui!');
})->middleware(['auth']);

// Route proses Hapus User (Method DELETE)
Route::delete('/admin/users/{id}', function ($id) {
    $user = User::findOrFail($id);
    $user->delete();
    
return redirect('/admin/users')->with('success', 'User berhasil dihapus!');
})->middleware(['auth']);

// Halaman Daftar Kegiatan
Route::get('/admin/activities', function () {
    $activities = Activity::orderBy('activity_date', 'desc')->paginate(10);
    return view('admin.activities.index', compact('activities'));
})->middleware(['auth']);

// Halaman Form Tambah Kegiatan
Route::get('/admin/activities/create', function () {
    return view('admin.activities.create');
})->middleware(['auth']);

// Proses Simpan Kegiatan
Route::post('/admin/activities', function (Request $request) {
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'activity_date' => 'required|date',
        'location' => 'required|string|max:255',
    ]);

    Activity::create($request->all());

    return redirect('/admin/activities')->with('success', 'Kegiatan baru berhasil ditambahkan!');
})->middleware(['auth']);

Route::middleware(['auth', EnsureUserIsAdmin::class])->group(function () {
    Route::get('/admin/activities', [ActivityController::class, 'index']);
    Route::get('/admin/activities/{id}/edit', [ActivityController::class, 'edit']);
    Route::put('/admin/activities/{id}', [ActivityController::class, 'update']);
    Route::delete('/admin/activities/{id}', [ActivityController::class, 'destroy']);
});
require __DIR__.'/auth.php';