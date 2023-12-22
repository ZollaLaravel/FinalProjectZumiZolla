<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'mahasiswa_npm'=> "23234355",
            'dosen_nidn'=>'121212',
            'matakuliah_kode'=>'01',
            'status_aktif'=>'Y',
           
           ]);  //
        
    }
}
