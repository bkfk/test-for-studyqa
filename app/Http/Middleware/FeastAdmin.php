<?php

namespace App\Http\Middleware;

use Closure;
use App\Feast;

class FeastAdmin
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
      $feast_admins_id = $request->route('feast')->users->pluck('id')->toArray();
      $user = auth()->user();

      if(in_array($user->id, $feast_admins_id)){
        return $next($request);
      }

      if($user->is_super_admin){
        return $next($request);
      }

      abort(403, 'У Вас нет прав на просмотр этой страницы.');
    }
}
