<?php
require_once("../Modelos/usuarios.php");

class Cuenta extends usuarios{
    
    public $id='';
    
    public function SolicitarAcceso($Usuario,$Contrasena){
        $bd_log = new usuarios();
        $id=$bd_log->CompararDatos($Usuario,$Contrasena);
        
        if ($id!=''){
            session_start();
            $_SESSION['id'] = $id;
            header("location:../Controladores/Mensaje.php");
        }
        else{
            header("location:../Vistas/ILogin.php");
        }
    }
    
    public function RegistrarCuenta($Nombre,$Apellido,$Hint,$Usuario,$Contrasena,$ConfContrasena){
        $bd_reg = new usuarios();
        $comp=$bd_reg->ComprobarUser($Usuario);
        
        if ($comp){
            $registrado=$bd_reg->CargarDatos($Nombre,$Apellido,$Hint,$Usuario,$Contrasena);
            if($registrado){
                header("location:../Vistas/ILogin.php");
            }
            else{
                header("location:../Vistas/IRegistro.php");
            }
        }
        else{
            header("location:../Vistas/IRegistro.php");
        }
    }
}

$variable = $_POST['variable'];

if(isset($variable) && $variable=='login'){
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    
    if($usuario && $clave){
        $Cuenta_log=new Cuenta();
        $Cuenta_log->SolicitarAcceso($usuario,$clave);
    }
    
    else{
        header("location:../Vistas/ILogin.php");
    }
    
}

if(isset($variable) && $variable=='register'){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $ayuda=$_POST['ayuda'];
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    $confclave=$_POST['confclave'];
    
    echo("hola");
    
    if($nombre && $apellido && $usuario && $clave && $confclave && $clave==$confclave){
        $Cuenta_reg=new Cuenta();
        $Cuenta_reg->RegistrarCuenta($nombre,$apellido,$ayuda,$usuario,$clave,$confclave);
    }
    
    else{
        header("location:../Vistas/IRegistro.php");
    }
    
}
?>