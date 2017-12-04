<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Utilities\Utilities;

require_once("app/utilities/Response.class.php");
require_once("app/utilities/Utilities.class.php");


class AuthController {
    
   protected $container;
   protected $view;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
       $this->container = $container;
       $this->view = $container->get('view');
    }
    
    public function login(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'login.twig', []);
	    return $result;
    }
    
    public function logout(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'logout.twig', []);
	    return $result;
    }
    
    public function signup(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {

        if($request->isPost())
        {
            $parameters = $request->getParams(); //get post parameters
            
            //'login' => string(4) "yrdy" 'pwd' => string(0) "" 'pwdCheck' => string(0) "" 'firstName' => string(0) "" 'lastName' => string(0) "" 'birthdate' => string(0) "" 'email' => string(0) "" 'tel' => string(0) "" 'address' => string(0) "" 'postalcode' => string(0) "" 'city' => string(0) "" }
            $sanitizedParameters = Utilities::Sanitize($parameters); //htmlspecialchars all fields
            
            //name of required fields
            $arrayOfFieldNameToCheck = array("login", "pwd", "pwdCheck", "firstName", "lastName", "birthdate", "email", "tel", "address", "postalcode", "city");
            
            //check if the user has filled all inputs
            $ownResponse = Utilities::CheckIfAllFieldsExists($parameters, $arrayOfFieldNameToCheck); //ownResponse contain a bool to know if all worked fine and a correspondant message
            
    	    $result = $this->view->render($response, 'signup.twig', array("message" => $ownResponse->getMessage()));

        }else{
            //render form
    	    $result = $this->view->render($response, 'signup.twig', array());
        }
	    return $result;
    }
    
    private function checkIfPasswordMatch($pwd1, $pwd2)
    {
        //strcmp($pwd1)
        return true;
    }

}
   