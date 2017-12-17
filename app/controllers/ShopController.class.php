<?php 
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Managers\ArticleManager;
use App\Models\Article;

class ShopController {
    
   protected $container;
   protected $view;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
       $this->container = $container;
       $this->view = $container->get('view');
    }
    
    public function shop(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $category = $request->getAttribute('category');
        $articleManager = new ArticleManager();
        $articles = $articleManager->getArticlesByCategory($category);
	    $result = $this->view->render($response, 'catalog.twig', ["category" => $category, "articles" => $articles]);
	    return $result;
	    
    }
    
    public function cart(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'cart.twig', []);
	    return $result;
    }
    
    /**
    *   in param we have id of item we want to add to cart
    *   this function add the item in session variable + return the Article object with all informations
    */
    public function addToCart(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $idArticle = $request->getAttribute('idArticle');
        $articleManager = new ArticleManager();
        $article = $articleManager->getArticleByIdToArray($idArticle);
        
        //$em = $articleManager->getEntityManager();
        //$em->detach($article); //detach article categories to let it in session with less useless dependancy
        
        $_SESSION["articles"][] = $article;

        //$arrayArticle = $article.ToArray();
        $articleJson = json_encode($article);
        //var_dump($articleJson);
        
        $newResponse = $response->withJson($articleJson);


//        $result = $this->view->render($response, 'miniCart.twig', []);
	    return $newResponse;
    }
    
    public function checkout(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
	    $result = $this->view->render($response, 'checkout.twig', []);
	    return $result;
    }
}