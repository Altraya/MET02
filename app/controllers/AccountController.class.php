<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Managers\UserManager;

class AccountController {
    
   protected $container;
   protected $view;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
       $this->container = $container;
       $this->view = $container->get('view');
    }
    
    public function account(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $login = $_SESSION["login"];
        
        $userManager = new UserManager();
        $user = $userManager->getUserByLogin($login);
        
	    $result = $this->view->render($response, 'account.twig', ["user" => $user]);
	    return $result;
    }
}