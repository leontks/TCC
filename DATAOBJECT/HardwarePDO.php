<?php

require_once("../DB/Connection.php");
require_once("../MODEL/Hardware.php");

class hardwarePDO {

	protected $con;

    public function getHardware($IpHardware){
    	$this->con = Connection::getInstance('./DB/configdb.ini');
    	$sql = "SELECT * FROM HARDWARE WHERE IP_HARDWARE='{$IpHardware}';";
    	$result = $this->con->query($sql)->fetchObject();
    	if($result != null){
    		return $result;
    	}
    	return null;
    }

    public function createHardware($ipHardware, $statusHardware, $lights, $cameras, $digital){
        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "INSERT INTO hardware( IP_HARDWARE,STATUS,LIGHT,CAMERA,DIGITAL) VALUES ('{$ipHardware}',{$statusHardware},{$lights},{$cameras},{$digital});";
        var_dump($sql);
        $insert = $this->con->prepare($sql);
        $insert->execute();
    }
    public function deleteHardware($login, $ipHardware){

        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "SELECT ID FROM HARDWARE WHERE IP_HARDWARE='{$ipHardware}';";
        $idHardware = $this->con->query($sql)->fetchObject();

        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "SELECT ID FROM COSTUMER WHERE LOGIN='{$login}';";
        $idCostumer = $this->con->query($sql)->fetchObject();

        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "DELETE FROM HARDWARE WHERE ID_HARDWARE='{$idHardware}';";
        $hardware = $this->con->query($sql)->fetchObject();

        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "DELETE FROM LIGHT WHERE ID_HARDWARE='{$idHardware}' and ID_COSTUMER='{$idCostumer}';";
        $light = $this->con->query($sql)->fetchObject();
    }

}

?>