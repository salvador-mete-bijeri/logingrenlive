<?php

$conn= new mysqli("127.0.0.1","root", "","datos_usuarios");

if($conn->connect_error){
    die("eror de conexion" . $conn->connect_error);
}




?>