<?php 
namespace App\Controllers;

class PaiementController {
    
    public function paiementWebService(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $response->setMessage("test");
        return $response;
    }
}