<?php

namespace App\Models;

use App\Models;
use Doctrine\ORM\Mapping;
use Doctrine\Common\Collections;

/**
 * @Entity
 * @Table(name="address")
 */
class Address
{
    /**
     * @var integer
     *
     * @Id
     * @Column(name="idAddress", type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Column(name="address", type="string", length=100, nullable=false)
     */
    private $address;

    /**
     * @var string
     * @Column(name="city",type="string", length=100, nullable=true)
     */
    private $city;
    
    /**
     * @var string
     * @Column(name="postalcode", type="string", length=8, nullable=true)
     */
    private $postalcode;
    
    /**
     * Many users can have the same address
     * @ManyToMany(targetEntity="App\Models\User", inversedBy="addresses", cascade={"persist"})
     * @JoinTable(name="usersAdresses",
     *  joinColumns={@JoinColumn(name="idAddress", referencedColumnName="idAddress")},
     *  inverseJoinColumns={@JoinColumn(name="idUser", referencedColumnName="idUser")}
     * )
    */
    private $users;
    
    /*Constructor*/
	public function __construct(){
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
	}
	
	/***************************
		Getters / Setters
	****************************/
	
	public function getId(){
		return $this->id;
	}
	public function getAddress(){
		return $this->address;
	}
	public function getCity(){
		return $this->city;
	}
	public function getPostalcode(){
		return $this->postalcode;
	}
    public function getUsers(){
        return $this->users;
    }
    
	/************************/
	
	public function setId($id){
		$this->id = $id;
	}
	public function setAddress($address){
		
		$this->address = htmlspecialchars($address);	
	}
	public function setCity($city){
		$this->city = htmlspecialchars($city);	
	}
	public function setPostalcode($postalcode){
		$this->postalcode = htmlspecialchars($postalcode);	
	}
	
	public function setUsers($users){
	    $this->users = $users;
	}
	
	/***************************
		  public function
	****************************/

	public function addUser(User $user)
    {
    	if($user->getAddresses()->contains($this))
    	{
    		 $user->addAddress($this); // synchronously updating inverse side
    	}
    	
    	if(!$this->users->contains($user))
    	{
	        $this->users[] = $user;
    	}
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