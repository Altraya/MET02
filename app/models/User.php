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
    private $id;

    /**
     * @var string
     * @Column(name="login", type="string", length=45, nullable=false)
     */
    private $login;

    /**
     * @var string 
     * @Column(name="email",type="string", length=50, nullable=false)
     */
    private $email;
    
    /**
     * @var string
     * @Column(name="password",type="string", length=255, nullable=false)
     */
    private $pwd;
    
    /**
     * @var string
     * @Column(name="firstname", type="string", length=45, nullable=false)
     */
    private $firstName;
    
    /**
     * @var string
     * @Column(name="lastname", type="string", length=45, nullable=false)
     */
    private $lastName;
    
    /**
     * @var string
     * @Column(name="phoneNumber", type="string", length=10, nullable=false)
     */
    private $phoneNumber;
    
    /**
     * @var date
     * @Column(name="birthname", type="date", name="birthdate", nullable=false)
     * 
     */
    private $birthdate;
    
    /**
     * Many users can have many addresses
     * @ManyToMany(targetEntity="App\Models\Address", mappedBy="users")
     * @JoinTable(name="usersAdresses",
     *  joinColumns={@JoinColumn(name="idUser", referencedColumnName="idUser")},
     *  inverseJoinColumns={@JoinColumn(name="idAddress", referencedColumnName="idAddress")}
     * )
    */
    private $addresses;
    
    /*Constructor*/
	public function __construct(){
		
		//not in use now ... but was so cool, so keep it here in comment :< 
		//$salt = "Why is Batman so salty? Na Na Na Na Na Na Na Na Batman!"; //<--- our amazing salt
		$this->addresses = new ArrayCollection();

	}
	
	/***************************
		Getters / Setters
	****************************/
	
	public function getId(){
		return $this->id;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getPwd(){
		return $this->pwd;
	}
	public function getFirstName(){
		return $this->firstName;
	}
	public function getLastName(){
		return $this->lastName;
	}
    public function getEmail(){
        return $this->email;
    }
    public function getPhoneNumber(){
    	return $this->phoneNumber;
    }
    public function getBirthdate(){
    	return $this->birthdate;
    }
	/************************/
	
	public function setId($id){
		$this->id = $id;
	}
	public function setLogin($login){
		$this->login = htmlspecialchars($login);	
	}
	public function setPwd($pwd){
		try{
			$hashedPwd = password_hash(htmlspecialchars($pwd), PASSWORD_DEFAULT); //generate random salt
        	$this->pwd = $hashedPwd;
		}catch(\Exception $ex)
		{
			echo($ex->getMessage());
		}
        
	}
	public function setFirstName($firstName){
		$this->firstName = htmlspecialchars($firstName);	
	}
	public function setLastName($lastName){
		$this->lastName = htmlspecialchars($lastName);	
	}
	public function setEmail($email){
	    $this->email = htmlspecialchars($email);
	}
	public function setPhoneNumber($phoneNumber){
		$this->phoneNumber = htmlspecialchars($phoneNumber);
	}
	public function setBirthdate($birthdate)
	{
		//birthdate like 4 December, 2017
		$birthdate = htmlspecialchars($birthdate);
		$dateBirthdate = \DateTime::createFromFormat('j M, Y', $birthdate);
		$newDateString = $dateBirthdate->format('Y-m-d');
		$this->birthdate = $dateBirthdate;
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
				$this->$method($value);
			}
		}
	}
	
	/* Public methods*/
	
	public function addAddress(App\Models\Address $address)
    {
        $address->addUser($this); // synchronously updating inverse side
        $this->addresses[] = $address;
    }
    
	/**
	 * Check if the pwd in parameter match with our pwd
	 * @param $unhashedPassword : password to check -> in clear
	 * @return true if the $unhashedPassword match with our password $this->pwd
	 * 
	 */
	public function checkIfPasswordForLoginMatch($unhashedPassword)
	{
		try{
			// boolean password_verify ( string $password , string $hash )
			$result = password_verify($unhashedPassword, $this->pwd);
			return $result;
			
		}catch(\Exception $ex)
		{
			echo($ex->getMessage());
		}
	}

}