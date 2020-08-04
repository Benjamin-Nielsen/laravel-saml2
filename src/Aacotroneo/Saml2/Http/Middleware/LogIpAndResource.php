<?php

namespace App\Http\Middleware;

use App\Helpers\ToastHelper;
use App\User;
use Closure;
use Auth;
use Aacotroneo\Saml2\Saml2Auth;
use Illuminate\Support\Facades\Redirect;

class LogIpAndMiddleware
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
        // Get ip
        // Get resource (url)
        // Log with timestamp to specific safe logging channel only
        // The logging channel is set in the config, and can be overwritten in the environment file
    }
}
