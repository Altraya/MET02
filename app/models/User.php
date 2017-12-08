<?php

namespace App\Models;

use App\Models;
use Doctrine\ORM\Mapping;

/**
 * @Entity
 * @Table(name="user")
 */
class User
{
    /**
     * @var integer
     *
     * @Id
     * @Column(name="idUser", type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $_id;

    /**
     * @var string
     * @Column(name="login", type="string", length=45, nullable=false)
     */
    private $_login;

    /**
     * @var string
     * @Column(name="email",type="string", length=50, nullable=false)
     */
    private $_email;
    
    /**
     * @var string
     * @Column(name="password",type="string", length=255, nullable=false)
     */
    private $_pwd;
    
    /**
     * @var string
     * @Column(name="firstname", type="string", length=45, nullable=false)
     */
    private $_firstName;
    
    /**
     * @var string
     * @Column(name="lastname", type="string", length=45, nullable=false)
     */
    private $_lastName;
    
    /**
     * @var date
     * @Column(name="birthname", type="date", name="birthdate", nullable=false)
     * 
     */
    private $_birthdate;
    
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
	public function getLogin(){
		return $this->_login;
	}
	public function getPwd(){
		return $this->_pwd;
	}
	public function getFirstName(){
		return $this->_firstName;
	}
	public function getLastName(){
		return $this->_lastName;
	}
    public function getEmail(){
        return $this->_email;
    }
    public function getBirthdate(){
    	return $this->_birthdate;
    }
	/************************/
	
	public function setId($id){
		$this->_id = $id;
	}
	public function setLogin($login){
		
		$this->_login = htmlspecialchars($login);	
	}
	public function setPwd($pwd){
		try{
			$hashedPwd = password_hash(htmlspecialchars($pwd), PASSWORD_DEFAULT); //generate random salt
        	$this->_pwd = $hashedPwd;
		}catch(\Exception $ex)
		{
			echo($ex->getMessage());
		}
        
	}
	public function setFirstName($firstName){
		$this->_firstName = htmlspecialchars($firstName);	
	}
	public function setLastName($lastName){
		$this->_lastName = htmlspecialchars($lastName);	
	}
	public function setEmail($email){
	    $this->_email = htmlspecialchars($email);
	}
	public function setBirthdate($birthdate)
	{
		//birthdate like 4 December, 2017
		$birthdate = htmlspecialchars($birthdate);
		$dateBirthdate = \DateTime::createFromFormat('j M, Y', $birthdate);
		$newDateString = $dateBirthdate->format('Y-m-d');
		$this->_birthdate = $dateBirthdate;
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