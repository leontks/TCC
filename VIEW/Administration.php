<html>
	<head>
		 <!-- Required meta tags -->
	   <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    
	    <link rel="stylesheet" href="../style.CSS" />
	    <title>SMART HOME</title>
	</head>
	<body class="main-background-adm">
		<?php include("../header.php");?>
		<div class="main-background-adm-black-pane">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-8 col-offset-2 footer-space">
						<div id="accordion">
						  <div class="card acc-template">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          CREATION TOOL
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body">

						       	<div id="carouselAdministration" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div id="admForm" class="col-6">
												<form class="adm-form" action="../CONTROLER/CreationController.php" method="post" onsubmit="return verify();" id="hardware">
													<label>IP HARDWARE</label>
													<input class="rounded-pill" data-mask="000.000.000.000" data-mask-selectonfocus="true" id="ipHardware" name="ipHardware" type="text"/>
													<label>STATUS HARDWARE</label>
													<input class="rounded-pill" id="statusHardware" name="statusHardware" type="text"/>
													<label>HOW MANY LIGHTS?</label>
													<input class="rounded-pill" id="lights" name="lights" type="text"/>
													<label>HOW MANY CARMERAS?</label>
													<input class="rounded-pill" id="cameras" name="cameras" type="text"/>
													<label>HAS DIGITAL ON ENTRANCE?</label>
													<input class="rounded-pill" id="digital" name="digital" type="text"/>
													<datalist id="type">
														<option value="LIGHT">
														<option value="CAMERA">
														<option value="DIGITAL">
													</datalist>
													<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="hardware"/>
												</form>
											</div>
											<div class=" adm-title">
											    <h5>Hardware management</h5>
											    <p>Here you can create a new hardware for a costumer.</p>
											</div>
										</div>
										<div class="carousel-item">
											<div id="admForm" class="col-6">
												<form class="adm-form" action="../CONTROLER/CreationController.php" method="post" onsubmit="return verify();" id="costumer">
													<label>COSTUMER NAME</label>
													<input class="rounded-pill" id="costumerName" name="costumerName" type="text"/>
													<label>COSTUMER LOGIN</label>
													<input class="rounded-pill" id="costumerLogin" name="costumerLogin" type="text"/>
													<label>COSTUMER PASSWORD</label>
													<input class="rounded-pill" id="costumerPassword" name="costumerPassword" type="password"/>
													<label>COSTUMER IP HARDWARE</label>
													<input class="rounded-pill" data-mask="000.000.000.000" data-mask-selectonfocus="true" id="costumerIpHardware" name="costumerIpHardware" type="text"/>
													<label>COSTUMER ADDRESS</label>
													<input class="rounded-pill" id="costumerAddress" name="costumerAddress" type="textarea"/>
													<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="costumer"/>
												</form>
											</div>
											<div class=" adm-title">
											    <h5>Costumer management</h5>
											    <p>Here you can create a new costumer.</p>
											</div>
										</div>
										<div class="carousel-item">
											<div id="admForm" class="col-6">
												<form class="adm-form" action="../CONTROLER/CreationController.php" method="post" onsubmit="return verify();" id="sensor">
													<label>SENSOR NAME</label>
													<input class="rounded-pill" id="sensorName" name="sensorName" type="text"/>
													<label>COSTUMER LOGIN</label>
													<input class="rounded-pill" id="sensorCostumerLogin" name="sensorCostumerLogin" list="sensorCostumerNameList"/>
													<datalist id="sensorCostumerNameList">
														<option value="Leo">
														<option value="Teste">
													</datalist>
													<label>HARDWARE IP</label>
													<input class="rounded-pill" id="sensorHardwareIp" name="sensorHardwareIp" type="text"/>
													<label>SENSOR TYPE</label>
													<input class="rounded-pill" id="sensorType" name="sensorType" list="type"/>
													<datalist id="type">
														<option value="LIGHT">
														<option value="CAMERA">
													</datalist>
													<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="sensor"/>
												</form>
											</div>
											<div class=" adm-title">
											    <h5>Sensor management</h5>
											    <p>Here you can help the costumer manipulation the sensor from customer house.</p>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselAdministration" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselAdministration" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>

						      </div>
						    </div>
						  </div>
						  <div class="card acc-template">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          UPDATE TOOL
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body">

								<div id="carouselUpdate" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div id="admForm" class="col-6">
												<form class="adm-form" action="../CONTROLER/UpdateController.php" method="post" onsubmit="return verify();" id="hardware">
													<label>IP HARDWARE</label>
													<input class="rounded-pill" data-mask="000.000.000.000" data-mask-selectonfocus="true" id="ipHardware" name="ipHardware" type="text"/>
													<label>STATUS HARDWARE</label>
													<input class="rounded-pill" id="statusHardware" name="statusHardware" type="text"/>
													<label>HOW MANY LIGHTS?</label>
													<input class="rounded-pill" id="lights" name="lights" type="text"/>
													<label>HOW MANY CARMERAS?</label>
													<input class="rounded-pill" id="cameras" name="cameras" type="text"/>
													<label>HAS DIGITAL ON ENTRANCE?</label>
													<input class="rounded-pill" id="digital" name="digital" type="text"/>
													<datalist id="type">
														<option value="LIGHT">
														<option value="CAMERA">
														<option value="DIGITAL">
													</datalist>
													<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="hardware"/>
												</form>
											</div>
											<div class=" adm-title">
											    <h5>Hardware update</h5>
											    <p>Here you can update an existing hardware for a costumer.</p>
											</div>
										</div>
										<div class="carousel-item">
											<div id="admForm" class="col-6">
												<form class="adm-form" action="../CONTROLER/UpdateController.php" method="post" onsubmit="return verify();" id="costumer">
													<label>COSTUMER NAME</label>
													<input class="rounded-pill" id="costumerName" name="costumerName" type="text"/>
													<label>COSTUMER LOGIN</label>
													<input class="rounded-pill" id="costumerLogin" name="costumerLogin" type="text"/>
													<label>COSTUMER PASSWORD</label>
													<input class="rounded-pill" id="costumerPassword" name="costumerPassword" type="password"/>
													<label>COSTUMER IP HARDWARE</label>
													<input class="rounded-pill" data-mask="000.000.000.000" data-mask-selectonfocus="true" id="costumerIpHardware" name="costumerIpHardware" type="text"/>
													<label>COSTUMER ADDRESS</label>
													<input class="rounded-pill" id="costumerAddress" name="costumerAddress" type="textarea"/>
													<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="costumer"/>
												</form>
											</div>
											<div class=" adm-title">
											    <h5>Costumer update</h5>
											    <p>Here you can update an existing costumer.</p>
											</div>
										</div>
										<div class="carousel-item">
											<div id="admForm" class="col-6">
												<form class="adm-form" action="../CONTROLER/UpdateController.php" method="post" onsubmit="return verify();" id="sensor">
													<label>SENSOR NAME</label>
													<input class="rounded-pill" id="sensorName" name="sensorName" type="text"/>
													<label>COSTUMER LOGIN</label>
													<input class="rounded-pill" id="sensorCostumerLogin" name="sensorCostumerLogin" list="sensorCostumerNameList"/>
													<datalist id="sensorCostumerNameList">
														<option value="Leo">
														<option value="Teste">
													</datalist>
													<label>HARDWARE IP</label>
													<input class="rounded-pill" id="sensorHardwareIp" name="sensorHardwareIp" type="text"/>
													<label>SENSOR TYPE</label>
													<input class="rounded-pill" id="sensorType" name="sensorType" list="type"/>
													<datalist id="type">
														<option value="LIGHT">
														<option value="CAMERA">
													</datalist>
													<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="sensor"/>
												</form>
											</div>
											<div class=" adm-title">
											    <h5>Sensor update</h5>
											    <p>Here you can update an existing sensor.</p>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselUpdate" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselUpdate" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>				        
						      
						      </div>
						    </div>
						  </div>
						  <div class="card acc-template">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          DELETE TOOL
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						      <div class="card-body">

						        <div id="carouselDelete" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div id="admForm" class="col-6">
												<form class="adm-form" action="../CONTROLER/CreationController.php" method="post" onsubmit="return verify();" id="hardware">
													<label>IP HARDWARE</label>
													<input class="rounded-pill" data-mask="000.000.000.000" data-mask-selectonfocus="true" id="ipHardware" name="ipHardware" type="text"/>
													<label>COSTUMER LOGIN</label>
													<input class="rounded-pill" id="statusHardware" name="statusHardware" type="text"/>
													<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="hardware"/>
												</form>
											</div>
											<div class=" adm-title">
											    <h5>Hardware management</h5>
											    <p>Here you can delete a hardware for a costumer.</p>
											</div>
										</div>
										<div class="carousel-item">
											<div id="admForm" class="col-6">
												<form class="adm-form" action="../CONTROLER/CreationController.php" method="post" onsubmit="return verify();" id="costumer">
													<label>COSTUMER LOGIN</label>
													<input class="rounded-pill" id="costumerLogin" name="costumerLogin" type="text"/>
													<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="costumer"/>
												</form>
											</div>
											<div class=" adm-title">
											    <h5>Costumer management</h5>
											    <p>Here you can delete a costumer.</p>
											</div>
										</div>
										<div class="carousel-item">
											<div id="admForm" class="col-6">
												<form class="adm-form" action="../CONTROLER/CreationController.php" method="post" onsubmit="return verify();" id="sensor"> 
													<label>COSTUMER LOGIN</label>
													<input class="rounded-pill" id="sensorCostumerLogin" name="sensorCostumerLogin" list="sensorCostumerNameList"/>
													<datalist id="sensorCostumerNameList">
														<option value="Leo">
														<option value="Teste">
													</datalist>
													<label>HARDWARE IP</label>
													<input class="rounded-pill" id="sensorHardwareIp" name="sensorHardwareIp" type="text"/>
													<label>SENSOR TYPE</label>
													<input class="rounded-pill" id="sensorType" name="sensorType" list="type"/>
													<datalist id="type">
														<option value="LIGHT">
														<option value="CAMERA">
													</datalist>
													<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="sensor"/>
												</form>
											</div>
											<div class=" adm-title">
											    <h5>Sensor management</h5>
											    <p>Here you can delete a sensor of a customer house.</p>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselDelete" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselDelete" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
						      
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include("../footer.php");?>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script>
		     //starts the carousel
		 $('#carouselAdministration').carousel();
		</script>
    	<script type="text/javascript">
    	$('.carousel').carousel({
		  interval: 000
		});

    	</script>
	</body>
</html>