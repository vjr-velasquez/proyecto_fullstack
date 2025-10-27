<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class NoCacheFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null) {}

    public function after(RequestInterface $request, 
    ResponseInterface $response, $arguments = null)
    {
        // app/Filters/NoCacheFilter.php (sin cambios de lógica)
        $response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
                ->setHeader('Pragma', 'no-cache')
                ->setHeader('Expires', 'Mon, 26 Jul 1997 05:00:00 GMT');
    }
}
