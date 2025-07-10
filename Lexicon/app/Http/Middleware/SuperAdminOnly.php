<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class SuperAdminOnly
{
    public function handle($request, Closure $next)
    {
        $user = Auth::guard('admin')->user();
        if ($user && $user->role === 'superadmin') {
            return $next($request);
        }

        return redirect()
            ->route('admin.dashboard')
            ->with('error', 'Access denied. Only superadmins can access this page.');
    }
}
