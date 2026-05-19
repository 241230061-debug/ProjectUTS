<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Gunakan nama tabel trash_transaction
        Schema::table('trash_transactions', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->after('points_earned');
        });
    }

    public function down()
    {
        // Gunakan nama tabel trash_transaction
        Schema::table('trash_transactions', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
