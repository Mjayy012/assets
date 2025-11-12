<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
     * @var array|string|null
=======
     * @var array
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
