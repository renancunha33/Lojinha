<?php
include "conecta_mysql.inc";


$user     =$_POST["nome"    ];
$telefone    =$_POST["telefone"   ];
$endereco    =$_POST["endereco"   ];
$obs    =$_POST["obs"   ];


if($user!="" && $telefone!="" && $endereco!="")
{
	
	mysql_query("INSERT INTO cadastro(nm_cadastro,tel_cadastro,end_cadastro,obs_cadastro) VALUES('$user','$telefone','$endereco','$obs')");
}

?>
