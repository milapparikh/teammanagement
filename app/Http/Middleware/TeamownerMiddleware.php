<?php

namespace App\Http\Middleware;
use App\Role;
use Closure;

class TeamownerMiddleware
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
        //echo $request->user()->email;
        $role = Role::findOrFail($request->user()->role_id);

        if($role->name == 'teamowner')
            return $next($request);
        else{
            return response('Unauthorized Action', 403);
        }
    }
}
