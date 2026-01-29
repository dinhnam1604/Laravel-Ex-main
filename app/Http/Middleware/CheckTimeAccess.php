<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTimeAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        $now = now();
        $start = Carbon::parse('07:00:00');
        $end = Carbon::parse('17:00:00');
        if($now->between($start, $end)){
            return $next($request);
        }
        else{
            return response()->json([
                'mesage' => 'Access denied',
                'time' => $now->format('H:i:s')
            ], 403);
        }
        
    }
}
