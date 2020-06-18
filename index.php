<?php

?><html>
	<head>
		 <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="style.CSS" />
	    <title>SMART HOME</title>
	</head>
	<body class="main-background">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 position-header" id="container">
					<div class="row">
						<div id="bemVindo" class="col-sm-6">
							<h1 class="title-header-index">Bem vindo ao Smart Home</h1>
						</div>
						<div id="loginForm" class="col-6">
							<form class="login-form" action="./CONTROLER/login.php" method="post" onsubmit="return verify();" id="login">
								<label>Login</label>
								<input class="rounded-pill" id="login" name="login" type="text"/>
								<label>Senha</label>
								<input class="rounded-pill" id="senha" name="senha" type="password"/>
								<input class="login-button" id="confirmar" name="Confirmar"  type="submit" form="login"/>
							</form>
						</div>
						<div class="row">
							<div class="coll-12 login-error" id="errorDiv"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="content">
				</div>
			</div>
		</div>
		<?php include("footer.php");?>
		<script type="text/javascript">
			function verify(){  
				var login = document.getElementById("login").value;
				var senha = document.getElementById("senha").value;

				if(login == "" || senha == "" || login.length < 5 || senha.length < 5){
					if(login == "" && senha == ""){
						document.getElementById("errorDiv").innerHTML ='<div class="alert alert-danger" role="alert">Por favor, preencha corretamente o formulário!</div>';
						return false;
					}
					if(login == "" && senha != ""){
						document.getElementById("errorDiv").innerHTML ='<div class="alert alert-danger" role="alert">Por favor, insira seu Login!</div>';
						return false;
					}
					if(senha == "" && login != ""){
						document.getElementById("errorDiv").innerHTML ='<div class="alert alert-danger" role="alert">Por favor, insira seu Senha!</div>';
						return false;
					}
					if(login.length < 5 && senha.length < 5){
						document.getElementById("errorDiv").innerHTML ='<div class="alert alert-danger" role="alert">Login e senha inválidos!</div>';
						return false;	
					}
					if(login.length < 5 && senha.length > 5){
						document.getElementById("errorDiv").innerHTML ='<div class="alert alert-danger" role="alert">Login muito curto!</div>';
						return false;	
					}
					if(senha.length < 5 && login.length > 5){
						document.getElementById("errorDiv").innerHTML ='<div class="alert alert-danger" role="alert">Senha inválida!</div>';
						return false;
					}
				}
				else{
					return true;
				}
			}
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</body>
</html>