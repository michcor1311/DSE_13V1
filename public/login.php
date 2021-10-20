<?php

echo ‘Conexion realizada’;
}
catch (PDOException $ex) {
  echo $ex->getMessage();
  exit;
}
/* @var $_POST type */
$nombre= $_POST[“usuario”];
$pass= $_POST[“password”];
/*La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql*/
$query=(“SELECT usr_name,usr_pass FROM `usr` “
    . “WHERE `usr_name`='”.mysql_real_escape_string($nombre).“‘ and “
    . “`usr_pass`='”.mysql_real_escape_string($pass).“‘”);
$rs= mysql_query($query);
$row=mysql_fetch_object($rs);
$nr = mysql_num_rows($rs);
if($nr == 1){
echo ‘No ingreso’;
}
else if($nr == 0) {
header(“Location:Login.html”);
}
?>
