<?php
require("ConexionBD.php");

class Consultas{

    public $nombreCompleto;

    public function getNombre($user){
        $conexion= new ConexionBD();
        $conexion-> conectarBD();

        try{
            $query = "SELECT * FROM usuario WHERE CURP = '$user';";
            $result = $conexion->peticionSQL($query);
            $row = mysqli_fetch_array($result);

            $nombre = $row["nombres"];
            $apellidoP = $row["apellidoPaterno"];
            $apellidoM = $row["apellidoMaterno"];

            return $nombreCompleto = $nombre." ".$apellidoP." ".$apellidoM;
        }catch(Exception $e){}

        $conexion->desconectarBD();
    }

    public function validarUser($user){
        $conexion= new ConexionBD();
        $conexion-> conectarBD();

        try{
            $query = "SELECT * FROM usuario WHERE CURP = '$user';";
            $result = $conexion->peticionSQL($query);
            $row = mysqli_num_rows($result);

            if(!($row == 1)){
                
                echo "<script type='text/javascript'>
                alert('Error, no se ha iniciado sesión.');
                window.location.href=' ../index.html';
                </script>";
            }
        }catch(Exception $e){}

        $conexion->desconectarBD();
    }
}

?>