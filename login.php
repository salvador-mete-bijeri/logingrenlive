<?php

include 'assets/conexion.php';




if($_SERVER['REQUEST_METHOD'] === 'POST'){

   

    $email=mysqli_real_escape_string($conn, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) ;
    var_dump($email);
    $pass=mysqli_real_escape_string($conn, $_POST['pass'] )  ;

    if(!$email){
       
        echo "el email es obligatorio";
    }

    if(!$pass){
        
         echo "el Password es obligatorio";
    }


    // haciendo las validaciones 

    if($email!= ""){
        $query= "SELECT * FROM usuarios WHERE correo='${email}'";
        $resultado= mysqli_query($conn, $query);

       

        if($resultado->num_rows){
            // revisar si el password es correcto

            $usuario= mysqli_fetch_assoc($resultado);

            //verificar si el pass es correcto
           

            $auth= password_verify($pass, $usuario['pass'] );


            var_dump($auth);

            if($auth){
                // el usuario esta autentificado
                
                session_start();

                $_SESSION['usuario']= $usuario['correo'];
                $_SESSION['login'] = true;

                header('Location: prueba.php');

            }else{

                echo 'contraseña incorecta';
            }

        }else{
            echo "este usuario no existe";
        }
    }
   
           

        
      

   
}






?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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
                            <div class="col-lg-8 ">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">BIENVENIDO</h1>
                                    </div>
                                    <form class="user"  method="POST" action="">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Correo Electronico" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recuerdeme</label>
                                            </div>
                                        </div>


                                      




                                        <input type="submit" value="Iniciar Sesion" class="btn btn-primary btn-user btn-block">
                                       
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Olvidaste tu contraseña?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="insertar_interfez.php">create una cuenta!</a>
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