<?php
namespace App\Http\Middleware;
use Closure; use Illuminate\Http\Request;
class PnaeAuth{public function handle(Request $request, Closure $next){return $request->session()->has('user_id')?$next($request):redirect()->route('login');}}
