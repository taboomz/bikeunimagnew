<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crea tu Cuenta!</h1>
              </div>
              <form class="form-control-user" enctype="multipart/form-data" autocomplete="off" action="../controlador/accion/act_registrarUsuario.php" method="post">
                <div class="form-group row" >
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" id="nroDocumento"  name="nroDocumento"class="form-control form-control-user" placeholder="Numero Documento" >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nombres" class="form-control form-control-user" id="nombre" placeholder="Nombres">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="apellidos" class="form-control form-control-user" id="apellidos" placeholder="Apellidos">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="correo" class="form-control form-control-user" id="correo" placeholder="Correo">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                  </div>
                  <!--<div class="col-sm-6">
                    <input type="password" name="" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>-->
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="direccion" class="form-control form-control-user" id="direccion"  placeholder="Direcion">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="telefono" class="form-control form-control-user" id="telefono"  placeholder="Telefono">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-11">
                    <label for="imagen" class="col-sm-10 "> Archivo de imagen </label>
                  </div>
                  
                  <div class="col-sm-12 mb-6 mb-sm-0">
                    <input type="file" name="imagen" class="form-control form-control-user" id="imagen"  accept="image/*" >
                  </div>
                </div>
                
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Registrar Cuenta
                </button>
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
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
