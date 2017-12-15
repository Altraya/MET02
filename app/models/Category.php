<?php

namespace App\Models;

use App\Models;
use Doctrine\ORM\Mapping;
use Doctrine\Common\Collections;

/**
 * @Entity
 * @Table(name="category")
 */
class Category
{
    /**
     * @var integer
     *
     * @Id
     * @Column(name="idCategory", type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    
    /**
     * @var string
     * @Column(name="percentTaxe",type="decimal", precision=10, scale=0, nullable=false)
     */
    private $percentTaxe;

    /**
     * Many categories have many articles
     * @ManyToMany(targetEntity="App\Models\Article", inversedBy="categories")
     * @JoinTable(name="articlesCategories",
     *  joinColumns={@JoinColumn(name="idCategory", referencedColumnName="idCategory")},
     *  inverseJoinColumns={@JoinColumn(name="idArticle", referencedColumnName="idArticle")}
     * )
    */
    private $articles;
    
    
    /*Constructor*/
	public function __construct(){
        $this->articles = new ArrayCollection();
	}
	
	/***************************
		Getters / Setters
	****************************/
	
	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getPercentTaxe(){
		return $this->percentTaxe;
	}
	public function getArticles(){
	    return $this->articles;
	}
    
	/************************/
	
	public function setId($id){
		$this->id = $id;
	}
	public function setName($name){
		
		$this->name = htmlspecialchars($name);	
	}
	public function setPercentTaxe($percentTaxe){
		$this->percentTaxe = htmlspecialchars($percentTaxe);	
	}
	public function setArticles(\Doctrine\Common\Collections\Collection $articles)
	{
	    $this->articles = $articles;
	}
	
	/***************************
		Getters / Setters
	****************************/

	public function addArticle(App\Models\Article $article)
    {
        $article->addCategory($this); // synchronously updating inverse side
        $this->articles[] = $article;
    }
	
	/************************/
	
	public function hydrate($data)
	{
		foreach($data as $key => $value)
		{
			// Get back the setter name wich correspond to the attribute 
			$method = 'set'.ucfirst($key);
			// if the good setter exist.
			if(methodexists($this, $method))
			{
				$this->$method($value);
			}
		}
	}

}