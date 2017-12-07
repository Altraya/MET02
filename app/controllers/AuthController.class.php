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
            var_dump($sanitizedParameters);
            
            //name of required fields
            $arrayOfFieldNameToCheck = array("login", "pwd", "pwdCheck", "firstName", "lastName", "birthdate", "email", "tel", "address", "postalcode", "city");
            
            //check if the user has filled all inputs
            $ownResponse = Utilities::CheckIfAllFieldsExists($sanitizedParameters, $arrayOfFieldNameToCheck); //ownResponse contain a bool to know if all worked fine and a correspondant message
            
            //check parameters 
            if($ownResponse->getIsGood())
            {
                $ownResponse = checkSignupFormFields($sanitizedParameters);
                if($ownResponse->getIsGood())
                {
                    //all is good so :
                    //so now we need to generate a salt and to hash password
                    $salt = "Why is Batman so salty? Na Na Na Na Na Na Na Na Batman!"; //<--- our amazing salt
                    $remakePwd = $salt . $sanitizedParameters["pwd"];
                    $hashedPwd = hash('sha256', $remakePwd);
                    
                    //create model
                    $newUser = new User($sanitizedParameters);
                    $newUser->setPwd($hashedPwd);
                    $newUser->setSalt($salt);
                    
                    $newUser->save();
                }//else will return the $ownResponse message bellow
                
            }
            
    	    $result = $this->view->render($response, 'signup.twig', array("message" => $ownResponse->getMessage()));

        }else{
            //render form
    	    $result = $this->view->render($response, 'signup.twig', array());
        }
	    return $result;
    }
    
    private function checkSignupFormFields($sanitizedParameters)
    {
        //if all the others fields are okay, we check for password
        $ownResponse = Utilities::CheckIfStringsMatch($sanitizedParameters["pwd"], $sanitizedParameters["pwdCheck"]);
        if($ownResponse->getIsGood())
        {
            //if the 2 passwords are the same, we can check the birthdate
            //we want to blocked users < 15 years old
            $birthdate = DateTime::createFromFormat('Y-M-d', $sanitizedParameters["birthdate"]);
            $yearDiff = date("Y") - $birthdate->format('Y');
            if($yearDiff <= 15)
            {
                $ownResponse = new Response();
                $ownResponse->setIsGood(false);
                $ownResponse->setMessage("Invalid birthdate : You need to enter your real birthdate");
            }else{
                //good birthdate
                //check if email has correct pattern
                if(!filter_var($sanitizedParameters["email"], FILTER_VALIDATE_EMAIL))
                {
                    $ownResponse = new Response();
                    $ownResponse->setIsGood(false);
                    $ownResponse->setMessage("Invalid email : Please enter a valide email address");
                }else{
                    //good email
                    $ownResponse = new Response();
                    $ownResponse->setIsGood(true);
                    $ownResponse->setMessage("Fields are valid");
                }
                
            }
            
        }
        return $ownResponse;
    }
    private function checkIfPasswordMatch($pwd1, $pwd2)
    {
        //strcmp($pwd1)
        return true;
    }

}
   