<html>
	<head>
		 <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="../style.CSS" />
	    <title>SMART HOME</title>
	</head>
	<body class="home-background"> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-offset-8 col-md-4">

				</div>
			</div>
		</div>
		<?php include("../header.php");?>
		<div class="container footer-space">
			<div class="row">
				<div class="col-offset-2 main-menu">
					<div class="row">
						<div class="col-sm-6">
							<?php 
							if($hardware->getStatus()){?>
							<h2>O Status de comunicação com o IP <span class="hardware-connection-ok"> <?php echo $hardware->getIpHardware(); ?></span> está funcional.</h2>
							<?php 
							}elseif (!$hardware->getStatus()) {
							?>
							<h2>O Status de comunicação com o IP <span class="hardware-connection-not-ok"> <?php echo $hardware->getIpHardware(); ?></span> não está funcional.</h2>
							<?php
							}?>
						</div>
					</div>
					<div class="row col-md-8">
						<?php
						
						while($lightPDO->lightCount($costumer->getId()) >= $lightIndex) {
							$currentLight = $lightPDO->getLight($costumer->getId(), $lightIndex);
							$light = new Light($currentLight->ID,$currentLight->ID_COSTUMER, $currentLight->ID_LIGHT, $currentLight->ID_HARDWARE, $currentLight->IP_HARDWARE, $currentLight->NAME);
						?>
						<div class="col-md-4 icons">
							<img id="icon-<?php echo $lightIndex;?>" src="../images/light-bulb.png"/>
							<h4 class="icon-label"><?php echo $light->getName();?></h4>
						</div>
						
						<div class="col-md-6 on-off-icon">
							<div class="onoffswitch">
							    <input type="checkbox" onclick="changeIcon(<?php echo $lightIndex;?>)"name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-<?php echo $lightIndex;?>" checked>
							    <label class="onoffswitch-label" for="myonoffswitch-<?php echo $lightIndex;?>">
							        <span class="onoffswitch-inner"></span>
							        <span class="onoffswitch-switch"></span>
							    </label>
							</div>
						</div>
						<?php
							$lightIndex++;
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php include("../footer.php");?>
		<script type="text/javascript">
			function fadeOut(id, time) {
			    fade(id, time, 100, 0);
			}
			function fadeIn(id, time) {
			    fade(id, time, 0, 100);
			}
			function fade(id, time, ini, fin) {
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
			function changeIcon(id){
				var popup;
				if(document.getElementById("myonoffswitch-".concat(id)).checked){
					image = "../images/light-bulb.png";
					fadeIn("icon-".concat(id), 1);
					document.getElementById("icon-".concat(id)).src = image;
					popup = window.open('http://192.168.0.116/?a=ligar&numLed='+id+'FIM','_blank', 'toolbar=no,status=no,menubar=no,scrollbars=no,resizable=no,left=10000, top=10000, width=10, height=10, visible=none', '');
					popup.close();
				}else{
					fadeIn("icon-".concat(id), 1);
					image = "../images/light-bulb-down.png";
					document.getElementById("icon-".concat(id)).src = image;
					popup = window.open('http://192.168.0.116/?a=desligar&numLed='+id+'FIM','_blank', 'toolbar=no,status=no,menubar=no,scrollbars=no,resizable=no,left=10000, top=10000, width=10, height=10, visible=none', '');
					popup.close();
				}
			}
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    	<?php ?>
	</body>
</html>