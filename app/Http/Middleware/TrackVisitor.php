<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Skip tracking for admin, livewire, or API routes
        if (!$request->is('admin*') && !$request->is('livewire*') && !$request->is('api*')) {
            // Check if this session has already been tracked today
            if (!session()->has('tracked_visit_today')) {
                $ip = $request->ip();
                $date = \Carbon\Carbon::now()->toDateString();

                $visit = \App\Models\Visit::firstOrCreate(
                    ['ip_address' => $ip, 'date' => $date],
                    ['hits' => 0]
                );

                $visit->increment('hits');
                
                // Mark this session as tracked
                session()->put('tracked_visit_today', true);
            }
        }

        return $next($request);
    }
}
