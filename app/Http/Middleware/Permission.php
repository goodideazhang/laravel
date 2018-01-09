<?php

namespace App\Http\Middleware;

use Closure;
use \Bouncer;
use Illuminate\Support\Facades\Auth;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $user = Auth::user();
        if (!$user->can('users_manage')) {
            $response->header('Content-type', 'application/json')
                ->setContent(['msg' => '您没有权限执行此操作']);
        }
        return $response;
    }
}
