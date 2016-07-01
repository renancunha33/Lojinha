<html >
<head>
	<!-- Bootstrap core CSS -->
	<link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="./bootstrap/signin.css" rel="stylesheet">
	<script src="./bootstrap/ie-emulation-modes-warning.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<title>Tela Inicial</title>
</head>

<body>
	<div class="container">
		<?php
//error_reporting(0);
//ini_set('display_errors', 0);
		include "conecta_mysql.inc";
		$user=$_POST["nome"];
		$pass=$_POST["senha"];
		$res = mysql_query("select * from login WHERE nm_login ='$user'");
		$linha= mysql_num_rows($res);
		
		if($linha != 0){
			if($pass != mysql_result($res,0, "ps_login")){
				echo"<center><h3>ACESSO NEGADO</h3></center>
				<form  class='form-signin'method='post' action='index.php'>
				<button class='btn btn-lg btn-primary btn-block'type='submit' value='LOGIN'>
				Login
				</button>
				</form>";
				
			}else{
			 include("index2.php");
}
		}else{
			echo"<center><h3>USER INVALIDO</h3></center>
			<form  class='form-signin'method='post' action='index.php'>
			<button class='btn btn-lg btn-primary btn-block'type='submit' value='LOGIN'>
			Login
			</button>
			</form>";
		}
		?>
		
		</div>

		</body>
		</html>
