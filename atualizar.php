<?php
include "conecta_mysql.inc";

$ID = $_POST['ID'];
$user     =$_POST["Tnome"    ];
$telefone    =$_POST["Ttelefone"   ];
$endereco    =$_POST["Tendereco"   ];
$obs    =$_POST["Tobs"   ];


if (isset($_POST['ID'])) 
{
	
	mysql_query("UPDATE `cadastro` SET `nm_cadastro` = '$user', `tel_cadastro` = '$telefone', `end_cadastro` = '$endereco', `obs_cadastro` = '$obs' WHERE `cd_cadastro` = $ID");
 	echo"
	<script>
	alert('Atualizado com sucesso');
	window.location='index.php'; 
	</script>
	";


}else {
    //erro e script para voltar ao index
    echo"
	<script>
	alert('ERRO DURANTE ATUALIZAÇÃO');
	window.location='index.php'; 
	</script>
	";
}

?>
