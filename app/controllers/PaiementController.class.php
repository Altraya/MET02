<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Utilities\Response;

class PaiementController {
    
    public function paiementWebService(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $response->write("test");
        return $response;
    }
}