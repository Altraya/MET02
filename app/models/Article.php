<?php

namespace App\Models;

use App\Models;
use Doctrine\ORM\Mapping;
use Doctrine\Common\Collections;

/**
 * @Entity
 * @Table(name="article")
 */
class Article
{
    /**
     * @var integer
     *
     * @Id
     * @Column(name="idArticle", type="integer", nullable=false)
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
     * @Column(name="description",type="string", nullable=true)
     */
    private $description;
    
    /**
     * @var string
     * @Column(name="priceHT",type="decimal", precision=10, scale=3, nullable=false)
     */
    private $priceHT;
    
    /**
     * @var string
     * @Column(name="size", type="string", length=3, nullable=true)
     */
    private $size;
    
    /*
     * Many articles have many categories
     * @ManyToMany(targetEntity="App\Models\Category", inversedBy="articles")
     * @JoinTable(name="articlesCategories",
     *  joinColumns={@JoinColumn(name="idArticle", referencedColumnName="idArticle")},
     *  inverseJoinColumns={@JoinColumn(name="idCategory", referencedColumnName="idCategory")}
     * )
    */
    private $categories;
    
    /*Constructor*/
	public function __construct(){
	    echo"tata";
        $this->categories = new ArrayCollection();
        echo"tata";
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
	public function getDescription(){
		return $this->description;
	}
	public function getPriceHT(){
		return $this->priceHT;
	}
    public function getSize(){
        return $this->size;
    }
    public function getCategories(){
        return $this->categories;
    }
    
	/************************/
	
	public function setId($id){
		$this->id = $id;
	}
	public function setName($name){
		
		$this->name = htmlspecialchars($name);	
	}
	public function setDescription($description){
		$this->description = htmlspecialchars($description);	
	}
	public function setPriceHT($priceHT){
		$this->priceHT = htmlspecialchars($priceHT);	
	}
	public function setSize($size){
		$this->size = htmlspecialchars($size);	
	}
	public function setCategories($categories){
	    $this->categories = $categories;
	}
	
	/***************************
		Getters / Setters
	****************************/

	public function addCategory(App\Models\Category $category)
    {
        $category->addArticle($this); // synchronously updating inverse side
        $this->categories[] = $category;
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