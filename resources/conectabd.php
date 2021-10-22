<?php
$server="localhost";
$usuario="root";
$pass="";
$db="dse_13";

$con =new mysqli($server,$usuario,$pass,$db);

if( $con) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}


?>
