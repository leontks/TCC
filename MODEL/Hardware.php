<?php
/*
*
*
*/
class Hardware{

	private $id;
	private $ipHardware;
	private $status;
	private $ligth;
	private $camera;
	private $digital;

	/* Getters and Setters */
	public function getId(){
		return $this->id;
	}
	public function setId($Id){
		$this->id = $Id;
	}
	public function getIpHardware(){
		return $this->ipHardware;
	}
	public function setIpHardware($IpHardware){
		$this->ipHardware = $IpHardware;
	}
	public function getStatus(){
		return $this->status;
	}
	public function setStatus($Status){
		$this->status = $Status;
	}
	public function getLigth(){
		return $this->ligth;
	}
	public function setLigth($Ligth){
		$this->ligth = $Ligth;
	}
	public function getCamera(){
		return $this->camera;
	}
	public function setCarmera($Camera){
		$this->carmera = $Carmera;
	}
	public function getDigital(){
		return $this->digital;
	}
	public function setDigital($Digital){
		$this->digital = $Digital;
	}
	/* Contructor */
	function __construct($Id,$IpHardware,$Status,$Ligth,$Camera,$Digital){
		$this->id = $Id;
		$this->ipHardware = $IpHardware;
		$this->status = $Status;
		$this->ligth = $Ligth;
		$this->camera = $Camera;
		$this->digital = $Digital;
	}
}


?>