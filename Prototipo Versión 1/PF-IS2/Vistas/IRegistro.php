<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <title>REGISTER</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/IRegistro.css" type="text/css">

</head>

<body>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-md">
            </div>
            <div class="col-md contenedor">
                <br>
                <h3>CHECK IN</h3>
                <br>
                <form class="col-12" action="../Controladores/Cuenta.php" method="post">
                    <div class="input-group" id="fname">
                        <input type="text" class="form-control" placeholder="First Name" name="nombre">
                    </div>                        <div class="input-group" id="lname">
                          <input type="text" class="form-control" placeholder="Last Name" name="apellido">
                    </div>
                    <div class="input-group" id="hint">
                        <input type="text" class="form-control" placeholder="Hint" name="ayuda">
                    </div>
                    <div class="input-group" id="user">
                        <input type="text" class="form-control" placeholder="Username" name="usuario">
                    </div>
                    <div class="input-group" id="pass">
                        <input type="password" class="form-control" placeholder="Password" name="clave">
                    </div>
                    <div class="input-group" id="confpass">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confclave">
                    </div>
                    <input type="hidden" name="variable" value="register" />
                    <div class="row butt">
                        <div class="col-md">
                            <button type="submit" class="btn btn-primary" id="cont">Register</button>
                        </div>
                        <div class="col-md">
                            <a class="btn btn-primary" href="../Vistas/ILogin.php" role="button" id="canc">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md">
            </div>
        </div>
    </div>
</body>
</html>

