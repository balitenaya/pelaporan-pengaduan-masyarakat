<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
            'nama' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'telepon' => '082765875379',
            'level' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('petugas')->insert([
            'nama' => 'Petugas',
            'username' => 'petugas',
            'password' => Hash::make('petugas123'),
            'telepon' => '089476376964',
            'level' => 'petugas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('petugas')->insert([
            'nama' => 'Kepala Desa',
            'username' => 'kades',
            'password' => Hash::make('kades123'),
            'telepon' => '087889889',
            'level' => 'kades',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
