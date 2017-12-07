<?php

namespace App\Utilities;
/*
    Class required for displaying message
*/

class Response {
    
    private $_isGood; //boolean to know if all worked fine or not
    private $_message; //message to return
    
    /*Constructors*/

	public function __construct($data){
		$this->hydrate($data);
	}
	
	/***************************
		Getters / Setters
	****************************/
	
	public function getIsGood(){
		return $this->_isGood;
	}
	public function getMessage(){
		return $this->_message;
	}
	
		/************************/
	
	public function setIsGood($bool){
		$this->_isGood = $bool;
	}
	public function setMessage($msg){
		$this->_message = htmlspecialchars($msg);	
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
				// On appelle le setter.
				$this->$method($value);
			}
		}
	}
}
