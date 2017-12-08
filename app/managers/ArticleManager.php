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
        $articles = array_map(function($article) {
            return $this->convertToArray($article); },
            $articles);
        $data = json_encode($articles);
       

        // @TODO handle correct status when no data is found...

        return json_encode($data);
    }
    
}
