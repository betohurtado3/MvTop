<?php
session_start();
require ("conecta.php");

$mail = $_POST["correo"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM Usuarios WHERE Nickname = '$mail' AND Contra ='$pass' AND Eliminado = '0' ";
$res = mysqli_query($con,$sql);
$fila = mysqli_num_rows($res);

if($fila==0){
    
    echo 0; //Si no genera resultados
}

else{
    $row = mysqli_fetch_assoc($res);
    $nomU = $row['Id'].' '.$row['Nickname'];
    $_SESSION['user'] = $nomU;
    echo 1;
}
?>  
