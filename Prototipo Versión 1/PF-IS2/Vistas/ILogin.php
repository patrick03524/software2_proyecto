<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/ILogin.css" type="text/css">

</head>

<body>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-md">
            </div>
            <div class="col-md contenedor">
                <div class="col-12">
                    <img src="../img/user.png" th:src="@{/img/user.png}" id="user-img"/>
                </div>
                <form class="col-12" action="../Controladores/Cuenta.php" method="post">
                    <div class="input-group" id="user">
                        <input type="text" class="form-control" placeholder="Username" name="usuario">
                    </div>
                    <div class="input-group" id="pass">
                        <input type="password" class="form-control" placeholder="Password" name="clave">
                    </div>
                    <input type="hidden" name="variable" value="login" />
                    <div class="row butt">
                        <div class="col-md">
                            <button type="submit" class="btn btn-primary" id="log">Login</button>
                        </div>
                        <div class="col-md">
                            <a class="btn btn-primary" href="IRegistro.php" role="button" id="regis">Register</a>
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