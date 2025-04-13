<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert anggota
        DB::table('anggota_d0223310_a')->insert([
            [
                'nisn' => '2025012345',
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Mawar No. 1',
                'no_telepon' => '081234567890',
            ],

        ]);

        // Insert kartu_anggota
        DB::table('kartu_anggota_d0223310_a')->insert([
            [
                'nisn' => '2025012345',
                'tanggal_terbit' => now(),
                'tanggal_kedaluwarsa' => now()->addYear(),
            ],

        ]);

        // Insert buku
        $buku1 = DB::table('buku_d0223310_a')->insert([
            [
                'id' => '1',
                'judul' => 'Belajar Laravel 9',
                'pengarang' => 'Agus Prasetyo',
                'tahun_terbit' => 2021
            ],
            [
                'id' => '2',
                'judul' => 'Belajar Laravel 10',
                'pengarang' => 'Agus Prasetyo',
                'tahun_terbit' => 2021
            ],
            [
                'id' => '3',
                'judul' => 'Belajar Laravel 12',
                'pengarang' => 'Merlin',
                'tahun_terbit' => 2025
            ],

        ]);


        // Insert peminjaman
        DB::table('peminjaman_d0223310_a')->insert([
            [
                'nisn' => '2025012345',
                'buku_id' => '1',
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => null,
            ],

        ]);
    }
}
