<?php
include("contactabd.php");

$usuario-$_POST['usuario'];
$contraseña-$_POST['contraseña'];

session_start();

$_SESSION['usuario']=$usuario;



$consulta="select usr_name from usr" ;
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas){

header("login.html");
}

else{

echo "Error";

}


mysqli_free_result($resultado);



?>
