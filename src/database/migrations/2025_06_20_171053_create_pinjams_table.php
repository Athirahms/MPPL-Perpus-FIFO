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
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buku_id')->constrained('bukus')->onDelete('cascade');
            $table->string('nama_peminjam');
            $table->string('kontak_peminjam');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->integer('uang_jaminan')->default(50000);
            $table->enum('status', ['pending', 'dipinjam', 'dikembalikan'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjams');
    }
};
