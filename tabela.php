<?php
include "conecta_mysql.inc";

$reso = mysql_query("select * from cadastro");

echo "<div id='tabela0' class='container-fluid'>
<table class='table table-striped table-bordered'>
<thead>
<tr >

<th>Nomes</th>
<th>Telefones</th>
<th>Endereços</th>
<th>Observações</th>

</tr>
</thead>"; 

while($row = mysql_fetch_array($reso)){  

	$cd = "'".$row['cd_cadastro']."'"; 

	echo '<tr><td>' . $row['nm_cadastro'] . '</td><td>' . $row['tel_cadastro'] . '</td><td>' . $row['end_cadastro'] . '</td><td>' . $row['obs_cadastro'] . '</td><td>
	<form action="del.php">
	<button type="submit" name="cd" value='.$cd.'>
	Excluir
	</button>
	</form></td></tr>'; 
//mysql_query("delete * from cadastro where nm_cadastro = ".$row['nm_cadastro'])
}

echo "</table></div>";

?>
