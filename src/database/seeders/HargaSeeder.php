<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('harga')->insert([
            'nama' => 'bayi',
            'harga_asli' => '19.900',
            'harga_promo' => '14.900'
        ]);

        DB::table('harga')->insert([
            'nama' => 'pelajar',
            'harga_asli' => '46.900',
            'harga_promo' => '23.450'
        ]);

        DB::table('harga')->insert([
            'nama' => 'personal',
            'harga_asli' => '58.900',
            'harga_promo' => '38.900'
        ]);

        DB::table('harga')->insert([
            'nama' => 'bisnis',
            'harga_asli' => '109.900',
            'harga_promo' => '65.900'
        ]);
    }
}
