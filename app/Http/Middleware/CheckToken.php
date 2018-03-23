<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$param1)
    {
	if($request->input('token')!='123456' && $param1=='123'){
		return redirect()->to('http://www.baidu.com');
	}
        return $next($request);
    }
}
