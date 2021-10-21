<?php
$db_host="127.0.0.1";
$db_user="root";
$port="3306"
$password="michcor134";
$db_name="dse_13";
$db_table_name="usr";
   $db_connection = mysql_connect($db_host,$port, $db_user, $password);

if (!$db_connection) {
 die('No se ha podido conectar a la base de datos');
}
$usr = utf8_decode($_POST['usuario']);
$pass = utf8_decode($_POST['contraseña']);

$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE usr_name = '".$usr."'", $db_connection);

if (mysql_num_rows($resultado)>0)
{

header('Location: Fail.html');

} else {

 $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Nombre` , `Apellido` , `Email`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}

header('Location: Success.html');
}

mysql_close($db_connection);

?>
