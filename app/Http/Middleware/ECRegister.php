<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Input;
use Closure;

class ECRegister
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
        $name=Input::post('name');
        $roll=Input::post('roll');
        if($name=="" && $roll==""){
            return redirect('ec');
        }
        return $next($request);
    }
}
