<?php
require_once("../DB/Connection.php");
require_once("../DATAOBJECT/CostumerPDO.php");
require_once("../index.php");


$senha=$_POST['senha'];
$login=$_POST['login'];

$costumer = new CostumerPDO();

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['login'] ) && isset( $_POST['senha'] ) ) {
		if($costumer->confirmCostumer($login,$senha)){
			session_start();
		    $_SESSION['user']=$login;
		    $_SESSION['pass']=$senha;
			header("Location: ../VIEW/home.php");
		}if(!$costumer->getCostumer($login,$senha)){
			header("Location: ../CONTROLER/logout.php");
		}
	}
}


?>