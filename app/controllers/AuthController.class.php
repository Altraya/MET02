<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Utilities\Utilities;
use App\Models\User;
use App\Models\Address;
use App\Managers\UserManager;
use App\Utilities\Response;

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
        if($request->isPost())
        {
            $ownResponse = new Response([], []);
            
            $parameters = $request->getParams();

            //htmlspecialchars all parameters
            $sanitizedParameters = Utilities::Sanitize($parameters);

            $login = $sanitizedParameters["login"];
            $pwd = $sanitizedParameters["password"];
            
            if($login != null && $pwd != null){
                
                $userManager = new UserManager();
                
                $user = $userManager->getUserByLogin($login);

                if($user)
                {
                    if($user->checkIfPasswordForLoginMatch($pwd)) //check if password match
                    {
                        $ownResponse->setIsGood(true);
                        $ownResponse->setMessage("Login successfully");
                        
                        //set session ID
                        if(!isset($_SESSION["initiated"]))
                        {
                            session_regenerate_id();
                            $_SESSION["initiated"] = true;
                        }
                        
                        $_SESSION["login"] = $user->getLogin();
                    }else{
                        $ownResponse->setIsGood(false);
                        $ownResponse->setMessage("You entered a wrong password");
                    }
        
                }else{
                    $ownResponse->setIsGood(false);
                    $ownResponse->setMessage("This login doesn't exist");
                }
            }else{
                $ownResponse->setIsGood(false);
                $ownResponse->setMessage("Please enter a login and a password");
            }
            
    	    $result = $this->view->render($response, 'login.twig', array("message" => $ownResponse->getMessage()));
        }else{
            $result = $this->view->render($response, 'login.twig', []);
        }
	    return $result;
    }
    
    public function logout(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    session_destroy();
	    
	    $route = $this->container->get('router')->pathFor('home');
	    return $response->withRedirect($route, 303);
    }
    
    public function signup(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {

        if($request->isPost())
        {
            $parameters = $request->getParams(); //get post parameters

            $ownResponse = new Response([], []);

            //create model
            try {
                //don't be efraid, validation rules and sanitize of $parameters are
                //in User setters

                $newUser = new User();
                $newUser->hydrate($parameters);
            
                
                $addressClass = new Address();
                $addressClass->setAddress($parameters["address"]);
                $addressClass->setPostalcode($parameters["postalcode"]);
                $addressClass->setCity($parameters["city"]);
                
                $newUser->addAddress($addressClass);
                
                //get back userManager to persist our entity
                $userManager = new UserManager();
                $entityManagerUser = $userManager->getEntityManager();
                $entityManagerUser->persist($newUser); //this will also persist $addressClass cause of cascade={"persist"}
                $entityManagerUser->flush();
                
                $ownResponse->setIsGood(false);
                $ownResponse->setMessage("Successfully signed up ! One more unicorn friend, yeah !");
                
            }catch(\Exception $ex)
            {
                $ownResponse->setIsGood(false);
                $ownResponse->setMessage("Error : ".$ex->getMessage()); 
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
   