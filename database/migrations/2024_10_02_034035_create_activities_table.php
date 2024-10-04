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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->uuid('jurnal_uuid');  // uuid jurnalis
            $table->timestamps();
            $table->boolean('subuh')->default(false);
            $table->boolean('zuhur')->default(false);
            $table->boolean('asar')->default(false);
            $table->boolean('magrib')->default(false);
            $table->boolean('isya')->default(false);
            $table->boolean('tahajud')->default(false);
            $table->boolean('qosubuh')->default(false);
            $table->boolean('dhuha')->default(false);
            $table->boolean('qozuhur')->default(false);
            $table->boolean('bazuhur')->default(false);
            $table->boolean('sesubuh')->default(false);
            $table->boolean('tilpagi')->default(false);
            $table->boolean('zikpagi')->default(false);
            $table->boolean('tilmalam')->default(false);
            $table->boolean('waqiah')->default(false);
            $table->boolean('mulk')->default(false);
            $table->boolean('halangan')->default(false);
            $table->boolean('doakan')->default(false);
            $table->boolean('bamagrib')->default(false);
            $table->boolean('baisya')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
