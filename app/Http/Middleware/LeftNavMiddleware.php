<?php

namespace App\Http\Middleware;

use Closure;

class LeftNavMiddleware
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
        \Menu::make('leftNav', function($menu){
            $menu->add('Dashboard', ['route' => 'index'])
                ->data('icon', 'fa fa-lg fa-fw fa-home');
        });

        return $next($request);
    }
}
