<?php

use Base\User as BaseUser;

/**
 * Skeleton subclass for representing a row from the 'user' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class User extends BaseUser
{
    private $_idUser;
    private $_login;
    private $_pwd;
    private $_salt;
    private $_firstName;
    private $_lastName;
    
    /*Constructor*/
	public function __construct($donnees){
		$this->hydrate($donnees);
	}
	
	/***************************
		Getters / Setters
	****************************/
	
	public function getIdUser(){
		return $this->_idUser;
	}
	public function getLogin(){
		return $this->_login;
	}
	public function getPwd(){
		return $this->_pwd;
	}
	public function getSalt(){
		return $this->_salt;
	}
	public function getFirstName(){
		return $this->_firstName;
	}
	public function getLastName(){
		return $this->_lastName;
	}
	
	/************************/
	
	public function setIdUser($id){
		$this->_idUser = htmlspecialchars($id);
	}
	public function setLogin($login){
		$this->_login = htmlspecialchars($login);	
	}
	public function setPwd($pwd){
		$this->_pwd = htmlspecialchars($pwd);	
	}
	public function setSalt($salt){
		$this->_salt = htmlspecialchars($salt);	
	}
	public function setFirstName($firstName){
		$this->_firstName = htmlspecialchars($firstName);	
	}
	public function setLastName($lastName){
		$this->_lastName = htmlspecialchars($lastName);	
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
