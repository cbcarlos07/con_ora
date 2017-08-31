<?php   
$ora_user = "login"; 
$ora_senha = "senha"; 

$ora_bd = "(DESCRIPTION=
(ADDRESS_LIST=
(ADDRESS=(PROTOCOL=TCP)(HOST=ip)(PORT=1521))
)
(CONNECT_DATA=
(SERVICE_NAME=servico)
)
)"; 
if ($ora_conexao = oci_connect($ora_user,$ora_senha,$ora_bd) ) { 
   echo "Conectado";

}
?>
