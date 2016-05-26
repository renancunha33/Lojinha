<?php
include "conecta_mysql.inc";


$user     =$_POST["nome"    ];
$telefone    =$_POST["telefone"   ];
$endereco    =$_POST["endereco"   ];
$nasc    =$_POST["nasc"   ];


if($user!="" && $telefone!="")
{
	
	mysql_query("INSERT INTO cadastro(nm_cadastro,tel_cadastro,end_cadastro,nasc_cadastro) VALUES('$user','$telefone','$endereco','$nasc')");
}

?>
