<?php

namespace App\Managers;

use App\Managers\ConnectionManager;
use App\Models\Article;

/**
 * Article Manager : CRUD operation and Article management 
 */
class ArticleManager extends ConnectionManager
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

        if($category != NULL)
        {
            $articles = $category->getArticles();
        }
        return $articles;
    }
    
    public function deleteArticleWithId($idArticle)
    {
        $ok = false;
        $em = $this->getEntityManager();
        $repository = $em->getRepository("App\Models\Article");
        $article = $repository->findOneById($idArticle);
        if($article != NULL)
        {
            $em->remove($article);
            $em->flush();
            $ok = true;
        }
        return $ok;
    }
    
    public function getArticlesByNameSearch($name)
    {
        $articles = NULL;
        $repository = $this->getEntityManager()->getRepository("App\Models\Article");
        $query = $repository->createQueryBuilder('a')
                       ->where('a.name LIKE :name')
                       ->setParameter('name', '%'.$name.'%')
                       ->getQuery();
        $articles = $query->getResult();

        return $articles;
    }
    
    public function getArticleById($idArticle)
    {
        $repository = $this->getEntityManager()->getRepository("App\Models\Article");

        $article = $repository->findOneById($idArticle);

        return $article;
    }
    
    /**
     * Get article with the specified id in parameters
     * return article (in array and not uggly doctrine object) or null
     * 
     */
    public function getArticleByIdToArray($idArticle)
    {
        $result = $this->getEntityManager()->createQueryBuilder();
        $articleArray = $result->select('a')
            ->from('App\Models\Article', 'a')
            ->where('a.id= :id')
            ->setParameter('id', $idArticle)
            ->getQuery()
            ->getOneOrNullResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return $articleArray;
    }
}
