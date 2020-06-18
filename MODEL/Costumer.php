<?php
/**
* 
*/
class Costumer{

	private $id;
	private $idHardware;
	private $login;
	private $password;
	private $ipHardware;
	private $address;
	private $name;

	/* Getters and Setters */
	public function getId(){
		return $this->id;
	}
	public function setId($Id){
		$this->id = $Id;
	}
	public function getIdHardware(){
		return $this->idHardware;
	}
	public function setIdHardware($IdHardware){
		$this->idHardware = $IdHardware;
	}
	public function getLogin(){
		return $this->login;
	}
	public function setLogin($Login){
		$this->login = $Login;
	}
	public function getPassword(){
		return $this->password;
	}
	public function setPassword($Password){
		$this->password = $Password;
	}
	public function getIpHardware(){
		return $this->ipHardware;
	}
	public function setIpHardware($IpHardware){
		$this->ipHardware = $IpHardware;
	}
	public function getAddress(){
		return $this->address;
	}
	public function setAddress($Address){
		$this->address = $Address;
	}
	public function getName(){
		return $this->name;
	}
	public function setName($Name){
		$this->name = $name;
	}
	/* End Getters and Setters */
	/* Contructor */
	public  function __construct($Id,$IdHardware,$Login,$Password,$IpHardware,$Address,$Name){
		$this->id = $Id;
		$this->idHardware = $IpHardware;
		$this->login = $Login;
		$this->password = $Password;
		$this->ipHardware = $IpHardware;
		$this->address = $Address;
		$this->name = $Name;
	}
	public function constructObject($obj){
		$this->id = $obj->getId();
		$this->idHardware = $obj->getIpHardware();
		$this->login = $obj->getLogin();
		$this->password = $obj->getPassword();
		$this->ipHardware = $obj->getIpHardware();
		$this->address = $obj->getAddress();
		$this->name = $obj->getName();
	}
}
?>