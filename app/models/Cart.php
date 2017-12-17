<?php

namespace App\Models;

class Cart
{
    private $listOfArticles;
    
        
    /*Constructor*/
	public function __construct(){
        $this->listOfArticles = [];
	}
	
	/***************************
		Getters / Setters
	****************************/
	
	public function getListOfArticles(){
		return $this->listOfArticles;
	}
	    
	/************************/
	
	public function setListOfArticles($listOfArticles){
		$this->listOfArticles = $listOfArticles;
	}
    
}