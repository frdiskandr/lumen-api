<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class RequestLogger
{
    public function handle($request, Closure $next)
    {
        Log::info('Request:', [
            'method' => $request->method(),
            'path'   => $request->path(),
            'ip'     => $request->ip(),
            'data'   => $request->all()
        ]);

        return $next($request);
    }
}
