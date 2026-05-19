<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TrashTransaction extends Model
{
    // Tambahkan 'status' di dalam array ini
    protected $fillable = ['user_id', 'trash_type', 'weight_kg', 'points_earned', 'status'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}