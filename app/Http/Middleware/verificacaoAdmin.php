<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class verificacaoAdmin
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

        if (!Auth::user()->ehAdmin()) {
            session([
                'mensagem' => 'Somente Administradores tem acesso a isso.'
            ]);
            return back();
        }

        return $next($request);
    }
}
