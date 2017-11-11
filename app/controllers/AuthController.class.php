<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

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
        /*$smarty->assign("viewname", "connection");
	    $smarty->display("login.tpl"); */
	    $response->write('je suis une reponse');
	    $result = $this->view->render($response, 'login.html', []);
	    return $result;
    }
    
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        
        return $response->write('Hello World! é'); /*$this->smarty->display("login.tpl");*/
    }

}
   