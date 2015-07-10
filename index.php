<?php   
$ora_user = "dbamv"; 
$ora_senha = "hosp#dvmns"; 

$ora_bd = "(DESCRIPTION=
(ADDRESS_LIST=
(ADDRESS=(PROTOCOL=TCP)(HOST=10.51.26.60)(PORT=1521))
)
(CONNECT_DATA=
(SERVICE_NAME=prdmv)
)
)"; 
if ($ora_conexao = oci_connect($ora_user,$ora_senha,$ora_bd) ) { 
   echo "Conectado";

}
?>