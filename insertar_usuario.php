<?php


include 'assets/conexion.php';



if($_SERVER['REQUEST_METHOD'] === 'POST'){

 $nombre = $conn->real_escape_string($_POST['nombre']);
$apellidos = $conn->real_escape_string($_POST['apellidos']);
$email = $conn->real_escape_string($_POST['email']);
$pass = $conn->real_escape_string($_POST['pass']);
$pass2 = $conn->real_escape_string($_POST['pass2']);

if($pass==$pass2){
    var_dump($pass);
    var_dump($pass2);

}else{
    echo "porfavor las contraseñas no coinciden";




}

}





$sql= "INSERT INTO pacientes (nombre,apellidos,edad,sexo,dip,direccion,email,tel,tutor,fecha)
VALUES ('$nombre','$apellidos','$edad','$sexo','$dip','$direccion','$email','$telefono','$tutor','$fecha')";

if($conn->query($sql)){
    $id=$conn->insert_id;
}

header('Location: index.php'); 



?>






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>registro</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                           <!--  <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>  -->
                            <div class="col-lg-10 ">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registrese y vea nuestros productos</h1>
                                    </div>
                                    <form class="user"  method="POST" action="">
                                        <div class="form-group">
                                            <input type="text" name="nombre" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="apellidos" class="form-control form-control-user"
                                                id="apellidos" placeholder="apellidos" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="emiail" placeholder="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control form-control-user"
                                                id="pass" placeholder="contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass2" class="form-control form-control-user"
                                                id="pass2" placeholder=" repita la contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Quiero recibir ofertas especiales, recomendaciones
                                                    personalizadas y consejos de productos.
                                                </label>
                                            </div>
                                        </div>


                                      




                                        <input type="submit" value="Registrese" class="btn btn-primary btn-user btn-block">
                                       
                                        
                                    </form>
                                    <hr>
                                    
                                    <div class="text-center">
                                        <p class="small">¿ya tienes una cuenta?</p><a class="small" href="login.php">Inicia sesion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>