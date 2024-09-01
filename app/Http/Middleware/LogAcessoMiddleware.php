<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;

class LogAcessoMiddleware
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
        $hosts = $request->server->get('REMOTE_ADDR');
        $dispositivo = $request->server->get('HTTP_USER_AGENT');
        $rota = $request->getRequestUri();
        $log = $request;
        $log = substr($log,0,199);
        //dd($hosts);
        LogAcesso::create([
            'log' => $log, 
            'hosts' => $hosts, 
            'dispositivo' => $dispositivo, 
            'rota' => $rota
        ]);
        return $next($request);
        //dd($request);
        //return Response('<pre>'.$request.'</pre>');
    }
}
