<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    private $openRoutes = ['test/url', 'subscribe','posts','posts/*','admin/upload','admin/upload/*','admin/uploads'];
    protected $except = [
        'posts/*',
        'subscribe'
    ];
    public function handle($request, Closure $next)
    {
        if (in_array($request->path(), $this->openRoutes)) {
            return $next($request);
        }
        return parent::handle($request, $next);
    }
}
