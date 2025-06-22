<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pinjam;

class PinjamApiController extends Controller
{
    public function index(Request $request){
        $bukus = $request->get('authenticated_buku');
        $peminjaman = $bukus->pinjam()
                            ->orderBy('tanggal_pinjam', 'asc') // FIFO
                            ->get();
        return response()->json($peminjaman);
    }
}

