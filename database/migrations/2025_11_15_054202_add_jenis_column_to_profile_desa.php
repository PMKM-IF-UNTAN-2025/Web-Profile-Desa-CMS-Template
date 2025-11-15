<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('profildesas', function (Blueprint $table) {
            $table->enum('jenis_peta', ['maps', 'foto'])->default('maps')->after('jumlah_rw');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profildesas', function (Blueprint $table) {
            $table->dropColumn('jenis');
        });
    }
};
