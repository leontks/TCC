<?php

require_once("../DB/Connection.php");
require_once("../MODEL/Light.php");

class LightPDO {

	protected $con;

    public function lightCount($idCostumer){
    	$this->con = Connection::getInstance('./DB/configdb.ini');
    	$sql = "SELECT count(*) FROM LIGHT WHERE ID_COSTUMER={$idCostumer};";

    	$result = $this->con->query($sql)->fetchColumn();
    	if($result != null){
    		return $result;
    	}
    	return 0;
    }
    public function maxId($idCostumer){
        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "SELECT max(ID_LIGHT) FROM LIGHT WHERE ID_COSTUMER={$idCostumer};";

        $result = $this->con->query($sql)->fetchColumn();
        if($result != null){
            return $result;
        }
        return 0;
    }
    public function getLight($idCostumer, $idLigth){
    	$this->con = Connection::getInstance('./DB/configdb.ini');
    	$sql = "SELECT * FROM LIGHT WHERE ID_COSTUMER={$idCostumer} and ID_LIGHT={$idLigth};";
    	$result = $this->con->query($sql)->fetchObject();
        if($result != null){
            return $result;
    	}
    	return null;
    }
    public function addLight($idLigth, $login, $ipHardware, $name){

        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "SELECT ID FROM HARDWARE WHERE IP_HARDWARE='{$ipHardware}';";
        $idHardware = $this->con->query($sql)->fetchObject();

        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "SELECT ID FROM COSTUMER WHERE LOGIN='{$login}';";

        $idCostumer = $this->con->query($sql)->fetchObject();
        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "INSERT INTO LIGHT(ID_COSTUMER, ID_LIGHT,ID_HARDWARE, IP_HARDWARE,NAME) VALUES ({$idCostumer->ID},{$idLigth},{$idHardware->ID},'{$ipHardware}','{$name}');";
        $insert = $this->con->prepare($sql);
        $insert->execute();
        
    }
    public function deleteLight($ipHardware, $login){
        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "SELECT ID_HARDWARE FROM HARDWARE WHERE IP_HARDWARE='{$ipHardware}';";
        $idHardware = $this->con->query($sql)->fetchObject();

        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "SELECT ID_COSTUMER FROM COSTUMER WHERE LOGIN='{$login}';";
        $idCostumer = $this->con->query($sql)->fetchObject();

        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "DELETE FROM LIGHT WHERE ID_HARDWARE='{$idHardware}' and ID_COSTUMER='{$idCostumer}';";
        $light = $this->con->query($sql)->fetchObject();
    }
}

?>