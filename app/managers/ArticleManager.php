<?php

namespace App\Managers;

use App\Managers\ConnectionManager;
use App\Models\Article;

/**
 * Article Manager : CRUD operation and Article management 
 */
class ArticleManager extends ConnectionAbstractManager
{

    /**     
     * @return string
     */
    public function getAll()
    {

        //TODO not finished
        $articles = $this->getEntityManager()->getRepository('App\Models\Article')->findAll();
        
        return $articles;
    }
    
    /**
     * @param category : category of article we want
     * @return an array of Article object or null 
    */
    public function getArticlesByCategory($categoryName)
    {
        $articles = NULL;
        
        $repository = $this->getEntityManager()->getRepository("App\Models\Category");

        $category = $repository->findOneByName($categoryName);
        
        var_dump($category);
        if($category != NULL)
        {
            $articles = $category->getArticles();
        }
        return $articles;
    }
    
}
