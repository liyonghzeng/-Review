<?php

namespace App\Http\Middleware;

use Closure;

class ConToken
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
       $name =$request->input("user");
       $pwd = $request->input("pwd");
        if($pwd != 11 || $name != 111)
        {
            $data = [
                'error'=>0,
                'msg'=>'密码账号不正确'
            ];
           echo json_encode($data);die;
        }
        return $next($request);
    }
}
