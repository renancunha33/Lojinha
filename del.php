<?php
include "conecta_mysql.inc";
mysql_query("DELETE FROM cadastro where cd_cadastro = ".$_GET['cd']."");
?>
<script type="text/javascript">
alert("Deletado com sucesso");
window.location="index.php"; 
</script>