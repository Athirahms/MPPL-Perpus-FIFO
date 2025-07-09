<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = 'pinjams';
    protected $fillable = [
        'buku_id',
        'nama_peminjam',
        'kontak_peminjam',
        'tanggal_pinjam',
        'tanggal_kembali',
        'uang_jaminan',
        'status',
    ];

    public function bukus(){
        return $this->belongsTo(Buku::class);
    }
}
