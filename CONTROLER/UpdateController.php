<?php
include("../header.php");

if ( ! empty( $_POST ) ) {
	//form of hardware
    if ( isset( $_POST['ipHardware'] ) && isset( $_POST['statusHardware'] ) && isset( $_POST['lights'] ) && isset( $_POST['cameras'] ) && isset( $_POST['digital'] ) ) {
    	$hardwarePDO->createHardware($_POST['ipHardware'], $_POST['statusHardware'], $_POST['lights'], $_POST['cameras'], $_POST['digital']);
    	header("Location: ../VIEW/Administration.php");
    }
    //form of costumer
    if ( isset( $_POST['costumerName'] ) && isset( $_POST['costumerLogin'] ) && isset( $_POST['costumerPassword'] ) && isset( $_POST['costumerIpHardware'] ) && isset( $_POST['costumerAddress'] ) ) {
    	$costumerPDO->createCostumer($_POST['costumerIpHardware'], $_POST['costumerLogin'], $_POST['costumerPassword'], $_POST['costumerAddress'], $_POST['costumerName']  );
    	header("Location: ../VIEW/Administration.php");
    }
    //form of sensor
    if(isset( $_POST['sensorName'] ) && isset( $_POST['sensorCostumerLogin']) && isset( $_POST['sensorType']) ){
    	$lights = $lightPDO->lightCount($costumer->getId()) + 1;
    	$lightPDO->addLight($lights, $_POST['sensorCostumerLogin'], $_POST['sensorHardwareIp'], $_POST['sensorName']);
    	header("Location: ../VIEW/Administration.php");
    }
}

?>