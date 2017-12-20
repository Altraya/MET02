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
               $total+= $article["priceHT"];
            }
            $array = array("commandNumber" =>rand(1,9999),"date" =>date('m/d/Y', time()),"total" => $total,"articles" => $_SESSION["articles"]);
            

            $articlesJson = json_encode($array);
            $newResponse = $response->withJson($articlesJson);
            return $newResponse;
        }

    }
}