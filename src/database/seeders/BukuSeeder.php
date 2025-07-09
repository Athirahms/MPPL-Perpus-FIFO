<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            Buku::create([
                'gambar' => ' ' . $i,
                'judul' => 'Buku Contoh ' . $i,
                'penulis' => 'Tere Liye' . $i,
                'genre' => collect(['fiction', 'non_fiction'])->random(),
                'rating' => rand(40, 50) / 10,
                'tahun_rilis' => rand(2000, 2025),
                'api_token' => Str::uuid(), // pastikan kamu use Illuminate\Support\Str;
            ]);
        }
    }
}