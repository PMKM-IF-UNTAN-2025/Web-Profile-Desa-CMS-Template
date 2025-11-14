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
        Schema::table('base_text_configuration', function (Blueprint $table) {
            $table->string('tentang_desa');
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('gmail')->nullable();
            $table->string('alamat');
            $table->string('facebook')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('base_text_configuration', function (Blueprint $table) {
            $table->dropColumn('tentang_desa');
            $table->dropColumn('instagram');
            $table->dropColumn('whatsapp');
            $table->dropColumn('gmail');
            $table->dropColumn('alamat');
            $table->dropColumn('facebook');
        });
    }
};
