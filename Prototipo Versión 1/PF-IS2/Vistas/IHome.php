<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <title>MENU</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">WELCOME</a>
        <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link text-white" href="../Vistas/ILogin.php">Log Out</a>
        </li>
        </ul>
    </nav>
    <h1></h1>
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link text-dark" id="gProfesores" href="#" role="tab" aria-controls="v-pills-profesores" aria-selected="false">Input</a>
                <a class="nav-link text-dark" id="gCursos" href="#" role="tab" aria-controls="v-pills-cursos" aria-selected="false">Balance</a>
                <a class="nav-link text-dark" id="gPeriodos" href="#" role="tab" aria-controls="v-pills-periodos" aria-selected="false">Concept</a>
                <a class="nav-link text-dark" id="gGrupos" href="#" role="tab" aria-controls="v-pills-grupos" aria-selected="false">Account</a>
                <a class="nav-link text-dark" id="gGrupos" href="#" role="tab" aria-controls="v-pills-grupos" aria-selected="false">Savings</a>
                <a class="nav-link text-dark" id="gGrupos" href="#" role="tab" aria-controls="v-pills-grupos" aria-selected="false">Report</a>
            </div>
        </div>
        <div class="col-7 text-center">
            <?php
            if($datos!=0){
                for ($i = 0; $i < count($datos); $i++) {
                ?>
                <br>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><?php echo $datos[$i]["mensaje"]; ?></p>
                    </div>
                </div>
                <?php
                }
            }
            ?>
        </div>
  </div>
</body>
</html>