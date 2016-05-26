<html>
<head>
	<link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="./bootstrap/signin.css" rel="stylesheet">
	<script src="./bootstrap/ie-emulation-modes-warning.js"></script>
	<title>Cadastro - Lojinha D'Alice</title>
	<style type="text/css">
	#nome{text-transform:capitalize;}
	#end{text-transform:capitalize;}
	</style>
</head>

<body>
	<center><h1>Cadastro base de clientes</h1>
		<form class="form-signin" name="form1">

			<input id="nome"type="text" class="form-control"name="Tnome" placeholder="Nome"value=""><br/>
			<input id="phone" type="text" class="form-control" name="Ttelefone" placeholder="Telefone"value=""><br/>
			<input id="end" type="text" class="form-control"name="Tendereco" placeholder="Endereco"value=""><br/>
			<textarea type="text" rows="4" class="form-control" name="Tobs" placeholder="Observações"value=""></textarea><br/>
			
			<input type="submit" class='btn btn-lg btn-primary btn-block' id="enviar">
		</form>
	</center>

	<div class="container" id="tabela">
		<?php include "tabela.php" ?>
		
	</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	

	$("#enviar").click(function(){
			//recebe valor dos campos de texto
			var nome = document.getElementsByName("Tnome")[0].value;
			var telefone = document.getElementsByName("Ttelefone")[0].value;
			var endereco = document.getElementsByName("Tendereco")[0].value;
			var obs = document.getElementsByName("Tobs")[0].value;
			//chama ajax
			ajax(nome,telefone,endereco,obs);

		});

});

function ajax(nome,telefone,endereco,obs){
		//previne contra reload
		event.preventDefault();
		//envia data pro cadastro que insere os dados no BD
		$.ajax({
			url:"cadastrar.php",
			type:"POST",
			data: {"nome":nome,"telefone":telefone,"endereco":endereco,"obs":obs},
		});

		alert("Cadastrado com sucesso!");
		resete();
		//reload tabela
		setInterval(function(){
			$("#tabela").load("tabela.php");
		}, 1000);
		return false;
	}

	function resete(){
		var form1 = document.getElementsByName("form1")[0];
		form1.reset();
		
	}
	</script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://digitalbush.com/wp-content/uploads/2014/10/jquery.maskedinput.js"></script>
	<script>
	jQuery(function($){
		$("#phone").mask('(99)9999-9999?9');
	});
	</script>
	</html>
