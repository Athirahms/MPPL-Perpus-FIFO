<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Buku extends Model
{
    use HasFactory;

    protected static function boot(){
        parent::boot();

        static::creating(function($bukus){
            if (empty($bukus->api_token)) {
                $bukus->api_token = Str::random(10);
            }
        });
    }

    protected $table = 'bukus';
    protected $fillable = [
        'gambar',
        'judul',
        'penulis',
        'genre',
        'rating',
        'api_token',
    ];

    public function pinjams(){
        return $this->hasMany(Pinjam::class);
    }
}
