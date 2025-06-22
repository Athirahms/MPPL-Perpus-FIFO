<?php

namespace App\Http\Middleware;

use App\Models\Buku;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BukuAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        $bukus = Buku::where('api_token', $token)->first();
        if(!$bukus){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        $request->merge(['authenticated_buku' => $bukus]);
        return $next($request);
    }
}
