<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuApiController extends Controller
{
    public function index(Request $request){
        return response()->json(
            Buku::orderBy('created_at', 'asc')->get()
        );
    }
}
