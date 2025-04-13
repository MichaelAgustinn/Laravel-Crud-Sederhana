<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Tabel anggota
        Schema::create('anggota_d0223310_a', function (Blueprint $table) {
            $table->string('nisn')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->timestamps();
        });

        // Tabel kartu_anggota (One to One dengan anggota)
        Schema::create('kartu_anggota_d0223310_a', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->date('tanggal_terbit');
            $table->date('tanggal_kedaluwarsa');

            $table->foreign('nisn')->references('nisn')->on('anggota_d0223310_a')->onDelete('cascade');
        });

        // Tabel buku
        Schema::create('buku_d0223310_a', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('pengarang');
            $table->year('tahun_terbit');
            $table->timestamps();
        });

        // Tabel peminjaman (Many to Many sederhana: anggota ↔ buku)
        Schema::create('peminjaman_d0223310_a', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->foreignId('buku_id')->constrained('buku_d0223310_a')->onDelete('cascade');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();

            $table->foreign('nisn')->references('nisn')->on('anggota_d0223310_a')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peminjaman_d0223310_a');
        Schema::dropIfExists('buku_d0223310_a');
        Schema::dropIfExists('kartu_anggota_d0223310_a');
        Schema::dropIfExists('anggota_d0223310_a');
    }
};
