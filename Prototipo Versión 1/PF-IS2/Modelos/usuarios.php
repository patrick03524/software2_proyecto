<?php
class usuarios{
    
    public function CompararDatos($Usuario,$Contrasena){
        
        $conexion=mysqli_connect("localhost","root","","pf-is2");


        $consulta="SELECT id FROM usuarios WHERE usuario='$Usuario' AND contrasena='$Contrasena'";
        $resultado=mysqli_query($conexion,$consulta);

        $filas=mysqli_num_rows($resultado);
        
        if($filas>0){
            $dato=mysqli_fetch_array($resultado);
            return $dato[0];
        }
        else{
            return '';
        }

        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }
    
    public function ComprobarUser($Usuario){
        
        $conexion=mysqli_connect("localhost","root","","pf-is2");


        $consulta="SELECT * FROM usuarios WHERE usuario='$Usuario'";
        $resultado=mysqli_query($conexion,$consulta);
        
        $filas=mysqli_num_rows($resultado);
        
        if($filas>0){
            return false;
        }
        else{
            return true;
        }

        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }
    
    public function CargarDatos($Nombre,$Apellido,$Hint,$Usuario,$Contrasena){
        
        $conexion=mysqli_connect("localhost","root","","pf-is2");

        $consulta="INSERT INTO usuarios(id, nombre, apellido, hint, usuario, contrasena) VALUES(id,'$Nombre','$Apellido','$Hint','$Usuario','$Contrasena')";

        return $conexion->query($consulta);

        mysqli_close($conexion);
    }
    
}
?>