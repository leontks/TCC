<?php

require_once("../DB/Connection.php");
require_once("../DATAOBJECT/CostumerPDO.php");
require_once("../DATAOBJECT/HardwarePDO.php");
require_once("../DATAOBJECT/LightPDO.php");
require_once("../MODEL/Costumer.php");
require_once("../MODEL/Hardware.php");
require_once("../MODEL/Light.php");

session_start();
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
if ( !isset($_SESSION['user']) && !isset($_SESSION['pass']) ) {
	header("Location: ../CONTROLER/logout.php");
}
$costumerPDO = new CostumerPDO();
$hardwarePDO = new HardwarePDO();
$lightPDO = new LightPDO();
/*

 GETTING ALL INFORMATION ABOUT USER AND HARDWARE 

*/
$currentCostumer = $costumerPDO->getCostumer( $user, $pass );
$costumer = new Costumer( $currentCostumer->ID, $currentCostumer->ID_HARDWARE,$currentCostumer->LOGIN,$currentCostumer->PASSWORD,$currentCostumer->IP_HARDWARE,$currentCostumer->ADDRESS,$currentCostumer->NAME );
$currentHardware = $hardwarePDO->getHardware( $costumer->getIpHardware() );
$hardware = new Hardware( $currentHardware->ID, $currentHardware->IP_HARDWARE, $currentHardware->STATUS, $currentHardware->LIGHT, $currentHardware->CAMERA, $currentHardware->DIGITAL );

$lightIndex = 1;

?>
<div class="container-fluid ">
	<div class="row">
		<div class="col-md-12 position-header">
			<div class="row">
				<div id="bemVindo" class="col-sm-6">

					<h1 class="title-header-index">Olá, é bom ver você de novo <?php echo $costumer->getName(); ?>!</h1>
					
				</div>
				<div class="col-sm-4 main-menu">
					<span><a href="../VIEW/home.php">Home</a></span>
					<span><a href="../VIEW/administration.php">Administration</a></span>
					
				</div>
				<div class="col-sm-2 main-menu">
					<a href="../CONTROLER/logout.php"><img class="logout" onmouseover="changeIconMenu()" onmouseout="logout()" id="logout" src="../images/shutdown-off.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function fadeOutMenu(id, time) {
	    fadeMenu(id, time, 100, 0);
	}
	function fadeInMenu(id, time) {
	    fadeMenu(id, time, 0, 100);
	}
	function fadeMenu(id, time, ini, fin) {
	    var target = document.getElementById(id);
	    var alpha = ini;
	    var inc;
	    if (fin >= ini) { 
	        inc = 2; 
	    } else {
	        inc = -2;
	    }
	    timer = (time * 1000) / 50;
	    var i = setInterval(
	        function() {
	            if ((inc > 0 && alpha >= fin) || (inc < 0 && alpha <= fin)) {
	                clearInterval(i);
	            }
	            setAlpha(target, alpha);
	            alpha += inc;
	        }, timer);
	}
	function setAlpha(target, alpha) {
	    target.style.filter = "alpha(opacity="+ alpha +")";
	    target.style.opacity = alpha/100;
	}
	function changeIconMenu(){
		var popup;
		if(document.getElementById("logout").onmouseover){
			image = "../images/shutdown.png";
			fadeInMenu("logout", 1);
			document.getElementById("logout").src = image;
		}
	}
	function logout(){
		if(document.getElementById("logout").onmouseout){
			image = "../images/shutdown-off.png";
			fadeInMenu("logout", 1);
			document.getElementById("logout").src = image;
			
		}
	}
</script>			