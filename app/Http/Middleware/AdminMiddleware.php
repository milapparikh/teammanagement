<?php

namespace App\Http\Middleware;
use App\Role;
use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $role = Role::findOrFail($request->user()->role_id);

        if($role->name == 'adminmanager')
            return $next($request);
        else{
            //return response()->json('Invalid Token', 401);
            //return response()->json(['error' => 'Unauthenticated.'], 401);
            return response('Unauthorized Action', 403);
        }
    }
}
