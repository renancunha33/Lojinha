<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="./bootstrap/signin.css" rel="stylesheet">
	<script src="./bootstrap/ie-emulation-modes-warning.js"></script>
	<title>Cadastro - Lojinha D'Alice</title>
	<!--style type="text/css">
	#nome{text-transform:capitalize;}
	#end{text-transform:capitalize;}
	</style-->
</head>
<body>
<?php


include "conecta_mysql.inc";




$reso = mysqli_query($conexao,"SELECT * FROM cadastro where cd_cadastro = ".$_GET['cd']."");

while($row = mysqli_fetch_array($reso)){  

echo'
<div class="container">
		<h1>Atualizar cliente</h1>
			<form class="form-group" name="form1" action="atualizar.php" method="POST">
				<input id="ID"type="text" class="form-control"name="ID" placeholder="Nome"value="'.$row['cd_cadastro'].'" readonly><br/>
				<input id="nome"type="text" class="form-control"name="Tnome" placeholder="Nome"value="'.$row['nm_cadastro'].'"><br/>
				<input id="phone" type="text" class="form-control" name="Ttelefone" placeholder="Telefone"value="'.$row['tel_cadastro'].'"><br/>
				<input id="end" type="text" class="form-control" name="Tendereco" placeholder="Endereco" value="'.$row['end_cadastro'].'"><br/>
				<input type="text" class="form-control" name="Tobs" placeholder="Observações"value="'.$row['obs_cadastro'].'"><br/>
				<input type="submit" value="Atualizar" class="btn btn-lg btn-primary" id="atualizar">
		</form>
		</div>

';
}
?>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://digitalbush.com/wp-content/uploads/2014/10/jquery.maskedinput.js"></script>
	<script>
	jQuery(function($){
		$("#phone").mask('(99)9999-9999?9');
	});
	</script>
</html>
