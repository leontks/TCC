<?php

require_once("../DB/Connection.php");
require_once("../MODEL/Costumer.php");

class CostumerPDO {

	protected $con;

	/*public function list(){
	    $sql = "SELECT * FROM COSTUMER;"
	    $stmt = $con->prepare($sql);
	    $result = array();
	    if ($stmt->execute()) {
	        while ($rs = $stmt->fetchObject(Costumer::class)) {
	            $result[] = $rs;
	        }
	    }
	    return $result;
    }*/

    public function confirmCostumer($Login, $Senha){
    	$this->con = Connection::getInstance('./DB/configdb.ini');
    	$sql = "SELECT * FROM COSTUMER WHERE LOGIN='{$Login}' and PASSWORD='{$Senha}';";
    	$result = $this->con->query($sql);
    	if($result != null){
    		return true;
    	}
    	return false;
    }
    public function getCostumer($Login, $Senha){
    	$this->con = Connection::getInstance('./DB/configdb.ini');
    	$sql = "SELECT * FROM COSTUMER WHERE LOGIN='{$Login}' and PASSWORD='{$Senha}';";
    	$result = $this->con->query($sql)->fetchObject();
        if($result != null){
            return $result;
    	}
    	return null;
    }
    public function createCostumer($ipHardware, $login, $password, $address, $name ){
        
        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "SELECT ID FROM HARDWARE WHERE IP_HARDWARE='{$ipHardware}';";
        $idHardware = $this->con->query($sql)->fetchObject();
        
        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "INSERT INTO COSTUMER (ID_HARDWARE, LOGIN, PASSWORD, IP_HARDWARE, ADDRESS, NAME) VALUES ({$idHardware->ID},'{$login}','{$password}','{$ipHardware}','{$address}','{$name}');";
        $insert = $this->con->prepare($sql);
        $insert->execute();
    }
    public function deleteCostumer($login){

        $this->con = Connection::getInstance('./DB/configdb.ini');
        $sql = "SELECT IP_HARDWARE FROM COSTUMER WHERE LOGIN='{$login}';";
        $ipHardware = $this->con->query($sql)->fetchObject();

        if($ipHardware != null){

            $this->con = Connection::getInstance('./DB/configdb.ini');
            $sql = "SELECT ID FROM HARDWARE WHERE IP_HARDWARE='{$ipHardware}';";
            $idHardware = $this->con->query($sql)->fetchObject();

            $this->con = Connection::getInstance('./DB/configdb.ini');
            $sql = "DELETE FROM HARDWARE WHERE ID_HARDWARE='{$idHardware->ID}';";
            $hardware = $this->con->query($sql)->fetchObject();

            $this->con = Connection::getInstance('./DB/configdb.ini');
            $sql = "DELETE FROM LIGHT WHERE ID_HARDWARE='{$idHardware->ID}';";
            $light = $this->con->query($sql)->fetchObject();

            $this->con = Connection::getInstance('./DB/configdb.ini');
            $sql = "DELETE FROM COSTUMER WHERE LOGIN='{$login}';";
            $costumer = $this->con->query($sql)->fetchObject();

            return "All about of costumer ".$login." has been deleted.";

        }elseif ($ipHardware == null) {
            return "Costumer not found. Please verify if the Login wrotten is correct.";
        }
    }
}

?>