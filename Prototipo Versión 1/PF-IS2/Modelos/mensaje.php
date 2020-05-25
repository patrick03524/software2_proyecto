<?php
class mensaje{
    
    private $servicio;
        
    public function BuscarMensajes($id){
        
        $conexion=mysqli_connect("localhost","root","","pf-is2");
        
        $consulta="SELECT * FROM mensajes WHERE iduser='$id'";
        
        $resultado=mysqli_query($conexion,$consulta);
        
        $fila= mysqli_num_rows($resultado);
        if($fila>0){
            foreach ($resultado as $res) {
                $this->servicio[] = $res;
            }
            return $this->servicio;
        }
        else{
            return 0;
        }

    }
    
}
?>