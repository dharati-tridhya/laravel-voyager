<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class EncryptDecryptData
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
        // Logic to decrypt
        return $next($request);
    }
    public function terminate($request, $response)
    {
        // Logic to encrypt response.
        $response = Crypt::encryptString($response);

    }
}
