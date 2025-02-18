<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateUser{
    public function handle(Request $request, Closure $next)
    {   
        $validator = Validator::make($request->all(), [
            'name'  => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'age'   => 'required|integer|min:0'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        return $next($request);
    }
}