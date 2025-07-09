<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Pinjam;
use Carbon\Carbon;

class PinjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$bukuIds = Buku::pluck('id'); // Ambil semua ID buku

        for ($i = 1; $i <= 50; $i++) {
            $tanggalPinjam = Carbon::now()->subDays(rand(1, 30));
            $tanggalKembali = (clone $tanggalPinjam)->addDays(rand(1, 14));

            Pinjam::create([
                'buku_id' => $bukuIds->random(),
                'nama_peminjam' => 'Peminjam ' . $i,
                'tanggal_pinjam' => $tanggalPinjam,
                'tanggal_kembali' => $tanggalKembali,
                'status' => collect(['pending', 'dipinjam', 'dikembalikan'])->random(),
            ]);
        }*/
    }
}
