<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PaiementController {
    
    public function paiementWebService(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        if(!isset($_SESSION["articles"]))
        {
            $newResponse = $response->withStatus(204);
            return $newResponse;
        }
        else
        {
            $total = 0;
            foreach ($_SESSION["articles"] as $article){
               $total+= $article->$priceHT;
            }
            $jsonTotal = "{\"total\":".$total.",\"articles\":";
            $articlesJson = json_encode($_SESSION["articles"]);
            $json = $json.$articlesJson."\"}";
            //$newResponse = $response->withJson($json);
            $newResponse = $response->write($jsonTotal);
            //$newResponse->write($total);
            return $newResponse;
        }

    }
}