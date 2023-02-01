<?php

include 'assets/conexion.php';

$nombre="salvador";
$apellidos="mete bijeri";
$correo="salvadormete2@gmail.com";
$pass= "12345";

$passwordHash = password_hash($pass, PASSWORD_DEFAULT);



$sql= "INSERT INTO usuarios (nombre, apellidos, correo, pass) VALUES ('$nombre', '$apellidos','$correo','$passwordHash')";

if($conn->query($sql)){
    $id=$conn->insert_id;
    echo 'registro insertado';
}




?>