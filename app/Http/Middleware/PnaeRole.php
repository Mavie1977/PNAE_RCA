<?php
namespace App\Http\Middleware;
use Closure; use Illuminate\Http\Request;
class PnaeRole{public function handle(Request $request, Closure $next, string $role){abort_if($request->session()->get('role')!==$role,403,'Accès refusé.');return $next($request);}}
