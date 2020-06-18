<?php

class Light{
	private $id;
	private $idCostumer;
	private $idLight;
	private $idHardware;
	private $ipHardware;
	private $name;

	/* Getters and Setters */

	public function getId(){
		return $this->id;
	}
	public function setId($Id){
		$this->idCostumer = $Id;
	}
	public function getIdCostumer(){
		return $this->idCostumer;
	}
	public function setIdCostumer($IdCostumer){
		$this->idCostumer = $IdCostumer;
	}
	public function getIdLight(){
		return $this->idLight;
	}
	public function setIdLight($IdLight){
		$this->idLight = $IdLight;
	}
	public function getIdHardware(){
		return $this->idHardware;
	}
	public function setIdHardware($IdHardware){
		$this->idHardware = $IdHardware;
	}
	public function getIpHardware(){
		return $this->ipHardware;
	}
	public function setIpHardware($IpHardware){
		$this->ipHardware = $IpHardware;
	}
	public function getName(){
		return $this->name;
	}
	public function setName($Name){
		$this->name = $name;
	}
	public  function __construct($Id,$IdCostumer,$IdLight,$IdHardware,$IpHardware,$Name){
		$this->id = $Id;
		$this->idCostumer = $IdCostumer;
		$this->idLight = $IdLight;
		$this->idHardware = $IpHardware;
		$this->ipHardware = $IpHardware;
		$this->name = $Name;
	}
	public function constructObject($obj){
		$this->id = $obj->Id;
		$this->idCostumer = $obj->$IdCostumer;
		$this->idLight = $obj->$IdLight;
		$this->idHardware = $obj->$IpHardware;
		$this->ipHardware = $obj->$IpHardware;
		$this->name = $obj->$Name;
	}
}
?>