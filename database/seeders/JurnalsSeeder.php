<?php

namespace Database\Seeders;

use App\Models\Jurnals;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurnalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Menambahkan satu jurnal secara manual
          Jurnals::create([
            'title' => 'Judul Jurnal Pertama',
            'content' => 'Konten jurnal pertama',
        ]);

        // Menambahkan beberapa jurnal menggunakan factory (opsional)
        Jurnals::factory()->count(10)->create();  // Jika sudah ada factory untuk Jurnals
    }
}
