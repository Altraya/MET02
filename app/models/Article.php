<?php

namespace App\Models;

use App\Models;
use Doctrine\ORM\Mapping;

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
    private $_id;

    /**
     * @var string
     * @Column(name="name", type="string", length=45, nullable=false)
     */
    private $_name;

    /**
     * @var string
     * @Column(name="description",type="string", nullable=true)
     */
    private $_description;
    
    /**
     * @var string
     * @Column(name="priceHT",type="decimal", precision=10, scale=3 nullable=false)
     */
    private $_priceHT;
    
    /**
     * @var string
     * @Column(name="size", type="string", length=3, nullable=true)
     */
    private $_size;
    
    /*Constructor*/
	public function __construct($data){
		$this->hydrate($data);
		
		//not in use now ... but was so cool, so keep it here in comment :< 
		//$salt = "Why is Batman so salty? Na Na Na Na Na Na Na Na Batman!"; //<--- our amazing salt
	}
	
	/***************************
		Getters / Setters
	****************************/
	
	public function getId(){
		return $this->_id;
	}
	public function getName(){
		return $this->_name;
	}
	public function getDescription(){
		return $this->_description;
	}
	public function getPriceHT(){
		return $this->_priceHT;
	}
    public function getSize(){
        return $this->_size;
    }
    
	/************************/
	
	public function setId($id){
		$this->_id = $id;
	}
	public function setName($name){
		
		$this->_name = htmlspecialchars($name);	
	}
	public function setDescription($description){
		$this->_description = htmlspecialchars($description);	
	}
	public function setPriceHT($priceHT){
		$this->_priceHT = htmlspecialchars($priceHT);	
	}
	public function setSize($size){
		$this->_size = htmlspecialchars($size);	
	}
	
	/************************/
	
	public function hydrate($data)
	{
		foreach($data as $key => $value)
		{
			// Get back the setter name wich correspond to the attribute 
			$method = 'set'.ucfirst($key);
			// if the good setter exist.
			if(method_exists($this, $method))
			{
				// call setter but if the value is equal to "" we need to set null
				$this->$method($value);
			}
		}
	}

}