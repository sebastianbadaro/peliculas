<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Testing\HttpException as HttpException;

class CaidoPorMantenimiento
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
      throw new HttpException(503);
        //return $next($request);
    }
}
