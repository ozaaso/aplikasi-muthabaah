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

        Schema::create('jurnals', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();   // Menambahkan kolom UUID
            $table->string('nama');           // Menambahkan kolom nama
            $table->string('asal');           // Menambahkan kolom nama
            $table->date('tanggal');          // Menambahkan kolom tanggal
            $table->timestamps();             // Kolom timestamps (created_at & updated_at)
            // $table->boolean('subuh_on_time')->default(false);
            // $table->boolean('zuhur_on_time')->default(false);
            // $table->boolean('asar_on_time')->default(false);
            // $table->boolean('magrib_on_time')->default(false);
            // $table->boolean('isya_on_time')->default(false);
            // $table->boolean('tahajud')->default(false);
            // $table->boolean('qobliyah_subuh')->default(false);
            // $table->boolean('dhuha')->default(false);
            // $table->boolean('qobliyah_zuhur')->default(false);
            // $table->boolean('badiyah_zuhur')->default(false);
            // $table->boolean('sedekah_subuh')->default(false);
            // $table->boolean('tilawah_pagi')->default(false);
            // $table->boolean('zikir_pagi')->default(false);
            // $table->boolean('tilawah_malam')->default(false);
            // $table->boolean('baca_al_waqiah')->default(false);
            // $table->boolean('baca_al_mulk')->default(false);
            // $table->boolean('berhalangan')->default(false);
            // $table->boolean('doakan_orang_lain')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurnals');
    }
};
